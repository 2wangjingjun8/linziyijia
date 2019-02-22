<?php
namespace app\index\controller;
use app\index\controller\Wechat;
use think\Controller;
use think\Db;
class Index extends controller{
    public $open_id;
    public $db;
    public $wxuser;
    public $replyObj;
    public function weixinset(){
        $options = array(
            'token'=>'linziyijia', //填写你设定的key
            'encodingaeskey'=>'bVY88a9SSCrwxFq92Rlx9qLUnHCgxhvr3qelKpik7aM', 
            'appid'=>'wx1127d85549e6093d', //填写高级调用功能的app id
            'appsecret'=>'95e0af7331c3d149d7e911a85aa42160' //填写高级调用功能的密钥
        );
        return new Wechat($options);
    }
    public function yanzheng(){
        $weObj = $this->weixinset();
        $weObj->valid();
        $type = $weObj->getRev()->getRevType();
        if ($type) {
            $this->push($weObj, $type); // 响应请求
        }
    }
    public function index(){
        echo 1234567;exit;
    }

    //获取用户内容页面
    public function getUsers(){
        $weObj  = $this->weixinset();
        $openid = $this->wxoauth();
        // dump($openid);exit;
        $user = $this->getUser($openid);
        if(count($user) > 0){
            $user['PointTotal'] = sprintf("%.2f",$user['PointTotal']);
            $user['Amount'] = sprintf("%.2f",$user['Amount']);
        }
        $userinfo = $weObj->getUserInfo($openid);
        // dump($userinfo);exit;
        $this->assign('user',$user);
        $this->assign('userinfo',$userinfo);
        return $this->fetch('user'); // 渲染页面
    }

    //查看会员信息
    public function getUser($openid=''){ 
        if(empty($openid)){
            return false;
        }       
        //通过会员的openid获取会员数据
        $user = Db::name('qtcards')->where('WXOpenId',$openid)->find();
        return $user;
    }

    //会员解绑、绑定会员
    public function bind(){     
        $openid = input('openid');
        if(empty($openid)){
            return false;
        }   
        //通过会员的openid获取会员数据，查看会员是否存在
        $user = Db::name('qtcards')->where('WXOpenId',$openid)->find();
        // 保存数据
        if ($this->request->isPost()) {
            $data = $this->request->post();
            if(empty($data['HolderName'])){
                $this->error('姓名不能为空');
            }
            if(empty($data['Telephone']) || !preg_match("/^1[34578]\d{9}$/", $data['Telephone'])){
                $this->error('手机号码为空或不正确');
            }
            if($data['Telephone'] == $user['Telephone']){
                $this->error('重新绑定会员需修手机号码');
            }
            //通过电话号码（会员卡号）查看是否存在该会员
            $user2 = Db::name('qtcards')->where('CardsCode',$data['Telephone'])->find();
            $member = empty($user2) ? $user : $user2;
            // dump($member);exit;
            //获取最大的会员编号
            $CardNo = Db::name('qtcards')->where('CardNo > 1111000000')->max('CardNo');
            // dump($CardNo);exit;
            $DownLogNo = Db::name('qtcards')->max('DownLogNo');
            $arr =[];
            $arr['Telephone'] =$data['Telephone'];
            $arr['CardsCode'] =$data['Telephone'];
            $arr['HolderName']=$data['HolderName'];
            $arr['Sex']       =$data['Sex'];
            $arr['DownLogNo'] =$DownLogNo+1;
            $arr['WXOpenId']  =$openid;
            $arr['CardType']  ='普通会员卡';
            $arr['SalesType'] ='固定折扣';
            // echo $CardNo;exit;
            if(empty($member)){
                $arr['CardNo']    =$CardNo+1;
                $arr['Discount'] =95;
                $arr['BirhtDate'] =$data['BirhtDate'];//生日
                $arr['SendDate']  =date('Y-m-d H:i:s');
                //创建会员
                if(Db::name('qtcards')->insert($arr)){
                    $this->success('绑定成功');
                } else {
                    $this->error('绑定失败');
                }
            }else{
                if(!empty($user2)){
                    //判断是否已经绑定过微信号
                    if($user2['WXOpenId'] && $openid != $user2['WXOpenId']){
                        $this->error('该手机号码已经被绑定其他微信了');
                    }
                    // dump($user);
                    $arr['BirhtDate'] = $user['BirhtDate'];
                    $arr['SendDate']  = $user['SendDate'];
                    // $arr['Amount']  = $user['Amount'] + $user2['Amount'];
                    // $arr['PointTotal']  = $user['PointTotal'] + $user2['PointTotal'];
                    $arr['Amount']  = $user2['Amount'];
                    $arr['PointTotal']  = $user2['PointTotal'];
                    // dump($arr);exit;
                    if (Db::name('qtcards')->where('CardsCode',$data['Telephone'])->update($arr)) {
                        if($user['CardNo'] != $user2['CardNo']){
                            Db::name('qtcards')->where('CardNo',$user['CardNo'])->delete();
                        }
                        $this->success('修改成功');
                    } else {
                        $this->error('修改失败');
                    } 
                }else{
                    if (Db::name('qtcards')->where('WXOpenId',$openid)->update($arr)) {
                        $this->success('修改成功');
                    } else {
                        $this->error('修改失败');
                    } 
                }                
            }
        }else{
            $this->assign('openid',$openid);
            $this->assign('user',$user);
            return $this->fetch();        
        }
    }

    //底部菜单设置
    //http://yunxi.yunw8.com/index/index/menu
    public function menu(){
        // dump($_SERVER['HTTP_HOST']. url('getUsers'));exit;
        $weObj = $this->weixinset();
        $newmenu = 
            [
                'button' => [
                    [
                        "name"=>"会员中心", 
                        "sub_button"=> [
                            [
                                "type"=> "view", 
                                "name"=> "会员信息", 
                                "url" => 'http://' . $_SERVER['HTTP_HOST'] . url('getUsers')
                            ], 
                            [
                                "type"=> "click", 
                                "name"=> "消费账单", 
                                "key"=> "ConsumeList"
                            ], 
                            [
                                "type"=> "click", 
                                "name"=> "查看余额积分", 
                                "key"=> "BalanceAndPoints"
                            ], 
                        ]
                    ],
                    [
			            "name"=>"优惠领取", 
			            "sub_button"=> [
			                [
			                    "type"=> "view", 
			                    "name"=> "我的卡卷", 
			                    "url" => 'http://' . $_SERVER['HTTP_HOST'] . url('getUsers')
			                ], 
			            ]
			        ],
                    [
			            "name"=>"关于我们", 
			            "sub_button"=> [
			                [
			                    "type"=> "click", 
			                    "name"=> "门店地址", 
			                    "key"=> "address"
			                ],
                            [
                                "type"=> "click", 
                                "name"=> "联系方式", 
                                "key"=> "phone"
                            ],
                            [
                                'type' => 'click',
                                'name' => '关于我们',
                                'key' => 'AboutUs'
                            ],
			            ]
			        ],
                ]
            ];
        $result = $weObj->createMenu($newmenu);
        dump($result);exit;
    }

    //查看消费记录
    public function jilu(){
        $cardcode = input('CardsCode');
        // $cardcode = '18813967622';
        if(empty($cardcode)){
            $this->error('会员不存在 ');
        }
        //通过会员的openid获取会员数据
        $list = Db::name('qtsaleorder')->where('CardCode',$cardcode)->order('OrderNo desc')->paginate(4);
            $arr =[];
        foreach ($list as $k =>&$value) {
            $value['goods'] = Db::name('qtsaleorderdetail')
            ->alias('a')
            ->field('a.*,g.GoodsName,c.ColorName,s.SizeName')
            ->join('jbgoods g','a.GoodsNo = g.GoodsNo')
            ->join('jbcolor c','a.ColorNo = c.ColorNo')
            ->join('jbsize s','a.SizeNo = s.SizeNo')
            ->where('OrderNo',$value['OrderNo'])
            ->select();
            $arr[] = $value;
        }
        // dump($arr);exit;
        // 分页数据
        $page = $list->render();

        $this->assign('list', $arr);
        $this->assign('page', $page);
        return $this->fetch(); // 渲染页面
    }

    /**
     * 响应请求
     * @param  Object $wechat Wechat对象
     * @param  array  $data   接受到微信推送的消息
     */
    private function push($wechat, $type){
        $data = $wechat->getRev()->getRevData();
        // file_put_contents(ROOT_PATH .'/2.txt', "\r\n".date('Y-m-d H:i:s').json_encode($data),FILE_APPEND);

        switch ($type) {
            case Wechat::MSGTYPE_TEXT:
                $wechat->text('你好，打电话或者微信我15018755168')->reply();
                break;
            case Wechat::MSGTYPE_EVENT:
                switch ($data['Event']) {
                    case Wechat::EVENT_SUBSCRIBE:
                        $wechat->text('感谢您的关注')->reply();
                        break;
                    case Wechat::EVENT_UNSUBSCRIBE:
                        $wechat->text('取消关注了')->reply();
                        break;
                    case Wechat::EVENT_SCAN:
                        break;
                    case Wechat::EVENT_MENU_CLICK:
                        //实例化消息回复控制器
                        $this->replyObj = new Reply();

                        $key = $data['EventKey'];
                        $openid  = $data['FromUserName'];
                        $user = $this->getUser($openid);

                        if($key=='ConsumeList'){
                            if(empty($user)){
                                $this->replyObj->replyBindMsg($openid,$wechat);//绑定会员
                            }else{
                                $this->replyObj->replyCostMsg($user['CardsCode'],$wechat);//消费记录
                            }
                    
                        }else if($key=='BalanceAndPoints'){
                            if(empty($user)){
                                $this->replyObj->replyBindMsg($openid,$wechat);//绑定会员
                            }else{
                                $this->replyObj->replyBalanceMsg($user,$wechat);//账户余额积分
                            }
                        }else if($key=='address'){
                            $str = '广州市增城区新塘镇解放北路地王广场2楼儿童乐园';
                            $wechat->text($str)->reply();
                        }else if($key=='phone'){
                            $str = '15018755168';
                            $wechat->text($str)->reply();
                        }else if($key=='AboutUs'){
                            $str = '“智多宝亲子乐园” 作为新型室内综合体验乐园，不仅是供孩子及家长游乐的场所，更能给适龄儿童的素质和成长提供辅助教育平台，是对常规教育平台（如学校、培训机构）的有效补充，它弥补了传统教育方式的缺失，让孩子在健康娱乐中学习到新的知识。';
                            $wechat->text($str)->reply();
                        }
                        break;
                    case Wechat::EVENT_MENU_VIEW:
                        break;
                }
                break;
        }
    }

    //获取授权信息
    public function wxoauth(){
        $scope = 'snsapi_base';
        $code = isset($_GET['code'])?$_GET['code']:'';
        $token_time = isset($_SESSION['token_time'])?$_SESSION['token_time']:0;
        if(!$code && isset($_SESSION['open_id']) && isset($_SESSION['user_token']) && $token_time>time()-3600){
            if (!$this->wxuser) {
                $this->wxuser = $_SESSION['wxuser'];
            }
            $this->open_id = $_SESSION['open_id'];
            return $this->open_id;
        }else{
            $we_obj = $this->weixinset();
            if ($code) {
                $json = $we_obj->getOauthAccessToken();
                // dump($json);exit;
                if (!$json) {
                    unset($_SESSION['wx_redirect']);
                    die('获取用户授权失败，请重新确认');
                }
                $_SESSION['open_id'] = $this->open_id = $json["openid"];
                $access_token = $json['access_token'];
                $_SESSION['user_token'] = $access_token;
                $_SESSION['token_time'] = time();
                $userinfo = $we_obj->getUserInfo($this->open_id);
                if ($userinfo && !empty($userinfo['nickname'])) {
                    $this->wxuser = array(
                            'open_id'=>$this->open_id,
                            'nickname'=>$userinfo['nickname'],
                            'sex'=>intval($userinfo['sex']),
                            'location'=>$userinfo['province'].'-'.$userinfo['city'],
                            'avatar'=>$userinfo['headimgurl']
                    );
                } elseif (strstr($json['scope'],'snsapi_userinfo')!==false) {
                    $userinfo = $we_obj->getOauthUserinfo($access_token,$this->open_id);
                    if ($userinfo && !empty($userinfo['nickname'])) {
                        $this->wxuser = array(
                                'open_id'=>$this->open_id,
                                'nickname'=>$userinfo['nickname'],
                                'sex'=>intval($userinfo['sex']),
                                'location'=>$userinfo['province'].'-'.$userinfo['city'],
                                'avatar'=>$userinfo['headimgurl']
                        );
                    } else {
                        return $this->open_id;
                    }
                }
                if ($this->wxuser) {
                    $_SESSION['wxuser'] = $this->wxuser;
                    $_SESSION['open_id'] =  $json["openid"];
                    unset($_SESSION['wx_redirect']);
                    return $this->open_id;
                }
                $scope = 'snsapi_userinfo';
            }
            if ($scope=='snsapi_base') {
                $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                $_SESSION['wx_redirect'] = $url;
            } else {
                $url = $_SESSION['wx_redirect'];
            }
            if (!$url) {
                unset($_SESSION['wx_redirect']);
                die('获取用户授权失败');
            }
            $oauth_url = $we_obj->getOauthRedirect($url,"wxbase",$scope);
            // dump($oauth_url);exit;
            $this->redirect($oauth_url);
        }
    }

    //查看会员openid
    public function getUserOpenid($cardcode=''){ 
        if(empty($cardcode)){
            return false;
        }
        //通过会员的openid获取会员数据
        return Db::name('qtcards')->where('cardscode',$cardcode)->value('WXOpenId');
    }

    //充值模板消息
    //http://yunxi.yunw8.com/index/index/cztpl/cardcode/123/addcardno/123
    public function cztpl($chongzhi){
        $cardcode = $chongzhi['CardsCode'];
        if(empty($cardcode)){
            file_put_contents(ROOT_PATH .'/cztpl.txt', "\r\n".date('Y-m-d H:i:s').' addcardno='.input('addcardno').' cardcode 为空' ,FILE_APPEND);
            return false;
        }
        $openid = $this->getUserOpenid($cardcode);
        if(empty($openid)){
            //用户还没绑定，更新IsSend为2,发送失败
            Db::name('qtaddcardamount')->where('CardsCode',$cardcode)->update(['IsSend'=>2]);
            file_put_contents(ROOT_PATH .'/cztpl.txt', "\r\n".date('Y-m-d H:i:s').' addcardno='.input('addcardno').' openid 为空' ,FILE_APPEND);
            return false;
        }

        $chongzhi['AddDate'] = date("Y-m-d H:i:s",strtotime($chongzhi['AddDate']));
        // dump($chongzhi);exit;
        //获取当前用户的余额
        $zong_amount=Db::name('qtcards')->where('cardscode',$cardcode)->value('Amount');
        $wechat = $this->weixinset();
        $data =[];
        $data['touser'] = $openid;
        $data['template_id'] = 'wwWuQY8nHR-vnTY1PocG_JYDiqNgIgjm__cxgf6w4WA';
        $data['url'] = '';
        $data['topcolor'] = '#FF0000';

        $msg = [ 
            // 'first' => ['value' => '', 'color' => '#ff0000'], 
            'keyword1' => ['value' => $chongzhi['Amount'], 'color' => '#ff0000'], 
            'keyword2' => ['value' => $chongzhi['AddDate'], 'color' => '#000000'], 
            'keyword3' => ['value' => $zong_amount, 'color' => '#000000'], 
            'remark' => ['value' => '感谢您对我们的支持', 'color' => '#ff0000']
        ];
        $data['data'] = $msg;
        $wechat->sendTemplateMessage($data);

        //充值信息发送成功，更新IsSend为1
        Db::name('qtaddcardamount')->where('CardsCode',$cardcode)->update(['IsSend'=>1]);
        
        
    }

    //消费模板消息
    //http://yunxi.yunw8.com/index/index/xftpl/cardcode/133/orderno/00100120180413185816
    public function xftpl($order){
        $cardcode = $order['CardCode'];
        $orderno = $order['OrderNo'];
        if(empty($cardcode) || empty($orderno)){
            file_put_contents(ROOT_PATH .'/xftpl.txt', "\r\n".date('Y-m-d H:i:s').' addcardno='.input('addcardno').' cardcode 为空，或者orderno为空.订单号：'.$orderno ,FILE_APPEND);
            return false;
        }
        $openid = $this->getUserOpenid($cardcode);
        if(empty($openid)){
            Db::name('qtsaleorder')->where('CardsCode',$cardcode)->update(['IsSend'=>2]);
            file_put_contents(ROOT_PATH .'/xftpl.txt', "\r\n".date('Y-m-d H:i:s').' addcardno='.input('addcardno').' openid 为空' ,FILE_APPEND);
            return false;
        }

        $order['OrderDate'] = date("Y-m-d H:i:s",strtotime($order['OrderDate']));

        //获取当前用户的余额
        $wechat = $this->weixinset();
        $data =[];
        $data['touser'] = $openid;
        $data['template_id'] = 'D7YN-Ll3CA3ms_JZ3Qrtk88K_DA2GZG_iL8H7mJTXHI';
        $data['url'] = 'http://' . $_SERVER['HTTP_HOST'] . url('Index/jilu', array('CardsCode' => $cardcode));
        $data['topcolor'] = '#FF0000';
        $msg = [ 
            // 'first' => ['value' => '', 'color' => '#ff0000'], 
            'keyword1' => ['value' => $order['ShopNAme'], 'color' => '#000000'], 
            'keyword2' => ['value' => $order['Amount'], 'color' => '#000000'], 
            'keyword3' => ['value' => $order['RealAmount'], 'color' => '#000000'], 
            'keyword4' => ['value' => $order['OrderNo'], 'color' => '#000000'], 
            'keyword5' => ['value' => $order['OrderDate'], 'color' => '#000000'], 
            'remark' => ['value' => '欢迎再次购买', 'color' => '#0F7B35']
        ];
        $data['data'] = $msg;
        $wechat->sendTemplateMessage($data);
        Db::name('qtsaleorder')->where('OrderNo',$order['OrderNo'])->update(['IsSend'=>1]);
    }


}

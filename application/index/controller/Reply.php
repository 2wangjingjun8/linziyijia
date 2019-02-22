<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Reply extends controller{

    //回复绑定会员的消息
    public function replyBindMsg($openid,$wechat){
        $url  = 'http://' . $_SERVER['HTTP_HOST'] . url('bind', array('openid' => $openid));
        $str  = "【提示】\n";
        $str .= "您还没绑定会员信息，\n";
        $str .= '<a href=\'' . $url . '\'>请点击绑定会员</a>';
        $wechat->text($str)->reply();
    }

    //回复消费信息
    public function replyCostMsg($CardsCode,$wechat){
        $count = Db::name('qtsaleorder')->where('CardCode',$CardsCode)->count();
        if($count>0){
            $url  = 'http://' . $_SERVER['HTTP_HOST'] . url('jilu', array('CardsCode' => $CardsCode));
            $str  = "【消费信息】\n";
            $str .= "目前共有 ".$count." 个订单\n";
            $str .= '<a href=\'' . $url . '\'>查看消费记录</a>';
            $wechat->text($str)->reply();
        }else{
            $wechat->text('您没有消费记录！')->reply();
        }
    }
    //回复查看账户余额积分信息
    public function replyBalanceMsg($user,$wechat){

        $str  = "【会员信息】\n";
        $str .= "会员编号：".$user['CardNo']."\n";
        $str .= "会员姓名：".$user['HolderName']."\n";
        $str .= "我的余额：".$user['Amount']."\n";
        $str .= "我的积分：".$user['PointTotal']."\n";
        $str .= "手机号：".$user['Telephone']."\n";
        $wechat->text($str)->reply();
    }
   
}

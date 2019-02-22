<?php
namespace app\admin\controller;
use think\Db;
use think\Request;

class Manage extends Common{

    public function index(){
        // dump(session('userinfo'));exit;

        return view('index');
    }

    public function menuReply(){
        if(Request::instance()->isPost()){
            $data = $_POST;
            $res = Db::name("jbadminddata")->where('id=1')->update($data);
            if($res){
                $this->success("保存成功！");
            }else{
                $this->error("保存失败！");
            }
        }else{
            $res = Db::name("jbadminddata")->field('ShopAddress,Phone,AboutUs')->find();

            return view('menuReply',array(
                    'data'=>$res
                ));
        }
    }

    public function wordReply(){
        if(Request::instance()->isPost()){
            $data = $_POST;
            $savaedata['KeyWord'] = implode(';', $data['keyword']);

            $res = Db::name("jbadminddata")->where('id=1')->update($savaedata);
            if($res){
                $this->success("保存成功！");
            }else{
                $this->error("保存失败！");
            }
        }else{
            $res = Db::name("jbadminddata")->field('KeyWord')->find();
            $res = explode(';', $res['KeyWord']);
            // dump($res);exit;
            return view('wordReply',array(
                    'data'=>$res
                ));
        }
    }

    public function otherReply(){
        if(Request::instance()->isPost()){
            $data = $_POST;
            $res = Db::name("jbadminddata")->where('id=1')->update($data);
            if($res){
                $this->success("保存成功！");
            }else{
                $this->error("保存失败！");
            }
        }else{
            $res = Db::name("jbadminddata")->field('BeConcerned,CardId,OtherMsg')->find();

            return view('otherReply',array(
                    'data'=>$res
                ));
        }
    }

    public function login(){
        if(Request::instance()->isPost()){
            $data = $_POST;
            $admin = Db::name("jbadminddata")->field("username,password")->find();

            if($admin['username'] != $data['username'] || $admin['password'] != $data['password']){
                $this->error('登陆失败！');
            }else{
                session('userinfo',$admin['username']);
                $this->success("登陆成功","menuReply");
            }
        }else{
            return view('login');
        }
    }

    public function logout(){
        session('userinfo',null);
        $this->success('退出登陆成功','login');
    }
}

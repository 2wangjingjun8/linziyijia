<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;

class Common extends controller{
    public $module_name;
    public $controller_name;
    public $action;

    public function __construct(){
        $request= Request::instance();
        $this->module_name=$request->module();
        $this->controller_name=$request->controller();
        $this->action =$request->action();
        // dump($this->action);exit;
        if($this->action != 'login'){
            $this->CheckLogin();
        }
    }

    public function CheckLogin(){
        $userinfo = session('userinfo');
        // dump($userinfo);exit;
        if(!$userinfo){
            $this->error("请先登录","login");
        }
    }
}

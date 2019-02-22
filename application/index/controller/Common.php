<?php
namespace app\index\controller;
use app\index\controller\Wechat;
class Common{
    public function __construct(){
        $options = array(
            'token'=>'yunxi', //填写你设定的key
            'encodingaeskey'=>'arvjJtNn85WtZsP3giq65RZlaScLCioJ12Ghn63zduC', 
            'appid'=>'wx2e33d95be45dbe7a', //填写高级调用功能的app id
            'appsecret'=>'f83901214648d56bfacc17a830b3814f' //填写高级调用功能的密钥
        );
        $wx = new Wechat($options);
    return $wx;
    }
}

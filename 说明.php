<?php

//底部菜单设置
//关注后注册会员
//会员解绑、绑定会员
//模板消息
//查看消费记录和余额
//会员注册时要能填生日信息。微信公众后台能设置自动给会员发生日祝福

公众号帐号是:2066893454@qq.com 
密码是:asdf123456789  
appid:wx71ba0a52ebf23ab9
appsecret:147614c1ef3ccd38c1319912543823ef
encodingaeskey:tVYBMvzeACHNOcKbcImtrFKTBmf4kpZix7B8qRbF1P0

URL:http://linzi.yunw8.com/index.php/index/Index/yanzheng
Token:linziyijia


1、QTSaleOrder和QTAddCardAmount增加字段is_send,来检测发送模板消息；
2、run.bat控制定时执行go.php文件，go.php控制执行项目中的方法；
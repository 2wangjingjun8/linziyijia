<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"C:\www\linziyijia/application/index\view\index\user.html";i:1545634186;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>会员信息</title>
    <link rel="stylesheet" href="/public/static/layui/css/layui.css">
</head>
<body>
<div class="layui-container"> 
<div style="height:20px;"></div>
<blockquote class="layui-elem-quote">会员信息</blockquote> 
  <div class="layui-form-item" style="color:#f1f1f1">
  
    <div style="background: #301D19;width: 100%;height:280px;border-radius: 10px;">

    </div>

    <div style="position: absolute;top:100px;right:50px;"><img src="/public/static/img/linziyijia.png" style="height:100px;width: 100px;"></div>
    
    <dl style="position: absolute;top:100px;left:50px;">
      <dd>
      <img src="<?php echo $userinfo['headimgurl']; ?>" style="height:80px;width: 80px;border-radius: 50px;margin-bottom: 10px;">
      </dd>
      <dd>姓名：<?php echo $user['HolderName']; ?></dd>
      <dd>类型：<?php echo $user['CardType']; ?></dd>
      <dd>编号：<?php echo $user['CardsCode']; ?></dd>
      <dd>手机：<?php echo $user['Telephone']; ?></dd>
      <dd>生日：<?php echo date("Y-m-d",strtotime($user['BirhtDate'] )); ?></dd>
      <dd>积分：<?php echo $user['PointTotal']; ?></dd>
      <dd>余额：<?php echo $user['Amount']; ?></dd>
    </dl>
  </div>
  <?php if(empty($user)){ ?> 
	<a class="layui-btn" href="<?php echo url('bind', array('openid' => $userinfo['openid'])); ?>">绑定会员</a>
  <?php }else{ ?>
  <a class="layui-btn" href="<?php echo url('bind', array('openid' => $userinfo['openid'])); ?>">重新绑定会员</a>
  <?php }?>
</div>

</body>
</html>
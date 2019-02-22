<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"C:\www\yunxi/application/index\view\index\bind.html";i:1525246399;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>绑定会员</title>
    <link rel="stylesheet" href="/public/static/layui/css/layui.css">
</head>
<body>
<div class="layui-container"> 
<div style="height:20px;"></div>
<blockquote class="layui-elem-quote">绑定会员</blockquote> 
<form class="layui-form" method="post" action="<?php echo url('bind'); ?>">
	<input type="hidden" name="openid" value="<?php echo $openid; ?>"/>
  <div class="layui-form-item">
    <label class="layui-form-label">姓名</label>
    <div class="layui-input-block">
      <input type="text" name="HolderName" required lay-verify="required" placeholder="请输入姓名" autocomplete="off" value="<?php echo $user['HolderName']; ?>" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">手机号</label>
    <div class="layui-input-block">
      <input type="text" name="Telephone" value="<?php echo $user['Telephone']; ?>" required lay-verify="required" placeholder="请输入手机号" autocomplete="off" class="layui-input">
    </div>
  </div>
	<div class="layui-form-item">
    <label class="layui-form-label">性别</label>
    <div class="layui-input-block">
      <input type="radio" name="Sex" value="男" title="男" <?php if($user['Sex']=='男'): ?>checked<?php endif; if(empty($user['Sex'])): ?>checked<?php endif; ?>>
      <input type="radio" name="Sex" value="女" title="女" <?php if($user['Sex']=='女'): ?>checked<?php endif; ?>>
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">生日</label>
    <div class="layui-input-block">
	  <input type="text" class="layui-input" name="BirhtDate" value="<?php echo $user['BirhtDate']; ?>" id="test1" readonly="readonly">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" type="submit">提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>
</div>
<script src="/public/static/layui/layui.js"></script>
<script src="/public/static/jquery.js"></script>
<script>
layui.use('laydate', function(){
  var laydate = layui.laydate;
  var test = $('#test1').val();
  if(test==''){
	  //执行一个laydate实例
	  laydate.render({
	    elem: '#test1' //指定元素
	  });
  }

});
layui.define(['layer', 'form'], function(exports){});   
</script>
</body>
</html>
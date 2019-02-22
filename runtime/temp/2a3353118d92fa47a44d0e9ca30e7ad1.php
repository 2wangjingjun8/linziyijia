<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"C:\www\linziyijia/application/index\view\index\jilu.html";i:1525316093;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <title>消费记录列表</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container">
<div style="height:20px;"></div>
<!-- <blockquote class="border-main">消费记录</blockquote>  -->
<div class="alert alert-info alert-dismissible" role="alert">
  <strong>消费记录!</strong>
</div>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="panel-title">订单号：<?php echo $vo['OrderNo']; ?></div>
  </div>
  <div class="panel-body">
    <?php if(is_array($vo['goods']) || $vo['goods'] instanceof \think\Collection || $vo['goods'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['goods'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>
      商品名称：<?php echo $s['GoodsName']; ?><br/>
      颜色：<?php echo $s['ColorName']; ?> / 尺码：<?php echo $s['SizeName']; ?> / 数量：<?php echo $s['Quantity']; ?><br/>
      价格：<?php echo $s['Amount']; ?> / 折扣：<?php echo $s['Discount']; if(count($vo['goods']) > 1): ?><hr/><?php endif; endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <div class="panel-footer">
    <span class="text-left">时间：<?php echo $vo['OrderDate']; ?></span> 
    <span style="float:right">合计 <?php echo $vo['RealAmount']; ?> 元</span>
  </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>

<?php echo $page; ?>
</div>
<script src="/public/static/jquery.js"></script>

</body>
</html>
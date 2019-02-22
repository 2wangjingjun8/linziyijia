<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"C:\www\linziyijia/application/admin\view\manage\index.html";i:1546929847;s:59:"C:\www\linziyijia\application\admin\view\public\header.html";i:1546928271;s:59:"C:\www\linziyijia\application\admin\view\public\footer.html";i:1546927858;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>林子一家</title>
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="keyword" content="" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link href="/public/asset/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/public/asset/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="/public/asset/css/style.min.css" rel="stylesheet" />
	<link href="/public/asset/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/public/asset/css/retina.css" rel="stylesheet" />
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="/public/asset/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="/public/asset/css/ie9.css" rel="stylesheet">
	<![endif]-->
	
	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/public/asset/ico/apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/public/asset/ico/apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/public/asset/ico/apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="/public/asset/ico/apple-touch-icon-57-precomposed.png" />
	<link rel="shortcut icon" href="/public/static/img/linziyijia.png" />
	<!-- end: Favicon and Touch Icons -->		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

      <script src="https://code.jquery.com/jquery.js"></script>
<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a id="main-menu-toggle" class="hidden-phone open"><i class="icon-reorder"></i></a>		
				<div class="row-fluid">
				<a class="brand span2" href="index.html"><span>林子一家</span></a>
				</div>		
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">

						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
								<div class="avatar"><img src="/public/static/img/linziyijia.png" alt="Avatar" /></div>
								<div class="user">
									<span class="hello">欢迎回来</span>
									<span class="name"><?php echo \think\Session::get('userinfo'); ?></span>
								</div>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
									
								</li>
								<li><a href="logout.html"><i class="icon-off"></i> 退出</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				
				<div class="row-fluid actions">
													
					<input type="text" class="search span12" placeholder="..." />
				
				</div>	
				
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<!-- <li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> 消息管理</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="infrastructure.html"><i class="icon-hdd"></i><span class="hidden-tablet"> 基础设施</span></a></li>
								<li><a class="submenu" href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> 消息</span></a></li>
								<li><a class="submenu" href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> 任务</span></a></li>
							</ul>	
						</li> -->
						<li><a href="menuReply.html"><i class="icon-edit"></i><span class="hidden-tablet"> 菜单回复</span></a></li>
						<li><a href="wordReply.html"><i class="icon-edit"></i><span class="hidden-tablet"> 关键词回复</span></a></li>
						<li><a href="otherReply.html"><i class="icon-edit"></i><span class="hidden-tablet"> 其他设置</span></a></li>
						<!-- <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> 自定义菜单</span></a></li> -->
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			

			<!-- start: Content -->
			<div id="content" class="span10">
			
						
			<div class="row-fluid">
				
				<!-- <div class="span3 smallstat box mobileHalf" ontablet="span6" ondesktop="span3">
					<div class="boxchart-overlay blue">
						<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					</div>	
					<span class="title">客户</span>
					<span class="value">4 589</span>
				</div>
				
				<div class="span3 smallstat box mobileHalf" ontablet="span6" ondesktop="span3">
					<div class="boxchart-overlay red">
						<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
					</div>	
					<span class="title">交易</span>
					<span class="value">789</span>
				</div>
				
				<div class="span3 smallstat box mobileHalf noMargin" ontablet="span6" ondesktop="span3">
					<i class="icon-download-alt green"></i>
					<span class="title">收入</span>
					<span class="value">$1 999,99</span>
				</div>
				
				<div class="span3 smallstat mobileHalf box" ontablet="span6" ondesktop="span3">
					<i class="icon-money yellow"></i>
					<span class="title">账户</span>
					<span class="value">$19 999,99</span>
				</div> -->
			
			</div>		
			</div>
			<!-- end: Content -->
				
				</div><!--/fluid-row-->
				
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
		
		<div class="clearfix"></div>

		
		<footer>
			<p>
				<span style="text-align:left;float:left">Copyright &copy; 2019-2020.Company name All rights reserved</span>
			</p>

		</footer>
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
		<script src="/public/asset/js/jquery-1.10.2.min.js"></script>
	<script src="/public/asset/js/jquery-migrate-1.2.1.min.js"></script>	
		<script src="/public/asset/js/jquery-ui-1.10.3.custom.min.js"></script>	
		<script src="/public/asset/js/jquery.ui.touch-punch.js"></script>	
		<script src="/public/asset/js/modernizr.js"></script>	
		<script src="/public/asset/js/bootstrap.min.js"></script>	
		<script src="/public/asset/js/jquery.cookie.js"></script>	
		<script src='/public/asset/js/fullcalendar.min.js'></script>	
		<script src='/public/asset/js/jquery.dataTables.min.js'></script>
		<script src="/public/asset/js/excanvas.js"></script>
	<script src="/public/asset/js/jquery.flot.js"></script>
	<script src="/public/asset/js/jquery.flot.pie.js"></script>
	<script src="/public/asset/js/jquery.flot.stack.js"></script>
	<script src="/public/asset/js/jquery.flot.resize.min.js"></script>
	<script src="/public/asset/js/jquery.flot.time.js"></script>
		
		<script src="/public/asset/js/jquery.chosen.min.js"></script>	
		<script src="/public/asset/js/jquery.uniform.min.js"></script>		
		<script src="/public/asset/js/jquery.cleditor.min.js"></script>	
		<script src="/public/asset/js/jquery.noty.js"></script>	
		<script src="/public/asset/js/jquery.elfinder.min.js"></script>	
		<script src="/public/asset/js/jquery.raty.min.js"></script>	
		<script src="/public/asset/js/jquery.iphone.toggle.js"></script>	
		<script src="/public/asset/js/jquery.uploadify-3.1.min.js"></script>	
		<script src="/public/asset/js/jquery.gritter.min.js"></script>	
		<script src="/public/asset/js/jquery.imagesloaded.js"></script>	
		<script src="/public/asset/js/jquery.masonry.min.js"></script>	
		<script src="/public/asset/js/jquery.knob.modified.js"></script>	
		<script src="/public/asset/js/jquery.sparkline.min.js"></script>	
		<script src="/public/asset/js/counter.min.js"></script>	
		<script src="/public/asset/js/raphael.2.1.0.min.js"></script>
	<script src="/public/asset/js/justgage.1.0.1.min.js"></script>	
		<script src="/public/asset/js/jquery.autosize.min.js"></script>	
		<script src="/public/asset/js/retina.js"></script>
		<script src="/public/asset/js/jquery.placeholder.min.js"></script>
		<script src="/public/asset/js/wizard.min.js"></script>
		<script src="/public/asset/js/core.min.js"></script>	
		<script src="/public/asset/js/charts.min.js"></script>	
		<script src="/public/asset/js/custom.min.js"></script>
	<!-- end: JavaScript-->
	

</body>
</html>

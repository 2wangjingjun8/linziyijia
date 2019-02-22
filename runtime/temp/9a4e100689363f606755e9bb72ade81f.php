<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"C:\www\linziyijia/application/admin\view\manage\autoReply.html";i:1546912620;s:59:"C:\www\linziyijia\application\admin\view\public\header.html";i:1546912853;s:59:"C:\www\linziyijia\application\admin\view\public\footer.html";i:1546852985;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>林子一家</title>
	<meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template." />
	<meta name="author" content="Łukasz Holeczek" />
	<meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
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
	<link rel="shortcut icon" href="/public/asset/ico/favicon.png" />
	<!-- end: Favicon and Touch Icons -->		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

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
								<div class="avatar"><img src="/public/asset/img/avatar.jpg" alt="Avatar" /></div>
								<div class="user">
									<span class="hello">欢迎回来</span>
									<span class="name">林子一家</span>
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
						<li><a href="autoReply.html"><i class="icon-edit"></i><span class="hidden-tablet"> 菜单回复</span></a></li>
						<li><a href="wordReply.html"><i class="icon-edit"></i><span class="hidden-tablet"> 关键词回复</span></a></li>
						<li><a href="otherReply.html"><i class="icon-edit"></i><span class="hidden-tablet"> 其他回复</span></a></li>
						<!-- <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> 自定义菜单</span></a></li> -->
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			

			<!-- start: Content -->
			<div id="content" class="span10">
			
						
				<div class="row-fluid">
					
						
					<div class="box-content">
						<div id="MyWizard" class="wizard">
						</div>
						<div class="step-content">
							<div class="step-pane active" id="step1">
								<form class="form-horizontal" />
									<fieldset>	
										<div class="control-group warning">
											<label class="control-label" for="inputWarning">门店地址：</label>
											<div class="controls">
									  			<textarea name="ShopAddress" id="inputWarning"></textarea>
									  			<span class="help-inline"></span>
											</div>
								  		</div>
										<div class="control-group warning">
											<label class="control-label" for="inputWarning">联系方式:</label>
											<div class="controls">
									  			<input name="phone" type="text" />
									  			<span class="help-inline"></span>
											</div>
								  		</div>
										<div class="control-group warning">
											<label class="control-label" for="inputWarning">关于我们：</label>
											<div class="controls">
									  			<textarea name="AboutUs" id="inputWarning"></textarea>
									  			<span class="help-inline"></span>
											</div>
								  		</div>
										<div class="control-group warning">
											<label class="control-label" for="inputWarning">被关注时回复</label>
											<div class="controls">
									  			<textarea name="BeConcerned" id="inputWarning"></textarea>
									  			<span class="help-inline"></span>
											</div>
								  		</div>
										<div class="control-group warning">
											<label class="control-label" for="inputWarning">收到消息时回复</label>
											<div class="controls">
									  			<textarea name="BeConcerned" id="inputWarning"></textarea>
									  			<span class="help-inline"></span>
											</div>
								  		</div>

										<div class="control-group warning">
											<label class="control-label" for="inputWarning">关键词回复1</label>
											<div class="controls">
									  			<textarea name="BeConcerned" id="inputWarning" ></textarea>
									  			<span class="help-inline">格式-> 关键词:回复值</span>
											</div>
								  		</div>
										<div class="control-group warning">
											<label class="control-label" for="inputWarning">关键词回复2</label>
											<div class="controls">
									  			<textarea name="BeConcerned" id="inputWarning" ></textarea>
									  			<span class="help-inline">格式-> 关键词:回复值</span>
											</div>
								  		</div>
										<div class="control-group warning">
											<label class="control-label" for="inputWarning">关键词回复3</label>
											<div class="controls">
									  			<textarea name="BeConcerned" id="inputWarning" ></textarea>
									  			<span class="help-inline">格式-> 关键词:回复值</span>
											</div>
								  		</div>
										<div class="control-group warning">
											<label class="control-label" for="inputWarning">其他消息回复</label>
											<div class="controls">
									  			<textarea name="BeConcerned" id="inputWarning" ></textarea>
									  			<span class="help-inline">格式-> 关键词:回复值</span>
											</div>
								  		</div>
									</fieldset>
								</form>
							</div>
							<div class="step-pane" id="step2">
								<form class="form-horizontal" />
									<fieldset>	
										<div class="control-group">
											<label class="control-label" for="input1">Company Name</label>
											<div class="controls">
									  			<input type="text" id="input1" />
											</div>
								  		</div>
								  		<div class="control-group">
											<label class="control-label" for="input2">Company Address</label>
											<div class="controls">
									  			<input type="text" id="input2" />
											</div>
								  		</div>
								  		<div class="control-group">
											<label class="control-label" for="input3">WWW</label>
											<div class="controls">
									  			<input type="text" id="input3" />
											</div>
								  		</div>
									</fieldset>
								</form>
							</div>
							<div class="step-pane" id="step3">
								<form class="form-horizontal" />
									<fieldset>	
										<div class="control-group">
											<label class="control-label" for="selectError30">Plain Select</label>
											<div class="controls">
											  	<select id="selectError30">
													<option />Option 1
													<option />Option 2
													<option />Option 3
													<option />Option 4
													<option />Option 5
											  	</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="selectError0">Modern Select</label>
											<div class="controls">
											  	<select id="selectError0" data-rel="chosen">
													<option />Option 1
													<option />Option 2
													<option />Option 3
													<option />Option 4
													<option />Option 5
											  	</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="selectError10">Multiple Select / Tags</label>
											<div class="controls">
											  	<select id="selectError10" multiple="" data-rel="chosen">
													<option />Option 1
													<option selected="" />Option 2
													<option />Option 3
													<option />Option 4
													<option />Option 5
											  	</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="selectError20">Group Select</label>
											<div class="controls">
												<select data-placeholder="Your Favorite Football Team" id="selectError20" data-rel="chosen">
													<option value="" />
													<optgroup label="NFC EAST">
													  	<option />Dallas Cowboys
													  	<option />New York Giants
													  	<option />Philadelphia Eagles
													  	<option />Washington Redskins
													</optgroup>
													<optgroup label="NFC NORTH">
													  	<option />Chicago Bears
													  	<option />Detroit Lions
													  	<option />Green Bay Packers
													  	<option />Minnesota Vikings
													</optgroup>
													<optgroup label="NFC SOUTH">
													  	<option />Atlanta Falcons
													 	<option />Carolina Panthers
													  	<option />New Orleans Saints
													  	<option />Tampa Bay Buccaneers
													</optgroup>
													<optgroup label="NFC WEST">
													  	<option />Arizona Cardinals
													  	<option />St. Louis Rams
													  	<option />San Francisco 49ers
													  	<option />Seattle Seahawks
													</optgroup>
													<optgroup label="AFC EAST">
													  	<option />Buffalo Bills
													  	<option />Miami Dolphins
													  	<option />New England Patriots
													  	<option />New York Jets
													</optgroup>
													<optgroup label="AFC NORTH">
													  	<option />Baltimore Ravens
													  	<option />Cincinnati Bengals
													  	<option />Cleveland Browns
													  	<option />Pittsburgh Steelers
													</optgroup>
													<optgroup label="AFC SOUTH">
													  	<option />Houston Texans
													  	<option />Indianapolis Colts
													  	<option />Jacksonville Jaguars
													  	<option />Tennessee Titans
													</optgroup>
													<optgroup label="AFC WEST">
													  	<option />Denver Broncos
													  	<option />Kansas City Chiefs
													  	<option />Oakland Raiders
													  	<option />San Diego Chargers
													</optgroup>
												</select>
											</div>
										</div>	
									</fieldset>
								</form>	
							</div>
							<div class="step-pane" id="step4">
								<div class="alert alert-info">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
								</p>
								<div class="controls">
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox2" value="option5" /> I agree
								  </label>
								</div>	
							</div>
							<div class="step-pane" id="step5">
								<form class="form-horizontal" />
									<fieldset>

										<div class="control-group">
								     		<label class="control-label">Fullname:</label>
											<div class="controls">
												<span class="input-xlarge uneditable-input">Łukasz Holeczek</span>
											</div>
										</div>
										<div class="control-group">
								      		<label class="control-label">Email:</label>
								     		<div class="controls">
								          		<span class="input-xlarge uneditable-input">lukasz[@]clabs[dot].com</span>
								  			</div>
										</div>
								        <div class="control-group">
											<label class="control-label">Phone:</label>
								            <div class="controls">
												<span class="input-xlarge uneditable-input">+48 123 456 789</span>
								     		</div>
								   		</div>
								   		<div class="control-group">
								        	<label class="control-label"></label>
								           	<div class="controls">
								     			<label class="checkbox">
								           			<input type="checkbox" value="" /> I confirm this information
								             	</label>
								 			</div>
								       	</div>
									</fieldset>
								</form>	
							</div>

						</div>
					
					</div>
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

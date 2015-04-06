<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title><?php echo ($_info["title"]); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="/admin/build/Public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/admin/build/Public/font-awesome/4.2.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->

	<!-- text fonts -->
	<link rel="stylesheet" href="/admin/build/Public/fonts/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="/admin/build/Public/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="/admin/build/Public/css/ace-part2.min.css" class="ace-main-stylesheet" />
	<![endif]-->

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="/admin/build/Public/css/ace-ie.min.css" />
	<![endif]-->

	<!-- inline styles related to this page -->
	<!-- ace settings handler -->
	<script src="/admin/build/Public/js/ace-extra.min.js"></script>

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
	<!--[if lte IE 8]>
	<script src="/admin/build/Public/js/html5shiv.min.js"></script>
	<script src="/admin/build/Public/js/respond.min.js"></script>
	<![endif]--> 
<link rel="stylesheet" href="/admin/build/Public/css/bootstrap-duallistbox.min.css" />
<link rel="stylesheet" href="/admin/build/Public/css/bootstrap-multiselect.min.css" />
<link rel="stylesheet" href="/admin/build/Public/css/select2.min.css" />
<style>
	/* change navbar dropdown click to hover */
	ul.ace-nav li:hover>ul.dropdown-menu{display:block;}
</style>
</head>
<body class="no-skin">
	<div id="navbar" class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-container" id="navbar-container">
			<div class="navbar-header pull-left">
				<a href="index.html" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						Ace Admin
					</small>
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="grey">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-tasks"></i>
							<!-- <span class="badge badge-grey">4</span> -->
						</a>

						<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-check"></i>
								4 Tasks to complete
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar">
									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right">65%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:65%" class="progress-bar"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Hardware Upgrade</span>
												<span class="pull-right">35%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:35%" class="progress-bar progress-bar-danger"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Unit Testing</span>
												<span class="pull-right">15%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:15%" class="progress-bar progress-bar-warning"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Bug Fixes</span>
												<span class="pull-right">90%</span>
											</div>

											<div class="progress progress-mini progress-striped active">
												<div style="width:90%" class="progress-bar progress-bar-success"></div>
											</div>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="#">
									See tasks with details
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="purple">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-bell icon-animated-bell"></i>
							<span class="badge badge-important">8</span>
						</a>

						<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-exclamation-triangle"></i>
								8 Notifications
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar navbar-pink">
									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
													New Comments
												</span>
												<span class="pull-right badge badge-info">+12</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="btn btn-xs btn-primary fa fa-user"></i>
											Bob just signed up as an editor ...
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
													New Orders
												</span>
												<span class="pull-right badge badge-success">+8</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
													Followers
												</span>
												<span class="pull-right badge badge-info">+11</span>
											</div>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="#">
									See all notifications
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="green">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
							<span class="badge badge-success">5</span>
						</a>

						<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-envelope-o"></i>
								5 Messages
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar">
									<li>
										<a href="#" class="clearfix">
											<img src="/admin/build/Public/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Alex:</span>
													Ciao sociis natoque penatibus et auctor ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>a moment ago</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="/admin/build/Public/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Susan:</span>
													Vestibulum id ligula porta felis euismod ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>20 minutes ago</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="/admin/build/Public/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Bob:</span>
													Nullam quis risus eget urna mollis ornare ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>3:15 pm</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="/admin/build/Public/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Kate:</span>
													Ciao sociis natoque eget urna mollis ornare ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>1:33 pm</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="/admin/build/Public/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Fred:</span>
													Vestibulum id penatibus et auctor  ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>10:09 am</span>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="inbox.html">
									See all messages
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="/admin/build/Public/avatars/user.jpg" alt="Jason's Photo" />
							<span class="user-info">
								<small>Welcome,</small>
								Jason
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Settings
								</a>
							</li>

							<li>
								<a href="profile.html">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div> 
<div class="main-container" id="main-container">
	<div id="sidebar" class="sidebar responsive sidebar-fixed compact" data-sidebar="true" data-sidebar-hover="true" >
		<!-- /.sidebar-shortcuts -->
		<ul class="nav nav-list">
			<li class="active hover">
				<a href="<?php echo U('Index/index');?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="hover">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-desktop"></i>
					<span class="menu-text">
						UI &amp; Elements
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu" style="">
					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>
							Layouts
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="top-menu.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Top Menu
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="two-menu-1.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Two Menus 1
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="two-menu-2.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Two Menus 2
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="mobile-menu-1.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Default Mobile Menu
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="mobile-menu-2.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Mobile Menu 2
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="mobile-menu-3.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Mobile Menu 3
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="typography.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Typography
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="<?php echo U('Index/elements');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Elements
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="<?php echo U('Index/buttons');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Buttons &amp; Icons
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="content-slider.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Content Sliders
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="<?php echo U('Index/treeview');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Treeview
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="<?php echo U('Index/jquery-ui');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							jQuery UI
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="nestable-list.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Nestable Lists
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>

							Three Level Menu
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="#">
									<i class="menu-icon fa fa-leaf green"></i>
									Item #1
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-pencil orange"></i>

									4th level
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="hover">
										<a href="#">
											<i class="menu-icon fa fa-plus purple"></i>
											Add Product
										</a>

										<b class="arrow"></b>
									</li>

									<li class="hover">
										<a href="#">
											<i class="menu-icon fa fa-eye pink"></i>
											View Products
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>

			<li class="hover">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-list"></i>
					<span class="menu-text"> Tables </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu ace-scroll scroll-disabled" style="">
					<li class="hover">
						<a href="<?php echo U('Index/tables');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Simple &amp; Dynamic
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="jqgrid.html">
							<i class="menu-icon fa fa-caret-right"></i>
							jqGrid plugin
						</a>

						<b class="arrow"></b>
					</li>
				</ul><div class="scroll-track scroll-detached no-track scroll-thin scroll-margin scroll-visible" style="display: none; top: 1px; left: 288px;"><div class="scroll-bar" style="top: 0px;"></div></div>
			</li>

			<li class="hover">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-pencil-square-o"></i>
					<span class="menu-text"> Forms </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu ace-scroll scroll-disabled" style="">
					<li class="hover">
						<a href="form-elements.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Form Elements
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="form-elements-2.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Form Elements 2
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="form-wizard.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Wizard &amp; Validation
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="wysiwyg.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Wysiwyg &amp; Markdown
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="<?php echo U('Index/dropzone');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Dropzone File Upload
						</a>

						<b class="arrow"></b>
					</li>
				</ul><div class="scroll-track scroll-detached no-track scroll-thin scroll-margin scroll-visible" style="display: none; top: -101px; left: 288px;"><div class="scroll-bar" style="top: 0px;"></div></div>
			</li>

			<li class="hover">
				<a href="widgets.html">
					<i class="menu-icon fa fa-list-alt"></i>
					<span class="menu-text"> Widgets </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="hover">
				<a href="calendar.html">
					<i class="menu-icon fa fa-calendar"></i>

					<span class="menu-text">
						Calendar

						<span class="badge badge-transparent tooltip-error" title="" data-original-title="2 Important Events">
							<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
						</span>
					</span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="hover">
				<a href="gallery.html">
					<i class="menu-icon fa fa-picture-o"></i>
					<span class="menu-text"> Gallery </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="hover">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-tag"></i>
					<span class="menu-text"> More Pages </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu ace-scroll scroll-disabled" style="">
					<li class="hover">
						<a href="profile.html">
							<i class="menu-icon fa fa-caret-right"></i>
							User Profile
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="inbox.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Inbox
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="pricing.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Pricing Tables
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="invoice.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Invoice
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="timeline.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Timeline
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="email-confirmation.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Email Templates
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="login.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Login &amp; Register
						</a>

						<b class="arrow"></b>
					</li>
				</ul>
			</li>

			<li class="hover">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-file-o"></i>

					<span class="menu-text">
						Other Pages

						<span class="badge badge-primary">5</span>
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu ace-scroll scroll-disabled" style="">
					<li class="hover">
						<a href="faq.html">
							<i class="menu-icon fa fa-caret-right"></i>
							FAQ
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="error-404.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Error 404
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="error-500.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Error 500
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="grid.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Grid
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="blank.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Blank Page
						</a>

						<b class="arrow"></b>
					</li>
				</ul>
			</li>
		</ul>
	</div>

<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>

				<li>
					<a href="#">Forms</a>
				</li>
				<li class="active">Form Elements 2</li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
					<span class="input-icon">
						<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
						<i class="ace-icon fa fa-search nav-search-icon"></i>
					</span>
				</form>
			</div><!-- /.nav-search -->
		</div>

		<div class="page-content">
			<div class="page-header">
				<h1>More Elements </h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-top"> Star Rating </label>

							<div class="col-sm-9">
								<div class="rating inline"></div>

								<div class="hr hr-16 hr-dotted"></div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">Typeahead.js</label>

							<div class="col-sm-9">
								<div class="pos-rel">
									<input class="typeahead scrollable" type="text" placeholder="States of USA" />
								</div>
							</div>
						</div>

						<div class="space-6"></div>

						<div class="form-group">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="food">Bootstrap Multiselect</label>

							<div class="col-xs-12 col-sm-9">
								<select id="food" class="multiselect" multiple="">
									<option value="cheese">Cheese</option>
									<option value="tomatoes">Tomatoes</option>
									<option value="mozarella">Mozzarella</option>
									<option value="mushrooms">Mushrooms</option>
									<option value="pepperoni">Pepperoni</option>
								</select>
							</div>
						</div>

						<div class="hr hr-16 hr-dotted"></div>

						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-top" for="duallist"> Dual listbox </label>

							<div class="col-sm-8">
								<select multiple="multiple" size="10" name="duallistbox_demo1[]" id="duallist">
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3" selected="selected">Option 3</option>
									<option value="option4">Option 4</option>
									<option value="option5">Option 5</option>
									<option value="option6" selected="selected">Option 6</option>
									<option value="option7">Option 7</option>
									<option value="option8">Option 8</option>
									<option value="option9">Option 9</option>
									<option value="option0">Option 10</option>
								</select>

								<div class="hr hr-16 hr-dotted"></div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right"> Select2 </label>

							<div class="col-xs-12 col-sm-9">
								<select multiple="" id="state" name="state" class="select2" data-placeholder="Click to Choose...">
									<option value="">&nbsp;</option>
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select>

								<span class="inline pull-right">
									<span class="grey">style:</span>

									<span class="btn-toolbar inline middle no-margin">
										<span id="select2-multiple-style" data-toggle="buttons" class="btn-group no-margin">
											<label class="btn btn-xs btn-yellow active">
												1
												<input type="radio" value="1" />
											</label>

											<label class="btn btn-xs btn-yellow">
												2
												<input type="radio" value="2" />
											</label>
										</span>
									</span>
								</span>
							</div>
						</div>
					</form>

					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->

		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
						<span class="blue bolder">Ace</span>
						Application &copy; 2013-2014
					</span>

					&nbsp; &nbsp;
					<span class="action-buttons">
						<a href="#">
							<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
						</a>
					</span>
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-250"></i>
		</a>
	</div><!-- /.main-container -->
	
	<!-- basic scripts -->
	<!--[if !IE]> -->
	<script src="/admin/build/Public/js/jquery.2.1.1.min.js"></script>
	<!-- <![endif]-->

	<!--[if IE]>
	<script src="/admin/build/Public/js/jquery.1.11.1.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='/admin/build/Public/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	</script>
	<script src="/admin/build/Public/js/bootstrap.min.js"></script>

	<!-- ace scripts -->
	<script src="/admin/build/Public/js/ace-elements.min.js"></script>
	<script src="/admin/build/Public/js/ace.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('[data-rel=tooltip]').tooltip({container:'body'});
			$('[data-rel=popover]').popover({container:'body'});}

			//TODO: iframe载入页面处理
		);
	</script>
<script src="/admin/build/Public/js/jquery.bootstrap-duallistbox.min.js"></script>
<script src="/admin/build/Public/js/jquery.raty.min.js"></script>
<script src="/admin/build/Public/js/bootstrap-multiselect.min.js"></script>
<script src="/admin/build/Public/js/select2.min.js"></script>
<script src="/admin/build/Public/js/typeahead.jquery.min.js"></script>
<script type="text/javascript">
	jQuery(function($){
	    var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({infoTextFiltered: '<span class="label label-purple label-lg">Filtered</span>'});
		var container1 = demo1.bootstrapDualListbox('getContainer');
		container1.find('.btn').addClass('btn-white btn-info btn-bold');
	
		/**var setRatingColors = function() {
			$(this).find('.star-on-png,.star-half-png').addClass('orange2').removeClass('grey');
			$(this).find('.star-off-png').removeClass('orange2').addClass('grey');
		}*/
		$('.rating').raty({
			'cancel' : true,
			'half': true,
			'starType' : 'i'
			/**,
			
			'click': function() {
				setRatingColors.call(this);
			},
			'mouseover': function() {
				setRatingColors.call(this);
			},
			'mouseout': function() {
				setRatingColors.call(this);
			}*/
		})//.find('i:not(.star-raty)').addClass('grey');
		
		
		
		//////////////////
		//select2
		$('.select2').css('width','200px').select2({allowClear:true})
		$('#select2-multiple-style .btn').on('click', function(e){
			var target = $(this).find('input[type=radio]');
			var which = parseInt(target.val());
			if(which == 2) $('.select2').addClass('tag-input-style');
			 else $('.select2').removeClass('tag-input-style');
		});
		
		//////////////////
		$('.multiselect').multiselect({
		 enableFiltering: true,
		 buttonClass: 'btn btn-white btn-primary',
		 templates: {
			button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"></button>',
			ul: '<ul class="multiselect-container dropdown-menu"></ul>',
			filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
			filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
			li: '<li><a href="javascript:void(0);"><label></label></a></li>',
			divider: '<li class="multiselect-item divider"></li>',
			liGroup: '<li class="multiselect-item group"><label class="multiselect-group"></label></li>'
		 }
		});
		
		
		///////////////////
			
		//typeahead.js
		//example taken from plugin's page at: https://twitter.github.io/typeahead.js/examples/
		var substringMatcher = function(strs) {
			return function findMatches(q, cb) {
				var matches, substringRegex;
			 
				// an array that will be populated with substring matches
				matches = [];
			 
				// regex used to determine if a string contains the substring `q`
				substrRegex = new RegExp(q, 'i');
			 
				// iterate through the pool of strings and for any string that
				// contains the substring `q`, add it to the `matches` array
				$.each(strs, function(i, str) {
					if (substrRegex.test(str)) {
						// the typeahead jQuery plugin expects suggestions to a
						// JavaScript object, refer to typeahead docs for more info
						matches.push({ value: str });
					}
				});
	
				cb(matches);
			}
		 }
	
		 $('input.typeahead').typeahead({
			hint: true,
			highlight: true,
			minLength: 1
		 }, {
			name: 'states',
			displayKey: 'value',
			source: substringMatcher(ace.vars['US_STATES'])
		 });
			
			
		///////////////
		
		
		//in ajax mode, remove remaining elements before leaving page
		$(document).one('ajaxloadstart.page', function(e) {
			$('[class*=select2]').remove();
			$('select[name="duallistbox_demo1[]"]').bootstrapDualListbox('destroy');
			$('.rating').raty('destroy');
			$('.multiselect').multiselect('destroy');
		});
	
	});
</script>
</body>
</html>
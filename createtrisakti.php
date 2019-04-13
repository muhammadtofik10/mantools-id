<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gentelella Alela! | </title>

	<!-- Bootstrap -->
	<link href="http://mantools-id.com/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="http://mantools-id.com/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="http://mantools-id.com/vendors/nprogress/nprogress.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="http://mantools-id.com/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-sitemap"></i> <span>Mantools</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="http://mantools-id.com/images/download.png" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>TeMix</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>Menu</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="/">Dashboard</a></li>
									</ul>
								</li>

								<li><a><i class="fa fa-bug"></i> All tools <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="createut.php">Create Akun UT</a></li>
										<li><a href="/createtrisakti.php">Create Akun Trisakti</a></li>
										<li><a href="/cc/bin">CC Generator</a></li>
										<li><a href="/cc/checker/">CC Checker</a></li>
										<li><a href="/nik.php">NIK & KK Generator</a></li>
										<li><a href="seamless.php">Seamless@wifi.id</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="images/download.png" alt="">TeMix
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<li><a href="javascript:;"> login</a></li>
									<li><a href="javascript:;">Help</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Create Akun Universitas Trisakti</h3>
						</div>
						<div class="title_right">
							<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<iframe allow="autoplay" width="auto" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/641100261&color=%23ff5500&auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></iframe>

					<div class="clearfix"></div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Form Create Akun</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<!-- Smart Wizard -->
								<p>This is the UT account creation form.</p>
								<div class="form_wizard wizard_horizontal">
									<div id="step-1">
										<form class="form-horizontal form-label-left" method="post" name="ut akun">

											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nim <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<!-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nama"> -->
													<input type="text" name="nim" maxlength="9" class="form-control col-md-7 col-xs-12" placeholder="9digitnim....."/>
												</div>
											</div>
											<center>
												<div class="btn-group btn-group-sm">
													<input type="submit" class="btn btn-primary" data-toggle-class="btn-default" name="kirim" value="Kirim">
													<input type="submit" class="btn btn-primary" data-toggle-class="btn-default" name="clear" value="Clear">
												</div>
											</center>
										</form>

									</div>

									<?php
									if (isset($_POST['kirim'])){
										$ok= $_POST['nim'];
										$a=1;
										while($a <= 9 ){
											echo $ok."0".$a."@trisakti |".$ok."0".$a."<br>";
											$a++;}}
											elseif (isset($_POST['clear'])){
												echo " ";}

												?>
											</div>
											<!-- End SmartWizard Content -->
										</div>
									</div>
								</div>
								<!-- /page content -->

								<!-- footer content -->
								<footer>
									<div class="pull-right">
										TeMix - Bootstrap Admin Template by <a href="https://www.mantools-id.com">TeMix</a>
									</div>
									<div class="clearfix"></div>
								</footer>
								<!-- /footer content -->
							</div>
						</div>

						<!-- jQuery -->
						<script src="http://mantools-id.com/vendors/jquery/dist/jquery.min.js"></script>
						<!-- Bootstrap -->
						<script src="http://mantools-id.com/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
						<!-- FastClick -->
						<script src="http://mantools-id.com/vendors/fastclick/lib/fastclick.js"></script>
						<!-- NProgress -->
						<script src="http://mantools-id.com/vendors/nprogress/nprogress.js"></script>
						<!-- jQuery Smart Wizard -->
						<script src="http://mantools-id.com/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
						<!-- Custom Theme Scripts -->
						<script src="http://mantools-id.com/build/js/custom.min.js"></script>


					</body>
					</html>
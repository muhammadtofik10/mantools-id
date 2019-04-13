<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo.ico" type="image/ico" />
<!---->
	<title>~Mantools~</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap -->
	<link href="https://www.mantools-id.com/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="https://www.mantools-id.com/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="https://www.mantools-id.com/vendors/nprogress/nprogress.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="https://www.mantools-id.com/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Mantools</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="images/visa.png" alt="..." class="img-circle profile_img">
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
							<h3>Genrate Seamless@wifi.id</h3>
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

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Seamless@wifi.id</h2>
									<div class="clearfix"></div>
								</div>

								<?php
								error_reporting(0);

								if (isset($_POST['server1'])){
									$web = 'https://kuntool.com/lib/trial.php?empas=78';
								}else if(isset($_POST['server2'])){
									$web = 'https://kuntool.com/lib/trial.php?empas=70';	
								}else if(isset($_POST['server3'])){
									$web = 'https://kuntool.com/lib/trial.php?empas=71';	
								}else{

								}

							// shuffle($web);
							// $content = ;
								$ini = json_decode(file_get_contents($web), true);

								?>

								<div class="x_content">
									<?php $status = false;

									if ($status == true) {
									
									?>
									<!-- Smart Wizard -->
									<p>Username & Password seamless@wifi.id , silakan digunakan dengan bijak dan password akan di Change/diganti setiap 3 jam sekali akan di reset setiap 3 jam sekali</p>
									<div>
										<div>
											<form class="form-horizontal form-label-left" method="post" name="ut akun">

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" name="nim" maxlength="9" class="form-control col-md-7 col-xs-12" value="<?php echo $ini['username'] ?>" />
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password<span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" name="registrasi" maxlength="5" class="form-control col-md-7 col-xs-12" value="<?php echo $ini['password']; ?>" />
													</div>
												</div>
												<center>
													<div class="btn-group btn-group-sm">
														<input type="submit" class="btn btn-primary" data-toggle-class="btn-default" name="server1" value="Server 1">
														<input type="submit" class="btn btn-primary" data-toggle-class="btn-default" name="server2" value="Server 2">
														<input type="submit" class="btn btn-primary" data-toggle-class="btn-default" name="server3" value="Server 3">
													</div>

												</center>
											</form>

										</div>
									</div>
									<?php
								}else{
									?>
<div>
										<div>
											<form class="form-horizontal form-label-left" method="post" name="ut akun">

												<center>
													<h1>Fitur Sedang dalam Perbaikan...</h1>
												</center>
											</form>

										</div>
									</div>
									<?php
								}?>
									<!-- End SmartWizard Content -->
								</div>
							</div>
						</div>
					</div>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="https://www.mantools-id.com/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://www.mantools-id.com/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="https://www.mantools-id.com/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="https://www.mantools-id.com/vendors/nprogress/nprogress.js"></script>
<!-- jQuery Smart Wizard -->
<script src="https://www.mantools-id.com/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<!-- Custom Theme Scripts -->
<script src="https://www.mantools-id.com/build/js/custom.min.js"></script>


</body>
</html>
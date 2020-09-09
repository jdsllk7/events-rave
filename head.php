<?php
include 'db/connect.php';

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> Events | Rave </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/gijgo.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!--? Preloader Start -->
	<div id="preloader-active">
		<div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-inner position-relative">
				<div class="preloader-circle"></div>
				<div class="preloader-img pere-text">
					<img src="" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader Start -->
	<header>
		<!--? Header Start -->
		<div class="header-area header-transparent">
			<div class="main-header  header-sticky">
				<div class="container-fluid">
					<div class="row align-items-center">
						<!-- Logo -->
						<div class="col-xl-2 col-lg-2 col-md-1">
							<div class="logo">
								<h2 class="text-dark" href="index.php"><a href="index.php">Events | Rave</a> </h2>
							</div>
						</div>
						<div class="col-xl-10 col-lg-10 col-md-10">
							<div class="menu-main d-flex align-items-center justify-content-end">
								<!-- Main-menu -->
								<div class="main-menu f-right d-none d-lg-block">
									<nav>
										<ul id="navigation">
											<li><a href="index.php">Home</a></li>
											<li><a href="upload.php">Upload</a></li>
											<li><a href="login.php">Login</a></li>
											<li><a href="signup.php">Sign Up</a></li>
										</ul>
									</nav>
								</div>
								<div class="header-right-btn f-right d-none d-lg-block ml-20">
									<a href="logOut.php" class="border-btn header-btn">Log Out</a>
								</div>
							</div>
						</div>
						<!-- Mobile Menu -->
						<div class="col-12">
							<div class="mobile_menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->
	</header>


	<?php
	if (isset($_GET["msg"])) {

		if ($_GET["type"] == 'true') {
			echo '
			<div class="alert alert-success alert-dismissible in">
				' . $_GET["msg"] . '
			</div>
			';
		} elseif ($_GET["type"] == 'false') {
			echo '
			<div class="alert alert-danger alert-dismissible in">
				' . $_GET["msg"] . '
			</div>
			';
		}
	}
	?>
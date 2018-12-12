<?php


if(!isset($_SESSION['jbx'])){

	exit();
}

?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CreditShore || Home</title>

	<link href="assets/style/css" rel="stylesheet">
	<link href="assets/style/bootstrap.min.css" rel="stylesheet">    <!-- Bootstrap -->
	<link href="assets/style/font-awesome.min.css" rel="stylesheet"> <!-- fontawesome -->
	<link href="assets/style/hover.min.css" rel="stylesheet">    <!-- hover -->
	<link href="assets/style/pretty.photo.css" rel="stylesheet"> <!-- prettyphoto -->
	<link href="assets/style/owl.carousel.css" rel="stylesheet"> <!-- owl -->
	<link href="assets/style/icofont.css" rel="stylesheet">  <!-- icofont -->
	<link href="assets/style/animate.css" rel="stylesheet">  <!-- animate -->
	<link rel="stylesheet" href="assets/style/slick.css">
	<!-- custom -->
	<link rel="stylesheet" href="assets/style/style.css">
	<link rel="stylesheet" href="assets/style/update_style.css">
	<link rel="stylesheet" href="assets/style/thumbnail-slider.css">
	<link rel="stylesheet" href="assets/style/fontawesome/css/all.css" type="text/css">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/script/jquery.min.js"></script>    <!-- jQuery -->

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style></style></head>
<body class="home">

<div class="parallax bg">
	<img src="assets/banner.jpg">
	<!-- <div class="overlay"></div> -->
	<div class="gradient"></div>
	<div class="overlay"></div>
	<div id="particles-js"></div>
</div>

<div class="box_mode content_wrapper">
	<div class="page-wrapper">
		<!-- 01. hero_area -->
		<div class="hero_area" id="welcome">

			<!-- <div class="sticky-anchor"></div> -->
			<header class="header-area fixed_header">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<a href="index.php" class="">
								<img src="assets/creditshore-footer-logo-122x37.png" alt="logo">
							</a>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<?php include_once 'nav.php'; ?>
					</div>
				</div>
			</header>
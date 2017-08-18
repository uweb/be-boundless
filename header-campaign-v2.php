<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="keywords" content="University of Washington Boundless Campaign" />
		<?php echo $meta; ?>
		<meta name="viewport" content="initial-scale=.95 width=device-width maximum-scale=1 user-scalable=no" />
		<title><?php wp_title(' | ',TRUE,'right'); bloginfo('name'); ?></title>
		<link rel='stylesheet' id='uw-master-css'  href='<?php echo bloginfo("template_directory") . '/style.css' ?>' type='text/css' media='all' />
		<link rel='stylesheet' id='google-font-open-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C700italic%2C400%2C700&#038;' type='text/css' media='all' />
		<link rel='stylesheet' id='uw-boundless-css'  href='<?php echo get_stylesheet_directory_uri() . '/style.css' ?>' type='text/css' media='all' />
		<link rel='stylesheet' id='uw-campaign-css'  href='<?php echo get_stylesheet_directory_uri() . '/campaign/css/campaignv2-style.css' ?>' type='text/css' media='all' />
		<?php echo $styles; ?>
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
		<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri() . '/campaign/js/header.js' ?>'></script>
	</head>
	<body id="immersive" <?php body_class(); ?>>
		<header class="cv2-header" role="banner">
			<div class="cv2-header-purple" role="navigation">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<a class="cv2-header-home" tabindex="-1" href="http://www.uw.edu">UW Home</a>
					</div><!-- .col-sm-6 .col-md-6 .col-lg-6 -->
					<div class="col-sm-6 col-md-6 col-lg-6 cv2-header-menu">
						<ul class="list-inline hidden-xs">
							<li><a href="campaign">Campaign Home</a></li>
							<li><a href="about">About</a></li>
							<li><a href="explore">Stories</a></li>
						</ul>
						<button id="cv2-toggle" class="visible-xs-inline-block">Menu</button>
					</div><!-- .col-sm-6 .col-md-6 .col-lg-6 .cv2-header-menu -->
				</div><!-- .row -->
			</div><!-- .cv2-header-purple -->
			<div class="cv2-header-mobile" role="navigation">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ul class="list-unstyled text-center">
							<li><a href="campaign">Campaign Home</a></li>
							<li><a href="about">About</a></li>
							<li><a href="explore">Stories</a></li>
						</ul>
					</div><!-- .col-xs-12 .col-sm-12 .col-md-12 .col-lg-12 -->
				</div><!-- .row -->
			</div><!-- .cv2-header-mobile -->
			<div class="cv2-header-white" role="navigation">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8">
						<form>
							<label>Make your gift today</label>
							<input type="text" />
							<button id="cv2-give">Give &rarr;</button>
						</form>
					</div><!-- .col-sm-8 .col-md-7 .col-lg-6 -->
					<div class="col-sm-4 col-md-4 col-lg-4 cv2-mobile-grey">
						<button id="cv2-more">More giving opportunities <span class="icon expando"></span></button>
					</div><!-- .col-sm-4 .col-md-5 .col-lg-6 -->
				</div><!-- .row -->
			</div><!-- .cv2-header-white -->
			<div class="cv2-header-grey" role="navigation">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p class="header">MORE GIVING OPPORTUNITIES</p>
					</div><!-- .col-xs-12 .col-sm-12 .col-md-12 .col-lg-12 -->
				</div><!-- .row -->
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4">
						<p class="subheader">Campuses</p>
						<ul class="list-unstyled">
							<li><a href="#">UW Bothell</a></li>
							<li><a href="#">UW Medicine</a></li>
							<li><a href="#">UW Tacoma</a></li>
						</ul>
						<p class="subheader">Colleges</p>
						<ul class="list-unstyled">
							<li><a href="#">College of Arts &amp; Sciences</a></li>
							<li><a href="#">College of Built Environments</a></li>
							<li><a href="#">College of Education</a></li>
							<li><a href="#">College of Engineering</a></li>
							<li><a href="#">College of the Environment</a></li>
						</ul>
					</div><!-- .col-md-4 .col-lg-4 -->
					<div class="col-sm-4 col-md-4 col-lg-4">
						<p class="subheader">Schools</p>
						<ul class="list-unstyled">
							<li><a href="#">Evans School of Public Policy &amp; Governance</a></li>
							<li><a href="#">Foster School of Business</a></li>
							<li><a href="#">Information School</a></li>
							<li><a href="#">School of Dentistry</a></li>
							<li><a href="#">School of Law</a></li>
							<li><a href="#">School of Nursing</a></li>
							<li><a href="#">School of Pharmacy</a></li>
							<li><a href="#">School of Public Health</a></li>
							<li><a href="#">School of Social Work</a></li>
						</ul>
					</div><!-- .col-md-4 .col-lg-4 -->
					<div class="col-sm-4 col-md-4 col-lg-4">
						<p class="subheader">Departments</p>
						<ul class="list-unstyled">
							<li><a href="#">Academic &amp; Student Affairs</a></li>
							<li><a href="#">Athletics</a></li>
							<li><a href="#">University Libraries</a></li>
						</ul>
						<p class="subheader">Media</p>
						<ul class="list-unstyled">
							<li><a href="#">KEXP</a></li>
							<li><a href="#">KUOW</a></li>
						</ul>
					</div><!-- .col-md-4 .col-lg-4 -->
		</header><!-- .cv2-header -->

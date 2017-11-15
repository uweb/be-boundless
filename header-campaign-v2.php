<?php
global $meta;
global $styles;

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="keywords" content="University of Washington Boundless Campaign" />
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@UW">
		<meta name="twitter:creator" content="@UW">
		<meta property="og:url" content='<?php echo get_permalink( $post->ID ); ?>' />
		<meta property="og:type" content="website" />
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
						<li><a href="<?php echo get_site_url(); ?>/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-campaign-home">Campaign Home</a></li>
						<li><a href="<?php echo get_site_url(); ?>/about/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-about-campaign">About</a></li>
						<li><a href="<?php echo get_site_url(); ?>/archive/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-campaign-stories">Stories</a></li>
					</ul>
						<button id="cv2-toggle" class="visible-xs-inline-block">Menu</button>
					</div><!-- .col-sm-6 .col-md-6 .col-lg-6 .cv2-header-menu -->
				</div><!-- .row -->
			</div><!-- .cv2-header-purple -->
			<div class="cv2-header-mobile" role="navigation">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ul class="list-unstyled text-center">
							<li><a href="<?php echo get_site_url(); ?>/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-campaign-home">Campaign Home</a></li>
							<li><a href="<?php echo get_site_url(); ?>/about/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-about-campaign">About</a></li>
							<li><a href="<?php echo get_site_url(); ?>/archive/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-campaign-stories">Stories</a></li>
						</ul>
					</div><!-- .col-xs-12 .col-sm-12 .col-md-12 .col-lg-12 -->
				</div><!-- .row -->
			</div><!-- .cv2-header-mobile -->
			<div class="cv2-header-white">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8">
						<form role="form">
							<label for="cv2-header-give-amount">Make your gift today</label>
							<span class="dollar">
							$<input type="text" id="cv2-header-give-amount" />
							</span>
							<button id="cv2-give">Give</button>
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
						<ul class="list-unstyled">
							<li><a href="http://www.washington.edu/uaa/support/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-uaa">Academic &amp; Student Affairs</a></li>
							<li><a href="http://uwtyeeclub.org/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-athletics">Athletics</a></li>
							<li><a href="https://artsci.washington.edu/campaign/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-arts-sciences">College of Arts &amp; Sciences</a></li>
							<li><a href="http://be.washington.edu/support-be/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-cbe">College of Built Environments</a></li>
							<li><a href="http://education.uw.edu/campaign/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-education">College of Education</a></li>
							<li><a href="http://www.engr.washington.edu/giving/impact/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-engineering">College of Engineering</a></li>
							<li><a href="https://environment.uw.edu/alumni-and-community/giving-to-the-college/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-environment">College of the Environment</a></li>
							<li><a href="http://evans.uw.edu/giving/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-evans">Daniel J. Evans School of Public Policy &amp; Governance</a></li>
						</ul>
					</div><!-- .col-md-4 .col-lg-4 -->
					<div class="col-sm-4 col-md-4 col-lg-4">
						<ul class="list-unstyled">
							<li><a href="https://www.washington.edu/giving/make-a-gift/?page=funds&source_typ=2&source=ECM">Henry M. Jackson School of International Studies</a></li>
							<li><a href="https://ischool.uw.edu/boundless/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-ischool">Information School</a></li>
							<li><a href="http://www.kexp.org/support/benefitsofgiving/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-kexp">KEXP</a></li>
							<li><a href="http://kuow.org/support-kuows-capitol-campaign/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-kuow">KUOW</a></li>
							<li><a href="http://foster.uw.edu/campaign/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-business">Michael G. Foster School of Business</a></li>
							<li><a href="https://www.cs.washington.edu/supportcse/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-cse">Paul G. Allen School of Computer Science &amp; Engineering</a></li>
							<li><a href="https://dental.washington.edu/alumni-friends/give/make-a-gift/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-dentistry">School of Dentistry</a></li>
							<li><a href="https://www.law.uw.edu/donate/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-law">School of Law</a></li>
						</ul>
					</div><!-- .col-md-4 .col-lg-4 -->
					<div class="col-sm-4 col-md-4 col-lg-4">
						<ul class="list-unstyled">
							<li><a href="https://nursing.uw.edu/community/donate/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-nursing">School of Nursing</a></li>
							<li><a href="https://sop.washington.edu/alumni-donors/give-to-the-school/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-pharmacy">School of Pharmacy</a></li>
							<li><a href="http://sph.washington.edu/giving/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-public-health">School of Public Health</a></li>
							<li><a href="https://socialwork.uw.edu/giving-opportunities/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-social-work">School of Social Work</a></li>
							<li><a href="http://www.lib.washington.edu/support/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-libraries">University Libraries</a></li>
							<li><a href="http://www.uwb.edu/give/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-uw-bothell">UW Bothell</a></li>
							<li><a href="http://www.acceleratemed.org/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-medicine">UW Medicine</a></li>
							<li><a href="http://www.tacoma.uw.edu/boundless/?utm_source=boundless&utm_medium=giving-opportunities&utm_campaign=giving-uw-tacoma">UW Tacoma</a></li>
						</ul>
					</div><!-- .col-md-4 .col-lg-4 -->
				</div>			</div>
		</header><!-- .cv2-header -->
		<div id="give-iframe"><span id="cv2-close" role="button"></span><div class="container"></div></div>

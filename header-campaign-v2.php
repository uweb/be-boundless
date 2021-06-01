<?php
global $meta;
global $styles;
global $storyCodes;
global $storyAppealCodes;
if(!$storyCodes || $storyCodes == ''){
	//Emergency relief funds - non-COVID-19 messaging
	// $storyCodes = 'HEROES,SEALTS,KATRIN,UWTCHA,UWBSEF,IMPFND';

	//COVID-19 specific relief funds + messaging
	$storyCodes = 'UWMCOV,SEACOV,TACCOV,BOTCOV,PHICOV,SEALTS,IMPFND';
}
if(!$storyAppealCodes || $storyAppealCodes == ''){
	$storyAppealCodes = '21XBS';
}
global $post;

?>

<!DOCTYPE html>
<html class="no-js" lang="<?php echo ( is_page('research-korean-dramas-kr') ? "ko" :  ( is_page("puerto-rico-solar-es") ? "es" : "en" ) ); ?>">
	<head>
		<!-- Google Tag Manager as of 6/23/2020 TJS -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KQ6QQBT');</script>
		<!-- End Google Tag Manager -->

		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title><?php wp_title(' | ',TRUE,'right'); bloginfo('name'); ?></title>
		<?php
		$post = get_post();

		custom_meta($post, $meta);
		?>
		<meta name="viewport" content="initial-scale=.95 width=device-width maximum-scale=1 user-scalable=no" />
		<link rel='stylesheet' id='uw-master-css'  href='<?php echo bloginfo("template_directory") . '/style.css' ?>' type='text/css' media='all' />
		<link rel='stylesheet' id='google-font-open-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C700italic%2C400%2C700&#038;' type='text/css' media='all' />
		<link rel='stylesheet' id='uw-boundless-css'  href='<?php echo get_stylesheet_directory_uri() . '/style.css' ?>' type='text/css' media='all' />
		<link rel='stylesheet' id='uw-campaign-css'  href='<?php echo get_stylesheet_directory_uri() . '/campaign/css/campaignv2-style.css' ?>' type='text/css' media='all' />
		<?php echo $styles; ?>
		<!-- <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script> -->
		<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri() . '/campaign/js/vendor/jquery-1.11.3.min.js' ?>'></script>
		<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri() . '/campaign/js/header.js' ?>'></script>

		<!-- Moved to GTM 6/23/2020 TJS
		<script src="https://cdn.variametrix.com/d2insights/tracker.min.js"></script>
		<script>
			var _iaq = _iaq || [];
			_iaq.push(['enableHeartBeatTimer', '30']);
			_iaq.push(['setSiteId', '7a490682-d908-4153-b1b4-ba39c8085050']);
			_iaq.push(['setCustomerId', '7a490682-d908-4153-b1b4-ba39c8085050']);
		</script> -->
	</head>
	<body id="immersive" <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) as of 6/23/2020 TJS -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ6QQBT"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
		<header id="cv2-header" class="cv2-header" role="banner">
			<div class="cv2-header-purple" role="navigation" aria-label="Main menu">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<a class="cv2-header-home" tabindex="-1" href="http://www.uw.edu">UW Home</a>
					</div><!-- .col-sm-6 .col-md-6 .col-lg-6 -->
					<div class="col-sm-6 col-md-6 col-lg-6 cv2-header-menu">
						<ul class="list-inline hidden-xs">
						<li><a href="<?php echo get_site_url(); ?>/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-campaign-home">Campaign Home</a></li>
						<li><a href="<?php echo get_site_url(); ?>/about/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-about-campaign">About</a></li>
						<li><a href="<?php echo get_site_url(); ?>/stories/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-campaign-stories">Stories</a></li>
					</ul>
						<button id="cv2-toggle" class="visible-xs-inline-block">Menu</button>
					</div><!-- .col-sm-6 .col-md-6 .col-lg-6 .cv2-header-menu -->
				</div><!-- .row -->
			</div><!-- .cv2-header-purple -->
			<div class="cv2-header-mobile" role="navigation" aria-label="Mobile menu">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ul class="list-unstyled text-center">
							<li><a href="<?php echo get_site_url(); ?>/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-campaign-home">Campaign Home</a></li>
							<li><a href="<?php echo get_site_url(); ?>/about/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-about-campaign">About</a></li>
							<li><a href="<?php echo get_site_url(); ?>/stories/?utm_source=boundless&utm_medium=purple-topnav&utm_campaign=topnav-campaign-stories">Stories</a></li>
						</ul>
					</div><!-- .col-xs-12 .col-sm-12 .col-md-12 .col-lg-12 -->
				</div><!-- .row -->
			</div><!-- .cv2-header-mobile -->
			<div class="cv2-header-white">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8">
						<form role="region" aria-label="giving-widget">
							<label for="cv2-header-give-amount">Make your gift today</label>
							<?php /*<span class="dollar">
							$<input type="text" id="cv2-header-give-amount" />
							</span>*/ ?>
							<button id="cv2-give" data-fund="<?php echo $storyCodes; ?>" data-appeal="<?php echo $storyAppealCodes; ?>">Give</button>
						</form>
					</div><!-- .col-sm-8 .col-md-7 .col-lg-6 -->
				</div><!-- .row -->
			</div><!-- .cv2-header-white -->
			<div id="cv2-header-white-collapse"></div>
		</header><!-- .cv2-header -->
		<div id="give-iframe"><span id="cv2-close" role="button"></span><div class="container"></div></div>

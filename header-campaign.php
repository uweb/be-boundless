<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="keywords" content="University of Washington Boundless Campaign" />
  <!-- <meta name="viewport" content="width=device-width"> -->
  <!-- <meta name="viewport" content="initial-scale=1 user-scalable=no width=device-width"> -->
  <meta name="viewport" content="initial-scale=.95 width=device-width maximum-scale=1 user-scalable=no" />
  <title> <?php wp_title(' | ',TRUE,'right'); bloginfo('name'); ?> </title>

      
      
  <link rel='stylesheet' id='uw-master-css'  href='<?php echo bloginfo("template_directory") . '/style.css' ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='google-font-open-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C700italic%2C400%2C700&#038;' type='text/css' media='all' />
  <link rel='stylesheet' id='uw-style-css'  href='<?php echo get_stylesheet_directory_uri() . '/style.css' ?>' type='text/css' media='all' />
  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
  <!-- <script type='text/javascript' src='https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js'></script> -->

  <style>
     #mobile-relative,
    .hero-content .uw-site-title,
    .uw-breadcrumbs {
       display: none;
    }
     body.active-header {
       padding-top: 90px;
     }
     body {
       padding-top: 50px;
     }
     @media only screen and (max-width: 767px) {
       div.container.uw-body {
           padding-top: 30px;
       }
     }

   </style>


</head>
<body id="immersive" <?php body_class(); ?>>

<header role="banner">
  <div id="campaign-header" class="active" role="navigation">

    <a tabindex="-1" class="home" href="http://www.uw.edu">Home</a>

    <div id="campaign-expand-sm" tabindex="-1" class="thin" aria-hidden="true">
      <a href="http://give.uw.edu/">Give</a>
    </div>
    <div tabindex="-1" class="thick">
      <ul>
        <li><a href="campaign">Campaign Home</a></li>
        <li><a href="about">About</a></li>
        <li><a href="explore">Explore the Campaign</a></li>
        <li><button id="give-now">Give now</button></li>
      </ul>        
    </div>
    <button id="campaign-expand">Toggle menu
      <div aria-hidden="true" id="ham">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
  </div>

  <!-- <h1><?php the_title(); ?></h1> -->

  <div id="give-iframe"></div>

</header>
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
  <meta property="og:title" content="<?php the_title(''); ?>" />
  <meta property="og:url" content="<?php echo get_permalink(); ?>" />
  
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
  <meta property="og:image" content="<?php echo $image[0]; ?>" />
  <?php else : ?>
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri() . '/campaign/img/og_image.jpg'; ?>" 
  <?php endif; ?> 

  <link rel='stylesheet' id='uw-master-css'  href='<?php echo bloginfo("template_directory") . '/style.css' ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='google-font-open-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C700italic%2C400%2C700&#038;' type='text/css' media='all' />
  <link rel='stylesheet' id='uw-style-css'  href='<?php echo get_stylesheet_directory_uri() . '/style.css' ?>' type='text/css' media='all' />
  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
  <!-- <script type='text/javascript' src='https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js'></script> -->




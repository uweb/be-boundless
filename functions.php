<?php

require('custom_post_types/class.boundless.php');
require( 'custom_post_types/class.post-type-map-points.php' );
require( 'custom_post_types/class.post-type-gallery.php' );
require 'custom_post_types/class.boundless-custom-post.php';
require 'custom_post_types/class.boundless-video-post.php';
require 'custom_post_types/custom-post-types.php';

require( 'custom_post_types/class.post-type-navigation.php' );

function setup_uw_object() {
  require( get_stylesheet_directory() . '/setup/class.uw.php' );
  $UW = new UW();
  do_action('extend_uw_object', $UW);
  return $UW;
}

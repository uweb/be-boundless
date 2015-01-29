<?php
require('setup/class.boundless.php');


require 'setup/class.boundless-custom-post.php';
require 'setup/class.boundless-video-post.php';
require 'setup/custom-post-types.php';

require( 'setup/class.post-type-map-points.php' );

function add_boundless_sources() {
  wp_enqueue_style('style', get_stylesheet_uri() . 'style.css');
  wp_enqueue_script('boundless', get_template_directory_uri() . '/js/boundless.js', array('backbone'), '1.0');
}

add_action('enqueue_script', 'add_boundless_sources');

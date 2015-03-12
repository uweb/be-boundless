<?php

// Theme setup

class Boundless
{

  const VERSION = 0.1;

  function __construct()
  {
    add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );
    add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );
  }


  function styles()
  {
    if (is_front_page())
    {
      // wp_register_style( 'boundless', get_stylesheet_directory_uri() . '/boundless.css' );
      // wp_register_style( 'nprogress', get_bloginfo("stylesheet_directory") . '/js/nprogress.css' );

      // wp_enqueue_style('nprogress');
      // wp_enqueue_style('boundless');
    }
  }

  function scripts()
  {
    // Use externally hosted jQuery
    // Also gives the $ global without an setup unlike the WP jQuery
    if (is_front_page()){
      wp_deregister_script( 'jquery' );
      wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');

      // Google Maps API
      wp_register_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?libraries=places' );

      // YouTube iFrame API
      wp_register_script( 'youtube-iframe-api', 'https://www.youtube.com/player_api' );

      // Progress bar
      wp_register_script( 'nprogress', get_bloginfo("stylesheet_directory") . '/js/nprogress.js' );

      // Velocity
      wp_register_script( 'velocity', get_bloginfo("stylesheet_directory") . '/js/libraries/velocity.min.js' );

      // jQuery Easings
      wp_register_script( 'jquery-easing', get_stylesheet_directory_uri() . '/js/libraries/jquery.easing.min.js', array('jquery') );

      // Boundless App and dependecies
      wp_register_script( 'boundless', get_stylesheet_directory_uri() . '/js/boundless.js', array( 'youtube-iframe-api', 'jquery', 'underscore', 'backbone', 'google-maps', 'jquery-easing', 'nprogress', 'velocity' ), self::VERSION );

      wp_enqueue_script( 'boundless' );
    }
  }

}

new Boundless;

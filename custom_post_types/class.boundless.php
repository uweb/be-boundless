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
    if (is_front_page()){
      wp_register_style( 'boundless', get_stylesheet_directory_uri() . '/boundless.css' );
      wp_enqueue_style('boundless');
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

      // Boundless App and dependecies
      wp_register_script( 'boundless', get_stylesheet_directory_uri() . '/js/boundless.js', array( 'jquery', 'underscore', 'backbone', 'google-maps', 'youtube-iframe-api' ), self::VERSION );
      wp_enqueue_script( 'boundless' );
    }
  }

}

new Boundless;

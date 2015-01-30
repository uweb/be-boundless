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
    wp_register_style( 'boundless', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('boundless');
  }

  function scripts()
  {
    wp_register_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?libraries=places' );
    wp_register_script( 'boundless', get_template_directory_uri() . '/js/boundless.dev.js', array( 'backbone', 'google-maps' ), self::VERSION );
    wp_enqueue_script( 'boundless' );
  }

}

new Boundless;
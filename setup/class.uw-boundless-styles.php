<?php

class UW_Boundless_Styles extends UW_Styles
{
  
  function __construct()
  {
    $this->STYLES = array(

      'google-font-open' => array(
          'id'      => 'google-font-open',
          'url'     => 'https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700',
          'deps'    => array(),
          'version' => '3.6',
          'admin'   => true
      ),

      'uw-master' => array (
        'id'      => 'uw-master',
        'url'     => get_bloginfo( 'template_url' ) . '/style' . $this->dev_stylesheet() . '.css',
        'deps'    => array(),
        'version' => '3.6'
      ),

      'uw-style' => array (
          'id'      => 'uw-style',
          'url'     => get_stylesheet_directory_uri() . '/style' . $this->dev_stylesheet() . '.css',
          'deps'    => array('uw-master'),
          'version' => '3.6',
          'child'   => true
      )
    );

    add_action( 'wp_enqueue_scripts', array( $this, 'uw_register_default_styles' ) );
    add_action( 'wp_enqueue_scripts', array( $this, 'uw_enqueue_default_styles' ) );
    add_action( 'admin_head', array( $this, 'uw_enqueue_admin_styles' ) );

  }

  function uw_enqueue_default_styles()
  {
    if (!is_front_page()){
      foreach ( $this->STYLES as $style )
      {
        $style = (object) $style;

        if ( array_key_exists( 'child', $style )
              && $style->child && ! $this->is_child_theme() )
          continue;
          
        wp_enqueue_style( $style->id );
      }
    }
  }
}

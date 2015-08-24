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

      // Map Points
      wp_localize_script( 'boundless', 'POINTS', $this->get_map_points() );
      // Gallery information
      wp_localize_script( 'boundless', 'GALLERY', $this->get_gallery() );
      // Gallery information
      wp_localize_script( 'boundless', 'PAGES', $this->get_pages() );

      // Video information
      wp_localize_script( 'boundless', 'VIDEOS', $this->get_videos() );


      wp_enqueue_script( 'boundless' );
    }
  }

  function get_map_points()
  {

    $points = get_posts( array(
      'post_type' => array( 'points' ),
      'numberposts' => -1,
    ));

    foreach ( $points as $point )
    {
      $result = new stdClass();
      $result->title = $point->post_title;
      $result->text = $point->post_excerpt;
      $result->thumb = apply_filters('wp_prepare_attachment_for_js', apply_filters( 'remove_cms', wp_get_attachment_image_src( get_post_thumbnail_id( $point->ID ), array( 50, 50 ) )) );
      $result->image = apply_filters('wp_prepare_attachment_for_js', apply_filters( 'remove_cms', wp_get_attachment_image_src( get_post_thumbnail_id( $point->ID ), 'large' )) );
      $result->coordinate = array(
        "latitude"  => (double) get_post_meta( $point->ID, '_latitude', true ),
        "longitude" => (double) get_post_meta( $point->ID, "_longitude", true )
      );
      $result->cta = array(
        'text'=> get_post_meta($point->ID, 'cta_text', true),
        'url' => get_post_meta($point->ID, 'cta_url', true)
      );

      $results[] = $result;
    }

    return $results;

  }

  function get_videos() {
    $videos = get_posts( array(
      'post_type' => array( 'boundless_video' )
    ));

    foreach ( $videos as $video )
    {
      $result = new stdClass();
      $result->title = $video->post_title;
      $result->slug  = $video->post_name;
      $result->text  = $video->post_content;
      $result->image = apply_filters('wp_prepare_attachment_for_js', apply_filters( 'remove_cms', wp_get_attachment_url( get_post_thumbnail_id( $video->ID))) );
      $result->video = get_post_meta( $video->ID, 'youtube', true );

      $results[] = $result;
    }

    return  $results;

  }

  function get_gallery()
  {
    $galleries = get_posts( array(
      'post_type' => array( 'gallery' )
    ));


    foreach ( $galleries as $gallery )
    {
      $ids =  explode( ',' , get_post_meta( $gallery->id, '_gallery', true ) );

      $result = new stdClass();
      $result->title = $gallery->title;
      $result->text = $gallery->excerpt;

      foreach ( $ids as $id )
      {
        $attachment = get_post($id);
        $metadata =  wp_get_attachment_metadata( $id );
        $metadata['caption'] = $attachment->post_excerpt;
        $image_src = apply_filters('wp_prepare_attachment_for_js', wp_get_attachment_image_src( $id, 'large' ));
        $metadata['src'] = array(
          'url' => apply_filters( 'remove_cms' ,$image_src[0] ),
          'width' => $image_src[1],
          'height' => $image_src[2]
          );
        // $baseurl = explode( '/', $metadata['file'] );
        // $metadata['baseurl'] = get_site_url() .  '/files/' .implode('/', array_slice( $baseurl, 0, 2 )) . '/';
        // $metadata['imageurl'] = get_site_url() .  '/files/' . wp_get_attachment_image_src( $id, array( 300, 0) );

        $result->images[] = $metadata;
        // $result->images[] =$

      };

      $results[] = $result;
    }

    return $results;
  }

  function get_pages() {

    $navigation = get_posts( array(
      'post_type' => array( 'navigation' )
    ));

    foreach ( $navigation as $nav ) {
      $type = get_post_meta( $nav->ID, '_type', true );
      if ( $type === 'page' )
      {
        $routes[] = get_post_meta( $nav->ID,  '_route', true );
      }
    }

    foreach ( $routes as $route )
    {
      $route = explode( '/' , $route);
      $route = end( $route);
      $pages[] = get_page_by_path( $route) ;
    }

    foreach ($pages as $page) {
        $result['title'] = $page->post_title;
        $result['slug'] = $page->post_name;
        $result['content'] = apply_filters( 'the_content' , $page->post_content );
        $result['image'] = wp_get_attachment_url( get_post_thumbnail_id($page->ID) );
        $results[] = $result;
    }

    return $results;

  }


}

new Boundless;

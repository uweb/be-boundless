<?php

// Custom post type "Map Points"
//    - Contains title, text and editable map with search functionality to find points of interest
//    - Registers a JSON API to gather the necessary Map Point attributes
//    - Registers a custom meta box that uses map-editor.js, which is dependent on Backbone and Google Maps

class Post_Type_Map_Points
{

  // Version number
  const VERSION = 0.1;

  // Set the constants for the post type labels and meta box title
  const POST_TYPE  = 'points';
  const POST_TYPE_NAME   = 'Map Point';
  const POST_TYPE_PLURAL = 'Map Points';
  const META_BOX_TITLE  = 'Location';

  // Register the post type, enqueue the map editor javascript and add the JSON controller
  function __construct()
  {
    add_action( 'init', array( $this, 'register_post_type' ) );
    add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_map_editor_js' ) );
    add_action( 'save_post', array( $this, 'save') );

    add_filter( 'json_api_controllers',  array( $this, 'add_map_point_controller' ) );
    add_filter( 'json_api_map_point_controller_path',  array( $this, 'set_map_point_controller_path' ) );
  }

   // Register the custom post type with support for only a few attributes
  function register_post_type()
  {

    $labels = array(
      'name'          =>  self::POST_TYPE_PLURAL,
      'singular_name' =>  self::POST_TYPE_NAME,
      'add_new_item'  =>  'Add New '. self::POST_TYPE_NAME
    );

    register_post_type( self::POST_TYPE,
      array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'has_archive' => false,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'register_meta_box_cb' => array( $this, 'add_meta_box' ),
        'supports' => array( 'title', 'thumbnail', 'excerpt', 'revisions' ),
      )
    );

  }

  // Add the metabox that holds the map editor
  function add_meta_box()
  {
     add_meta_box(self::POST_TYPE, self::META_BOX_TITLE, array( $this, 'meta_box_html'), self::POST_TYPE );
  }

  // The HTML for the map editor.
  // The hidden latitude and longitude input fields are set by the map editor javascript
  function meta_box_html( $post )
  {

    $latitude    = get_post_meta( $post->ID , '_latitude', true );
    $longitude = get_post_meta( $post->ID , '_longitude', true );

    wp_nonce_field( self::POST_TYPE . '_meta_box', self::POST_TYPE . '_meta_box_nonce' );
    ?>
    <div id="map-editor-view">
      <label class="screen-reader-text" for="map-search">Search for a location</label>
      <input id="map-search" type="search" placeholder="Search for a location" style="width:50%; padding:10px; margin: 10px;"></input>
      <div id="map-editor" style="height:500px; margin-top:10px;"></div>

      <input type="hidden" id="latitude" name="latitude" value="<?php echo $latitude ?>"></input>
      <input type="hidden" id="longitude" name="longitude" value="<?php echo $longitude ?>"></input>
    </div>
    <?php
  }


  // Save the post after verification and authentication
  function save( $post_id ) {

    if ( !wp_verify_nonce( $_POST[ self::POST_TYPE . '_meta_box_nonce'], self::POST_TYPE . '_meta_box') ) {
        return $post_id;
    }

    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
        return $post_id;

    if ( self::POST_TYPE == $_POST['post_type'] ) {
        if ( !current_user_can( 'edit_page', $post_id ) )
            return $post_id;

    } else {
            if ( !current_user_can( 'edit_post', $post_id ) )
                return $post_id;
    }

    if ( isset( $_POST['latitude'] ) )
        update_post_meta( $post_id, '_latitude', $_POST['latitude'] );

    if ( isset( $_POST['longitude'] ) )
        update_post_meta( $post_id, '_longitude', $_POST['longitude'] );

  }


  // Add the map editor javascript along with dependent javascript libraries Backbone and Google Maps
  function enqueue_map_editor_js()
  {
    if ( get_post_type() === self::POST_TYPE )
    {
    wp_register_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?libraries=places', array('backbone') , self::VERSION );
    wp_register_script( 'map-editor', get_template_directory_uri() . '/js/admin/map-editor.js', array('backbone', 'google-maps') , self::VERSION );
    wp_enqueue_script( 'map-editor' );
    }
  }

  // Add the Map Point controller to the JSON API
  function add_map_point_controller( $controllers )
  {
    $controllers[] = 'map_point';
    return $controllers;
  }

  // Add the controller path for the Map Point controller to the JSON API
  function set_map_point_controller_path()
  {
    return get_template_directory() . "/controllers/class.map-point-json-controller.php";
  }

}


new Post_Type_Map_Points;
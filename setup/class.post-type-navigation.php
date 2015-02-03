<?php
// Custom post type Navigation for the Boundless front page
// - Allowed to be ordered
// - Hooks into other Backbone router

class Navigation
{

   // Set the constants for the post type labels
  const POST_TYPE  = 'navigation';
  const POST_TYPE_NAME   = 'Navigation';
  const POST_TYPE_PLURAL = 'Navigation';
  // const META_BOX_TITLE  = 'Location';


  function  __construct()
  {
    add_action( 'init', array( $this, 'register_post_type' ) );
    // add_action( 'save_post', array( $this, 'save') );
  }

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
        // 'register_meta_box_cb' => array( $this, 'add_meta_box' ),
        'supports' => array( 'title', 'thumbnail', 'excerpt', 'page-attributes', 'revisions' ),
      )
    );

  }

  public function get_navigation()
  {
    $navigations = get_posts( "numberposts=-1&post_type=" . self::POST_TYPE );
    foreach ($navigations as $nav)
    {

      $url = wp_get_attachment_image_src( get_post_thumbnail_id( $nav->ID ), 'original' );

      echo "<li style=\"background-image: url({$url[0]})\" class=\"\">
                  <span>
                    <h3><a href=\"#\">{$nav->post_title}</a></h3>
                    <p>{$nav->post_excerpt}</p>
                  </span>";
    }

  }

}

new Navigation;

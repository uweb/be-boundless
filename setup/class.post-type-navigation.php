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
  const META_BOX_TITLE  = 'Navigation Details';


  function  __construct()
  {
    add_action( 'init', array( $this, 'register_post_type' ) );
    add_action( 'save_post', array( $this, 'save') );
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
        'register_meta_box_cb' => array( $this, 'add_meta_box' ),
        'supports' => array( 'title', 'thumbnail', 'excerpt', 'page-attributes', 'revisions' ),
      )
    );
  }

  // Add the metabox that holds the map editor
  function add_meta_box()
  {
     add_meta_box(self::POST_TYPE, self::META_BOX_TITLE, array( $this, 'meta_box_html' ), self::POST_TYPE );
  }

  // The HTML for the map editor.
  // The hidden latitude and longitude input fields are set by the map editor javascript
  function meta_box_html( $post )
  {

    $type  = get_post_meta( $post->ID , '_type', true );
    $route = get_post_meta( $post->ID , '_route', true );

    wp_nonce_field( self::POST_TYPE . '_meta_box', self::POST_TYPE . '_meta_box_nonce' );
    ?>
    <div id="map-editor-view">
    <p>
      <label  for="type">This navigation will display as a </label>
      <select name="type" >
        <option value="gallery" <?php selected( $type, 'gallery' ) ?> >Gallery</option>
        <option value="map"  <?php selected( $type, 'map' ) ?>>Map</option>
        <option value="video"  <?php selected( $type, 'video' ) ?>>Video</option>
      </select>
      </p>

      <p>
        <label  for="route">When clicked this navigation goes to </label>
        <input type="text" id="route" name="route" value="<?php echo $route ?>"></input>
      </p>

    </div>
    <?php
  }

  function save( $post_id )
  {

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

    if ( isset( $_POST['type'] ) )
        update_post_meta( $post_id, '_type', $_POST['type'] );

    if ( isset( $_POST['route'] ) )
        update_post_meta( $post_id, '_route', $_POST['route'] );
  }

  public function get_navigation()
  {
    $navigations = get_posts( "numberposts=-1&post_type=" . self::POST_TYPE );
    foreach ($navigations as $nav)
    {
      $type = get_post_meta( $nav->ID, '_type', true ) ;
      $route = get_post_meta( $nav->ID, '_route', true ) ;

      $url = wp_get_attachment_image_src( get_post_thumbnail_id( $nav->ID ), 'original' );

      echo "<li data-route=\"$route\" class=\"tile-$type\">
                  <div style=\"background-image: url({$url[0]})\"></div>
                  <span>
                    <h3><a title=\"{$nav->post_title}\" href=\"$route\">{$nav->post_title}</a></h3>
                    <p>{$nav->post_excerpt}</p>
                  </span>";
    }

  }

}

new Navigation;

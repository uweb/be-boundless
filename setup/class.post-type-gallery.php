<?php
// Custom post type "Gallery"
//    - Create a gallery with the build in WordPress Media Library and display it.
//    - Creates a JSON feed of the images to be used by Backbone

class Post_Type_Gallery
{
  // Version number
  const VERSION = 0.1;

  // Set the constants for the post type labels and meta box title
  const POST_TYPE  = 'gallery';
  const POST_TYPE_NAME   = 'Gallery';
  const POST_TYPE_PLURAL = 'Galleries';
  const META_BOX_TITLE  = 'Gallery';

  // Register the post type
  function __construct()
  {
    add_action( 'init', array( $this, 'register_post_type' ) );
    add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_gallery_editor_js' ) );
    add_action( 'save_post', array( $this, 'save') );

    add_filter( 'json_api_controllers',  array( $this, 'add_gallery_controller' ) );
    add_filter( 'json_api_gallery_controller_path',  array( $this, 'set_gallery_controller_path' ) );
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
        'supports' => array( 'title', 'revisions' ),
      )
    );

  }

  // Add the metabox that holds the gallery editor
  function add_meta_box()
  {
     add_meta_box(self::POST_TYPE, self::META_BOX_TITLE, array( $this, 'meta_box_html'), self::POST_TYPE );
  }

  // The HTML for the gallery editor
  function meta_box_html( $post )
  {
    $gallery = get_post_meta( $post->ID , '_gallery', true );
    wp_nonce_field( self::POST_TYPE . '_meta_box', self::POST_TYPE . '_meta_box_nonce' );

    ?>

<style>
  .preview-gallery ul {
    width:100%;
  }
  .preview-gallery li {
    overflow:hidden;
    display: inline;
    margin: 10px;
    background-color:  white;
  }
</style>

      <div id="gallery-editor">

          <a href="#" class="button add-gallery">
            <span class="wp-media-buttons-icon"></span> Add/Edit Gallery
          </a>

          <input id="gallery-input" type="hidden" name="gallery" value="<?php echo esc_attr( $gallery ) ?>" />

          <div class="preview-gallery">

             <?php // initial load ?>
              <ul id="grid">
            <?php foreach( explode( ',', $gallery) as $id  ) :
                      $image_src = wp_get_attachment_image_src( $id, array( 300, 3000) );
                      $url = $image_src[0];
                      $width = $image_src[1];
                      $height = $image_src[2];
                      ?>

                  <li><img src="<?php echo $url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" />

            <?php endforeach; ?>

              </ul>

          </div>


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

    if ( isset( $_POST['gallery'] ) )
        update_post_meta( $post_id, '_gallery', $_POST['gallery'] );

  }


  // Add the gallery editor javascript along with dependent javascript libraries Backbone
  function enqueue_gallery_editor_js()
  {
    if ( get_post_type() === self::POST_TYPE )
    {
      wp_register_script( 'masonry', get_stylesheet_directory_uri() . '/js/libraries/imagesloaded.js', array('backbone' ) , self::VERSION );
      wp_register_script( 'imagesloaded', get_stylesheet_directory_uri() . '/js/libraries/masonry.pkgd.js', array('backbone' ) , self::VERSION );
      wp_register_script( 'gallery-editor', get_stylesheet_directory_uri() . '/js/admin/gallery-editor.js', array('backbone', 'imagesloaded', 'masonry' ) , self::VERSION );
      wp_enqueue_script( 'gallery-editor' );
      wp_enqueue_media();
    }
  }


  // Add the Gallery controller to the JSON API
  function add_gallery_controller( $controllers )
  {
    $controllers[] = 'gallery';
    return $controllers;
  }

  // Add the controller path for the Gallery controller to the JSON API
  function set_gallery_controller_path()
  {
    return get_stylesheet_directory() . "/controllers/class.gallery-json-controller.php";
  }

}


new Post_Type_Gallery;

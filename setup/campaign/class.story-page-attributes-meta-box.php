<?php

class Story_Page_Attributes_Meta_Box {

  const ID = 'pageparentdiv';
  const TITLE = 'Page Attributes';
  const POSTTYPE = 'stories';
  const POSITION = 'side';
  const PRIORITY = 'core';

  function __construct()
  {
    add_action( 'add_meta_boxes', array( $this, 'replace_meta_box' ) );
    add_action( 'save_post', array( $this, 'save_postdata' ) );

  }

  function replace_meta_box()
  {
      remove_meta_box( 'pageparentdiv', 'stories', 'side');
      add_meta_box( 'uwpageparentdiv', 'Page Attributes', array( $this, 'page_attributes_meta_box' ), 'stories', 'side', 'core' );
  }


  function page_attributes_meta_box( $post )
  {

    $post_type_object = get_post_type_object( $post->post_type );

    $exclude = get_post_meta($post->ID, "exclude", true);
    wp_nonce_field( 'exclude_nonce' , 'exclude_name' );
    ?>

    <p><strong><?php _e('Order') ?></strong></p>

    <p><label class="screen-reader-text" for="menu_order"><?php _e('Order') ?></label><input name="menu_order" type="text" size="4" id="menu_order" value="<?php echo esc_attr($post->menu_order) ?>" /></p>

    <p><strong><?php _e('Options') ?></strong></p>

    <label class="screen-reader-text" for="exclude"><?php _e('Exclude from slider') ?></label>

    <p><input type="checkbox" id="exclude_id" name="excludecheck" value="on" <?php if( !empty($exclude) ) { ?>checked="checked"<?php } ?> /><?php _e('Exclude from slider') ?></p>

    <?php
  }

  function save_postdata( $post_ID = 0 ){
    $post_ID = (int) $post_ID;
    $post_type = get_post_type( $post_ID );
    $post_status = get_post_status( $post_ID );
    if (!isset($post_type) || 'stories' != $post_type ) {
        return $post_ID;
    }

    if ( isset( $_POST['exclude_name'] ) ) { 
      if ( ! empty( $_POST ) && check_admin_referer( 'exclude_nonce', 'exclude_name') ) { //limit to only pages
        if ($post_type) {
          if(isset($_POST["excludecheck"])) {
            update_post_meta($post_ID, "exclude", $_POST["excludecheck"]);
          } else {
            update_post_meta($post_ID, "exclude", null); 
          }
        }
      }
    }

   return $post_ID;
  }

}

new Story_Page_Attributes_Meta_Box;

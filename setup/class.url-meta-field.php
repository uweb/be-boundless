<?php

class URL_Meta_Field {

  function __construct() {
    add_action('admin_init', array($this, 'setup_meta'));
    add_action('save_post', array($this, 'save_meta'));
  }

  function setup_meta(){
    add_meta_box('source_url', 'Link to external story', array($this, 'source_url_meta_box'), 'post', 'normal', 'high');
  }

  function source_url_meta_box($post) {
    $source_url = get_post_meta($post->ID, 'source_url', true);
    ?>
    <p>Leave this field empty if you want people to see the story here.</p>
    <p><input type='text' name='source_url'<?php if (!empty($source_url)){ ?> value='<?php echo $source_url ?>'<?php } ?>>
    <?php
  }

  function save_meta($post_id){
    $post = get_post($post_id);
    if ($post->post_type == 'post' && isset( $_POST['source_url'] ) ){
      $source_url = $_POST['source_url'];
      update_post_meta($post_id, 'source_url', $source_url);
    }
  }
}

new URL_Meta_field;

<?php

class Boundless_Video_Post extends Boundless_Custom_Post {

  function __construct($args){
    parent::__construct($args);
    add_filter( 'json_api_controllers',  array( $this, 'add_boundless_video_controller' ) );
    add_filter( 'json_api_boundless_video_controller_path',  array( $this, 'set_boundless_video_controller_path' ) );
  }

  function setup_meta(){
    add_meta_box('youtube', 'ID of YouTube Video', array($this, 'youtube_meta_box'), $this->name, 'normal', 'high');
  }

  function youtube_meta_box($post){
    $youtube_id = get_post_meta($post->ID, 'youtube', true);
    ?>
    <p><input type='text' name='youtube'<?php if (!empty($youtube_id)){ ?> value='<?php echo $youtube_id ?>'<?php } ?>>
    <?php
    if (!empty($youtube_id)){
      ?>
      <p>Preview:</p>
      <iframe id='youtube_preview' width="100%" height="auto"
      src="https://www.youtube.com/embed/<?php echo $youtube_id ?>">
      </iframe>
      <script type='text/javascript'>
        var preview = jQuery('iframe#youtube_preview');
        preview.height(preview.width() * (9 / 16) + 22);
      </script>
      <?php
    }
  }

  function save_meta($post_id){
    $post = get_post($post_id);
    if ($post->post_type == $this->name){
      $youtube = $_POST['youtube'];
      update_post_meta($post_id, 'youtube', $youtube);
    }
  }
  
  function add_boundless_video_controller( $controllers )
  {
    $controllers[] = 'boundless_video';
    return $controllers;
  }

  function set_boundless_video_controller_path()
  {
    return get_stylesheet_directory() . "/controllers/class.boundless-video-json-controller.php";
  }
}

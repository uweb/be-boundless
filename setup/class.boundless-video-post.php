<?php

class Boundless_Video_Post extends Boundless_Custom_Post {

  function setup_meta(){
    add_meta_box('youtube', 'ID of YouTube Video', array($this, 'youtube_meta_box'), $this->name, 'normal', 'high');
  }

  function youtube_meta_box($post){
    $youtube_id = get_post_meta($post->ID, 'youtube', true);
    ?>
    <p><input type='text' name='youtube'<?php if (!empty($youtube_id)){ ?> value='<?= $youtube_id ?>'<?php } ?>>
    <?php
    if (!empty($youtube_id)){
      ?>
      <p>Preview:</p>
      <iframe id='youtube_preview' width="100%" height="auto"
      src="http://www.youtube.com/embed/<?= $youtube_id ?>">
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
}

<?php

add_action( 'add_meta_boxes_page', 'cv2_add_meta_boxes_page' );

function cv2_add_meta_boxes_page() {
    global $post;
    if ( 'templates/template-full-width.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
        add_meta_box( 'video', 'Video Background (optional)', 'cv2_video_meta_box_callback', 'page', 'side', 'default' );
    }
}

function cv2_video_meta_box_callback() {
    wp_register_script( 'meta-box-video_js', get_stylesheet_directory_uri() . '/setup/campaign/js/meta-box-video.js', false, '1.0.0' );
    wp_enqueue_script( 'meta-box-video_js' );

    global $post;

    // Get WordPress' media upload URL
    $upload_link = esc_url( get_upload_iframe_src( 'image', $post->ID ) );

    // See if there's a media id already saved as post meta
    $video_id = get_post_meta( $post->ID, 'video-id', true );

    // Get the image src
    $video_src = wp_get_attachment_url( $video_id );

    // For convenience, see if the array is valid
    // $video_img = is_array( $video_src );
    // print_r($video_src)
    ?>

    <!-- Your image container, which can be manipulated with js -->
    <div class="video-container">
        <?php if ( $video_src ) : ?>
            <video src="<?php echo $video_src ?>" alt="" style="max-width:100%;" />
        <?php endif; ?>
    </div>

    <!-- Your add & remove image links -->
    <p class="hide-if-no-js">
        <a class="upload-video <?php if ( $video_src  ) { echo 'hidden'; } ?>" 
           href="<?php echo $upload_link ?>">
            <?php _e('Set video') ?>
        </a>
        <a class="delete-video <?php if ( ! $video_src  ) { echo 'hidden'; } ?>" 
          href="#">
            <?php _e('Remove video') ?>
        </a>
    </p>

    <!-- A hidden input to set and post the chosen image id -->
    <input class="video-id" name="video-id" type="hidden" value="<?php echo esc_attr( $video_id ); ?>" /> <?php
}

add_action('save_post', 'cv2_save_meta_box_page_details');
function cv2_save_meta_box_page_details() {
  global $post;
  if (get_post_type($post) == 'page') {
    update_post_meta($post->ID, 'video-id', $_POST['video-id']);
  }
}


?>
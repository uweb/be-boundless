<?php 

if ( ! post_type_exists( 'excerpt' ) ):

    add_action('init', 'excerpt_post_type');

    function excerpt_post_type() {
        $labels = array(
            'name' => 'Excerpts',
            'singular_name' => 'Excerpt',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Excerpt',
            'edit_item' => 'Edit Excerpt',
            'new_item' => 'New Excerpt',
            'all_items' => 'All Excerpts',
            'view_item' => 'View Excerpt',
            'search_item' => 'Search Excerpts',
            'not_found' => 'No excerpts found',
            'not_found_in_trash' => 'No excerpts found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Excerpts'
        );

        $args = array(
            'labels' => $labels,
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => array( 'title' , 'editor' , 'thumbnail', 'custom-fields' )
        );

        register_post_type('excerpt', $args);

    }

    add_action('admin_init', 'excerpt_admin_init');

    function excerpt_admin_init(){
        add_meta_box( 'button', 'Button', 'campaign_button_callback', 'excerpt', 'side', 'default' );

        add_meta_box( 'video', 'Video (optional)', 'campaign_youtube_callback', 'excerpt', 'side', 'default' );
        
        add_action('save_post', 'save_video_details');

        add_filter( 'manage_excerpt_posts_columns', 'add_excerpt_shortcode_column' );
        add_action( 'manage_posts_custom_column' , 'add_excerpt_shortcode_column_content', 10, 2 );

        //add_shortcode( 'excerpt', 'excerpt_shortcode' );
     
    }

    function campaign_button_callback() {
        global $post;
        $custom = get_post_custom($post->ID);
        $buttonLink = $custom['buttonLink'][0];
        $buttonText = $custom['buttonText'][0];
        ?><label for="buttonText"><?php _e('Button Text') ?></label><p><input name="buttonText" value="<?php echo $buttonText ?>" /></p>
        <label for="buttonLink"><?php _e('Button Link') ?></label><p><input name="buttonLink" value="<?php echo $buttonLink ?>" /></p><?php
    }

    function campaign_youtube_callback() {
        global $post;
        $custom = get_post_custom($post->ID);
        $youtube = $custom['youtube'][0];
        ?><label for="youtube"><?php _e('Video Url') ?></label><p><input name="youtube" value="<?php echo $youtube ?>" /></p><?php
    }

    function campaign_video_callback() {
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
                <?php _e('Set video image') ?>
            </a>
            <a class="delete-video <?php if ( ! $video_src  ) { echo 'hidden'; } ?>" 
              href="#">
                <?php _e('Remove video') ?>
            </a>
        </p>

        <!-- A hidden input to set and post the chosen image id -->
        <input class="video-id" name="video-id" type="hidden" value="<?php echo esc_attr( $video_id ); ?>" /> <?php
    }

    function save_video_details() {
        global $post;
        if (get_post_type($post) == 'excerpt') {
            update_post_meta($post->ID, 'buttonText', $_POST['buttonText']);
            update_post_meta($post->ID, 'buttonLink', $_POST['buttonLink']);
            update_post_meta($post->ID, 'youtube', $_POST['youtube']);
            //update_post_meta($post->ID, 'video-id', $_POST['video-id']);
        }
    }

    function add_excerpt_shortcode_column( $columns )
  {
    return array_merge( array_slice( $columns, 0, 2 ), array('excerptShortcode'=>'Shortcode'), array_slice( $columns, 2, null ));
  }

  function add_excerpt_shortcode_column_content( $column, $post_id )
  {
    if ( $column == 'excerptShortcode' ) echo '[excerpt id='. $post_id .']';
  }

  // [excerpt id=null align="right" color="purple" video="true" text="light" dub=false]
  function excerpt_shortcode( $atts )
  {

    $atts = shortcode_atts( array(
      'id' => null,
      'align' => 'right', //or left
      'color' => 'purple', //or white
      'video' => false, //or true
      'text'  => 'light', //or dark
      'dub'   => false
    ), $atts);

    if ( ! $atts['id'] ) return;

    $post_id = $atts['id'];
    $post_content = get_post($post_id);
    $title = $post_content->post_title;
    $content = $post_content->post_content;
    $image = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
    // $video_id = get_post_meta( $post->ID, 'video-id', true );
    // $video = $video_id ? wp_get_attachment_url( $video_id ) : '';
    $video = get_post_meta( $post_id, 'youtube', true );
    $buttonLink = get_post_meta( $post_id, 'buttonLink', true );
    $buttonText = get_post_meta( $post_id, 'buttonText', true );
    //echo do_shortcode( $content );//executing shortcodes
    $bgClass = 'bg-' . $atts['color'];
    $dubsClass = ($atts['dub'] ? 'add-dubs' : '');
    $videoClass = ($atts['video'] ? 'video' : 'no-video');
    $videoHtml = '' .
        '<div class="play-button" >' .
              '<a data-lity class="vid" href="' . $video . '">' .
              '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="137.909px" height="137.131px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131" xml:space="preserve">' . 
              '<ellipse fill="rgba(255,255,255,0)" stroke="#FFFFFF" stroke-width="7.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>' .
              '<polygon fill="#FFFFFF" points="48.611,37.617 103.268,68.345 48.611,99.072 "/>' . 
              '</svg>' .
              '<p></p>' .
              '</a>' ;
    $videoHtmlClose = '</div>';
    $button = '<div class="button-container ' . $videoClass . '">' . $videoHtml . '<div class="campaign-button ' . $videoClass .'"><div>';
    $button .= $buttonLink ? ('<a href="' . $buttonLink . '">' . $buttonText . '</a>') : '<a class="' . $videoClass . '" disabled>' . $buttonText . '</a>';
    $button .= '</div></div>' . $videoHtmlClose . '</div>';
    
    $return =   '<section class="campaign-excerpt ' . $bgClass . '">' . 
                '  <div class="container ';
    $return .= ($atts['align'] === 'right') ? ('' .
                'container-left container-text ' . $bgClass . ' ' . $dubsClass . '"> ' .    
                '    <div class="row"><div>' .
                '      <h2>' . $title . '</h2>' .
                '      <hr>' .
                '      <p>' . $content . '</p>' .
                '    </div></div>' .
                '  </div>' .
                '  <div class="container container-right container-image '. $bgClass .'">' .
                '    <div class="row" style="background-image:url(' . $image . ')">' . $button ) : ('' . //this is the switch
                'container-right container-text ' . $bgClass . ' ' . $dubsClass . '"> ' .    
                '    <div class="row"><div>' .
                '      <h2>' . $title . '</h2>' .
                '      <hr>' .
                '      <p>' . $content . '</p>' .
                '    </div></div>' .
                '  </div>' .
                '  <div class="container container-left container-image '. $bgClass .'">' .
                '    <div class="row" style="background-image:url(' . $image . ')">' . $button );
                // 'container-leftcontainer-image"> ' .    
                // '    <div class="row" style="background-image:url(' . $image . ')">' . //add button link here
                //         $button .
                // '    </div>' .
                // '  </div>' .
                // '  <div class="container container-right container-text ' . $bgClass . ' ' . $dubsClass . '">' .
                // '    <div class="row">' .
                // '      <h2>' . $title . '</h2>' .
                // '      <hr>' .
                // '      <p>' . $content . '</p>' ) ;
    $return .=  '    </div>' .
                '  </div>' .
                '</section>'; 

    return $return;

    


  }
  add_shortcode( 'excerpt', 'excerpt_shortcode' );

    
endif;

?>

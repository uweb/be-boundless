<?php 

if ( ! post_type_exists( 'stories' ) ):

    add_action('init', 'story_post_type');

    function story_post_type() {
        $labels = array(
            'name' => 'Stories',
            'singular_name' => 'Story',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Story',
            'edit_item' => 'Edit Story',
            'new_item' => 'New Story',
            'all_items' => 'All Stories',
            'view_item' => 'View Story',
            'search_item' => 'Search Stories',
            'not_found' => 'No stories found',
            'not_found_in_trash' => 'No stories found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Stories'
        );

        $args = array(
            'labels' => $labels,
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => array( 'title' , 'editor' , 'thumbnail', 'page-attributes' )
        );

        register_post_type('stories', $args);

    }

    add_action('admin_init', 'stories_admin_init');

    function stories_admin_init(){
        // Edit page attributes meta box
        // add exclude checkbox
        // add order input

        //add_action('save_post', 'save_story_details');
    }

    function save_story_details() {
        global $post;
        if (get_post_type($post) == 'excerpt') {
            update_post_meta($post->ID, 'buttonText', $_POST['buttonText']);
        }
    }

  function stories_shortcode( $atts )
  {

    $atts = shortcode_atts( array(
      'id' => null,
      'align' => 'right', //or left
      'color' => 'purple', //or white
      'video' => false, //or true
      'text'  => 'light' //or dark
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
    
    $return =   '<section class="campaign-excerpt">' . 
                '  <div class="container container-left ';
    $return .= ($atts['align'] === 'right') ? ('' .
                'container-text ' . $bgClass . '"> ' .    
                '    <div class="row">' .
                '      <h2>' . $title . '</h2>' .
                '      <hr>' .
                '      <p>' . $content . '</p>' .
                '    </div>' .
                '  </div>' .
                '  <div class="container container-right container-image">' .
                '    <div class="row" style="background-image:url(' . $image . ')">' ) : ('' . //this is the switch
                'container-image"> ' .    
                '    <div class="row" style="background-image:url(' . $image . ')">' . //add button link here
                '    </div>' .
                '  </div>' .
                '  <div class="container container-right container-text ' . $bgClass . '">' .
                '    <div class="row">' .
                '      <h2>' . $title . '</h2>' .
                '      <hr>' .
                '      <p>' . $content . '</p>' ) ;
    $return .=  '    </div>' .
                '  </div>' .
                '</section>'; 

    return $return;

    


  }
  add_shortcode( 'stories', 'stories_shortcode' );

    
endif;

?>

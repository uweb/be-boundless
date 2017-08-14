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
      'default' => null
    ), $atts);

    $return = '<section id="impact-stories">' .
                '<h2>Stories of impact</h2>' .
                '<hr>' .
                '<div class="container">';

    //get all stories post type
    //filter out those with exclude checkmark
    //sort by order
    $args = array(
        'post_type' => 'stories',
        'nopaging'  => true,
        'meta_key'  => 'exclude',              //check exclude checkbox
        'meta_value' => !'on',                //test = not on
        'order'     => 'ASC',
        'orderby'   => 'menu_order',
    );              
    $the_query = new WP_Query( $args );
    $count = 0;
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
                $return .= '<div class="story">' . 
                                '<h3>' . get_the_title() . '</h3>' .
                                '<div class="image-equalizer" style="background-image: ' . wp_get_attachment_image_src( get_post_thumbnail_id() , array(300,200))[0] . ';"></div>' .
                                '<hr>' .
                                '<p class="subheader">' . get_the_content() . '</p>' .
                            '</div>';
        endwhile;
    endif;
    // Reset Post Data
    wp_reset_postdata();
    

    //print in sections of 3 ie class= section1/2/3/4...
    //put section current in middle, current-1 in left outside page, current+1 outside on right, all else hidden
    $return .= '</div>' .
                '<a class="left stories-control" href="" data-slide="prev">' .
                    '<span></span>' .
                '</a>' .
                '<a class="right stories-control" href="" data-slide="next">' .
                    '<span></span>' .
                '</a>' .
              '</section>';

    return $return;

    


  }
  add_shortcode( 'stories', 'stories_shortcode' );

    
endif;

?>

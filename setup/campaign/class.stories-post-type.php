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
        add_meta_box( 'url', 'Url', 'story_url_callback', 'stories', 'side', 'default' );

        add_action('save_post', 'save_story_details');
    }

    function story_url_callback() {
        global $post;
        $custom = get_post_custom($post->ID);
        $url = $custom['url'][0];
        ?><p><input name="url" style="width:100%;" value="<?php echo $url ?>" /></p>
        <?php
    }

    function save_story_details() {
        global $post;
        if (get_post_type($post) == 'stories') {
            update_post_meta($post->ID, 'url', $_POST['url']);
        }
    }

  function campaign_stories_shortcode( $atts )
  {

    $atts = shortcode_atts( array(
      'default' => null
    ), $atts);

    $return = '<section id="impact-stories">' .
                '<div class="content">' . 
                    '<h2>Stories of impact</h2>' .
                    '<hr class="no-margin">' .
                '</div>' .
                '<div class="container"><div class="story-container"><div id="story-slider">';

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
                $return .= '<div class="story"><a class="story-link" href="' . get_post_meta( get_the_ID(), 'url', true ) . '">' . 
                                '<h3>' . get_the_title() . '</h3>' .
                                '<div class="image-equalizer" style="background-image: url(' . wp_get_attachment_image_src( get_post_thumbnail_id() , array(300,200))[0] . ');"></div>' .
                                '<hr>' .
                                '<p class="subheader">' . get_the_content() . '</p>' .
                            '</a></div>';
        endwhile;
    endif;
    // Reset Post Data
    wp_reset_postdata();
    

    //print in sections of 3 ie class= section1/2/3/4...
    //put section current in middle, current-1 in left outside page, current+1 outside on right, all else hidden
    $return .= '</div></div>' .
                '<button class="left stories-control prevSlide">' .
                    '<span>' .
                        '<svg aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612px" height="792px" viewBox="0 0 612 792" enable-background="new 0 0 46.25 101.1" xml:space="preserve" id="arrow1" transform="scale(5)">' .
                            '<path fill-rule="evenodd" clip-rule="evenodd" fill="#4B2E83" d="M286.246,360.073c0.591-0.632,1.233-1.36,1.918-2.046 c14.945-14.954,29.963-29.837,44.775-44.92c2.466-2.511,3.853-1.065,4.906,0.663c1.032,1.694,5.375,2.399,1.713,5.967 c-12.398,12.082-24.47,24.498-36.849,36.601c-2.804,2.741-2.906,4.401-0.043,7.189c12.118,11.805,23.883,23.973,36.056,35.717 c4.803,4.635-0.516,5.568-2.147,8.044c-2.629,3.985-3.7,0.151-4.901-1.039c-14.379-14.242-28.67-28.572-42.966-42.897 C287.803,362.444,286.464,361.839,286.246,360.073z"/>' .
                        '</svg>' . 
                    '</span>' .
                '</button>' .
                '<button class="right stories-control nextSlide">' .
                    '<span>' .
                        '<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46.25px" height="101.1px" viewBox="0 0 612 792" enable-background="new 0 0 46.25 101.1" xml:space="preserve" id="arrow2" transform="scale(5)">' . 
                            '<path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" fill="#4B2E83" d="M341,360.739c-0.591,0.632-1.233,1.36-1.918,2.046   c-14.945,14.954-29.963,29.837-44.775,44.92c-2.466,2.511-3.853,1.065-4.906-0.663c-1.032-1.694-5.375-2.399-1.713-5.967   c12.398-12.082,24.47-24.498,36.849-36.601c2.804-2.741,2.906-4.401,0.043-7.189c-12.118-11.805-23.883-23.973-36.056-35.717   c-4.803-4.635,0.516-5.568,2.148-8.044c2.629-3.985,3.7-0.151,4.901,1.039c14.379,14.242,28.67,28.572,42.966,42.897   C339.443,358.368,340.782,358.974,341,360.739z"/>' .
                        '</svg>' . 
                    '</span>' .
                '</button>' .
              '</div></section>';

    return $return;

    


  }
  add_shortcode( 'stories', 'campaign_stories_shortcode' );

    
endif;

?>

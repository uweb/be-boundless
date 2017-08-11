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

    //get all stories post type
    //filter out those with exclude checkmark
    //sort by order
    //print in sections of 3 ie class= section1/2/3/4...
    //put section current in middle, current-1 in left outside page, current+1 outside on right, all else hidden
    
    $return = '';

    return $return;

    


  }
  add_shortcode( 'stories', 'stories_shortcode' );

    
endif;

?>

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
            'supports' => array( 'title' , 'editor' , 'thumbnail', 'custom-fields', 'page-attributes' )
        );

        register_post_type('excerpts', $args);

    }

    add_action('admin_init', 'excerpt_admin_init');

    function excerpt_admin_init(){
        // add_meta_box( 'url', 'Vimeo ID Code', 'url_callback', 'videos', 'side', 'default' );
        // add_meta_box( 'date', 'Year Created', 'date_callback', 'videos', 'side', 'default' );
        // add_meta_box( 'client', 'Client', 'client_callback', 'videos', 'side', 'default' );
        // add_meta_box( 'order', 'Order', 'order_callback', 'videos', 'side', 'default' );

        // remove_meta_box( 'categorydiv', 'videos', 'side' );
        // add_meta_box( 'categorydiv', 'Category', 'post_categories_meta_box', 'videos', 'normal', 'low', array( 'taxonomy' => 'category' ) );
        
        // add_action('save_post', 'save_video_details');
    }

    function url_callback() {
        global $post;
        $custom = get_post_custom($post->ID);
        $url = $custom['url'][0];
        ?><input name="url" value="<?php echo $url ?>" /><?php
    }

    function date_callback() {
        global $post;
        $custom = get_post_custom($post->ID);
        $date = $custom['date'][0];
        ?><input name="date" value="<?php echo $date ?>" /><?php
    }

    function client_callback() {
        global $post;
        $custom = get_post_custom($post->ID);
        $client = $custom['client'][0];
        ?><input name="client" value="<?php echo $client ?>" /><?php
    }

    function order_callback() {
        global $post;
        $custom = get_post_custom($post->ID);
        $order = $custom['order'][0];
        ?><input name="order" value="<?php echo $order ?>" /> </br>
        <small>Order starts at 1, emtpy values result in page not showing. Ties are sorted by date. For those you want unordered at the bottom, just set order to 100.</small> <?php
    }

    function save_video_details() {
        global $post;
        if (get_post_type($post) == 'videos') {
            update_post_meta($post->ID, 'url', $_POST['url']);
            update_post_meta($post->ID, 'date', $_POST['date']);
            update_post_meta($post->ID, 'client', $_POST['client']);
            update_post_meta($post->ID, 'order', $_POST['order']);
        }
    }

    
endif;

?>

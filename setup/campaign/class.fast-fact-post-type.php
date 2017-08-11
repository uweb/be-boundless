<?php 

if ( ! post_type_exists( 'facts' ) ):

    add_action('init', 'facts_post_type');

    function facts_post_type() {
        $labels = array(
            'name' => 'Fast Facts',
            'singular_name' => 'Fast Fact',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Fast Fact',
            'edit_item' => 'Edit Fast Fact',
            'new_item' => 'New Fast Fact',
            'all_items' => 'All Fast Facts',
            'view_item' => 'View Fast Fact',
            'search_item' => 'Search Fast Facts',
            'not_found' => 'No fast facts found',
            'not_found_in_trash' => 'No fast facts found in trash',
            'parent_item_colon' => '',
            'menu_name' => 'Fast Facts'
        );

        $args = array(
            'labels' => $labels,
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => array( 'title' , 'editor' , 'thumbnail' ) //do i need editor for alt tags or accessibility? 
        );

        register_post_type('facts', $args);

    }

    add_action('admin_init', 'facts_admin_init');

    function facts_admin_init(){ 
        add_filter( 'manage_facts_posts_columns', 'add_facts_id_column' );
        add_action( 'manage_posts_custom_column' , 'add_facts_id_column_content', 10, 2 );    
    }


    function add_facts_id_column( $columns )
  {
    return array_merge( array_slice( $columns, 0, 2 ), array('factsId'=>'ID'), array_slice( $columns, 2, null ));
  }

  function add_facts_id_column_content( $column, $post_id )
  {
    if ( $column == 'factsId' ) echo '' . $post_id;
  }

  function facts_shortcode( $atts )
  {

    $atts = shortcode_atts( array(
      'id' => '',
    ), $atts);

    if ( ! $atts['id'] ) return;

    $no_whitespaces = preg_replace( '/\s*,\s*/', ',', filter_var( $atts['id'], FILTER_SANITIZE_STRING ) ); 
    $id_array = explode( ',', $no_whitespaces );
    $return =   '<section class="campaign-facts">' . 
                    '<div class="facts-container">';
    
    foreach ( $id_array as $k => $v ) {
        $post_content = get_post($v);
        //$title = $post_content->post_title;
        $alt = $post_content->post_content;
        $image = wp_get_attachment_url( get_post_thumbnail_id($v) );
        $return .=      '<div class="facts-image col-md-' . (12/count($id_array)) . '">' .  
                            '<img alt="' . $alt . '" src="' . $image . '">' .     
                        '</div>';

    } 
                                            
    $return .=      '</div>' .
                '</section>'; 

    return $return;
  }
  add_shortcode( 'facts', 'facts_shortcode' );

    
endif;

?>

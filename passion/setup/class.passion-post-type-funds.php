<?php 

if ( ! post_type_exists( 'funds' ) ):

	add_action('init', 'fund_post_type');

	function fund_post_type() {
		$labels = array(
			'name' => 'Funds',
			'singular_name' => 'Fund',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Fund',
			'edit_item' => 'Edit Fund',
			'new_item' => 'New Fund',
			'all_items' => 'All Funds',
			'view_item' => 'View Fund',
			'search_item' => 'Search Funds',
			'not_found' => 'No funds found',
			'not_found_in_trash' => 'No funds found in trash',
			'parent_item_colon' => '',
			'menu_name' => 'Funds'
		);

		$args = array(
			'labels' => $labels,
			'public' => false,
			'publicly_queryable' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'rewrite' => array('slug' => 'funds', 'with_front' => false),
			'supports' => array( 'title' , 'editor' , 'thumbnail' )
		);

		register_post_type('funds', $args);
	}

	add_action('admin_init', 'fund_admin_init');

	function fund_admin_init(){
		add_meta_box( 'short', 'Fund short name', 'short_callback', 'funds', 'side', 'low' );
		add_meta_box( 'code', 'Allocation code', 'code_callback', 'funds', 'side', 'low' );
		
		add_meta_box( 'desc', 'Short description', 'desc_callback', 'funds', 'normal', 'low' );

		add_meta_box( 'unit', 'Associated Unit', 'unit_callback', 'funds', 'normal', 'low' );

		remove_meta_box( 'causesdiv', 'funds', 'side' );
		remove_meta_box( 'prioritiesdiv', 'funds', 'side' );
		add_meta_box( 'causesdiv', 'Causes', 'post_categories_meta_box', 'funds', 'normal', 'low', array( 'taxonomy' => 'causes' ) );
		add_meta_box( 'prioritiesdiv', 'Funding Priorities', 'post_categories_meta_box', 'funds', 'normal', 'low', array( 'taxonomy' => 'priorities' ) );
	}

	function short_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$short = $custom['short'][0];
		?><input name="short" value="<?php echo $short ?>" /><?php
	}

	function code_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$code = $custom['code'][0];
		?><input name="code" value="<?php echo $code ?>" /><?php
	}

	function desc_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$desc = $custom['desc'][0];
		?><textarea name="desc" rows="4" cols="100"><?php echo $desc; ?></textarea><?php
	}

	function unit_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$selectUnit = $custom['unit'][0];
		$args = array('post_type' => 'units', 'fields' => 'ids');
		$units = get_posts($args);
		echo '<select name="unit" id="unit">';
		echo '<option value="">--Unit--</option>';
		foreach ($units as $unit => $ID) {
			$title = get_the_title($ID);
			$slug = str_replace(" ","-",strtolower($title));
			$selected = ($selectUnit == $slug) ? "selected='selected'" : "";
			
			echo "<option value=" . $slug . " " . $selected . ">" . $title . "</option>";
		}
		echo '</select>';
	}

	add_action('save_post', 'save_fund_details');

	function save_fund_details() {
		global $post;
		if (get_post_type($post) == 'funds') {
			update_post_meta($post->ID, 'short', $_POST['short']);
			update_post_meta($post->ID, 'code', $_POST['code']);
			update_post_meta($post->ID, 'desc', $_POST['desc']);
			update_post_meta($post->ID, 'unit', $_POST['unit']);
		}
	}

	
endif;

?>

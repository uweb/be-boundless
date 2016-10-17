<?php

if ( ! post_type_exists( 'units' ) ):

	add_action('init', 'unit_post_type');

	function unit_post_type() {
		$labels = array(
			'name' => 'Units',
			'singular_name' => 'Unit',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Unit',
			'edit_item' => 'Edit Unit',
			'new_item' => 'New Unit',
			'all_items' => 'All Units',
			'view_item' => 'View Unit',
			'search_item' => 'Search Units',
			'not_found' => 'No units found',
			'not_found_in_trash' => 'No units found in trash',
			'parent_item_colon' => '',
			'menu_name' => 'Units'
		);

		$args = array(
			'labels' => $labels,
			'public' => false,
			'publicly_queryable' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'rewrite' => array('slug' => 'units', 'with_front' => false),
			'supports' => array( 'title' , 'editor' , 'thumbnail' )
		);

		register_post_type('units', $args);
	}

	add_action('admin_init', 'unit_admin_init');

	function unit_admin_init(){
		add_meta_box( 'giveButton', 'Give button', 'giveButton_callback', 'units', 'side', 'low' );
		add_meta_box( 'contact', 'Contact name', 'contact_callback', 'units', 'side', 'low' );
		add_meta_box( 'email', 'Contact email', 'email_callback', 'units', 'side', 'low' );
		add_meta_box( 'url', 'Url for campaign site', 'url_callback', 'units', 'side', 'low' );
		add_meta_box( 'volunteer', 'Url for volunteer page', 'volunteer_callback', 'units', 'side', 'low' );
		add_meta_box( 'leadership', 'Url for leadership page', 'leadership_callback', 'units', 'side', 'low' );
		
		add_meta_box( 'secondary', 'Right-side content', 'secondary_callback', 'units', 'normal', 'low' );
		//add_meta_box( 'funds', 'Featured funds <small>(by allocation code)</small>', 'funds_callback', 'units', 'normal', 'low' );
	}

	function giveButton_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$giveButton = $custom['giveButton'][0];
		$customGive = $custom['customGive'][0];
		?><input type="checkbox" name="giveButton" value="off" <?php if( !empty($giveButton) ) { ?>checked="checked"<?php } ?> /><?php _e('Disable give button'); ?>
		  <br><br><label>Custom give code:</label><input name="customGive" value="<?php echo $customGive ?>" /><?php
	}

	function contact_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$contact = $custom['contact'][0];
		?><input name="contact" value="<?php echo $contact ?>" /><?php
	}

	function email_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$email = $custom['email'][0];
		?><input name="email" value="<?php echo $email ?>" /><?php
	}

	function url_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$url = $custom['url'][0];
		?><input name="url" value="<?php echo $url ?>" /><?php
	}

	function volunteer_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$volunteer = $custom['volunteer'][0];
		?><input name="volunteer" value="<?php echo $volunteer ?>" /><?php
	}

	function leadership_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$leadership = $custom['leadership'][0];
		?><input name="leadership" value="<?php echo $leadership ?>" /><?php
	}

	function secondary_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$content = $custom['secondary-wysiwyg'][0];
		$settings = array( 'media_buttons' => true );
		wp_editor( $content, 'secondary-wysiwyg', $settings );
	}

	function funds_callback() {
		global $post;
		$custom = get_post_custom($post->ID);
		$funds1 = $custom['funds1'][0];
		$funds2 = $custom['funds2'][0];
		$funds3 = $custom['funds3'][0];
		$funds4 = $custom['funds4'][0];
		$funds5 = $custom['funds5'][0];
		$funds6 = $custom['funds6'][0];
		?>	1: <input name="funds1" value="<?php echo $funds1 ?>" />
			2: <input name="funds2" value="<?php echo $funds2 ?>" />
			3: <input name="funds3" value="<?php echo $funds3 ?>" />
			4: <input name="funds4" value="<?php echo $funds4 ?>" />
			5: <input name="funds5" value="<?php echo $funds5 ?>" />
			6: <input name="funds6" value="<?php echo $funds6 ?>" />
		<?php
	}

	add_action('save_post', 'save_unit_details');

	function save_unit_details() {
		global $post;
		if (get_post_type($post) == 'units') {
			update_post_meta($post->ID, 'giveButton', $_POST['giveButton']);
			update_post_meta($post->ID, 'customGive', $_POST['customGive']);
			update_post_meta($post->ID, 'contact', $_POST['contact']);
			update_post_meta($post->ID, 'email', $_POST['email']);

			$url = ( (strpos( $_POST['url'] , 'http' ) === false) && !empty($_POST['url']) ) ? "http://" . $_POST['url'] : $_POST['url'];
			$volunteer = ( (strpos( $_POST['volunteer'] , 'http' ) === false) && !empty($_POST['volunteer']) ) ? "http://" . $_POST['volunteer'] : $_POST['volunteer'];
			$leadership = ( (strpos( $_POST['leadership'] , 'http' ) === false) && !empty($_POST['leadership']) ) ? "http://" . $_POST['leadership'] : $_POST['leadership'];
			update_post_meta($post->ID, 'url', $url);
			update_post_meta($post->ID, 'volunteer', $volunteer);
			update_post_meta($post->ID, 'leadership', $leadership);
			
			update_post_meta($post->ID, 'funds1', $_POST['funds1']);
			update_post_meta($post->ID, 'funds2', $_POST['funds2']);
			update_post_meta($post->ID, 'funds3', $_POST['funds3']);
			update_post_meta($post->ID, 'funds4', $_POST['funds4']);
			update_post_meta($post->ID, 'funds5', $_POST['funds5']);
			update_post_meta($post->ID, 'funds6', $_POST['funds6']);
			update_post_meta($post->ID, 'secondary-wysiwyg', $_POST['secondary-wysiwyg']);
			update_post_meta($post->ID, 'author', $_POST['author']);
		}
	}

endif;

?>
<?php

if (!taxonomy_exists('causes')):

	add_action('init', 'causes_taxonomy');
	add_action( 'causes_add_form_fields', 'causes_taxonomy_custom_fields', 10, 2);  
	add_action( 'causes_edit_form_fields', 'causes_taxonomy_custom_fields', 10, 2);  
	add_action( 'edited_causes', 'save_causes_taxonomy_custom_fields', 10, 2 );  
	add_action( 'create_causes', 'save_causes_taxonomy_custom_fields', 10, 2 );

	function causes_taxonomy() {
		register_taxonomy('causes', 'funds', array(
			'labels' => array(
				'name' => 'Causes',
				'singular_name' => 'cause',
				'all_items' => 'All causes',
				'edit_item' => 'Edit cause',
				'view_item' => 'View cause',
				'add_new_item' => 'Add new cause',
				'new_item_name' => 'New cause name',
				'search_items' => 'Search causes',
				'popular_items' => 'Popular causes',
				'parent_item' => 'Parent cause',
				'add_or_remove_items' => 'Add or remove causes',
				'choose_from_most_used' => 'Choose from the most used causes',
				'not_found' => 'No causes found.'
			),
			'hierarchical'  => true,
			'show_tagcloud' => false,
			//'show_ui'	  	=> false
		));
		register_taxonomy_for_object_type('causes', 'funds');
	}

	
	// A callback function to add a custom field to our "presenters" taxonomy  
	function causes_taxonomy_custom_fields($tag) {  
	   // Check for existing taxonomy meta for the term you're editing  
	    $t_id = $tag->term_id; // Get the ID of the term you're editing  
	    $term_meta = get_option( "taxonomy_term_$t_id" ); // Do the check  
	?>  
	  
	<tr class="form-field">  
	    <th scope="row" valign="top">  
	        <label for="cause_id"><?php _e('Shortened name'); ?></label>  
	    </th>  
	    <td>  
	        <input type="text" name="term_meta[cause_id]" id="term_meta[cause_id]" size="25" style="width:60%;" value="<?php echo $term_meta['cause_id'] ? $term_meta['cause_id'] : ''; ?>"><br />  
	        <span class="description"><?php _e('This name will be what displays in the tag cloud of the funds.'); ?></span></br></br>  
	    </td>  
	</tr>  
	  
	<?php  
	}
		
		
	// A callback function to save our extra taxonomy field(s)  
	function save_causes_taxonomy_custom_fields( $term_id ) {  
	    if ( isset( $_POST['term_meta'] ) ) {  
	        $t_id = $term_id;  
	        $term_meta = get_option( "taxonomy_term_$t_id" );  
	        $cat_keys = array_keys( $_POST['term_meta'] );  
	            foreach ( $cat_keys as $key ){  
	            if ( isset( $_POST['term_meta'][$key] ) ){  
	                $term_meta[$key] = $_POST['term_meta'][$key];  
	            }  
	        }  
	        //save the option array  
	        update_option( "taxonomy_term_$t_id", $term_meta );  
	    }  
	}

		
endif;

?>
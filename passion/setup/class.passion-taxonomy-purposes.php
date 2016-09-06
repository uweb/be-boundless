<?php

if (!taxonomy_exists('purposes')):

	add_action('init', 'purposes_taxonomy');
	add_action( 'purposes_add_form_fields', 'purposes_taxonomy_custom_fields', 10, 2);  
	add_action( 'purposes_edit_form_fields', 'purposes_taxonomy_custom_fields', 10, 2);  
	add_action( 'edited_purposes', 'save_purposes_taxonomy_custom_fields', 10, 2 );  
	add_action( 'create_purposes', 'save_purposes_taxonomy_custom_fields', 10, 2 );

	function purposes_taxonomy() {
		register_taxonomy('purposes', 'funds', array(
			'labels' => array(
				'name' => 'UW priorities',
				'singular_name' => 'priority',
				'all_items' => 'All priorities',
				'edit_item' => 'Edit priority',
				'view_item' => 'View priority',
				'add_new_item' => 'Add new priority',
				'new_item_name' => 'New priority name',
				'search_items' => 'Search priorities',
				'popular_items' => 'Popular priorities',
				'parent_item' => 'Parent priority',
				'add_or_remove_items' => 'Add or remove priorities',
				'choose_from_most_used' => 'Choose from the most used priorities',
				'not_found' => 'No priorities found.'
			),
			'hierarchical' => true,
			'show_tagcloud' => false
		));
		register_taxonomy_for_object_type('purposes', 'funds');
	}


	// A callback function to add a custom field to our "presenters" taxonomy  
	function purposes_taxonomy_custom_fields($tag) {  
	   // Check for existing taxonomy meta for the term you're editing  
	    $t_id = $tag->term_id; // Get the ID of the term you're editing  
	    $term_meta = get_option( "taxonomy_term_$t_id" ); // Do the check  
	?>  
	  
	<tr class="form-field">  
	    <th scope="row" valign="top">  
	        <label for="purpose_id"><?php _e('Shortened name'); ?></label>  
	    </th>  
	    <td>  
	        <input type="text" name="term_meta[purpose_id]" id="term_meta[purpose_id]" size="25" style="width:60%;" value="<?php echo $term_meta['purpose_id'] ? $term_meta['purpose_id'] : ''; ?>"><br />  
	        <span class="description"><?php _e('This name will be what displays in the tag cloud of the funds.'); ?></span></br></br>  
	    </td>  
	</tr>  
	  
	<?php  
	}
		
		
	// A callback function to save our extra taxonomy field(s)  
	function save_purposes_taxonomy_custom_fields( $term_id ) {  
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
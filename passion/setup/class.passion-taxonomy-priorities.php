<?php

if (!taxonomy_exists('priorities')):

	add_action('init', 'priorities_taxonomy');
	add_action( 'priorities_add_form_fields', 'priorities_taxonomy_custom_fields', 10, 2);  
	add_action( 'priorities_edit_form_fields', 'priorities_taxonomy_custom_fields', 10, 2);  
	add_action( 'edited_priorities', 'save_priorities_taxonomy_custom_fields', 10, 2 );  
	add_action( 'create_priorities', 'save_priorities_taxonomy_custom_fields', 10, 2 );

	function priorities_taxonomy() {
		register_taxonomy('priorities', 'funds', array(
			'labels' => array(
				'name' => 'UW pillars',
				'singular_name' => 'UW pillar',
				'all_items' => 'All pillars',
				'edit_item' => 'Edit pillar',
				'view_item' => 'View pillar',
				'add_new_item' => 'Add new pillar',
				'new_item_name' => 'New pillar name',
				'search_items' => 'Search pillars',
				'popular_items' => 'Popular pillars',
				'parent_item' => 'Parent pillar',
				'add_or_remove_items' => 'Add or remove pillars',
				'choose_from_most_used' => 'Choose from the most used pillars',
				'not_found' => 'No pillars found.'
			),
			'hierarchical' => true,
			'show_tagcloud' => false
		));
		register_taxonomy_for_object_type('priorities', 'funds');
	}


	// A callback function to add a custom field to our "presenters" taxonomy  
	function priorities_taxonomy_custom_fields($tag) {  
	   // Check for existing taxonomy meta for the term you're editing  
	    $t_id = $tag->term_id; // Get the ID of the term you're editing  
	    $term_meta = get_option( "taxonomy_term_$t_id" ); // Do the check  
	?>  
	  
	<tr class="form-field">  
	    <th scope="row" valign="top">  
	        <label for="priority_id"><?php _e('Shortened name'); ?></label>  
	    </th>  
	    <td>  
	        <input type="text" name="term_meta[priority_id]" id="term_meta[priority_id]" size="25" style="width:60%;" value="<?php echo $term_meta['priority_id'] ? $term_meta['priority_id'] : ''; ?>"><br />  
	        <span class="description"><?php _e('This name will be what displays in the tag cloud of the funds.'); ?></span></br></br>  
	    </td>  
	</tr>  
	  
	<?php  
	}
		
		
	// A callback function to save our extra taxonomy field(s)  
	function save_priorities_taxonomy_custom_fields( $term_id ) {  
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
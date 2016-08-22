<?php

if (!taxonomy_exists('priorities')):

	add_action('init', 'priorities_taxonomy');

	function priorities_taxonomy() {
		register_taxonomy('priorities', 'funds', array(
			'labels' => array(
				'name' => 'Priorities',
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
			'hierarchical' => true
		));
		register_taxonomy_for_object_type('priorities', 'funds');
	}

endif;

?>
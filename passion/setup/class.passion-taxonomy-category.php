<?php

if (!taxonomy_exists('categories')):

	add_action('init', 'category_taxonomy');

	function category_taxonomy() {
		register_taxonomy('categories', 'funds', array(
			'labels' => array(
				'name' => 'Categories',
				'singular_name' => 'category',
				'all_items' => 'All categories',
				'edit_item' => 'Edit category',
				'view_item' => 'View category',
				'add_new_item' => 'Add new category',
				'new_item_name' => 'New category name',
				'search_items' => 'Search categories',
				'popular_items' => 'Popular categories',
				'parent_item' => 'Parent category',
				'add_or_remove_items' => 'Add or remove categories',
				'choose_from_most_used' => 'Choose from the most used categories',
				'not_found' => 'No categories found.'
			),
			'hierarchical'  => true,
			//'show_ui'	  	=> false
		));
		register_taxonomy_for_object_type('categories', 'funds');
	}

		
endif;

?>
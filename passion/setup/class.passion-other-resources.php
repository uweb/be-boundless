<?php

add_action('init', 'load_other_resources');

function load_other_resources() {
	wp_enqueue_script('jquery');
	wp_register_script('tiles-js', get_stylesheet_directory_uri() . '/passion/js/tiles.js');
	wp_enqueue_script('tiles-js');
	wp_register_style('tiles-style', get_stylesheet_directory_uri() . '/passion/css/tiles.css');
	wp_enqueue_style('tiles-style');
}

?>
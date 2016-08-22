<?php

$videoPost = new Boundless_Video_Post(
    array(
        'name' => 'boundless_video',

        'args' => array (
            'public' => false,
            'publicly_queryable' => false,
            'show_ui' => true, 
            'show_in_menu' => true, 
            'query_var' => false,
            'capability_type' => 'post',
            'has_archive' => false, 
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail')
        ),

        'post_label' => "Video Slide"
    )
);

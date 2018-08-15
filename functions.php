<?php

require( 'setup/class.boundless.php' );
//require( 'setup/class.post-type-map-points.php' );
//require( 'setup/class.post-type-gallery.php' );
//require( 'setup/class.post-type-navigation.php' );
require 'setup/class.boundless-custom-post.php';
require 'setup/class.boundless-page-attributes-meta-box.php';
require 'setup/class.boundless-custom-meta.php';
//require 'setup/class.boundless-video-post.php';
require 'setup/class.url-meta-field.php';
//require 'setup/custom-post-types.php';

// require( 'passion/functions.php' );

require 'setup/class.campaign-functions.php';


function twitter_card($photo, $title, $descrpition) {

	$meta = array();
	if ($title) {
		$meta['og:title'] = '<meta property="og:title" content="' . $title . '"/>';
		$meta['og:description'] = '<meta property="og:description" content="' . $descrpition . '"/>';
		$meta['description'] = '<meta name="description" content="' . $descrpition . '"/>';
		$meta['og:image'] = '<meta property="og:image" content="' . $photo . '"/>';
	}

	return $meta;
}

// takes an array of meta tags and post information and replaces any instances
// of the default meta tags created by the twitter card function with the custom
// meta tags specified by the user in custom fields
//
// this function overrides the default twitter og meta tags
function custom_meta($meta, $post) {

	if (isset($post->title_meta)) {
		$meta['og:title'] = '<meta property="og:title" content="' . $post->title_meta . '"/>';
	}

	if (isset($post->description_meta)) {
		$meta['og:description'] = '<meta property="og:description" content="' . $post->description_meta . '"/>';
		$meta['description'] = '<meta name="description" content="' . $post->description_meta . '"/>';
	}

	if (isset($post->image_meta)) {
		$meta['og:image'] = '<meta property="og:image" content="' . $post->image_meta . '"/>';
	}

	return $meta;
}

add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page( 'research-korean-dramas' ) || is_page('research-korean-dramas-kr') || is_page('puerto-rico-solar') || is_page('puerto-rico-solar-es') ) {
        $classes[] = 'animsition';
    }
    return $classes;
}



?>

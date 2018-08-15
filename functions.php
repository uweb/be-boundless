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
		$meta['og:title'] = $title;
		$meta['og:description'] = $descrpition;
		$meta['og:image'] = $photo;
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

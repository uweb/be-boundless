<?php

require( 'setup/class.boundless.php' );
//require( 'setup/class.post-type-map-points.php' );
//require( 'setup/class.post-type-gallery.php' );
//require( 'setup/class.post-type-navigation.php' );
require 'setup/class.boundless-custom-post.php';
require 'setup/class.boundless-page-attributes-meta-box.php';
//require 'setup/class.boundless-video-post.php';
require 'setup/class.url-meta-field.php';
//require 'setup/custom-post-types.php';

// require( 'passion/functions.php' );

require 'setup/class.campaign-functions.php';


function twitter_card($photo, $title, $descrpition) {
	// $meta = '';
	// if ($title) {
	// 	$meta .= '<meta property="og:title" content="' . $title . '"/>' . PHP_EOL . "\t\t";
	// 	$meta .= '<meta property="og:description" content="' . $descrpition . '"/>' . PHP_EOL . "\t\t";
	// 	$meta .= '<meta property="og:image" content="' . $photo . '"/>' . PHP_EOL;
	// }

	$meta = array();
	if ($title) {
		$meta['og:title'] = '<meta property="og:title" content="' . $title . '"/>';
		$meta['og:description'] = '<meta property="og:description" content="' . $descrpition . '"/>';
		$meta['og:image'] = '<meta property="og:image" content="' . $photo . '"/>';
	}

	return $meta;
}

// requires that custom meta fields must be named meta_ + property
// example: if you want a meta tag with the property set to 'og:title' the custom
// 					field should be named 'meta_og:title' and the value should be the content
//					you want to show in the meta tag
// this function overrides the default twitter og meta tags
function custom_meta($meta) {
	//$meta = '';
	$custom_fields = get_post_custom();

	foreach($custom_fields as $key => $value) {
		$keyinfo = explode('_', $key);
		if ($keyinfo[0] == 'meta') {
			$meta[$keyinfo[1]] = '<meta property="'.$keyinfo[1].'" content="'.implode(",", $value).'">';
			//$meta .= '<meta property="'.$keyinfo[1].'" content="'.implode(",", $value).'">';
		}
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

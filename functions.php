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
	$meta = '';
	if ($title) { 
		$meta .= '<meta property="og:title" content="' . $title . '"/>' . PHP_EOL . "\t\t";
		$meta .= '<meta property="og:description" content="' . $descrpition . '"/>' . PHP_EOL . "\t\t";
		$meta .= '<meta property="og:image" content="' . $photo . '"/>' . PHP_EOL;
	}

	return $meta;
}

?>
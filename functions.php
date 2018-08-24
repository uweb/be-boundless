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

function custom_meta($post, $meta) {
	$output = '';

	$title = (isset($post->title_meta) && $post->title_meta != '') ? $post->title_meta : $meta['og:title'];

	$description = (isset($post->description_meta) && $post->description_meta != '') ? $post->description_meta : $meta['og:description'];

	$image = (isset($post->image_meta) && $post->image_meta != '') ? $post->image_meta : $meta['og:image'];

	$output .= (isset($post->tag_meta) && $post->tag_meta != '') ? '<meta name="keywords" content="' . $post->tag_meta . '" />' . PHP_EOL : '';

	$output .= (isset($post->twitter_site_meta) && $post->twitter_site_meta != '') ? '<meta name="twitter:site" content="' . $post->twitter_site_meta . '" />' . PHP_EOL : '';

	$output .= (isset($post->twitter_creator_meta) && $post->twitter_creator_meta != '') ? '<meta name="twitter:creator" content="' . $post->twitter_creator_meta . '" />' . PHP_EOL : '';

	$output .= '<meta name="description" content="' . $description . '"/>' . PHP_EOL . '<meta property="og:title" content="' . $title . '"/>' . PHP_EOL . '<meta property="og:description" content="' . $description . '"/>' . PHP_EOL . '<meta property="og:image" content="' . $image . '"/>' . PHP_EOL;

	$output .= (isset($post->img_alt_meta) && $post->img_alt_meta != '') ? '<meta property="og:image:alt" content="' . $post->img_alt_meta . '"/>' . PHP_EOL : '';

	$output .= (isset($post->type_meta) && $post->type_meta != '') ? '<meta property="og:type" content="' . $post->type_meta . '" />' . PHP_EOL : '';

	$output .= (isset($post->url_meta) && $post->url_meta != '') ? '<meta property="og:url" content="' . $post->url_meta . '" />' . PHP_EOL : '';

	$output .= (isset($post->site_name_meta) && $post->site_name_meta != '') ? '<meta property="og:site_name" content="' . $post->site_name_meta . '" />' . PHP_EOL : '';

	if(isset($post->type_meta) && $post->type_meta == 'article') {
		$output .= (isset($post->author_meta) && $post->author_meta != '') ? '<meta property="article:author" content="' . $post->author_meta . '" />' . PHP_EOL : '';
	}

	echo $output;

}

add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page( 'research-korean-dramas' ) || is_page('research-korean-dramas-kr') || is_page('puerto-rico-solar') || is_page('puerto-rico-solar-es') ) {
        $classes[] = 'animsition';
    }
    return $classes;
}



?>

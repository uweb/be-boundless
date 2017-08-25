<?php 

/*
 *  Boundless Image shortcode allows for styled image slide to be added to content
 *  r
 *  optional image url, assumes featured image by default 
 *  optional title, assumes page title by default (uses false to disable)
 *  optional array of classes to insert
 */

class Campaign_Intro
{

    function __construct()
    {
        remove_shortcode( 'full-page-intro' );
        add_shortcode('full-page-intro', array($this, 'intro_handler'));
    }

    function intro_handler($atts, $content)
    {
        global $post;

        $classes = array('campaign-intro');

        $attributes = (object) shortcode_atts( array(
            'image' => null, //wp_get_attachment_image_src( get_post_thumbnail_id() , 'full')[0],
            'branding' => true,
            'title' => get_the_title(), 
            'classes' => null,
            'video' => false
        ), $atts );

        if(empty($content)){
            echo 'No text in this slide';
            return;
        }

        $attributes->classes = (!$attributes->classes) ? array() : $attributes->classes;

        $attributes->image = (!$attributes->image) ? wp_get_attachment_image_src( get_post_thumbnail_id() , 'full') : $attributes->image;

        $attributes->image = is_array($attributes->image) ? $attributes->image[0] : $attributes->image;

        $attributes->title = $attributes->title ? '<h1>' . $attributes->title . '</h1>' : '';

        $video = '';

        if($attributes->video){
            // See if there's a media id already saved as post meta
            $video_id = get_post_meta( $post->ID, 'video-id', true );

            // Get the image src
            $video_src = wp_get_attachment_url( $video_id );

            $video = ''.
            '<button id="pause">Pause</button>' .
              '<video  autoplay loop muted playsinline class="media" data-object-fit poster="' . $attributes->image . '" class="fullscreen-bg__video">' . 
                  '<source src="' . $video_src . '" type="video/mp4">' . 
              '</video>';

            array_push($classes, 'cv2-home-slide-video');
        }
        
        if (!$attributes->branding){
            //set to featured image
            array_push($classes, 'hide-branding');
        }


        $class_string = implode($classes, ' ');

        return sprintf('<section id="campaign-intro" class="intro %s" style="background-image: url(%s)">%s<div class="main-content">%s<div class="container">%s</div></div><img id="boundless-logo" src="%s" alt="Be boundless"><section class="scrollit read-more"><p>Scroll Down</p><div class="mouse"><div class="scroll"></div></div></section><img id="block-w-logo" src="%s" alt=""></section>', $class_string, $attributes->image, $video, $attributes->title, $content, get_stylesheet_directory_uri() . '/campaign/img/be-boundless.png', get_stylesheet_directory_uri() . '/campaign/img/W-Logo_White.png');

    }
}
new Campaign_Intro();


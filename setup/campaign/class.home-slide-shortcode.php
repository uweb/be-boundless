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
            'classes' => null
        ), $atts );

        if(empty($content)){
            echo 'No text in this slide';
            return;
        }

        $attributes->classes = (!$attributes->classes) ? array() : $attributes->classes;

        $attributes->image = (!$attributes->image) ? wp_get_attachment_image_src( get_post_thumbnail_id() , 'full')[0] : $attributes->image;

        $attributes->title = $attributes->title ? '<h1>' . $attributes->title . '</h1>' : '';
        
        if (!$attributes->branding){
            //set to featured image
            array_push($attributes->classes, 'hide-branding');
        }


        $class_string = implode($classes, ' ');
        
        //return '';

    //     return sprintf('<section id="campaign-intro" class="intro %s" style="background-image: url(%s)">%s<div class="container">%s</div><img id="boundless-logo" src="%s" alt="Be boundless"><section class="scrollit read-more"><p>Scroll Down</p><div class="mouse"><div class="scroll"></div></div></section><img id="block-w-logo" src="%s" alt=""></section>', $class_string, $attributes->image, $attributes->title, $content, get_stylesheet_directory_uri() . '/campaign/img/be-boundless.png', get_stylesheet_directory_uri() . '/campaign/img/W-Logo_White.png');
    //     //return "tomato";
    }
}
new Campaign_Intro();


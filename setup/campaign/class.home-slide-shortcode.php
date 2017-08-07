<?php 

/*
 *  Boundless Image shortcode allows for styled image slide to be added to content
 *  [intro image='false' branding='true' title='false']Content Text[/intro]
 *  optional image url, assumes featured image by default 
 *  optional title, assumes page title by default (uses false to disable)
 *  optional array of classes to insert
 */

class Campaign_Intro
{

    function __construct()
    {
        add_shortcode('intro', array($this, 'intro_handler'));
    }

    function intro_handler($atts, $content)
    {
        $attributes = (object) $atts;

        $classes = array('campaign-intro');

        $attributes = shortcode_atts( array(
            'image' => get_the_post_thumbnail_url(),
            'branding' => true,
            'title' => get_the_title(), 
            'classes' => []
        ), $atts );


        if(empty($content)){
            echo 'No text in this slide';
            return;
        }

        $attributes->title = $attributes->title ? '<h1>' . $attributes->title . '</h1>' : '';
        
        if (!$attributes->branding){
            //set to featured image
            array_push($attributes->classes, 'hide-branding');
        }


        $class_string = implode($classes, ' ');

        return sprintf('<section id="intro" class="intro %s" style="background-image: %s"><div class="container">%s%s</div></section>', $attributes->classes, $attributes->image, $attributes->title, $content);
    }
}
new Campaign_Intro();

?>

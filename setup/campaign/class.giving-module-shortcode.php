<?php 

/*
 *  Boundless Image shortcode allows for styled image slide to be added to content
 *  [intro image='false' branding='true' title='false']Content Text[/intro]
 *  optional image url, assumes featured image by default 
 *  optional title, assumes page title by default (uses false to disable)
 *  optional array of classes to insert
 */

class Campaign_Giving
{

    function __construct()
    {
        add_shortcode('giving', array($this, 'giving_handler'));
    }

    function giving_handler($atts)
    {
        global $post;
        $attributes = (object) $atts;

        //$classes = array('campaign-intro');

        $attributes = shortcode_atts( array(
            'image' => wp_get_attachment_image_src( get_post_thumbnail_id() , 'full')[0], 
            'align' => 'left'
        ), $atts );

        $alignClass = 'align-' . $attributes['align'];

        return sprintf('<section id="giving" class="giving" style="background-image: url(%s)"><div class="container %s"></div></section>', $attributes['image'], $alignClass);
    }
}
new Campaign_Giving();

?>

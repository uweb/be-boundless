<?php

/*
 *
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
            'image' => null,
            'align' => 'left'
        ), $atts );

        $attributes['image'] = (!$attributes['image']) ? wp_get_attachment_image_src( get_post_thumbnail_id() , 'full') : $attributes['image'];

        $attributes['image'] = is_array($attributes['image']) ? $attributes['image'][0] : $attributes['image'];

        $alignClass = 'align-' . $attributes['align'];

        $givingWidget = '<div class="donate-widget">' .
                          '<form action="#" id="make-a-gift-widget">' .
                          '<input name="page" type="hidden" value="make" />' .
                          '<input id="recurring" name="RecurringGift" type="hidden" value="yes" />' .
                          '<input id="frequency" name="RecurringFrequency" type="hidden" value="monthly" />' .
                          '<input id="duration" name="RecurringDuration" type="hidden" value="0" />' .
                          '<input name="FastForward" type="hidden" value="yes" />' .
                          '<input name="appeal" type="hidden" value="17XEX" />' .
                          '<input name="code" type="hidden" value="IMPFND" />' .
                            '<h2>Make your gift today</h2>' .
                            '<div class="amount"><span>$</span><input type="text" name="amount" id="cv2-widget-give-amount" /></div>' .
                            '<button class="monthly" id="cv2-give-monthly" type="submit" class="" data-frequency="monthly" data-recurring="yes" data-duration="0">Monthly</button>' .
                           '<button class="now" id="cv2-give-now" type="submit" class="" data-frequency="one-time" data-recurring="no" data-duration="1">Give</button>' .
                           '<hr>' .
                          '</form>' .
                        '</div>';

        return sprintf('<section id="giving" class="giving" style="background-image: url(%s)"><div class="container %s">%s</div></section>', $attributes['image'], $alignClass, $givingWidget);
    }
}
new Campaign_Giving();

?>

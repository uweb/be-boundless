<?php

class UW_Boundless_Filters extends UW_Filters
{

  function excerpt_more_override($excerpt)
  {
    //global $post;
    //$cta_text = get_post_meta($post->id, 'cta_text', true);
    //$cta_url  = get_post_meta($post->id, 'cta_url', true);
    //if (!empty($cta_text) && !empty($cta_url)){
    //  return $excerpt . '<p class="boundless-button"><span><a href="' . $cta_url . '">' . $cta_text . '</a></span></p>';
    //}
    //else {
    //  return parent::excerpt_more_override($excerpt);
    //}
    return $excerpt;
  }

}

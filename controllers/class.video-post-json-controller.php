<?php
/*
  Controller name: Boundless Video Controller
  Controller description: JSON API for fetching the different slides
*/

class JSON_API_Boundless_Video_Controller
{

  public function get_videos()
  {
    global $json_api;

    $points = $json_api->introspector->get_posts( array(
      'post_type' => array( 'boundless_video' )
    ));

    foreach ( $videos as $video )
    {
      $result = new stdClass();
      $result->title = $point->title;
      $result->text = $point->excerpt;
      $result->image = wp_get_attachment_image_src( get_post_thumbnail_id( $point->ID), 'original' );
      $result->video = get_post_meta( $point->id, 'youtube_id', true ));

      $results[] = $result;
    }

    // TODO: This works best with Backbone but isn't the JSON API method
    wp_send_json( $results );

  }

}

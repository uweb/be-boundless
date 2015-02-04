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

    $videos = $json_api->introspector->get_posts( array(
      'post_type' => array( 'boundless_video' )
    ));

    foreach ( $videos as $video )
    {
      $result = new stdClass();
      $result->title = $video->title;
      $result->text = $video->excerpt;
      $result->image = wp_get_attachment_image_src( get_post_thumbnail_id( $video->ID), 'original' );
      $result->video = get_post_meta( $video->id, 'youtube_id', true ));

      $results[] = $result;
    }

    // TODO: This works best with Backbone but isn't the JSON API method
    wp_send_json( $results );

  }

  public function get_videos($args)
  {
    global $json_api;

    $videos = $json_api->introspector->get_posts( array(
      'post_type' => array( 'boundless_video' )
    ));

    $video = $videos[$args['videoNum']];
    $result = new stdClass();
    $result->title = $video->title;
    $result->text = $video->excerpt;
    $result->image = wp_get_attachment_image_src( get_post_thumbnail_id( $video->ID), 'original' );
    $result->video = get_post_meta( $video->id, 'youtube_id', true ));

    // TODO: This works best with Backbone but isn't the JSON API method
    wp_send_json( $result );

  }
}

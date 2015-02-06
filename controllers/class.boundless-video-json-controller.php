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
      $result->text = $video->content;
      $result->image = wp_get_attachment_url( get_post_thumbnail_id( $video->id));
      $result->video = get_post_meta( $video->id, 'youtube', true );

      $results[] = $result;
    }

    // TODO: This works best with Backbone but isn't the JSON API method
    wp_send_json( $results );

  }

  //public function get_video()
  //{
  //  global $json_api;
  //  $videoSlug = $json_api->query->videoSlug;
  //  
  //  $video = get_page_by_path($videoSlug, OBJECT, 'boundless_video' );
  //  
  //  $result = new stdClass();
  //  $result->title = $video->title;
  //  $result->text = $video->content;
  //  $result->image = wp_get_attachment_image_src( get_post_thumbnail_id( $video->ID), 'original' );
  //  $result->video = get_post_meta( $video->id, 'youtube', true );

  //  // TODO: This works best with Backbone but isn't the JSON API method
  //  wp_send_json( $result );

  //}
}

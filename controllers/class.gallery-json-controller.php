<?php
/*
  Controller name: Gallery Controller
  Controller description: JSON API for fetching the different slides
*/

class JSON_API_GAllery_Controller
{

  public function get_gallery()
  {
    global $json_api;

    $galleries = $json_api->introspector->get_posts( array(
      'post_type' => array( 'gallery' )
    ));


    foreach ( $galleries as $gallery )
    {
      $ids =  explode( ',' , get_post_meta( $gallery->id, '_gallery', true ) );

      $result = new stdClass();
      $result->title = $gallery->title;
      $result->text = $gallery->excerpt;

      foreach ( $ids as $id )
      {
        // $result->images[] = wp_get_attachment_image_src( $id, 'original' );
        $result->images[] = wp_get_attachment_metadata( $id );
      };

      $results[] = $result;
    }

    // TODO: This works best with Backbone but isn't the JSON API method
    wp_send_json( $results );

  }

}

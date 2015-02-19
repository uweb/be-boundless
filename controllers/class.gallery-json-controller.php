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
        $metadata =  wp_get_attachment_metadata( $id );
        $image_src = wp_get_attachment_image_src( $id, array( 300, 3000) );
        $metadata['src'] = array(
          'url' => $image_src[0],
          'width' => $image_src[1],
          'height' => $image_src[2]
          );
        // $baseurl = explode( '/', $metadata['file'] );
        // $metadata['baseurl'] = get_site_url() .  '/files/' .implode('/', array_slice( $baseurl, 0, 2 )) . '/';
        // $metadata['imageurl'] = get_site_url() .  '/files/' . wp_get_attachment_image_src( $id, array( 300, 0) );

        $result->images[] = $metadata;
        // $result->images[] =$

      };

      $results[] = $result;
    }

    // TODO: This works best with Backbone but isn't the JSON API method
    wp_send_json( $results );

  }

}

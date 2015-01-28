<?php
/*
  Controller name: Boundless Map Controller
  Controller description: JSON API for fetching the different slides
*/

class JSON_API_Map_Point_Controller
{

  public function get_map_points()
  {
    global $json_api;

    $points = $json_api->introspector->get_posts( array(
      'post_type' => array( 'points' )
    ));

    foreach ( $points as $point )
    {
      $result = new stdClass();
      $result->title = $point->post_title;
      $result->text = $point->excerpt;
      $result->coordinate = array( "latitude" => (double) get_post_meta( $point->id, '_latitude', true ), "longitude" => (double) get_post_meta( $point->id, "_longitude", true ) );

      $results[] = $result;
    }

    return $results;

  }

}

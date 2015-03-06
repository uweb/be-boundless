<?php

$UW->Scripts->SCRIPTS['homepage'] = array (
    'id'      => 'homepage',
    'url'     => get_bloginfo( 'stylesheet_directory' ) . '/js/homepage'. $UW->Scripts->dev_script() .'.js',
    'deps'    => array( 'backbone' ),
    'version' => '1.0',
    'admin'   => false,
  );
?>

<?php

$UW->Styles->STYLES['uw-style'] = array (
      'id'      => 'homepage',
      'url'     => get_stylesheet_directory_uri() . '/style' . $UW->Styles->dev_stylesheet() . '.css',
      'deps'    => array('uw-master'),
      'version' => '3.6',
      'child'   => true
  );
?>

<?php

class Homepage_Scripts extends UW_Scripts
{

  function __construct()
  {

        $this->SCRIPTS = array(

          'homepage' => array (
            'id'      => 'homepage',
            'url'     => get_bloginfo( 'stylesheet_directory' ) . '/js/homepage'. $this->dev_script() .'.js',
            'deps'    => array( 'backbone' ),
            'version' => '1.0',
            'admin'   => false,
          ),

      );

      parent::__construct();

  }

}

new Homepage_Scripts;
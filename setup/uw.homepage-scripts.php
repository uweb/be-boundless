<?php

//class Homepage_Scripts extends UW_Scripts
//{
//
//  function __construct()
//  {
//
//        $this->SCRIPTS = array(
//
//          'homepage' => array (
//            'id'      => 'homepage',
//            'url'     => get_bloginfo( 'stylesheet_directory' ) . '/js/homepage'. $this->dev_script() .'.js',
//            'deps'    => array( 'backbone' ),
//            'version' => '1.0',
//            'admin'   => false,
//          ),
//
//      );
//
//      parent::__construct();
//
//  }
//
//}
//
//$UW->Scripts = new Homepage_Scripts();

$UW->Scripts->SCRIPTS['homepage'] = array (
    'id'      => 'homepage',
    'url'     => get_bloginfo( 'stylesheet_directory' ) . '/js/homepage'. $UW->Scripts->dev_script() .'.js',
    'deps'    => array( 'backbone' ),
    'version' => '1.0',
    'admin'   => false,
  );

foreach ($UW->Scripts->SCRIPTS as $id => $script){
    $script['url'] = $UW->Homepage_Utilities->agnostify_url($script['url']);
    $UW->Scripts->SCRIPTS[$id] = $script;
}

?>

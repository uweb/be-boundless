<?php

class UW_Boundless_Scripts extends UW_Scripts
{
  function uw_enqueue_default_scripts()
  {
    if (!is_front_page()){
      foreach ( $this->SCRIPTS as $script )
      {
        $script = (object) $script;

        if ( ! $script->admin )
          wp_enqueue_script( $script->id );
      }
    }
  }
}

<?php

add_action( 'extend_uw_object', function($UW) {
  require( 'setup/uw.homepage-utilities.php' );
  require( 'setup/uw.homepage-scripts.php' );
  require( 'setup/uw.homepage-styles.php' );
  require( 'setup/uw.homepage-images.php' );
});

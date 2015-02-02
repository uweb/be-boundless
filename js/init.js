// List out the classes that each component searches for

// Initialize all components when the DOM is ready
BOUNDLESS.initialize = function( $ )
{
  // Initialize the router
  BOUNDLESS.router = new BOUNDLESS.Router()
  Backbone.history.start()
}

jQuery(document).ready( BOUNDLESS.initialize )


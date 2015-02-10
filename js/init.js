// List out the classes that each component searches for

// Initialize all components when the DOM is ready
BOUNDLESS.initialize = function( $ )
{

  BOUNDLESS.currentView = false

  // get and parse video data now, build view later
  BOUNDLESS.videos = new BOUNDLESS.Videos()
  // Initialize the router
  BOUNDLESS.router = new BOUNDLESS.Router()
  Backbone.history.start()
}

jQuery(document).ready( BOUNDLESS.initialize )


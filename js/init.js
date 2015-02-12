// List out the classes that each component searches for
BOUNDLESS.AnimationDuration = 1000

BOUNDLESS.begin = function() {

// Initialize all components when the DOM is ready
  // Initialize the router
  BOUNDLESS.router  = new BOUNDLESS.Router()

  BOUNDLESS.beginning = new BOUNDLESS.Beginning()
}

BOUNDLESS.initialize = function( $ )
{

  BOUNDLESS.currentView = false

  // get and parse video data now, build view later
  BOUNDLESS.videos = new BOUNDLESS.Videos()
  // Initialize the search
  BOUNDLESS.search = new BOUNDLESS.Search()


  // Initialize the Boundless navigation
  BOUNDLESS.navigation = new BOUNDLESS.Navigation()

  Backbone.history.start()
}

jQuery(document).ready( BOUNDLESS.begin )


// List out the classes that each component searches for
BOUNDLESS.AnimationDuration = 1000

// Initialize all components when the DOM is ready
BOUNDLESS.initialize = function( $ )
{

  BOUNDLESS.currentView = false

  // get and parse video data now, build view later
  BOUNDLESS.videos = new BOUNDLESS.Videos()
  // Initialize the router
  BOUNDLESS.router  = new BOUNDLESS.Router()
  // Initialize the search
  BOUNDLESS.search = new BOUNDLESS.Search()

// TODO: when do we load the map?
  BOUNDLESS.uwtiles = new BOUNDLESS.UWTiles()
  BOUNDLESS.map = new BOUNDLESS.Map()

  // Initialize the Boundless navigation
  BOUNDLESS.navigation = new BOUNDLESS.Navigation()

  Backbone.history.start()
}

jQuery(document).ready( BOUNDLESS.initialize )


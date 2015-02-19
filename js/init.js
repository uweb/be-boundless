BOUNDLESS.TransitionEvents = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd';
// List out the classes that each component searches for
BOUNDLESS.AnimationDuration = 1000

BOUNDLESS.begin = function() {

// Initialize all components when the DOM is ready

  // BOUNDLESS.beginning = new BOUNDLESS.Beginning()

BOUNDLESS.initialize()
}

BOUNDLESS.initialize = function( $ )
{

  // Initialize the router
  BOUNDLESS.router  = new BOUNDLESS.Router()

  // Initialize the Boundless navigation
  BOUNDLESS.navigation = new BOUNDLESS.Navigation()

  // get and parse video data now, build view later
  // BOUNDLESS.uwtiles = new BOUNDLESS.UWTiles()

  // get and parse video data now, build view later
  BOUNDLESS.videos = new BOUNDLESS.Videos()
  // Initialize the search
  BOUNDLESS.search = new BOUNDLESS.Search()


  Backbone.history.start()
}

jQuery(document).ready( BOUNDLESS.begin )


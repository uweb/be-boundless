BOUNDLESS.TransitionEvents = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd';
// List out the classes that each component searches for
BOUNDLESS.AnimationDuration = 1000

BOUNDLESS.App = Backbone.Model.extend({

  attributes : {
    'map' : false
  },

  initialize : function() {
    this.on('change:map', BOUNDLESS.initialize )
  }


})

BOUNDLESS.begin = function() {

  BOUNDLESS.app = new BOUNDLESS.App()
  BOUNDLESS.router  = new BOUNDLESS.Router()
  BOUNDLESS.map = new BOUNDLESS.Map()
  BOUNDLESS.gallery = new BOUNDLESS.Gallery()
  BOUNDLESS.navigation = new BOUNDLESS.Navigation()
  BOUNDLESS.page = []
  BOUNDLESS.pages = new BOUNDLESS.Pages( PAGES )
  BOUNDLESS.pages.each( function( page ) {
    BOUNDLESS.page[ page.get('slug') ] = new BOUNDLESS.Page({ el: '.page .' + page.get('slug') , model: page })
  })



// Initialize all components when the DOM is ready

  // BOUNDLESS.beginning = new BOUNDLESS.Beginning()

}

BOUNDLESS.initialize = function( $ )
{

  // Initialize mobile checks
  // BOUNDLESS.mobile = new BOUNDLESS.Mobile()

  // Initialize the router

  // Initialize the Boundless navigation

  // get and parse video data now, build view later
  // BOUNDLESS.uwtiles = new BOUNDLESS.UWTiles()

  // get and parse video data now, build view later
  // BOUNDLESS.videos = new BOUNDLESS.Videos()

  // BOUNDLESS.api = new BOUNDLESS.Video.API()
  // Initialize the search
  BOUNDLESS.search = new BOUNDLESS.Search()

  // analytics logic for boundless
  // BOUNDLESS.analytics = new BOUNDLESS.Analytics();


  Backbone.history.start()
}

jQuery(document).ready( BOUNDLESS.begin )


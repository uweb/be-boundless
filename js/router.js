BOUNDLESS.Router = Backbone.Router.extend({

    routes : {
      "!/map"         : "initializeMap",
      "!/video-:video" : "initializeVideo",
      "" : "animateInInteraction"
    },

  initialize : function(options) {
    _.bindAll( this, 'initializeMap' )
  },

  initializeVideo : function (video){
    BOUNDLESS.videoView = new BOUNDLESS.Video.View({videoNum:video});
  },

  // Animates the initial interaction when the homepage is loaded
  animateInInteraction : function()
  {
    console.log('Initial loading of the front page interaction animation')
    BOUNDLESS.interaction = new BOUNDLESS.Interactions()
  },

   execute: function(callback, args) {

    if ( BOUNDLESS.currentView )
    {
      console.log( 'Boundless transition hiding the current view and going back to homepage')
      BOUNDLESS.currentView.hide()
    }

    BOUNDLESS.currentView = false

    // This could be where we segue the navigation out
    if (callback) callback.apply(this, args);
  },

// If the router is map create a new map
  initializeMap : function ()
  {
    if ( ! BOUNDLESS.map )
    {
      console.log('Boundless map initial load')
      BOUNDLESS.uwtiles = new BOUNDLESS.UWTiles()
      BOUNDLESS.map = new BOUNDLESS.Map()
    } else {
      console.log('Boundless map already rendered and being routed to')
      BOUNDLESS.map.show()
    }

    // Set the current view reference
    BOUNDLESS.currentView = BOUNDLESS.map

  }

})

BOUNDLESS.Router = Backbone.Router.extend({

    routes : {
      "!/map"         : "initializeMap",
      "!/video-:video" : "initializeVideo",
      "" : "animateInInteraction"
    },

  initialize : function(options) {
    _.bindAll( this, 'initializeMap' )
    this.on("route", this.stopBar)
  },

  initializeVideo : function (video){
    BOUNDLESS.videoView = new BOUNDLESS.Video.View({videoNum:video});
  },

  stopBar: function() {
    console.log("page is loaded")
    mprogress.stop()
  },

  // Animates the initial interaction when the homepage is loaded
  animateInInteraction : function()
  {
    BOUNDLESS.interaction = new BOUNDLESS.Interactions()
  },

   execute: function(callback, args) {

    if ( BOUNDLESS.currentView )
    {
      BOUNDLESS.currentView.hide()
      BOUNDLESS.interaction.show()
    } else {
      if ( BOUNDLESS.interaction !== undefined )
        BOUNDLESS.interaction.hide()
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
      BOUNDLESS.uwtiles = new BOUNDLESS.UWTiles()
      BOUNDLESS.map = new BOUNDLESS.Map()
    }

    // Set the current view reference
    BOUNDLESS.currentView = BOUNDLESS.map

  }

})

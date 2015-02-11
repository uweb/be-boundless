BOUNDLESS.Router = Backbone.Router.extend({

  settings : {
    mprogress : {
          template : 3
    }
  },

  routes : {
    "!/map"         : "segueToMap",
    "!/video/:video" : "initializeVideo",
    "" : "default"
  },

  initialize : function(options) {

    _.bindAll( this, 'routeCompleted', 'segueToMap', 'initializeVideo' )

    this.mprogress = new Mprogress( this.settings.mprogress )

    this.on("route", this.routeCompleted)
    this.on("newViewLoaded", this.newViewLoaded )
  },

  initializeVideo : function (video){
    if (!BOUNDLESS.videoView){
      BOUNDLESS.videoView = {};
    }
    if (!BOUNDLESS.videoView[video]){
      BOUNDLESS.videoView[video] = new BOUNDLESS.Video.View({slug:video});
    }
    else {
      BOUNDLESS.videoView[video].show();
    }
    this.currentView = BOUNDLESS.videoView[video];
  },


  default : function() {},

  routeCompleted: function() {

    console.log("Route is complete")

    if ( this.ready && this.currentView ) this.currentView.segueIn()
    if ( ! this.ready ) this.ready = true
  },

  // Animates the initial interaction when the homepage is loaded
  animateInInteraction : function()
  {
    BOUNDLESS.interaction = new BOUNDLESS.Interactions()
  },

  newViewLoaded : function()
  {
    this.mprogress.end()
    BOUNDLESS.navigation.hide()
  },

  // Preforms before each segue
  // Should hide or show the navigation
   execute: function(callback, args) {
    console.log("Route is starting")

    if ( this.ready )
    {

        if ( this.currentView )
        {
          BOUNDLESS.navigation.segueIn()
          this.currentView.hide()
          this.currentView = false
        }
        else {
          this.mprogress.start()
          BOUNDLESS.navigation.segueOut()
        }

    }

    if (callback) callback.apply(this, args);
  },

// If the router is map create a new map
  segueToMap : function ()
  {
    console.log('Segue to map')
    // Set the current view reference
    this.currentView = BOUNDLESS.map

  }

})

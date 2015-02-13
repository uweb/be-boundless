BOUNDLESS.Router = Backbone.Router.extend({

  settings : {
    mprogress : {
          template : 3
    }
  },

  routes : {
    "!/map" : "segueToMap",
    "!/video/:video" : "sequeToVideo",
    "" : "default"
  },

  initialize : function(options) {

    _.bindAll( this,
      // 'routeCompleted',
       'segueToMap', 'sequeToVideo', 'unveil' )

    this.mprogress = new Mprogress( this.settings.mprogress )

  },

  sequeToVideo : function (video){
    if (!BOUNDLESS.videoView){
      BOUNDLESS.videoView = {};
    }
    if (!BOUNDLESS.videoView[video]){
      BOUNDLESS.videoView[video] = new BOUNDLESS.Video.View({slug:video});
    }
    this.currentView = BOUNDLESS.videoView[video];
    this.currentView.on('slideloaded', this.unveil);
  },


  default : function() {
    // Temp transition
    if ( Backbone.history.fragment.length )
      $('#overlay').stop().fadeIn()

    this.mprogress.end()

    this.currentView.unbind('slideloaded')
    return this.currentView && this.currentView.remove()
  },

  // Preforms before each segue
  // Should hide or show the navigation
   execute: function(callback, args) {

      this.mprogress.start()
      BOUNDLESS.navigation.segue()


      // Temporary initial transition
      if ( Backbone.history.fragment.length >0 )
        $('#overlay').transition({ opacity: 1 }).show()
      else
        $('#overlay').transition({ opacity: 0 })

    if (callback) callback.apply(this, args);
  },

// If the router is map create a new map
  segueToMap : function ()
  {
    // console.log('Segue to map')
    // Set the current view reference
    this.currentView = new BOUNDLESS.Map()
    this.currentView.on( 'slideloaded' , this.unveil )
  },

  unveil : function () {
    this.mprogress.end()
    $('#overlay').fadeOut()
  }

})

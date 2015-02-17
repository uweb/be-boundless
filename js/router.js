BOUNDLESS.Router = Backbone.Router.extend({

  settings : {
    mprogress : {
          template : 3
    }
  },

  routes : {
    "!/map" : "segueToMap",
    "!/video/:video" : "segueToVideo",
    "" : "default"
  },

  initialize : function(options) {

    _.bindAll( this,
       'segueToMap',
       'segueToVideo',
       'reveal',
       'conceal'
    )

    this.mprogress = new Mprogress( this.settings.mprogress )
    this.$slide = $('#slide')
    this.$slide.bind( BOUNDLESS.TransitionEvents, this.conceal )
  },

  segueToVideo : function (video){
    this.currentView = new BOUNDLESS.Video.View({slug:video});
    this.currentView.on('slideloaded', this.reveal);
  },


  default : function() {
    // Temp transition

    this.mprogress.end()

    if ( this.currentView ) {
      this.currentView.unbind('slideloaded');
      BOUNDLESS.navigation.segueIn();
    }

  },

  // Preforms before each segue
  // Should hide or show the navigation
   execute: function(callback, args) {

      this.mprogress.start()
      BOUNDLESS.navigation.segue()

      if (callback) callback.apply(this, args);
  },

// If the router is map create a new map
  segueToMap : function ()
  {
    // Set the current view reference
    this.currentView = new BOUNDLESS.Map()
    this.currentView.on( 'slideloaded' , this.reveal )
  },

  reveal : function () {
    this.mprogress.end()
    this.$slide.addClass('open')
  },

  conceal : function(event)
  {
    if (event.target == this.$slide){
      if ( ! Backbone.history.fragment.length )
        return this.currentView && this.currentView.remove()
    }
  }

})

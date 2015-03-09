BOUNDLESS.Router = Backbone.Router.extend({

  settings : {
    mprogress : {
          template : 3
    }
  },

  routes : {
    "!/map" : "map",
    "!/gallery" : "gallery",
    "!/video/:video" : "segueToVideo",
    "" : "default"
  },

  initialize : function(options) {

    _.bindAll( this,
       'segueToMap',
       'segueToVideo',
       'segueToGallery',
       'segueToDefault',
       'reveal',
       'conceal'
    )

    this.mprogress = new Mprogress( this.settings.mprogress )
    this.$slide = $('#slide')
    this.$homepage = $('#boundless-slide')
    this.$slide.on( BOUNDLESS.TransitionEvents, this.conceal )
  },

  map : function () {
    this.prepSegue(this.defaultView, this.segueToMap);
  },

  gallery : function () {
    this.prepSegue(this.defaultView, this.segueToGallery);
  },

  video : function (video) {
    this.prepSegue(this.defaultView, this.segueToVideo, video);
  },

  default : function() {
    this.prepSegue(this.currentView, this.segueToDefault);
  },

  prepSegue : function (activeView, segueCallback, viewargs){
    // if (activeView && activeView.preRemove) {
    //   activeView.trigger('preRemove').on('removeReady', function() {
    //     segueCallback(viewargs);
    //     activeView.off('removeReady');
    //   });
    // }
    // else {
      segueCallback(viewargs);
    // }
  },

  // Preforms before each segue
  // Should hide or show the navigation
  execute: function(callback, args) {

      this.mprogress.start()
      // this.$homepage.addClass('blur')
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

  // If the router is a gallery create a new gallery
  segueToGallery : function ()
  {
    // Set the current view reference
    this.currentView = new BOUNDLESS.Gallery()
    this.currentView.on( 'slideloaded' , this.reveal )
  },

  segueToVideo : function (video){
    // this.currentView = new BOUNDLESS.Video({ slug:video })
    // this.currentView.on('slideloaded', this.reveal);
  },

  segueToDefault: function () {
    if (!this.defaultView) {
      this.defaultView = new BOUNDLESS.Video.Home({slug:'default'});
      BOUNDLESS.navigation.trigger('slideclosed')
    }
    this.$slide.removeClass('open')
    // this.$homepage.removeClass('blur')

    this.mprogress.end()

    if ( this.currentView ) this.currentView.unbind('slideloaded')
  },

  reveal : function () {
    this.mprogress.end()
    this.$slide.addClass('open')
  },

  conceal : function( e )
  {
    // TODO: is there better exit event to bind to?
    if ( (Backbone.history.fragment.length === 0) && (['-webkit-clip-path', 'opacity'].indexOf(e.originalEvent.propertyName) != -1)){
      BOUNDLESS.navigation.trigger('slideclosed');
      return this.currentView && this.currentView.remove()
    }
  }

})

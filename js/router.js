BOUNDLESS.Router = Backbone.Router.extend({

  settings : {
    mprogress : {
          template : 3
    }
  },

  routes : {
    "!/map" : "segueToMap",
    "!/gallery" : "segueToGallery",
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
    this.$homepage = $('#boundless-slide')
    this.$slide.on( BOUNDLESS.TransitionEvents, this.conceal )
  },

 segueToVideo : function (video){
    this.currentView = new BOUNDLESS.Video.View({slug:video});
    this.currentView.on('slideloaded', this.reveal);
  },

  default : function() {
    // Temp transition

    this.$slide.removeClass('open')
    this.$homepage.removeClass('blur')

    this.mprogress.end()

    if ( this.currentView ) this.currentView.unbind('slideloaded')

  },

  // Preforms before each segue
  // Should hide or show the navigation
   execute: function(callback, args) {

      this.mprogress.start()
      this.$homepage.addClass('blur')
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

  reveal : function () {
    this.mprogress.end()
    this.$slide.addClass('open')
  },

  conceal : function( e )
  {
    // TODO: is there better exit event to bind to?
    if ( ! Backbone.history.fragment.length && e.originalEvent.propertyName.indexOf( 'clip-path' )  > -1 )
      return this.currentView && this.currentView.remove()
  }

})

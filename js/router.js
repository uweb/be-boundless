BOUNDLESS.Router = Backbone.Router.extend({

  // settings : {
  //   nprogress : {
  //     showSpinner: false,
  //     trickleSpeed: 800,
  //     trickleRate: 0.25
  //   }
  // },

  routes : {
    "!/map" : "map",
    "!/gallery" : "gallery",
    "!/video/:video" : "video",
    "" : "segueToDefault"
  },

  initialize : function(options) {

    // _.bindAll( this,
    //    'segueToMap',
    //    'segueToVideo',
    //    'segueToGallery',
    //    'segueToDefault',
    //    'reveal',
    //    'conceal'
    // )

    // this.on('route', this.resetBodyClasses )
    // NProgress.configure( this.settings.nprogress )
    this.$slides = $('#slides')
    // this.$homepage = $('#boundless-slide')
    // this.$slide.on( BOUNDLESS.TransitionEvents, this.conceal )
  },

  map : function () {
    this.$slides.children().removeClass('segue-back current').not('#map').addClass('segue-out')
    this.$slides.find('#map').addClass('current')
  },

  gallery : function () {
    this.$slides.children().removeClass('segue-back current').not('#gallery').addClass('segue-out')
    this.$slides.find('#gallery').addClass('current')
  },

  video : function (video) {
    this.videoSlug = video
    BOUNDLESS.navigation.once( 'complete', this.segueToVideo )
  },

  // TODO: figure out different mechanism besides toggling a video-active class
  resetBodyClasses : function()
  {
    $('body').removeClass('video-active')
  },

  // default : function() {
  //   // this.prepSegue(this.currentView, this.segueToDefault);
  // },

  // Preforms before each segue
  // Should hide or show the navigation
  // execute: function(callback, args) {

      // if ( Backbone.history.fragment.length )
      // // //  // NProgress.start()

      // // BOUNDLESS.navigation.segue()

      // if ( callback ) callback.apply(this, args);
  // },

  // If the router is map create a new map
  segueToMap : function ()
  {
    // Set the current view reference
    // this.currentView = new BOUNDLESS.Map()
    // this.currentView.on( 'slideloaded' , this.reveal )
  },

  // If the router is a gallery create a new gallery
  segueToGallery : function ()
  {
    // Set the current view reference
    this.currentView = new BOUNDLESS.Gallery()
    this.currentView.on( 'slideloaded' , this.reveal )
  },

  segueToVideo : function (video){
    this.currentView = new BOUNDLESS.Video({ slug: this.videoSlug })
    this.currentView.on('slideloaded', this.reveal);
  },

  segueToDefault: function () {
    this.$slides.children().removeClass('segue-out')
    this.$slides.find('.current').not('#boundless-slide').addClass('segue-back').removeClass('current')
    this.$slides.find('#boundless-slide').addClass('current')
    // NProgress.remove()
    // this.$slide.removeClass('open')

    // NProgress.remove()
    // if ( this.currentView ) this.currentView.unbind('slideloaded')
  },

  reveal : function () {
    BOUNDLESS.analytics.trigger('slideloaded');
    // NProgress.done()
    this.$slide.addClass('open')
  },

  conceal : function( e )
  {
    // TODO: is there better exit event to bind to?
    if ( (Backbone.history.fragment.length === 0) && (['-webkit-clip-path', 'opacity'].indexOf(e.originalEvent.propertyName) != -1)){
      // BOUNDLESS.navigation.trigger('slideclosed');
      return this.currentView && this.currentView.remove()
    }
  }

})

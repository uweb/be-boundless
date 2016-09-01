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
    "!/page/:page" : "page",
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

  page : function( page )  {
    this.$slides.children().removeClass('segue-back current').not('#page-' + page ).addClass('segue-out')
    this.$slides.find('#page-' + page ).addClass('current')
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

  segueToVideo : function (video){
    this.currentView = new BOUNDLESS.Video({ slug: this.videoSlug })
    // this.currentView.on('slideloaded', this.reveal);
  },

  segueToDefault: function () {
    this.$slides.children().removeClass('segue-out')
    this.$slides.find('.current').not('#boundless-slide').addClass('segue-back').removeClass('current')
    this.$slides.find('#boundless-slide').addClass('current')
  },

  // reveal : function () {
  //   BOUNDLESS.analytics.trigger('slideloaded');
  //   // NProgress.done()
  //   this.$slide.addClass('open')
  // },

  // conceal : function( e )
  // {
  //   // TODO: is there better exit event to bind to?
  //   if ( (Backbone.history.fragment.length === 0) && (['-webkit-clip-path', 'opacity'].indexOf(e.originalEvent.propertyName) != -1)){
  //     // BOUNDLESS.navigation.trigger('slideclosed');
  //     return this.currentView && this.currentView.remove()
  //   }
  // }

})

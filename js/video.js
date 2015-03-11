// Video slide view

BOUNDLESS.Video = Backbone.View.extend({

  template : '<div class="title-blurb"><h2 class="video-title"><%= title %></h2><div class="blurb"><%= text %></div></div><button class="play" aria-controls="video<%= video %>"><span class="top"></span><span class="left"></span><span class="bottom"></span></button><div class="behind boundless-youtube" id="video<%= video %>" aria-label="Video: <%= title %>"></div>',

  tagname   : 'div',
  id        : 'video',
  className : 'fullscreen',

  is_playing: false,
  preRemove : false,

  events : {
    'click button.play': 'buttonClick',
    'keyup': 'checkEscape'
  },

  initialize : function ( options ) {
    _.bindAll(this,
        'render',
        // 'data_prep',
        'buttonClick',
        'checkEscape',
        'onReady',
        'onStateChange',
        'youtube_iframe',
        'buttonTransitionDone',
        'iframeTransitionDone'
      );

    //this is the instantiated collection
    this.slug = options.slug;
    this.collection = new BOUNDLESS.Video.Collection();
    this.collection.on( 'sync', this.render )

  },

  render : function () {

    this.model = this.collection.findWhere({'slug': this.slug})

    if ( ! this.model ) return console.error( 'There is no model with slug ' + this.slug )

    this.$el.css({'background-image': 'url("' + this.model.get('image') + '")' });

    var template = _.template( this.template, this.model.toJSON() )

    BOUNDLESS.replaceSlide( this.$el.html(template) );

    this.youtube_iframe();
    this.$button = this.$el.find('button.play');

  },

  youtube_iframe : function () {
    var player_vars = {
      'rel'           : 0,
      'controls'      : 0,
      'modestbranding': 1,
      'wmode'         : 'transparent'
    }
    this.uwplayer = new YT.Player('video' + this.model.get('video'), {
      videoId: this.model.get('video'),
      playerVars: player_vars,
      width : '100%',
      height: '100%',
      events: {
          //these events will call functions in the view
         'onReady': this.onReady,
         'onStateChange': this.onStateChange
      }
    });
    this.$iframe = this.$el.find('#video' + this.model.get('video'));
  },

  onReady: function () {
    this.$button.on(BOUNDLESS.TransitionEvents, this.buttonTransitionDone);
    this.$iframe.on(BOUNDLESS.TransitionEvents, this.iframeTransitionDone);
    // this.on('preRemove', this.stopVideo);
    this.trigger('slideloaded');
  },

  onStateChange: function (player_state) {
    if (player_state.data === 0){
      if (this.is_playing){
        this.stopVideo();
      }
    }
  },

  buttonClick: function(event) {
    event.stopPropagation();
    if (this.is_playing){
      this.stopVideo();
    }
    else {
      this.playVideo();
    }
  },

  checkEscape: function (event){
    if (this.is_playing){
      if (event.keyCode == 27){
        event.preventDefault();
        this.stopVideo();
      }
    }
  },

  playVideo: function () {
    this.$button.addClass('close');
  },

  buttonTransitionDone: function (event) {
    //all transitions trigger this, including outline (as in focus change)
    //allow opacity and top to progress
    if (['right', 'opacity'].indexOf(event.originalEvent.propertyName) == -1){
      //early return if conditions not met
      return;
    }
    if (this.$button.hasClass('close')){
      this.$iframe.removeClass('behind');
      this.uwplayer.loadVideoById(this.model.get('video'));
      this.is_playing = true;
      this.preRemove = true;
      this.$button.focus();
    }
    else {
      this.trigger('removeReady');
    }
  },

  stopVideo: function (callback) {
    if (this.is_playing) {
      this.uwplayer.stopVideo();
      this.is_playing = false;
      this.preRemove = false;
      this.$iframe.addClass('behind');
    }
  },

  iframeTransitionDone: function () {
    if (this.$iframe.hasClass('behind')){
      this.$button.removeClass('close');
      $('body').removeClass('video-active');
    }
    else {
      $('body').addClass('video-active');
    }
  },
});


BOUNDLESS.Video.API = Backbone.Model.extend({

  defaults : {
    apiReady : false
  },

  initialize : function()
  {
    _.bindAll( this, 'ready' )
    if ( YT && YT.Player ) {
      this.ready()
      return
    }
    window.onYouTubeIframeAPIReady = this.ready
  },

  ready: function() {
    this.set( 'apiReady', true )
  }

})

BOUNDLESS.Video.Model = Backbone.Model.extend({});

BOUNDLESS.Video.Collection = Backbone.Collection.extend({

  url : '?json=boundless_video.get_videos',

  initialize: function () {
    _.bindAll( this, 'ready' )

    this.api = new BOUNDLESS.Video.API()

    if ( this.api.get('apiReady') ) this.ready()
    else this.api.on('change:apiReady', this.ready )

    this.on('error', this.error )
  },

  ready : function()
  {
    // putting fetch into the change:apiReady
    this.fetch()
  },

  error: function()
  {
    console.error( 'There was an error fetching the videos' )
  }

});



BOUNDLESS.Video.Home = BOUNDLESS.Video.extend({

  el : '#boundless-slide',

  nav_template : '<div class="homepage-text"><h1>Be boundless</h1><span class="udub-slant"><span></span></span><p><%= text %></p></div>',
  vid_template : '<div class="behind boundless-youtube" id="video<%= video %>" aria-label="Video: <%= title %>"></div>',

  render : function () {
    var data = this.model.toJSON();
    var text = _.template(this.nav_template, data);
    var vid  = _.template(this.vid_template, data);
    this.$el.prepend(vid);
    this.$el.find('.navigation').prepend(text);
    this.$button = this.$el.find('button.play');
    this.$button.attr('aria-controls', 'video' + this.model.get('video'));
    if (BOUNDLESS.youtube_api_ready){
      this.youtube_iframe();
    }
    else {
      //called on slower connections all the time
      window.addEventListener('youtube_api_ready', this.youtube_iframe);
    }
  }

});

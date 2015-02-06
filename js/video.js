// Video slide view
// Temporary rendering
BOUNDLESS.youtube_api_ready = false;
BOUNDLESS.YouTubeAPIReady = new Event('youtube_api_ready');

window.onYouTubeIframeAPIReady = function(){
  BOUNDLESS.youtube_api_ready = true;
  this.dispatchEvent(BOUNDLESS.YouTubeAPIReady);
}

BOUNDLESS.Video = Backbone.Model.extend({});

BOUNDLESS.Videos = Backbone.Collection.extend({

  model: BOUNDLESS.Video,
  is_ready: false,
  view_to_render: undefined,

  initialize: function () {
    _.bindAll(this, 'fetch_success');
    this.url = '?json=boundless_video.get_videos';
    this.fetch({success: this.fetch_success});
  },

  fetch_success: function () {
    this.is_ready = true;
    if(this.view_to_render !== undefined){
      this.view_to_render.data_prep();
    }
  }

});

BOUNDLESS.Video.View = Backbone.View.extend({

  template : '<div class="fullscreen behind" style="background-image:url(<%= image %>)"><h2 class="video-title"><%= title %></h2><button class="play"></button><div class="behind boundless-youtube" id="video<%= video %>" aria-label="Video: <%= title %>"></div><div class="blurb"><%= text %></div></div>',

  el : '#message',
  is_playing: false,
  
  events : { 'click button.play': 'buttonClick' },

  initialize : function (options) {
    _.bindAll(this, 'render', 'data_prep', 'onReady', 'buttonClick', 'onStateChange', 'youtube_iframe', 'hide', 'show');
    //this is the instantiated collection
    this.collection = BOUNDLESS.videos;
    this.videoNum = parseInt(options.videoNum);
    this.slug = options.slug;
    if (this.collection.is_ready) {
      this.data_prep(options);
    } 
    else {
      this.collection.view_to_render = this;
    }
    this.player_ready = false;
  },

  data_prep: function () {
    this.model = this.collection.models[this.videoNum];
    // for later:
    //this.model = this.collection.models.filter(function(video) {
    //  return video.get('slug') == this.slug;
    //}
    this.render();
    if (BOUNDLESS.youtube_api_ready){
      this.youtube_iframe();
    }
    else {
      window.addEventListener('youtube_api_ready', this.youtube_iframe);
    }
  },

  render : function () {
    var data = this.model.toJSON();
    var template = _.template(this.template, data);
    this.$el.html(template);
    this.$container = this.$el.find('.fullscreen');
    this.$button = this.$el.find('button.play');
    this.show();
  },

  youtube_iframe : function () {
    var player_vars = {};
    if (this.modest) {
      player_vars = {
        'rel'           : 0,
        'controls'      : 0,
        'modestbranding': 1,
      }
    }
    // if (collection.resolution !== 'undefined'){
    //     player_vars.VQ = collection.resolution;
    // }
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
    this.play(this.model.get('video'));
  },

  onStateChange: function (event) {
    //check for stop playing events
  },

  // play the video id passed. If 'playnow' not passed, assume false.
  // If 'playnow' is true play the video, otherwise just cue it up
  play: function (id, playnow){
    playnow = playnow || false;
    if (playnow) {
      this.uwplayer.loadVideoById(id);
      this.$el.focus();
      this.is_playing = true;
    }
    else {
      this.uwplayer.cueVideoById(id);
    }
  },

  buttonClick: function() {
    if (this.$button.hasClass('close')){
      this.uwplayer.stopVideo();
      this.is_playing = false;
      this.$button.removeClass('close');
      this.$iframe.addClass('behind');
    }
    this.$iframe.removeClass('behind');
    this.play(this.model.get('video'), true);
    this.$button.addClass('close');
  },

  hide: function () {
    if(this.is_playing){
      if (this.uwplayer )
      this.uwplayer.stopVideo();
    }
    this.$button.removeClass('close');
    this.$iframe.addClass('behind');
    this.$container.addClass('behind');
  },

  show: function () {
    this.$container.removeClass('behind');
  }
});

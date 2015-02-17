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

  template : '<div id="<%= slug %>" class="fullscreen behind" style="background-image:url(<%= image %>)"><h2 class="video-title"><%= title %></h2><button class="play" aria-controls="video<%= video %>"><span class="top"></span><span class="left"></span><span class="bottom"></span></button><div class="behind boundless-youtube" id="video<%= video %>" aria-label="Video: <%= title %>"></div><div class="blurb"><%= text %></div></div>',

  el : '#slide',
  is_playing: false,
  
  events : {
    'click button.play': 'buttonClick',
    'keyup': 'checkEscape'  
  },

  initialize : function (options) {
    _.bindAll(this, 'render', 'data_prep', 'buttonClick', 'checkEscape', 'onStateChange', 'youtube_iframe');
    //this is the instantiated collection
    this.collection = BOUNDLESS.videos;
    //this.videoNum = parseInt(options.videoNum);
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
    //this.model = this.collection.models[this.videoNum];
    for (var i = 0; i < this.collection.models.length; i++){
      if (this.collection.models[i].get('slug') == this.slug){
        this.model = this.collection.models[i];
      }
    }
    if (this.model){
      this.render();
    }
    else {
      console.log('no model with slug ' + this.slug);
    }
  },

  render : function () {
    var data = this.model.toJSON();
    var template = _.template(this.template, data);
    this.$el.html(template);
    this.$button = this.$el.find('button.play');
    if (BOUNDLESS.youtube_api_ready){
      this.youtube_iframe();
    }
    else {
      window.addEventListener('youtube_api_ready', this.youtube_iframe);
    }
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
       'onReady': function() { this.trigger('slideloaded'); }.bind(this),
       'onStateChange': this.onStateChange
      }
    });
    this.$iframe = this.$el.find('#video' + this.model.get('video'));
  },

  onStateChange: function (a) {
    if (a.data === 0){
      if (this.is_playing){
        this.buttonClick();
      }
    }
  },

  buttonClick: function() {
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
    _.delay(function() {
      this.$iframe.removeClass('behind');
      this.uwplayer.loadVideoById(this.model.get('video'));
      this.is_playing = true;
      this.$button.focus();
    }.bind(this), 250);
  }, 

  stopVideo: function () {
    if (this.is_playing) {
      this.uwplayer.stopVideo();
      this.is_playing = false;
    }
    this.$iframe.addClass('behind');
    _.delay(function() {
      this.$button.removeClass('close');
    }.bind(this), 250);
  },

  remove: function ()  {
    this.stopVideo();
    this.uwplayer.destroy();
    this.$el.html('');
  }

});

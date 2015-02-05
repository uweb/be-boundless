// ### UW Youtube

// This provides the structure and functionality of the UW Youtube player
// For usage please refer to the [UW Web Youtube Player](http://uw.edu/brand/web/#youtube)
// It can support a single youtube video or playlist embed
// options include max results for playlists, modest youtube branding and default resolution 
// requires a unique id for each div.uw-youtube even if there is just one

//       Single: <div id='some-unique-id' class="uw-youtube" data-uw-youtube='youtube_id_here' data-uw-youtube-type='single'></div>
//       Playlist: <div id='some-unique-id' class="uw-youtube" data-uw-youtube='youtube_playlist_id_here' data-uw-youtube-type='playlist'></div>

BOUNDLESS.YouTube = Backbone.Model.extend({

  defaults: {
    modest: true,
    resolution: 'HD1080'
  },

  // Initialize the player embeds
  // once the player type has been determined, get the associated data

  initialize: function (options) {
    _(this).bindAll('parse');
    this.$el = options.$el;
    this.set('youtube_id', options.youtube_id);
    this.url = 'https://www.googleapis.com/youtube/v3/videos?part=snippet&id=' + this.get('youtube_id') + '&key=AIzaSyApmhFr5oa8bmKPcpN7bm-h0mekjkUVypU';
    this.set('modest', options.modest);
    this.set('resolution', options.resolution);
    this.make_view();
    this.fetch({success: this.view.onDataReady});
  },

  // organize useful information from the ajax request
  //parse: function (response) {
  //  var item = response.items[0];
  //  item.snippet.resourceId = {videoId: this.youtube_id};
  //  return item.snippet;
  //},
    
  // make the view at the proper time
  make_view: function (type) {
    this.view = new BOUNDLESS.YouTube.View({model: this});
  },

});

// The CollectionView builds the html for the player and the control structure for the vidoes
BOUNDLESS.YouTube.View = Backbone.View.extend({
    
  // template that all videos get
  template : "<div class='boundless-video-player' role='region' aria-label='video' tabindex=-1><div class='tube-wrapper'></div></div>",

  // add the templates
  initialize: function () {
    _(this).bindAll('onReady', 'onDataReady', 'onStateChange', 'resized', 'youtube_iframe');
    this.player_ready = false;
    this.data_ready = false;
    this.wrap();
    if (BOUNDLESS.youtube_api_ready){
      this.youtube_iframe();
    }
    else {
      window.addEventListener('youtube_api_ready', this.youtube_iframe);
    }
  },

  // a resize handler for playlists. Handles the edge case of when a container
  // is resized to be too small for the list and therefor requires a scrollbar
  // when none is present or vice versa
  resized: function() {
    var viewport_new_width = this.$vidSmall.find('.viewport').width();
    if (viewport_new_width != this.$viewport_width){
      this.$viewport_width = viewport_new_width;
    }
  },

  // wraps our collection in the main template and saves references to the container
  wrap: function () {
    this.model.$el.wrap(jQuery(this.template));
    this.$el = this.model.$el.parents('.boundless-video-player');  //unattached jquery object won't wrap right if we add possible playlist section first
    this.$el.attr('aria-label', 'video: ' + this.model.get('title'));
    this.el = this.$el[0];
  },

  // this is the callback for when the youtube iframe api is ready to go
  // checks to see if the data is ready too
  onReady: function () {
    this.player_ready = true;
    this.check_all_ready();
  },

  youtube_iframe : function () {
    var player_vars = {};
    if (this.model.get('modest')) {
      player_vars = {
        'rel'           : 0,
        'controls'      : 0,
        'modestbranding': 1,
      }
    }
    // if (collection.resolution !== 'undefined'){
    //     player_vars.VQ = collection.resolution;
    // }
    //attach the YT.player to the relevant view, each view gets one
    this.uwplayer = new YT.Player('video' + this.model.get('youtube_id'), {
      videoId: this.model.get('youtube_id'),
      playerVars: player_vars,
      events: {
        //these events will call functions in the view
       'onReady': this.onReady,
       'onStateChange': this.onStateChange
      }
    });
  },

  // this is the callback for whne the data is loaded into the models
  // preps the playlist area if its a playlist
  // checks to see if the iframe api is ready
  onDataReady: function () {
    this.data_ready = true;
    this.check_all_ready();
  },

  // this function checks the state of data/player to prevent a race case.
  // Both the data and the player must be ready to go.  Then we play the correct video
  check_all_ready: function() {
    if (this.data_ready && this.player_ready){
      this.play(this.model.get('youtube_id'));
    } 
  },

  // when the player changes state, this is run.
  // Currently stuff only happens if this is a playlist
  // TODO: add a publicly visible event on video end for showcase pages
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
    }
    else {
      this.uwplayer.cueVideoById(id);
    }
  },

});

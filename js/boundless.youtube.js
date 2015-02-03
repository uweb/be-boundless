// ### UW Youtube

// This provides the structure and functionality of the UW Youtube player
// For usage please refer to the [UW Web Youtube Player](http://uw.edu/brand/web/#youtube)
// It can support a single youtube video or playlist embed
// options include max results for playlists, modest youtube branding and default resolution 
// requires a unique id for each div.uw-youtube even if there is just one

//       Single: <div id='some-unique-id' class="uw-youtube" data-uw-youtube='youtube_id_here' data-uw-youtube-type='single'></div>
//       Playlist: <div id='some-unique-id' class="uw-youtube" data-uw-youtube='youtube_playlist_id_here' data-uw-youtube-type='playlist'></div>

BOUNDLESS.YouTube.Collection = Backbone.Collection.extend({

    // Initialize the player embeds
    // once the player type has been determined, get the associated data
  initialize: function (options) {
    _(this).bindAll('parse');
    this.el = options.el;
    this.$el = $(this.el);
    this.youtube_id = this.$el.data('uw-youtube');
    this.setup();
    this.make_view();
    this.fetch({success: this.view.onDataReady});
  },

  // See if the div.uw-youtube is a playlist or single video
  // setup the proper request and model type
  // setup some other relative parameters
  setup : function (youtube_id) {
    this.modest = this.$el.data('modest');
    this.resolution = this.$el.data('resolution');
    this.model = UW.YouTube.Video;
    this.url = 'https://www.googleapis.com/youtube/v3/videos?part=snippet&id=' + this.youtube_id + '&key=AIzaSyApmhFr5oa8bmKPcpN7bm-h0mekjkUVypU';
  },

  // organize useful information from the ajax request
  parse: function (response) {
    return _(response.items).map(function (item) {
      item.snippet.resourceId = {videoId: youtube_id};
      return item.snippet;
    });
  },
    
  // make the view at the proper time
  make_view: function (type) {
    this.view = new UW.YouTube.CollectionView({collection: this});
  },

});

// The CollectionView builds the html for the player and the control structure for the vidoes
BOUNDLESS.YouTube.CollectionView = Backbone.View.extend({
    
  // template that all videos get
  template : "<div class='boundless-video-player' role='region' aria-label='video' tabindex=-1><div class='tube-wrapper'></div></div>",

  // set up the view for this collection
  // add the youtube iframe api if necessary
  // add the templates
  initialize: function () {
    _(this).bindAll('onReady', 'onDataReady', 'onStateChange', 'resized');
    this.player_ready = false;
    this.data_ready = false;
    this.wrap();
    this.add_iFrame_api();
    if (this.collection.type == 'playlist'){
      this.$el.addClass('playlist');
      this.add_playlist_section();
      this.scrollbar_visible = false;
      $(window).resize(this.resized);
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
    this.collection.$el.wrap($(this.template));
    this.$el = this.collection.$el.parents('.boundless-video-player');  //unattached jquery object won't wrap right if we add possible playlist section first
    this.el = this.$el[0];
  },

  // if we don't have a copy of the youtube iframe api yet. add it
  add_iFrame_api: function () {
    if (BOUNDLESS.$body.find('script#iFrame').length === 0){
      BOUNDLESS.$body.append('<script id="iFrame" src="//www.youtube.com/player_api" type="text/javascript"></script>');
      this.add_iFrame_function();
    }
  },

  // at this point, all the collections should be created.
  // Each gets a uwplayer variable that is a YT.Player corresponding to the collection
  add_iFrame_function: function () {
    window.onYouTubeIframeAPIReady = function() {
      for (var i = 0, length = BOUNDLESS.youtube.length; i < length; i++){
        var collection = BOUNDLESS.youtube[i], player_vars = {};
        // if the collection desires no youtube branding, set these parameters
        if (collection.modest) {
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
        collection.view.uwplayer = new YT.Player(collection.$el.attr('id'), {
          videoId: '',
          playerVars: player_vars,
          events: {
            //these events will call functions in the relevant view
           'onReady': collection.view.onReady,
           'onStateChange': collection.view.onStateChange
          }
        });
      }
    };
  },

  // this is the callback for when the youtube iframe api is ready to go
  // checks to see if the data is ready too
  onReady: function () {
    this.player_ready = true;
    this.check_all_ready();
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
      this.play(this.collection.models[0].get('resourceId').videoId);
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


// Video is a model for a single video
BOUNDLESS.YouTube.Video = Backbone.Model.extend({
  initialize: function () {
    if (this.get('resourceId')){
      this.view = new UW.YouTube.VideoView({model: this});
    }
  }
});

// Video View is a view for single video. Currently does nothing
BOUNDLESS.YouTube.VideoView = Backbone.View.extend({
  //template: underscore + html string here,
  
  initialize: function () {
    this.render();
  },

  render: function () {
    this.model.collection.view.$el.attr('aria-label', 'video: ' + this.model.get('title'));
    //var item = this.model.toJSON();
  }
});

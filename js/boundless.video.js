// Video slide view
// Temporary rendering

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

  template : '<div class="fullscreen" style="background-image:url(<%= image %>)"><h2 class="video-title"><%= title %></h2><button class="play"></button><div class="behind boundless-youtube" id="video<%= video %>"></div><div class="blurb"><%= text %></div></div>',

  el : '#message',

  initialize : function (options) {
    _.bindAll(this, 'render', 'data_prep');
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
  },

  data_prep: function () {
    this.model = this.collection.models[this.videoNum];
    // for later:
    //this.model = this.collection.models.filter(function(video) {
    //  return video.get('slug') == this.slug;
    //}
    this.render();
    this.youtube = new BOUNDLESS.YouTube({youtube_id: this.model.get('video'), $el: this.$el.find('#video' + this.model.get('video')), modest: true});
  },

  render : function () {
    var data = this.model.toJSON();
    var template = _.template(this.template, data);
    this.$el.html(template);
  }

});

// Video slide view
// Temporary rendering

BOUNDLESS.Video = Backbone.Model.extend({

  initialize: function(options){
    this.videoNum = options.videoNum;
    this.url = '?json=boundless_video.get_video?videoNum=' + this.videoNum;
    this.fetch({success: this.makeView});
  },

  makeView: function () {
    this.view = new BOUNDLESS.Video.view({model:this});
  }

});

BOUNDLESS.Video.view = Backbone.View.extend({

  template : '<div class="fullscreen" style="background-image:url(<%= image %>)"><h2 class="video-title"><%= title %></h2><button class="play"></button><div class="behind" id="video<%= videoId %>"></p><p class="blurb"><%= text %></p></div>',

  initialize : function () {
    this.render();
  },

  render : function (){
    var data = this.model.toJSON();
    var template = _.template(this.template, data);
    jQuery('body').html(template);
  }

});

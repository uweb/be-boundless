BOUNDLESS.Router = Backbone.Router.extend({

    routes : {
      "!/map"         : "initializeMap",
      "!/video-:video" : "initializeVideo"
    },

  initialize : function(options) {
    _.bindAll( this, 'initializeMap' )
  },

  initializeVideo : function (video){
    BOUNDLESS.videoView = new BOUNDLESS.Video.View({videoNum:video});
  },

// If the router is map create a new map
  initializeMap : function ()
  {
      BOUNDLESS.uwtiles = new BOUNDLESS.UWTiles()
      BOUNDLESS.map = new BOUNDLESS.Map()
  }

})

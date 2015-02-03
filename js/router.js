BOUNDLESS.Router = Backbone.Router.extend({

    routes : {
      "!/map"         : "initializeMap",
      "!/video:number" : "initializeVideo"
    },

  initialize : function(options) {
    _.bindAll( this, 'initializeMap' )
  },

  initializeVideo : function (number){
    BOUNDLESS.video = new BOUNDLESS.Video({videoNum:number});
  },

// If the router is map create a new map
  initializeMap : function ()
  {
      BOUNDLESS.uwtiles = new BOUNDLESS.UWTiles()
      BOUNDLESS.map = new BOUNDLESS.Map()
  }

})

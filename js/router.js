BOUNDLESS.Router = Backbone.Router.extend({

    routes : {
      "!/map" : "initializeMap"
    },

  initialize : function(options) {
    _.bindAll( this, 'initializeMap' )
    BOUNDLESS.interaction = new BOUNDLESS.Interactions()
  },

// If the router is map create a new map
  initializeMap : function ()
  {
      BOUNDLESS.uwtiles = new BOUNDLESS.UWTiles()
      BOUNDLESS.map = new BOUNDLESS.Map()
  }

})

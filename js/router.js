BOUNDLESS.Router = Backbone.Router.extend({

    routes : {
      "!/map" : "initializeMap"
    },

  initialize : function(options) {
    _.bindAll( this, 'initializeMap' )
  },

// If the router is map create a new map
  initializeMap : function ()
  {
      BOUNDLESS.map = new BOUNDLESS.Map()
  }

})

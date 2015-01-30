// Map Point View
// Mostly temporary rendering until segues are established
BOUNDLESS.Map = Backbone.View.extend({

  // The element to put the Google Map
  el : '#map',

  // The HTML template the map will use
  template : '<div id="map"></div>',

   // Google Map settings for the map and the marker
  settings : {
    map: {
      zoom: 17,
      center: new google.maps.LatLng( 47.653851681095, -122.30780562698 ),
      minZoom:1,
      maxZoom:19,
      disableDoubleClickZoom : false,
      mapTypeControl : false
    },
    marker: {
      animation: google.maps.Animation.DROP,
    }
  },

  // Initialize the map.
  // This is executed by the router and only when the route is in place
  initialize : function( options )
  {
    _.bindAll( this, 'putMarkersOnMap', 'render', 'show', 'hide' )

    this.template = _.template( this.template )
    jQuery('body').html( this.template )

    this.points = new BOUNDLESS.Map.Points()
    this.points.on( 'sync', this.render )

  },

  // Render the map
  render : function() {
    // TODO: This is temporary rendering of the map
    this.map = new google.maps.Map( document.getElementById('map'), this.settings.map )
    this.bounds = new google.maps.LatLngBounds()
    this.points.each( this.putMarkersOnMap )
  },

  // Put each vanilla marker on the map and extend the map bounds to show them
  putMarkersOnMap : function( point )
  {
      var marker = new google.maps.Marker( this.settings.marker )
            , latlng = new google.maps.LatLng( point.get( 'coordinate' ).latitude, point.get( 'coordinate' ).longitude )

      this.bounds.extend( latlng )

      marker.setPosition(  latlng )
      marker.setTitle( point.get('title') )
      marker.setText( point.get('text') )
      marker.setMap( this.map )

      this.map.fitBounds( this.bounds )
  },

  show : function()
  {
    // Future segue between main screen and map
  },

  hide : function() {
    // Segue between map and main screen
  }

})

// Map Point Model
BOUNDLESS.Map.Point = Backbone.Model.extend({})

// Map Point Collection
BOUNDLESS.Map.Points = Backbone.Collection.extend({

  url : '?json=map_point.get_map_points',

  model : BOUNDLESS.Map.Point,

  initialize : function()
  {
    this.on( 'error', this.error )
    this.fetch()
  },

  error: function( error )
  {
    console.log('There was an error retrieving the map points.')
  }

})



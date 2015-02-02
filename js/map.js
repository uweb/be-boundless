// Map Point View
// Mostly temporary rendering until segues are established
BOUNDLESS.Map = Backbone.View.extend({

  // The element to put the Google Map
  el : '#map',

  // The HTML template the map will use
  template : '<div id="map"></div>',

   // Google Map settings for the map and the marker
  settings : {
    name : 'campusmap',
    // These bounds are hardcoded to the coordinates that the branded map encompass
    allowedBounds : new google.maps.LatLngBounds(
                    new google.maps.LatLng( 47.647523,-122.325039 ),
                    new google.maps.LatLng( 47.664983,-122.290106 )
    ),
    allowedZoom: 16,
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
    _.bindAll( this, 'delegateGoogleMapEvents', 'handleCenterChanged', 'handleZoomChanged', 'getMapType', 'putMarkersOnMap', 'render', 'show', 'hide' )

    this.template = _.template( this.template )
    jQuery('body').html( this.template )

    this.points = new BOUNDLESS.Map.Points()
    this.points.on( 'sync', this.render )

  },

  // Render the map
  render : function() {
    // TODO: This is temporary rendering of the map
    this.map = new google.maps.Map( document.getElementById('map'), this.settings.map )
    this.map.mapTypes.set( this.settings.name, BOUNDLESS.uwtiles )
    this.map.setMapTypeId( this.settings.name )

    this.bounds = new google.maps.LatLngBounds()
    this.points.each( this.putMarkersOnMap )
    this.delegateGoogleMapEvents()
  },

  // Delegate the Google map events to the Backbone view
  delegateGoogleMapEvents : function()
  {
    new google.maps.event.addListener( this.map, "center_changed", this.handleCenterChanged )
    new google.maps.event.addListener( this.map, "zoom_changed", this.handleZoomChanged )
  },

  // When the center of the map has changed choose to load the UW Tiles or default Google tiles
  handleCenterChanged : function() {
    this.map.setMapTypeId( this.getMapType() )
  },

  // When the zoom has changed choose to load the UW Tiles or default Google tiles
  handleZoomChanged : function() {
    this.map.setMapTypeId( this.getMapType() )
  },

  // Check to see if the current bounds are in the allowed bounds of the map
  // Returns the maptype to be used depending on the map's view
  getMapType : function() {
    return !this.settings.allowedBounds.contains( this.map.getCenter()) || this.map.getZoom() < this.settings.allowedZoom ? google.maps.MapTypeId.ROADMAP : this.settings.name
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



// Map Point View
// Mostly temporary rendering until segues are established
BOUNDLESS.Map = Backbone.View.extend({

  // The element to put the Google Map
  id : 'map',
  tagName : 'div',

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
      // setMapTypeId:  google.maps.MapTypeId.ROADMAP,
      // mapTypeControl : false
    },
    icon : {
      url : 'wp-content/themes/be-boundless/less/svg/map-marker.svg',
      size : new google.maps.Size(85, 85),
      origin: new google.maps.Point(0,0),
      anchor: new google.maps.Point( 42.5, 42.5 )
    },
    marker: {
      animation: google.maps.Animation.DROP,
    }


  },

  // Initialize the map.
  // This is executed by the router and only when the route is in place
  initialize : function( options )
  {
    _.bindAll( this, 'delegateGoogleMapEvents', 'handleCenterChanged','removeInfoWindows', 'handleZoomChanged', 'getMapType', 'putMarkersOnMap', 'render', 'segueIn', 'hide', 'googleMapLoaded' )
    this.points = new BOUNDLESS.Map.Points()
    this.points.on( 'sync', this.render )
  },

  // Render the map
  render : function() {
    BOUNDLESS.replaceSlide( this.el )
    this.map = new google.maps.Map( $('#slide').find( '#map').get(0), this.settings.map )
    this.delegateGoogleMapEvents()
    // this.map.mapTypes.set( this.settings.name, BOUNDLESS.uwtiles )
    // this.map.setMapTypeId( this.settings.name )

    this.bounds = new google.maps.LatLngBounds()
    this.points.each( this.putMarkersOnMap )

  },

  // Delegate the Google map events to the Backbone view
  delegateGoogleMapEvents : function()
  {
    google.maps.event.addListenerOnce( this.map, "tilesloaded", this.googleMapLoaded )
    google.maps.event.addListener( this.map, "center_changed", this.handleCenterChanged )
    google.maps.event.addListener( this.map, "zoom_changed", this.handleZoomChanged )
    google.maps.event.addListener( this.map, "click", this.removeInfoWindows )
  },

  // When the center of the map has changed choose to load the UW Tiles or default Google tiles
  handleCenterChanged : function() {
    // this.map.setMapTypeId( this.getMapType() )
  },

  // When the zoom has changed choose to load the UW Tiles or default Google tiles
  handleZoomChanged : function() {
    // this.map.setMapTypeId( this.getMapType() )
  },

  // Check to see if the current bounds are in the allowed bounds of the map
  // Returns the maptype to be used depending on the map's view
  getMapType : function() {
    // return !this.settings.allowedBounds.contains( this.map.getCenter()) || this.map.getZoom() < this.settings.allowedZoom ? google.maps.MapTypeId.ROADMAP : this.settings.name
  },


  // Put each vanilla marker on the map and extend the map bounds to show them
  putMarkersOnMap : function( point )
  {
      var marker = new google.maps.Marker( this.settings.marker )
              , latlng = new google.maps.LatLng( point.get( 'coordinate' ).latitude, point.get( 'coordinate' ).longitude )
              , infowindow = new BOUNDLESS.Map.InfoWindow( this.map, latlng, point )

      this.bounds.extend( latlng )

      marker.setPosition(  latlng )
      marker.setTitle( point.get('title') )
      marker.setText( point.get('text') )
      marker.setMap( this.map )
      marker.setIcon( this.settings.icon )
      marker.set( 'infoWindow', infowindow )

      google.maps.event.addListener( marker, 'click', this.handleClickMarker )

      this.map.fitBounds( this.bounds )
  },

  // Handle the clicking of the marker
  handleClickMarker : function( marker )
  {
    this.getMap().panTo( this.getPosition() )
    this.infoWindow.setMap( this.getMap() )
    this.infoWindow.segueIn()
    // google.maps.event.addListenerOnce( this.getMap(), 'idle', _.bind( this.infoWindow.segueIn, this.infoWindow ) )
  },

  removeInfoWindows : function()
  {
    // NOTE: easy
    $('.infowindow').removeClass('open')
  },

  segueIn : function()
  {
    BOUNDLESS.router.trigger('newViewLoaded')
    this.$el.hide().css('z-index', 0).fadeIn( BOUNDLESS.AnimationDuration )
  },

  show : function ()
  {
    if ( this.googleMapIsLoaded ) this.segueIn() },

  hide : function() {
    // Segue between map and main screen
    this.$el.fadeOut( 1000, function() {
      $(this).css('z-index', 0).hide() }
     )
    },

  // Segues the initial load of the map so the Google Map isn't loading tiles while transition from the main page
  googleMapLoaded: function() {
    this.trigger('slideloaded')
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

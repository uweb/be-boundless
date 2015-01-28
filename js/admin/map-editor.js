// A Backbone view for the Map Point editor
// Search or drag a marker to the desired location and the latitude/longitude coordinates will be set

var MapEditor = Backbone.View.extend({

  // The container that will hold the map.
  // The view will change after initializing to the parent of this element.
  el : '#map-editor',

  // Bind events to the view
  events : {
    'keydown input' : '_return_false'
  },

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
      draggable: true,
      animation: google.maps.Animation.DROP,
      position: new google.maps.LatLng( 47.653851681095, -122.30780562698 )
    }
  },

  // Initialize the map and marker based on their initial coordinates
  // Delegate the Google Map events
  // Add the searchbar to the Google Map
  // Change the Backbone view container to the parent div of the element holding the map
  //    - This is necessary to apply events to its sibling elements
  initialize: function ( options )
  {

    _.bindAll(this, 'delegateEvents', 'handleMarkerDragEnd', 'handleSearchSelection' )
    this.options = _.extend( {}, this.settings, options )

    this.options.marker.position = this.options.center || this.options.marker.position
    this.options.map.center = this.options.center || this.options.map.center

    this.map = new google.maps.Map( this.el, this.settings.map )
    this.marker = new google.maps.Marker( this.settings.marker )

    this.map.controls[ google.maps.ControlPosition.TOP_CENTER ].push( this.options.searchInput.get(0) );
    this.searchBox = new google.maps.places.SearchBox( this.options.searchInput.get(0))

    this.marker.setMap( this.map )
    this.delegateGoogleMapEvents()
    this.setElement( this.$el.parent() )
  },

  // Delegate the Google Map events to Backbone view functions
  delegateGoogleMapEvents: function()
  {
    new google.maps.event.addListener( this.marker, 'dragend', this.handleMarkerDragEnd )
    new google.maps.event.addListener( this.searchBox, 'places_changed', this.handleSearchSelection )
  },

  // When the marker is dropped by the user it will set hidden input fields for the markers current latitude and longitude coordinates.
  handleMarkerDragEnd: function ()
  {
    var markerPosition = this.marker.getPosition()

    this.options.fields.latitude.val( markerPosition.lat() )
    this.options.fields.longitude.val( markerPosition.lng() )

    this.map.panTo( markerPosition )
  },

  // When a search result is selected the map pans to the location and places a marker.
  // The hidden latitude and longitude input field values are set to the selected place's coordinates.
  handleSearchSelection: function( e )
  {

    var places = this.searchBox.getPlaces()
        , location = places[0].geometry.location

    this.map.panTo( location )
    this.marker.setPosition( location )

    this.options.fields.latitude.val( location.lat() )
    this.options.fields.longitude.val( location.lng() )

    return false
  },

  //  When enter is hit on an input field WordPress will save a draft.
  //  This function prevents that behavior from happening on the Google Map searchbar.
  _return_false : function( e )
  {
    if ( e.keyCode === 13 )
    {
      e.preventDefault()
      e.stopPropagation()
      return false
    }
  },


})

// Initialize the Map Editor Backbone view and attach with desired settings.
jQuery(document).ready(function( $ ) {

  window.mapEditor = new MapEditor({
      el : $('#map-editor'),
      searchInput: $('#map-search'),
      fields: {
        latitude: $('#latitude'),
        longitude: $('#longitude')
      },
      center: $('#latitude').val() && $('#longitude').val() ? new google.maps.LatLng( $('#latitude').val(), $('#longitude').val() ) : false
  })

})
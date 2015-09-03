// Map Point View
BOUNDLESS.Map = Backbone.View.extend({

  // The element to put the Google Map
  el : '.map',

  // className : 'slide',

  // tagName : 'div',

  listItems :
      '<div class="map-navigator"><h2 class="map-title">Seattle landmarks</h2>' +
      '<select class="points-of-interest uw-select">' +
      '<% _.each( points, function(point) { %>' +
        '<option data-marker="<%= point.title %>"><span><%= point.title  %></span>' +
      '<% }) %>' +
      '</select>',

//  overlays: '<h2 class="map-title">Campus Icons and Hidden Gems</h2>' +
//            '<a class="explore-more" href="https://www.uw.edu/maps">Explore more</a>',


  events : {
  },

  markers : [],

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
      scrollwheel: false,
      panControl: false,
      zoomControl: true,
      zoomControlOptions : {
        style: google.maps.ZoomControlStyle.SMALL,
        position: google.maps.ControlPosition.LEFT_CENTER
      },
      scaleControl : true,
      mapTypeControl: false,
      streetViewControl : false,
      draggable : true,
      center: new google.maps.LatLng( 47.653851681095, -122.30780562698 ),
      minZoom:1,
      maxZoom:19,
      disableDoubleClickZoom : false,
      styles : [
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#e0efef"
            }
        ]
    },
    {
      "featureType": "poi",
      "elementType": "labels",
      "stylers": [{
        "visibility": "off"
      }]

    },
    {
      "featureType": "poi.business",
      "elementType": "labels",
      "stylers": [
          {
              "visibility": "off"
          }
      ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#c5dac6"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c5dac6"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c5c6c6"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#fbfaf7"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#fbfaf7"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#acbcc9"
            }
        ]
    }
]
      // setMapTypeId:  google.maps.MapTypeId.ROADMAP,
      // mapTypeControl : false
    },
    icon : {
      purple : {
        url : $(window).width() < 768 ? 'wp-content/themes/be-boundless/less/svg/map-dot.png' : 'wp-content/themes/be-boundless/less/svg/map-marker-dark.png',
        size : new google.maps.Size(85, 85),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point( 42.5, 42.5 )
      },
      gold : {
        url : $(window).width() < 768 ? 'wp-content/themes/be-boundless/less/svg/map-dot-gold.png' : 'wp-content/themes/be-boundless/less/svg/map-marker-gold-light.png',
        size : new google.maps.Size(85, 85),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point( 42.5, 42.5 )
      }
    },
    marker: {
      // animation: google.maps.Animation.DROP,
    }


  },

  // Initialize the map.
  // This is executed by the router and only when the route is in place
  initialize : function( options )
  {
    _.bindAll( this,
      'delegateGoogleMapEvents',
      'handleClickListItems',
      'putMarkersOnMap',
      'removeInfoWindows',
      'render',
      'showOverlays'
    )
    this.points = new BOUNDLESS.Map.Points( POINTS )
    this.render()
  },

  // Render the map
  render : function() {
    // BOUNDLESS.replaceSlide( this.el )
    // $('#slides').append( this.el )
    this.map = new google.maps.Map( this.el, this.settings.map )
    this.delegateGoogleMapEvents()

    this.infowindow = new BOUNDLESS.Map.InfoWindow( this.map )
    $('.infowindow .image').click( this.removeInfoWindows() )

    this.bounds = new google.maps.LatLngBounds()
    this.points.each( this.putMarkersOnMap );
    this.map.fitBounds(this.bounds);
    this.showOverlays();


  },

  // Displays a list of the Points of Interest
  showOverlays : function() {
//    this.$el.append(this.overlays);
    this.$el.append( _.template( this.listItems, { points: this.points.toJSON() } ) )
  },

  handleClickListItems: function( e )
  {
      var markerTitle = $(e.target).data().slug
          , marker = this.markers[ markerTitle ]

      $(e.currentTarget).addClass('active').siblings().removeClass('active')
      google.maps.event.trigger( marker, 'click' )
  },

  // Delegate the Google map events to the Backbone view
  delegateGoogleMapEvents : function()
  {
    google.maps.event.addListener( this.map, "mousedown", this.removeInfoWindows )
    google.maps.event.addListener( this.map, "zoom_changed", this.removeInfoWindows )
    google.maps.event.addListenerOnce( this.map, "idle", function() {
      BOUNDLESS.app.set( 'map', true )
    })
  },


  // Put each vanilla marker on the map and extend the map bounds to show them
  putMarkersOnMap : function( information )
  {
      var marker = new google.maps.Marker( this.settings.marker )
              , latlng = new google.maps.LatLng( information.get( 'coordinate' ).latitude, information.get( 'coordinate' ).longitude )

      this.bounds.extend( latlng )

      marker.setPosition(  latlng )
      marker.setTitle( information.get('title') )
      //marker.setText( information.get('text') )
      marker.setMap( this.map )

      marker.setIcon( information.get('slug') === 'uw' ? this.settings.icon.gold : this.settings.icon.purple  )

      marker.set( 'information', information )

      this.markers[ information.get('title') ] = marker

      // Has to be binded like this to maintain scope in Google Maps Marker object
      google.maps.event.addListener( marker, 'click', _.bind( function() {
        this.handleClickMarker( marker )
      }, this ) )

  },

  // Handle the clicking of the marker
  handleClickMarker : function( marker )
  {
    this.$el.find( 'li[data-marker="'+marker.getTitle() + '"]' ).addClass('active').siblings().removeClass('active')
    this.map.panTo( marker.getPosition() )
    this.infowindow.render( marker )
    this.infowindow.segueIn()
  },

  removeInfoWindows : function()
  {
    $('.infowindow').removeClass('open')
  },

})

// Map Point Model
BOUNDLESS.Map.Point = Backbone.Model.extend({})

// Map Point Collection
BOUNDLESS.Map.Points = Backbone.Collection.extend({

  model : BOUNDLESS.Map.Point,

  initialize : function() {},

  error: function( error ) {}

})

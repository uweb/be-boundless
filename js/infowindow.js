// Boundless Map Information Window
// Each marker gets it's own attached window for now.
// Alternative is one window that moves around from marker to marker.
BOUNDLESS.Map.InfoWindow = function( map )
{

  this.div = document.createElement('div')
  this.div.className = 'infowindow'
  this.open = false

  // this.point = point
  this.setMap( map )

}

// Extend the Google Maps Overlay View
BOUNDLESS.Map.InfoWindow.prototype = new google.maps.OverlayView()

BOUNDLESS.Map.InfoWindow.prototype.render = function( marker )
{

  var overlayProjection = this.getProjection()
      , point = marker.getPosition()
      , info  = marker.get('information')
      , position = overlayProjection.fromLatLngToDivPixel( point)
      , padding = 40

  if ( this.div.className.indexOf('open') != -1 )
    this.div.className += ' switch'

  this.div.innerHTML = _.template(
    '<div class="image-mask">' +
      '<div class="image">' +
         '<img src="<%= _.first(info.get("image")) %>" title="<%= info.get("title") %>" />' +
        '<h3><%= info.get("title") %></h3>' +
      '</div>' +
    '</div>' +
    '<div class="text">'+
      '<p><%= info.get("text") %></p>' +
      '<% if (info.get("cta").text) { %>' +
      '<p class="boundless-button">' +
        '<span>' +
          '<a href="<%= info.get("cta").url %>"><%= info.get("cta").text %></a>' +
        '</span>' +
      '</p>' +
      '<% } %>' +
      '<span class="close"></span>' +
      '<span class="open"></span>' +
    '</div>' +
    '<div class="arrow"></div>',
    { info : info }
  );

  this.div.style.top  = position.y - ( this.div.offsetHeight + padding ) + 'px'
  this.div.style.left = position.x - this.div.offsetWidth / 2 + 'px'

}

BOUNDLESS.Map.InfoWindow.prototype.segueIn = function()
{
  this.div.style.display = 'inline'

  if ( this.div.className.indexOf('open') === -1 )
    this.div.className += ' open'

  this.map.panBy(0, (this.div.offsetHeight / -2));
  this.div.className = this.div.className.replace( ' switch' , '' )
}

// Called when the overlay.setMap function is called
BOUNDLESS.Map.InfoWindow.prototype.onAdd = function()
{
  var panes = this.getPanes()
  // this.div.style.display = 'inline'
  panes.floatPane.appendChild( this.div )

}

//  Positions the window in the correct location based on the marker's coordinates
BOUNDLESS.Map.InfoWindow.prototype.draw = function() {}

// Called when the overlay.setMap(null) is called
BOUNDLESS.Map.InfoWindow.prototype.onRemove = function()
{
  this.div.style.display = 'none'
  this.div.className = 'infowindow'
}

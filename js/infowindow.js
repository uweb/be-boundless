// Boundless Map Information Window
// Each marker gets it's own attached window for now.
// Alternative is one window that moves around from marker to marker.
BOUNDLESS.Map.InfoWindow = function( map, point, info )
{

  this.div = document.createElement('div')
  this.div.className = 'infowindow'
  this.div.innerHTML = _.template(
    '<div class="image">' +
       '<img src="<%= _.first(info.get("image")) %>" title="<%= info.get("title") %>" />' +
      '<h3><%= info.get("title") %></h3>' +
    '</div>' +
    '<div class="text">'+
      '<p><%= info.get("text") %></p>' +
      '<span class="close"></span>' +
      '<span class="open"></span>' +
    '</div>'
  , { info : info })

  this.point = point
  this.setMap( map )

}

// Extend the Google Maps Overlay View
BOUNDLESS.Map.InfoWindow.prototype = new google.maps.OverlayView()

// Called when the overlay.setMap function is called
BOUNDLESS.Map.InfoWindow.prototype.onAdd = function()
{
  var panes = this.getPanes()
  this.div.style.display = 'inline'
  panes.overlayLayer.appendChild( this.div )
}

//  Positions the window in the correct location based on the marker's coordinates
BOUNDLESS.Map.InfoWindow.prototype.draw = function()
{

    var overlayProjection = this.getProjection()
        , position = overlayProjection.fromLatLngToDivPixel( this.point)

  this.div.style.top  = position.y + 'px'
  this.div.style.left = position.x + 'px'

}

// Called when the overlay.setMap(null) is called
BOUNDLESS.Map.InfoWindow.prototype.onRemove = function()
{
  this.div.style.display = 'none'
}

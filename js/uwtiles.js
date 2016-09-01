BOUNDLESS.UWTiles = Backbone.View.extend({

  name : 'UW Campus',

  alt  : 'UW Map',

  tileSize : new google.maps.Size( 256, 256 ),

  maxZoom : 19,

  minZoom : 1,

  scrollwheel : false,

  streetViewControl : false,

  initialize : function() {},

  getTile: function( coord, zoom, ownerDocument ) {

    var div = ownerDocument.createElement('DIV');

    if(!this.withinLoadingBounds( coord, zoom ) )
    {
        div.style.width = '256px';
        div.style.height = '256px';
        div.style.background = '#FFFFFF';
        return div;
    }

    var img = ownerDocument.createElement('IMG');
    img.src = 'http://www.washington.edu/wp-content/themes/maps/tiles/' + zoom + '_' + coord.x + '_' + coord.y + '.png';

    img.onerror = function()
    {
      div.removeChild(img);
      div.style.width = '256px';
      div.style.height = '256px';
      div.style.background = '#FFFFFF';
    }

    div.appendChild(img);
    return div;

  },

  withinLoadingBounds : function( coord, zoom ) {

    return !(  coord.x > Math.floor(84049/Math.pow(2,19-zoom)) ||
                  coord.x < Math.floor(83996/Math.pow(2,19-zoom))  ||
                  coord.y < Math.floor(182980/Math.pow(2,19-zoom)) ||
                  coord.y > Math.floor(183017/Math.pow(2,19-zoom))
    );
  }

})
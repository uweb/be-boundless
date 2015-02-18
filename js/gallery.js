// Gallery View
BOUNDLESS.Gallery = Backbone.View.extend({

  id : 'gallery',
  tagName : 'div',

  template :
  '<div class="container">' +
    '<% _.each( images, function( image ) { %> ' +
     ' <img height="100" width="100" src="<%= Backbone.history.location.pathname + \'/files/\' + image.file %>" />' +
    ' <% }) %>' +
  '</div>',

  // This is executed by the router and only when the route is in place
  initialize : function( options )
  {
    _.bindAll( this, 'render' )
    this.images = new BOUNDLESS.Gallery.Images()
    this.images.on( 'sync', this.render )
  },

  render : function()
  {
    console.log(this.images.toJSON() )
    BOUNDLESS.replaceSlide(this.$el.html( _.template( this.template, {images : this.images.toJSON() }) ) )
    this.trigger('slideloaded')
  }

})


// Map Point Model
BOUNDLESS.Gallery.Image = Backbone.Model.extend({})

// Map Point Collection
BOUNDLESS.Gallery.Images = Backbone.Collection.extend({

  url : '?json=gallery.get_gallery',

  model : BOUNDLESS.Gallery.Image,

  initialize : function()
  {
    this.on( 'error', this.error )
    this.fetch()
  },

  parse : function( data )
  {
    return data[0].images
  },

  error: function( error )
  {
    console.error('There was an error retrieving the gallery.')
  }



})

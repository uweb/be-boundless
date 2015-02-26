// Gallery View
BOUNDLESS.Gallery = Backbone.View.extend({

  id : 'gallery',
  tagName : 'div',

  events : {
    'click img' : 'openImage'
  },

  settings : {
    itemSelector: 'li',
    transitionDuration : 0
  },

  template :
  '<div class="container">' +
    '<ul id="grid" class="masonry">' +
    '<% _.each( images, function( image ) { %> ' +
     '<li><img width="<%= image.src.width %>" height="<% image.src.height %>" src="<%= image.src.url %>" /><span class="caption"><%= image.caption %></span>' +
    ' <% }) %>' +
    '</ul>' +
  '</div>',

  templateOverlay : '',

  // This is executed by the router and only when the route is in place
  initialize : function( options )
  {
    _.bindAll( this,
      'animateImageIn',
      'render',
      'setMasonry'
    )
    this.images = new BOUNDLESS.Gallery.Images()
    this.images.on( 'sync', this.render )
  },

  render : function()
  {
    console.log(this.images.toJSON());
    BOUNDLESS.replaceSlide(this.$el.html( _.template( this.template, {images : this.images.toJSON() }) ) )
    this.$el.imagesLoaded( this.el, this.setMasonry )
    this.$el.find('li').on('inview', this.animateImageIn )
    this.trigger('slideloaded')
  },

  setMasonry : function()
  {
    this.masonry = new Masonry( document.getElementById('grid'), this.settings )
  },

  animateImageIn : function(e, isInView, visiblePartX, visiblePartY)
  {
    // TODO: reset the images that move off the bottom on scroll up
    if ( isInView )
    e.currentTarget.className = 'segue'
  },

  openImage : function() {
    console.log('do something with the image')
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
    if (data.status == 'error'){
      this.error(data.error);
      return;
    }
    return data[0].images
  },

  error: function( error )
  {
    console.error('There was an error retrieving the gallery: ' + error);
  }



})

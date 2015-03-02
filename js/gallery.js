// Gallery View
BOUNDLESS.Gallery = Backbone.View.extend({

  id : 'gallery',
  tagName : 'div',

  $active_container : false,

  events : {
    'click' : 'resetContainers',
    'click li' : 'clickImage'
  },

  settings : {
    itemSelector: 'li',
    transitionDuration : 0
  },

  template :
  '<div class="container">' +
    '<ul id="grid" class="masonry">' +
    '<% _.each( images, function( image ) { %> ' +
     '<li><img width="100%" src="<%= image.src.url %>" /><span class="caption"><%= image.caption %></span>' +
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
      'setMasonry',
      'resetContainers'
    );
    this.images = new BOUNDLESS.Gallery.Images()
    this.images.on( 'sync', this.render )
  },

  render : function()
  {
    BOUNDLESS.replaceSlide(this.$el.html( _.template( this.template, {images : this.images.toJSON() }) ) )
    this.$image_containers = this.$el.find('li');
    this.$el.imagesLoaded( this.el, this.setMasonry )
    this.$el.find('li').on('inview', this.animateImageIn )
    this.$grid = this.$el.find('#grid');
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

  clickImage : function(event) {
    event.stopPropagation();
    var $target = $(event.target);
    if ($target.prop("tagName") != 'LI'){
      $target = $target.parents('li');
    }
    // this behaviour will prevent the thing from closing if you click on it (and not a different one)
    // closing on any click would allow us to simplify the logic
    if(!this.$active_container){
      this.openImage($target);
    }
    else if($target[0] != this.$active_container[0]){
      this.resetContainers();
    }
  },
  
  openImage : function($container){
    this.$active_container = $container;
    this.$image_containers.addClass('inactive');
    $container.removeClass('inactive').addClass('active');
    $container.data('left', $container.position().left);
    $container.data('top', $container.position().top);
    $container.data('width', $container.width());
    $container.css({
      left:40,
      top:0,
      width:this.$grid.width() - 80
    });
  },

  resetContainers : function (){
    if (this.$active_container){
      $container = this.$active_container;
      $container.removeClass('active');
      $container.css({
        left:$container.data('left'),
        top:$container.data('top'),
        width:$container.data('width')
      });
      this.$image_containers.removeClass('inactive');
      this.$active_container = false;
    }
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

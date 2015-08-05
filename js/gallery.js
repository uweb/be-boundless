// Gallery View
BOUNDLESS.Gallery = Backbone.View.extend({

  id : 'gallery',
  tagName : 'div',

  events : {
    'scroll'   : 'close',
    'click li' : 'open'
  },

  settings : {
    itemSelector: 'li',
    transitionDuration : 0
  },

  template :
  '<div class="container">' +
    '<ul id="grid" class="masonry">' +
    '<% _.each( images, function( image ) { %> ' +
     '<li class="segue" ><img width="100%" src="<%= image.src.url %>" /><span class="caption"><p><%= image.caption %></p></span>' +
    ' <% }) %>' +
    '</ul>' +
  '</div>',

  templateOverlay : '',

  // This is executed by the router and only when the route is in place
  initialize : function( options )
  {
    _.bindAll( this,
      // 'animateImageIn',
      'render',
      'open',
      'close',
      'removeInactive',
      'setMasonry',
      'setDimensions',
      'getImagePosition'
    )
    this.images = new BOUNDLESS.Gallery.Images()
    this.images.on( 'sync', this.render )
  },

  render : function()
  {
    this.$('#slide').after( this.el )
    BOUNDLESS.replaceSlide(this.$el.html( _.template( this.template, {images : this.images.toJSON() }) ) )
    this.$el.imagesLoaded( this.el, this.setMasonry )
    // this.$el.find('li').on('inview', this.animateImageIn )
  },

  setMasonry : function( images )
  {
    this.trigger('slideloaded')
    this.$grid = this.$el.find('#grid');

    this.masonry = new Masonry( this.$grid.get(0), this.settings )

    this.images.each( this.setDimensions )
  },

  // animateImageIn : function(e, isInView, visiblePartX, visiblePartY)
  // {
  //   // TODO: reset the images that move off the bottom on scroll up
  //   if ( isInView )
  //     $(e.currentTarget).removeClass('segue');
  // },

  setDimensions : function( model, index )
  {
    var $element = this.$el.find('li').eq( index )

    $element.attr({ id: model.cid })

    var original = {
      width : $element.width(),
      left : $element.position().left,
      top : $element.position().top
    } ,

    dimensions = _.extend( {
      translateZ: "0px",
      width : $element.width(),
      left : 0,
    }, this.getImagePosition( $element ) )

    model.set( {'dimensions' : dimensions, 'original' : original } )

  },

  open : function(e){

    var $this = $( e.currentTarget )
    , model = this.images.get( $this.attr('id'))
    , open = this.images.findWhere({ open : true } )

    // todo : shouldn't need the open variable here
    if ( open ) {
      this.close()
      return false
    }

    model.set( 'open', true )
    $this
      .addClass('active')
      .velocity( _.extend( model.get('dimensions'),  { top :  this.$el.scrollTop() } ), 500 )
      .siblings().addClass('inactive')


    return false
  },

  close : function()
  {
    var open = this.images.findWhere({ open : true } )

    if ( open )
    {
      open.set( 'open', false )
      return this.$grid.find('#'+open.cid).velocity( 'reverse', this.removeInactive )
    }

  },

  removeInactive : function()
  {
    this.$('li').removeClass('active inactive')
  },

  getImagePosition : function( element )
  {
    var adjust = ( this.$grid.width() / element.width() ) * element.height() > $(window).outerHeight() * 0.8
    , width       =  adjust ? ( element.width() / element.height() ) * $(window).outerHeight() * 0.8 : this.$grid.width()
    , left           = adjust ? ( this.$grid.width() - width  - 30 ) / 2 : 0
    return  { width : width, left : left }
  },

})

// Gallery Image Model
BOUNDLESS.Gallery.Image = Backbone.Model.extend({

  defaults  : {
    open : false,
    original : {},
    dimensions : {}
  }

})

// Gallery Images Collection
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
    if ( data.status == 'error' )
      return this.error( data.error )

    return data[0].images
  },

  error: function( error )
  {
    console.error('There was an error retrieving the gallery: ' + error);
  }



})

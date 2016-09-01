var GalleryEditor = Backbone.View.extend({

  el : '#gallery-editor',

  frameoptions : {
    id : 'gallery-selector',
    frame: 'post',
    state: 'gallery',
    title: 'Create a gallery',
    editing:    true,
    multiple:   true,
  },


  events : {
    'click .add-gallery' : 'openMediaFrame'
  },

  template : '<ul id="grid">' +
      '<% _.each( images, function( image ) { %> '+
        '<li> <img src="<%= image.sizes.medium.url%>" /> '+
      '<% }) %>' +
  '</ul>',

  initialize : function( options )
  {
    _.bindAll( this,
      'openMediaFrame',
      'render',
      'selectGallery'
    )

    this.options = _.extend( {}, this.settings , this.$el.data(), options )

    this.mediaframe = wp.media.frames.frame = wp.media( this.frameoptions )
    this.mediaframe.on( 'update', this.selectGallery )

    this.$el.sortable()
    this.$el.on( 'sortstop', this.reorder )
    this.$el.find('.preview-gallery').imagesLoaded( this.masonry )
  },

  render : function() {
    this.$el.find('.preview-gallery').html(_.template( this.template, {images : this.selection.toJSON() } ))
    this.$el.find('.preview-gallery').imagesLoaded( this.masonry )
  },

  masonry : function()
  {
    this.masonry = new Masonry( document.getElementById('grid'), this.settings )
  },

  openMediaFrame : function( e )
  {

    // TODO: must be a way to set the selectino of the current view instead of using an external editing function
    if ( this.selection || this.$el.find('input').val().length  )
      wp.media.gallery.edit( '[gallery ids="' + this.$el.find('input').val() + '"]').on('update', this.selectGallery )
   else
      this.mediaframe.open()

  },

  selectGallery : function( selection )
  {

    this.selection = selection
    this.render()


    // this.mediaframe.state().set( 'selection', selection )
    // this.$el.find('input').val(  wp.media.gallery.shortcode( selection ).string() )
    this.$el.find('input').val( _.pluck( this.selection.toJSON(), 'id' ) )
  }



})

jQuery(document).ready(function( $ ) {

  if ( $('#gallery-editor').length )
  {
    window.galleryEditor = new GalleryEditor( { selection : $('#gallery-input').val() })
  }

})


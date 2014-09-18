UW = UW || {}

UW.HomepageSlider = Backbone.View.extend({

  el : '.uw-homepage-slider-container',

  slides : '.uw-homepage-slider',

  headline : '.next-headline',

  template : '<p class="next-headline slide-<%= slide %>" style="display:block;"><%= title %></p>',

  events : {
    'click .next-headline' : 'nextSlide',
  },

  initialize : function( options )
  {
    _.bindAll( this, 'render', 'nextSlide', 'changeNextArticle' )
    this.count = this.$el.children( this.slides ).length
    this.showNextHeadline()
    this.changeNextArticle()
  },

  nextSlide : function( e )
  {
    this.$el.children( this.slides).last().fadeOut( this.rotateSlides )
  },

  rotateSlides : function()
  {
    var $this    = $( this )
    $this.insertBefore( $this.siblings(this.slides).first() ).show()
    UW.homepageslider.changeNextArticle()
  },

  showNextHeadline : function()
  {
    this.$el.find( this.headline ).show()
  },

  changeNextArticle: function()
  {
    this.$el.find( this.headline).replaceWith( this.render )
  },

  render : function()
  {
    var slide = this.$el.children( this.slides ).eq( this.count - 2 )
    return _.template( this.template, { title: slide.find('h1').text(), slide: slide.data().id })
  }

})

UW.HomepageSlider.initialize = function() {
  if ( $('.uw-homepage-slider').length  > 1 )
    UW.homepageslider = new UW.HomepageSlider();
}

$(document).ready( UW.HomepageSlider.initialize )
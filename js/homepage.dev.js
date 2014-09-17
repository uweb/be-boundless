UW = UW || {}

UW.HomepageSlider = Backbone.View.extend({

  el : '.uw-homepage-slider-container',

  slides : '.uw-homepage-slider',
  headline : '.next-headline',

  events : {
    'click .next-headline' : 'nextSlide',
  },

  initialize : function( options )
  {
    _.bindAll( this, 'nextSlide', 'changeNextArticle' )
    this.count = this.$el.children( this.slides ).length
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

  changeNextArticle: function()
  {
    var title = this.$el.children( this.slides ).eq( this.count - 2 ).find('h1').text()
    this.$el.find( this.headline).html( title )

  }

})

UW.HomepageSlider.initialize = function() {
  UW.homepageslider = new UW.HomepageSlider();
}

$(document).ready( UW.HomepageSlider.initialize )
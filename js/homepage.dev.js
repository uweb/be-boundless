UW.baseUrl = 'http://www.washington.edu/home/'
UW.sources = {
  quicklinks : UW.baseUrl + 'wp-admin/admin-ajax.php?action=quicklinks',
  search     : UW.baseUrl + 'wp-admin/admin-ajax.php'
};UW = UW || {}
console.log(UW.baseURL)
UW.baseURL = 'http://www.washington.edu/home/';
console.log(UW.baseURL)

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
    var title = this.$el.children( this.slides ).eq( this.count - 2 ).find('h1').text()
    this.$el.find( this.headline).html( title )

  }

})

UW.HomepageSlider.initialize = function() {
  if ( $('.uw-homepage-slider').length  > 1 )
    UW.homepageslider = new UW.HomepageSlider();
}

$(document).ready( UW.HomepageSlider.initialize )
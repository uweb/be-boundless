UW.HomepageSlider = Backbone.View.extend({

  el : '.uw-homepage-slider-container',

  slides : '.uw-homepage-slider',

  headline : '.next-headline',

  template : '<button class="next-headline slide-<%= slide %>" style="display:block;"><span>NEXT</span><%= title %></button>',

  events : {
    'click .next-headline' : 'nextSlide',
  },

  initialize : function( options )
  {
    _.bindAll( this, 'render', 'nextSlide', 'changeNextArticle' )
    this.count = this.$el.children( this.slides ).length
    $(this.slides).hide();
    $(this.slides).last().show();
    this.showNextHeadline()
    this.changeNextArticle(false)
  },

  nextSlide : function( e )
  {
    var $element = this.$el.children( this.slides).last()
    $element.fadeOut()
    this.rotateSlides($element);
    this.$el.children(this.slides).last().fadeIn();
  },

  rotateSlides : function($element)
  {
    //var $this    = $( this )
    $element.insertBefore( $element.siblings(this.slides).first() );
    UW.homepageslider.changeNextArticle(true);  
  },

  showNextHeadline : function()
  {
    this.$el.find( this.headline ).show()
  },

  changeNextArticle: function(edit_focus)
  {
    this.$el.find( this.headline).replaceWith( this.render )
    if (edit_focus){
        this.$el.find('button').focus();
    }
  },

  render : function()
  {
    var slide = this.$el.children( this.slides ).eq( this.count - 2 )
    return _.template( this.template, { title: slide.find('h3').text(), slide: slide.data().id })
  }

})

UW.HomepageSlider.initialize = function() {
  if ( $('.uw-homepage-slider').length  > 1 )
    UW.homepageslider = new UW.HomepageSlider();
}

$(document).ready( UW.HomepageSlider.initialize )

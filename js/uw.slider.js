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
    _.bindAll( this, 'render', 'nextSlide', 'changeNextArticle' );
    this.count = this.$el.children( this.slides ).length;
    this.prep_slides();
    this.showNextHeadline();
    this.changeNextArticle(false);
  },
  
  prep_slides : function () {
    var $slides = $(this.slides);
    for (var $slide, i = 0; i < $slides.length; i++){
        $slide = $slides.eq(i);
        $slide.find('a.uw-btn').attr('aria-describedby', $slide.find('h3').attr('id'));
    }
    $slides.hide();
    $slides.last().show();
  },

  nextSlide : function( e )
  {
    var $element = this.$el.children( this.slides).last()
    $element.fadeOut()
    this.rotateSlides($element);
    this.$el.children(this.slides).last().fadeIn().find('a').focus();
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

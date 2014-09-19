UW.baseUrl = Backbone.history.location.protocol + '//www.washington.edu/home/'
UW.sources = {
  quicklinks : UW.baseUrl + 'wp-admin/admin-ajax.php?action=quicklinks',
  search     : UW.baseUrl + 'wp-admin/admin-ajax.php'
};UW = UW || {}

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

$(document).ready( UW.HomepageSlider.initialize );var UW = UW || {}

UW.Facts = Backbone.View.extend({

  el : '.people',

  charts : '.uw-charts',

  window : $(window),

  delay : 40,

  initialize: function()
  {
    _.bindAll( this, 'inview', 'render', 'fadeInPeople',  'fade' ,'countDown' , 'updateNumber')

    this.window.scroll( this.inview );

    this.charts = $(this.charts)
    this.$rank  = $('#rank').css('opacity', 0)
    this.$numbers      = $('.number')
    this.chartposition = this.charts.position().top + this.charts.height() / 4
    this.height           = this.window.height()
  },

  render : _.once( function() {
    _.each( this.$el,  this.fadeInPeople )
    this.countDown()
  }),

  fadeInPeople: function( element )
  {
    element = $(element)
    var people = element.children( '.person' )
      , number  = element.children('.number')

    _.each( people, this.fade )

    number.delay( (people.length  -1 )* this.delay ).animate({
     opacity: 1,
     left: people.length * 17 + 6
    })
  },

  fade : function ( element, index )
  {
    $( element ).delay( index * this.delay ).fadeIn(20);
  },

  slide : function( elem )
  {
    elem = $(elem)
    elem.animate({ opacity: 1, left: elem.siblings('.person').length * 20 })
  },

  inview: _.throttle( function()
  {
    if (  this.window.scrollTop() + this.height > this.chartposition )
      this.render()
  }, 200 ),

  countDown : function()
  {
    this.$rank.animate({opacity: 1}, 20 * this.delay )
    _.each( _.range( 20 ).reverse() , this.updateNumber )
  },
  updateNumber : function( rank , i )
  {
    var this_ = this;

    _.delay( function() {

      this_.$rank.text( rank || 1 )

    }, (i + i * 0.8  ) * this.delay )
  }


})

UW.Facts.init = function() {
  UW.facts = new UW.Facts()
}



$(document).ready( UW.Facts.init )
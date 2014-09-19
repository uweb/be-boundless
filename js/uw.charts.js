var UW = UW || {}

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
     left: people.length * 20
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

    }, (i + i * .8  ) * this.delay )
  }


})

UW.Facts.init = function() {
  UW.facts = new UW.Facts()
}



$(document).ready( UW.Facts.init )
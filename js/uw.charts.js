var UW = UW || {}

UW.Facts = Backbone.View.extend({

  ACTIVATE : 'factive',

  el : '.people',

  charts : '.uw-charts',

  window : $(window),

  delay : 40,

  initialize: function()
  {
    _.bindAll( this, 'inview', 'render')

    this.window.scroll( this.inview );

    this.charts = $(this.charts)
    this.chartposition = this.charts.position().top + this.charts.height() / 4
    this.height           = this.window.height()


  },

  render : _.once( function() {
    UW.$body.addClass( this.ACTIVATE )
  }),


  inview: _.throttle( function()
  {
    if (  this.window.scrollTop() + this.height > this.chartposition )
      this.render()
  }, 200 ),

})

UW.Facts.init = function() {
  UW.facts = new UW.Facts()
}

$(document).ready( UW.Facts.init )

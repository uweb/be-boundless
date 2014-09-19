<div class="uw-charts">
  <div class="container">

    <div class="row">

      <div class="uw-fast-facts">
        <span>Fast Facts</span>
      </div>

      <div class="fact-1 col-md-5 col-md-offset-1">

          <div><span>#</span><div id="rank">1</div></div>
          <p class="fact-text">The UW is top-ranked school in medical education for family, rural and primary care</p>

      </div>


      <div class="col-md-6 faculty-facts">
        <h4>Faculty Facts</h4>
        <div class="row">
          <div class="col-md-5 title">MacArthur Fellows</div>
          <div class="col-md-7 people">
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person bar"></div>
            <div class="number">15</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 title">National Book Award</div>
          <div class="col-md-7 people">
            <div class="person"></div>
            <div class="person"></div>
            <div class="person bar"></div>
            <div class="number">2</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 title">Nobel Prize</div>
          <div class="col-md-7 people">
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person"></div>
            <div class="person bar"></div>
            <div class="number">6</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 title">Pulitzer Prize</div>
          <div class="col-md-7 people">
            <div class="person"></div>
            <div class="person"></div>
            <div class="person bar"></div>
            <div class="number">2</div>
          </div>
        </div>
      </div>

  </div>
</div>

<script type="text/javascript">

var UW = UW || {}

UW.Facts = Backbone.View.extend({
  el : window,

  delay : 70,

  charts : '.uw-charts',

  events : {
    'scroll' : 'inview'
  },

initialize: function()
  {
    _.bindAll( this, 'inview', 'render', 'fade', 'showNumbers' )
    this.charts           = $( this.charts )
    this.$people         = $('.person')
    this.$numbers      = $('.number')
    this.chartposition = this.charts.position().top + this.charts.height()
    this.height           = this.$el.height()
  },

  render : _.once( function() {
    this.$people.each( this.fade )
    _.delay( this.showNumbers, this.$people.length * this.delay )
  }),

  fade : function ( i, elem )
  {
    $(elem).delay( i * this.delay ).fadeIn(50);
  },

  showNumbers : function()
  {
    console.log(this.$numbers);_.each( this.$numbers, this.slide );
  },

  slide : function( elem )
  {
    var elem = $(elem)
    elem.animate({opacity: 1,left: elem.siblings('.person').length * 20 })
  },

  inview: _.throttle( function()
  {
    if (  this.$el.scrollTop() + this.height > this.chartposition )
      this.render()
  }, 200)

})

UW.Facts.init = function() {
  UW.facts = new UW.Facts()
}

$(document).ready( UW.Facts.init )

</script>










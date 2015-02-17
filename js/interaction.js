// Navigation View
BOUNDLESS.Navigation = Backbone.View.extend({

  el : '.navigation',

  hidden : true,

  message : '#message',

  events : {
    // 'mouseenter' : 'toggleBlur',
    // 'mouseleave' : 'toggleBlur',
    'click li' : 'segueOut',
    'click .show-nav' : 'segueIn',
  },

  initialize : function( options )
  {
    _.bindAll( this, 'resetMargins')
    this.$toggle = this.$('.show-nav')
    this.resetMargins()
  },

  segueOut : function( e )
  {
    this.$toggle.addClass( 'close' )
    this.$el.transition({ left : -1600 }, BOUNDLESS.AnimationDuration, 'easeInOutQuad', this.resetMargins )
    this.hidden = true
  },

  segueIn: function( e ) {
     this.$toggle.removeClass( 'close' )
     this.$el.transition({ left : -230 }, BOUNDLESS.AnimationDuration, 'easeInOutQuad' )
     // TODO: Animate to for the easeOutElastic easing
     this.$el.find('li').stop().animate({ marginRight: 20 }, 3 * BOUNDLESS.AnimationDuration, 'easeOutElastic' )
     this.hidden = false
  },

  segue : function()
  {
      // Backbone.history.fragement protects against linking directily to a slide
      if ( this.hidden && ! Backbone.history.fragment ) this.segueIn()
      if ( ! this.hidden && Backbone.history.fragment.length ) this.segueOut()
      if ( Backbone.history.fragment.length ) this.$toggle.addClass( 'close' )
  },

  // Resets the margins of the navigation LI's to create the elastic bounce in effect
  // TODO: is there a better implementation?
  resetMargins : function()
  {
    // this.$el.find('li').css({ marginRight: 350 })
  }

})
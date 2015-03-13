// Navigation View
BOUNDLESS.Navigation = Backbone.View.extend({

  el : '.navigation',

  hidden : false,

  events : {
    'click li' : 'segueOut',
    'click .show-nav' : 'segueIn',
  },

  initialize : function( options )
  {
    _.bindAll( this,
     'bounce',
     'complete',
     'resetMargins'
     )
    this.$navigationItems = this.$el.find('li')
    this.$homepage = $('#boundless-slide')

    this.resetMargins()
  },

  segueOut : function( e )
  {
    this.$el.removeClass('segue')
    // We have to animate the marginRight instead of using 'resetMargins' to avoid an animation jump after its completed
    this.$el.velocity({ translateZ: 0, translateX: -235 * this.$navigationItems.length  }, BOUNDLESS.AnimationDuration, 'easeInOutQuad', this.complete )

    this.hidden = true
    // Allows for clicking any part of the navigation tile
    // Protected by an event for browser back/forward navigation
    if ( e ) BOUNDLESS.router.navigate( $(e.currentTarget).data().route, { trigger: true} )
  },

  complete : function()
  {
    // todo: more sublte way to implementing this
    this.resetMargins()
    this.$homepage.addClass('blur')
    this.trigger('complete')
  },

  segueIn: function( e ) {
     this.$homepage.removeClass('blur')
     this.$el.addClass('segue')
     // Given the iffyness of the clip mask a delay may be the more robust cross-browser solution
     // this.$el.velocity( "reverse", {complete : this.bounce, delay: 600 })
     this.$el.velocity({ translateX: '0%' }, BOUNDLESS.AnimationDuration, 'easeInOutQuad', this.bounce );
     this.hidden = false
  },

  segue : function()
  {
      // Backbone.history.fragment protects against linking directily to a slide
      if ( this.hidden && ! Backbone.history.fragment ) this.segueIn()
      if ( ! this.hidden && Backbone.history.fragment.length ) this.segueOut()
      if ( Backbone.history.fragment.length ) this.$el.removeClass( 'segue' )
  },

  bounce : function()
  {
     // Animate is used for the easeOutElastic easing
     // TODO: why doesn't velocity understand the easing?
      this.$navigationItems.animate({ marginRight: 20 }, 2 * BOUNDLESS.AnimationDuration, 'easeOutElastic' )
  },

  // Resets the margins of the navigation LI's to create the elastic bounce in effect
  resetMargins : function()
  {
    this.$navigationItems.velocity({ marginRight: 30 })
  }


})

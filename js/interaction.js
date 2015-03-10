// Navigation View
BOUNDLESS.Navigation = Backbone.View.extend({

  el : '.navigation',

  hidden : false,

  message : '#message',

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
    this.$toggle = this.$('.show-nav')
    this.$homepage = $('#boundless-slide')

    this.resetMargins()
  },

  segueOut : function( e )
  {
    this.$homepage.addClass('blur')
    this.$el.removeClass('segue')
    // We have to animate the marginRight instead of using 'resetMargins' to avoid an animation jump after its completed
    this.$el.velocity({ translateZ: 0, translateX: -1650}, BOUNDLESS.AnimationDuration, 'easeInOutQuad', this.complete )
      .find('li').animate({marginRight: 30 }, BOUNDLESS.AnimationDuration )

    this.hidden = true
    // Allows for clicking any part of the navigation tile
    // Protected by an event for browser back/forward navigation
    if ( e ) BOUNDLESS.router.navigate( $(e.currentTarget).data().route, { trigger: true} )
  },

  complete : function()
  {
    // todo: more sublte way to implementing this
    this.trigger('complete')
  },

  segueIn: function( e ) {
     this.$homepage.removeClass('blur')
     this.$el.addClass('segue')
     this.$el.velocity( "reverse", {complete : this.bounce })
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
      this.$el.find('li').animate({ marginRight: 20 }, 2 * BOUNDLESS.AnimationDuration, 'easeOutElastic' )
  },

  // Resets the margins of the navigation LI's to create the elastic bounce in effect
  resetMargins : function()
  {
    this.$el.find('li').css({ marginRight: 30 })
  }


})

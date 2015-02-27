// Navigation View
BOUNDLESS.Navigation = Backbone.View.extend({

  el : '.navigation',

  hidden : true,

  message : '#message',

  events : {
    'click li' : 'segueOut',
    'click .show-nav' : 'segueIn',
  },

  initialize : function( options )
  {
    _.bindAll( this,
     'bounce',
     'resetMargins'
     )
    this.$toggle = this.$('.show-nav')
    this.resetMargins()
  },

  segueOut : function( e )
  {
    this.$el.removeClass('segue')
    // We have to animate the marginRight instead of using 'resetMargins' to avoid an animation jump after its completed
    this.$el.transition({ left : -1650}, BOUNDLESS.AnimationDuration, 'easeInOutQuad' )
      .find('li').transition({marginRight: 30 }, BOUNDLESS.AnimationDuration )
    this.hidden = true
    // Allows for clicking any part of the navigation tile
    // Protected by an event for browser back/forward navigation
    if ( e ) BOUNDLESS.router.navigate( $(e.currentTarget).data().route, { trigger: true} )
  },

  segueIn: function( e ) {
    this.$el.addClass('segue')
    this.$el.transition({ left : -230 }, BOUNDLESS.AnimationDuration, 'easeInOutQuad', this.bounce )
    this.hidden = false
  },

  segue : function()
  {
      // Backbone.history.fragement protects against linking directily to a slide
      if ( this.hidden && ! Backbone.history.fragment ) this.segueIn()
      if ( ! this.hidden && Backbone.history.fragment.length ) this.segueOut()
      if ( Backbone.history.fragment.length ) this.$el.removeClass( 'segue' )
  },

  bounce : function()
  {
     // Animate is used for the easeOutElastic easing
    this.$el.find('li').animate({ marginRight: 20 }, 2 * BOUNDLESS.AnimationDuration, 'easeOutElastic' )
  },

  // Resets the margins of the navigation LI's to create the elastic bounce in effect
  resetMargins : function()
  {
    this.$el.find('li').css({ marginRight: 30 })
  }


})

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
    this.$navwrap = this.$('#nav-wrap')
    this.$homepage = $('#boundless-slide')

    this.resetMargins()
  },

  segueOut : function( e )
  {
    this.$el.removeClass('segue')
    // We have to animate the marginRight instead of using 'resetMargins' to avoid an animation jump after its completed
    this.$el.velocity({ translateX: '-100%'}, BOUNDLESS.AnimationDuration, 'easeInOutQuad', this.complete )

    // Allows for clicking any part of the navigation tile
    // Protected by an event for browser back/forward navigation
    if ( e ){
      BOUNDLESS.router.navigate( $(e.currentTarget).data().route, { trigger: true} );
      if (BOUNDLESS.mobile.is_mobile){
        this.$navwrap.find('li').not(e.currentTarget).addClass('faded');
        this.$navwrap.velocity({scrollLeft : this.$navwrap.scrollLeft()+$(e.currentTarget).offset().left - 20}, 500);
      }
    }
  },

  complete : function()
  {
    // todo: more sublte way to implementing this
    this.hidden = true
    this.resetMargins()
    this.$homepage.addClass('blur')
    this.trigger('complete')
  },

  segueIn: function( e ) {
     this.$homepage.removeClass('blur')
     this.$el.addClass('segue')
     // Given the iffyness of the clip mask a delay may be the more robust cross-browser solution
     //this.$el.velocity( "reverse", {complete : this.bounce }) //removed delay: 600
     this.$el.velocity({ translateX: '0%' }, BOUNDLESS.AnimationDuration, 'easeInOutQuad', this.bounce );
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
     this.hidden = false
     this.$el.find('li').animate({ marginRight: 20 }, 2 * BOUNDLESS.AnimationDuration, 'easeOutElastic' ).removeClass('faded');
  },

  // Resets the margins of the navigation LI's to create the elastic bounce in effect
  resetMargins : function()
  {
    this.$el.find('li').css({ marginRight: 30 })
  }


})

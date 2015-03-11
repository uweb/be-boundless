// Navigation View
BOUNDLESS.Navigation = Backbone.View.extend({

  el : '.navigation',

  hidden : true,
  next_slide: undefined,

  message : '#message',

  events : {
    'click li' : 'segueOut'
  },

  initialize : function( options )
  {
    _.bindAll( this,
     'transitionDone',
     'bounce',
     'segueIn',
     'resetMargins'
     )
    this.$toggle = this.$('.show-nav')
    this.$el.on(BOUNDLESS.TransitionEvents, this.transitionDone);
    this.on('slideclosed', this.segueIn);
    this.setListWidth();
    this.$navwrap = this.$el.find('#nav-wrap');
    this.$navwrap.scrollLeft(this.$navwrap.find('ul').width());
    //this.resetMargins()
  },
  
  setListWidth : function() {
    if (BOUNDLESS.mobile.is_mobile){
      this.$el.find('ul').width(function() {
        var total_width = 0;
        $(this).children().each(function() {
          total_width = total_width + $(this).width();
        });
        return total_width;
      });
    }
  },

  segueOut : function( e )
  {
    if (BOUNDLESS.mobile.is_mobile) {
      this.$navwrap.animate({scrollLeft: this.$navwrap.find('ul').width()}, 500, 'linear', function() {
        this.$el.removeClass('segue')
      }.bind(this));
    }
    else {
      this.$el.removeClass('segue')
    }
    // We have to animate the marginRight instead of using 'resetMargins' to avoid an animation jump after its completed
    //this.$el.transition({ left : -1650}, BOUNDLESS.AnimationDuration, 'easeInOutQuad' )
    //  .find('li').transition({marginRight: 30 }, BOUNDLESS.AnimationDuration )
    this.hidden = true
    // Allows for clicking any part of the navigation tile
    // Protected by an event for browser back/forward navigation
    if ( e ) {
      this.next_slide = $(e.currentTarget).data().route; 
    }
  },

  segueIn: function( e ) {
    this.$el.addClass('segue')
    //this.$el.transition({ left : -230 }, BOUNDLESS.AnimationDuration, 'easeInOutQuad', this.bounce )
    this.hidden = false
  },

  segue : function()
  {
      // Backbone.history.fragement protects against linking directily to a slide
      if ( this.hidden && ! Backbone.history.fragment ) {
        BOUNDLESS.router.default();
      }
      if ( ! this.hidden && Backbone.history.fragment.length ) this.segueOut()
      if ( Backbone.history.fragment.length ) this.$el.removeClass( 'segue' )
  },

  transitionDone: function(event) {
    if (['transform', '-webkit-transform', '-moz-transform', '-o-transform', '-ms-transform'].indexOf(event.originalEvent.propertyName) !== -1){
      if (this.hidden) {
        //trigger view stuff here
        this.resetMargins();
        if (this.next_slide !== undefined) {
          // consider moving this back to segue if transition to slide is too slow
          BOUNDLESS.router.navigate( this.next_slide, { trigger: true} )
        }
      }
      else {
        this.bounce();
        //trigger default view stuff here
      }
    }
  },

  bounce : function()
  {
     // Animate is used for the easeOutElastic easing
    if ($(window).width() > 768){
      this.$el.find('li').animate({ marginRight: 20 }, 2 * BOUNDLESS.AnimationDuration, 'easeOutElastic' )
    }
    else {
      this.$el.find('#nav-wrap').animate({scrollLeft: 0}, 500, 'linear');
    }
  },

  // Resets the margins of the navigation LI's to create the elastic bounce in effect
  resetMargins : function()
  {
    this.$el.find('li').removeAttr('style');
  }


})

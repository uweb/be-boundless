// Navigation View
BOUNDLESS.Navigation = Backbone.View.extend({

  el : '.navigation',

  hidden : true,

  message : '#message',

  events : {
    // 'mouseenter' : 'addBlur',
    // 'mouseleave' : 'removeBlur',
    'click li' : 'segueOut',
    'click .show-nav' : 'showNav',
  },

  initialize : function( options )
  {
    _.bindAll(this, 'segueOut', 'segueIn', 'showNav');
    this.$toggle = this.$('.show-nav')
    this.segueIn();
    // this.$message = $('#message')
  },

  segueOut : function()
  {
    this.$toggle.addClass( 'close' )
    this.$el.transition({ left : -1600 }, BOUNDLESS.AnimationDuration, 'easeInOutQuad' )
    this.hidden = true
  },

  segueIn: function( e ) {
    BOUNDLESS.router.$slide.removeClass('open');
    this.$toggle.removeClass( 'close' )
    this.$el.transition({ left : -230 }, BOUNDLESS.AnimationDuration, 'easeInOutQuad' )
    this.hidden = false
  },

  showNav : function () {
    if (BOUNDLESS.router.currentView.preRemove && typeof(BOUNDLESS.router.currentView.preRemove == 'function')) {
      BOUNDLESS.router.currentView.preRemove(this.segueIn);
    }
    else {
      this.segueIn();
    }
  },

  segue : function()
  {
      // Backbone.history.fragement protects against linking directily to a slide
      //if ( this.hidden && ! Backbone.history.fragment ) this.segueIn()
      if ( ! this.hidden && Backbone.history.fragment.length ) this.segueOut()
      if ( Backbone.history.fragment.length ) this.$toggle.addClass( 'close' )
  }



})

// Navigation View
BOUNDLESS.Navigation = Backbone.View.extend({

  el : '.navigation',

  hidden : true,

  message : '#message',

  events : {
    // 'mouseenter' : 'addBlur',
    // 'mouseleave' : 'removeBlur',
    'click li' : 'segueOut',
    'click .show-nav' : 'segueIn',
  },

  initialize : function( options )
  {
    this.$toggle = this.$('.show-nav')
    // this.$message = $('#message')
  },

  segueOut : function()
  {
    this.$toggle.addClass( 'close' )
    this.$el.transition({ left : -1600 }, BOUNDLESS.AnimationDuration, 'easeInOutQuad' )
    this.hidden = true
  },

  segueIn: function( e ) {
     this.$toggle.removeClass( 'close' )
     this.$el.transition({ left : -230 }, BOUNDLESS.AnimationDuration, 'easeInOutQuad' )
     this.hidden = false
  },

  segue : function()
  {
      // Backbone.history.fragement protects against linking directily to a slide
      if ( this.hidden && ! Backbone.history.fragment ) this.segueIn()
      if ( ! this.hidden && Backbone.history.fragment.length ) this.segueOut()
      if ( Backbone.history.fragment.length ) this.$toggle.addClass( 'close' )
  }



})



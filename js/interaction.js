// Navigation View
BOUNDLESS.Navigation = Backbone.View.extend({

  el : '.navigation',
  message : '#message',

  events : {
    'mouseenter' : 'addBlur',
    'mouseleave' : 'removeBlur',
    'click .show-nav' : 'segueIn',
  },

  initialize : function( options )
  {
    _.bindAll( this, 'addBlur', 'removeBlur', 'segueIn', 'segueOut', 'show', 'animate');

    this.$message = $('#message')

    // Animate in the entire menu as a whole
    this.animate(-230, true )
  },

  addBlur : function()
  {
    this.$message.addClass( 'blur' )
  },

  removeBlur : function()
  {
    this.$message.removeClass("blur")
  },

  segueOut: function(){
    // Animate in the entire menu as a whole
    console.log('Hiding the navigation')
    this.animate(-1600)
  },

  segueIn : function()
  {
    this.animate(-230, true )
    this.show()
  },

  hide : function(){
    this.$message.fadeOut( BOUNDLESS.AnimationDuration )
    console.log('Hiding the message')
  },

  show: function(){
      this.$message.fadeIn( BOUNDLESS.AnimationDuration )
  	console.log('Showing the navigation')
  },

  animate: function(left, animatingIn ) {

    this.$el.animate({
    		left: left
    	},{
  			duration: 500,
  		  	easing: 'easeInOutQuad'
    })

    if ( animatingIn )
    {
      console.log('Bounce the tiles')

       // Bounce in the tiles
      this.$el.find("li").animate({
                marginRight: 20,
                opacity:1
              },{
                duration: 1500,
                easing: 'easeOutElastic'
      })
    }

  }


})



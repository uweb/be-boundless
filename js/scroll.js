// Navigation View
BOUNDLESS.Scroll = Backbone.View.extend({

  el : window,

  events : {
  	'scroll' : 'scroller'
  },

  initialize : function( options )
  {

	$('.slide').bind('inview', function (event, visible ) {
	  if (visible === true) {
	  	$(this).addClass( "visible" )
	  } else {
	  	$(this).removeClass( "visible" )
	  }
	})
  },

  scroller: function(){

  	$('.slide').each(function(){
  		var o = $(this),
  			offsets = o.offset().top,
  			scrollAmount = offsets- $(window).scrollTop()

  		if(o.hasClass('visible')) {
  			console.log(scrollAmount)
  			var distanceToTop = scrollAmount / 2,
  				bgPos = "center " + distanceToTop + "px";

  			o.css('background-position', bgPos)

  		}
  	})

  }	


})

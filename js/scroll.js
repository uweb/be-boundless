// Navigation View
BOUNDLESS.Scroll = Backbone.View.extend({

  el : window,

  events : {
  	'scroll' : 'scroller'
  },

  initialize : function( options )
  {

	$('#boundless-slide, .midground, .homepage-text').bind('inview', function (event, visible ) {
	  if (visible === true) {
	  	$(this).addClass( "visible" )
	  } else {
	  	$(this).removeClass( "visible" )
	  }
	})

	$('.curtains').curtain();

  },

  scroller: function(){

  	$('#boundless-slide').each(function(){
  		var o = $(this),
  			offsets = o.offset().top,
  			scrollAmount = offsets - $(window).scrollTop()

  		if(o.hasClass('visible')) {
  			var distanceToTop = scrollAmount / 4,
  				bgPos = "center " + distanceToTop + "px";

  			o.css('background-position', bgPos)

  		}
  	})

  	$('.midground').each(function(){
  		var o = $('#boundless-slide'),
  			that = $(this),
  			offsets = o.offset().top,
  			scrollAmount = offsets - $(window).scrollTop()

  		if(that.hasClass('visible')) {
  			var distanceToTop = Math.abs(scrollAmount / 2);

  			that.css('transform','translateY(' + distanceToTop + 'px)')

  		}
  	})

  	$('.homepage-text').each(function(){
  		var o = $('#boundless-slide'),
  			that = $(this),
  			offsets = o.offset().top,
  			scrollAmount = offsets - $(window).scrollTop()

  		if(that.hasClass('visible')) {
  			var distanceToTop = Math.abs(scrollAmount / 1);

  			that.css({
  				'transform'	: 'translateY(' + distanceToTop + 'px)'
  			})

  			if($(window).scrollTop() <10 ){
         		that.fadeIn("slow");
  			} else {
         		that.fadeOut("slow");
   			}


  		}
  	})

  	// Assign page to dot

  	var currentSlide = $('.slide.current').index(),
  		dots = $('#dots li')

  		dots.each(function(){
  			dots.removeClass('current-dot')
  			dots.eq(currentSlide).addClass('current-dot')
  		})


  }	


})

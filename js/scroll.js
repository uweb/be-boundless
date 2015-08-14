// Navigation View
BOUNDLESS.Scroll = Backbone.View.extend({

  el : window,

  events : {
  	'scroll' : 'scroller'
  },

  initialize : function( options )
  {

  	// _.bindAll(this,'dotNext','dotPrev')

  	this.$BoundlessSlide = $('#boundless-slide')


	$('.curtains').curtain({
    	nextSlide: function(){ 
  			// Figure out how to roll this into one function
  			var currentSlide = $('.slide.current').index(),
  			dots = $('#dots li')
	
  			dots.each(function(){
  				dots.removeClass('current-dot')
  				dots.eq(currentSlide).addClass('current-dot')
  			})  		
    	},
    	prevSlide: function() {
			// Figure out how to roll this into one function
  			var currentSlide = $('.slide.current').index(),
  			dots = $('#dots li')
	
  			dots.each(function(){
  				dots.removeClass('current-dot')
  				dots.eq(currentSlide).addClass('current-dot')
  			})  
    	}
	});


	(function(){
		// Figure out how to roll this into one function
  		var currentSlide = $('.slide.current').index(),
  		dots = $('#dots li')
	
  		dots.each(function(){
  			dots.removeClass('current-dot')
  			dots.eq(currentSlide).addClass('current-dot')
  		})  
	})();

  },


  scroller: function(){

  	// Set up variables for function
  	var parentSlide = this.$BoundlessSlide,
  		midGround = $('.midground'),
  		homepageText = $('.homepage-text'),

  		offsets = parentSlide.offset().top,
  		scrollTop = $(window).scrollTop(),
  		scrollAmount = offsets - scrollTop,

  		midGroundDistance = Math.abs(scrollAmount / 2);
  		homepageTextDistance = Math.abs(scrollAmount / 1);


  	if(parentSlide.hasClass('current')) {

  		var distanceToTop = scrollAmount / 4,
  			bgPos = "center " + distanceToTop + "px";

  		parentSlide.css('background-position', bgPos)

  		// Midground
  		midGround.css('transform','translateY(' + midGroundDistance + 'px)')

  		// Homepage Text
  		homepageText.css({
  			'transform'	: 'translateY(' + homepageTextDistance + 'px)'
  		})

  		// Fade in and out the homepage text [ Could be done with class switch? ]
  		if(scrollTop <10 ){
        	homepageText.fadeIn("slow");
  		} else {
        	homepageText.fadeOut("slow");
   		}

   		// Fixes scrollTop not rendering properly when top of page is scrolled to
   		if(scrollTop === 0 ){
   			midGround.css({ 'transform' : 'translateY(0px)' })
   			homepageText.css({ 'transform'	: 'translateY(0px)' })
   		}

  	}



  }	


})

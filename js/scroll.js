// Navigation View
BOUNDLESS.Scroll = Backbone.View.extend({

  el : window,

  events : {
  	'scroll' : 'scroller'
  },

  initialize : function( options )
  {

    this.$BoundlessSlide = $('#boundless-slide')

    this.$MobileCheck =  $('#dots').css('display') == 'none' ? true : false;



	$('.curtains').curtain({
           curtainLinks : '#dots a',
        	nextSlide: function(){
      			// Figure out how to roll this into one function
      			var currentSlide = $('.slide.current').index(),
      			dots = $('#dots li')

      			dots.removeClass('current-dot').eq(currentSlide).addClass('current-dot')

                      // Make sure the map fits the full screen tile
                      google.maps.event.trigger( BOUNDLESS.map.map, 'resize' )

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
  		scrollTop = this.$el.scrollTop(),
  		scrollAmount = offsets - scrollTop,

  		midGroundDistance = Math.abs(scrollAmount / 2);
  		homepageTextDistance = Math.abs(scrollAmount / 1);


  	if(parentSlide.hasClass('current') && !this.$MobileCheck) {

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
        if(scrollTop <10){
          	homepageText.fadeIn("slow");
  		  } else if ( !this.$MobileCheck ) {
          	homepageText.fadeOut("slow");
   		 }

   		// Fixes scrollTop not rendering properly when top of page is scrolled to
   		if(scrollTop === 0){
   			midGround.css({ 'transform' : 'translateY(0px)' })
   			homepageText.css({ 'transform'	: 'translateY(0px)' })
   		}

  	}

        // if ( $('#tagboard').data().position < $(window).scrollTop() )
        // {
        //   $('.tagboard-embed').css( {'overflow': 'scroll', 'height': 1000} )
        // } else {
        //   $('.tagboard-embed').css( {'overflow': 'hidden', 'height': 1000 } )
        // }


  }


})

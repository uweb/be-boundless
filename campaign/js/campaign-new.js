// Check if you youtube's been played / for script loading issues
var youtubeFlag = false;
var currentController;

$(function(){


	// first add raf shim
	// http://www.paulirish.com/2011/requestanimationframe-for-smart-animating/
	window.requestAnimFrame = (function(){
	  return  window.requestAnimationFrame       ||
	          window.webkitRequestAnimationFrame ||
	          window.mozRequestAnimationFrame    ||
	          function( callback ){
	            window.setTimeout(callback, 1000 / 60);
	          };
	})();

	$( "#pause" ).click(function(e) {
      var $this = $(e.target);
      var $vid = $(e.target).parent().find('video');
      if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
      $this.parent().toggleClass('paused');
    });

	// // Get the width of the viewport
	// var widthInner 		= window.innerWidth,
	// 	$dyno 			= $('#dyno'),
	// 	$body			= $('body'),
	// 	section			= document.getElementsByTagName('section'),
	// 	currentOffset	= 0,
	// 	storyUp			= false;

	// // Listen for resizes
	// window.addEventListener('resize', function(){
	// 	widthInner 	= window.innerWidth;
	// 	offsetX 	= window.pageXOffset;
	// })

    // Navigation via keyboard arrows

    // document.onkeydown = function(e){
    // 	var $prev = $('.prevSlide'),
    // 		$next = $('.nextSlide')

    // 	if ( e.keyCode == '37' ) {
    // 		$prev.click().focus();
    // 	} else if ( e.keyCode == '39')  {
    // 		$next.click().focus();
    // 	} else if ( e.keyCode == '27' && storyUp ) {
    // 		$('button#empty').click();
    // 	} else {
    // 		return;
    // 	}
    // }


    //get number of slides in stories of impact
    var $storyCount = $(".story").length,
    	$isMobile = $(window).width() < 768,
    	$storySlides = (!$isMobile) ? Math.ceil($storyCount/3) : Math.ceil($storyCount/2), //Desktop or mobile
    	$storyWidth = $(".story").first().outerWidth(true),
    	$slideWidth = (!$isMobile ? $storyWidth*3 : $storyWidth*2) + 90;
    	$currentSlide = 1;

console.log($storySlides)

    // Right/Left arrow event listener
	$('#impact-stories button').on('click',function(e){
		e.preventDefault();
		if($(this).hasClass("prevSlide")){ //clicked left
			//scroll to previous
			$currentSlide--;
			$currentSlide = $currentSlide < 1 ? $storySlides : $currentSlide;
		} else { //clicked right
			$currentSlide++;
			$currentSlide = $currentSlide > $storySlides ? 1 : $currentSlide;
		}

		$("#story-slider").css({
		  '-webkit-transform' : 'translate(-' + $slideWidth*($currentSlide-1) + 'px, 0)',
		  '-ms-transform'     : 'translate(-' + $slideWidth*($currentSlide-1) + 'px, 0)',
		  'transform'         : 'translate(-' + $slideWidth*($currentSlide-1) + 'px, 0)'
		});
	});

	$('a.video').on('click', function(e) {
		e.stopPropagation();
		e.preventDefault();
		$(this).closest('.play-button').children('a').trigger('click');
	});

	$('.campaign-button').on('click', function(e) {
		e.stopPropagation();
		e.preventDefault();
		$(this).find('a').trigger('click');
		//console.log($(this).find('a')[0].trigger)
	});

	// $('section.campaign-excerpt').on('click', function(e) {
	// 	e.stopPropagation();
	// 	e.preventDefault();
	// 	if( $(this).find('.campaign-button').hasClass("video") ){
	// 		console.log('camp button video click event');
	// 		$(this).find('a[data-lity]').trigger('click.lity');
	// 	} else {
	// 		$(this).find('.campaign-button').trigger('click');
	// 		console.log('camp button non-video click event');
	// 	}
	// });

	$('a:not([data-lity]):not(".video")').on('click', function(e) {
		e.stopPropagation();
		this.click();
		console.log('a not lity, not video click event');
	});


	$("#cv2-give-now").on('click', function(e){

		e.preventDefault();

		$('#give-iframe').toggleClass("active");

		if(isEmpty($('#give-iframe .container'))) {
			$('<iframe>', {
				src: 'https://online.gifts.washington.edu/secure/?nobanner=true&activateTab=0&appeal=17XBS&page=make&code=' + 'IMPFND' + '&amount=' + $("#cv2-widget-give-amount").val().replace(/,/g, ''),
				frameborder: 0,
				width: '100%',
				height: '100%',
			}).appendTo('#give-iframe');
		}

		// if(give.innerHTML === 'Give now'){
		// 	give.innerHTML = 'Close';
		// } else {
		// 	give.innerHTML = 'Give now';
		// }

		$('body').toggleClass('give-modal-active');

	})

	$("#cv2-give-monthly").on('click', function(e){

		e.preventDefault();

		$('#give-iframe').toggleClass("active");

		if(isEmpty($('#give-iframe .container'))) {
			$('<iframe>', {
				src: 'https://online.gifts.washington.edu/secure/?nobanner=true&activateTab=0&appeal=17XBS&page=make&RecurringGift=yes&RecurringFrequency=monthly&code=' + 'IMPFND' + '&amount=' + $("#cv2-widget-give-amount").val().replace(/,/g, ''),
				frameborder: 0,
				width: '100%',
				height: '100%',
			}).appendTo('#give-iframe');
		}

		// if(give.innerHTML === 'Give now'){
		// 	give.innerHTML = 'Close';
		// } else {
		// 	give.innerHTML = 'Give now';
		// }

		$('body').toggleClass('give-modal-active');

	})


	//
	//
	//
	//     Dynamic content load
	//
	//
	//

	// For destroying the controller;


	// Add immersive story
	// $('.story-link').on('click',function(e){
	// 	var eTarget = $(e.target),
	// 		jsCssFiles = eTarget.data('js') || 'test',
	// 		title	= eTarget.data('title') || "Immersive story";

	// 	currentOffset = window.pageXOffset;
	// 	storyUp 	  = true;

	// 	e.preventDefault();

	// 	// Give loading animation
	// 	$body.addClass('loading');

	// 	// Change URL to immersive story URL
	// 	history.pushState({page: title}, title, e.target.href);

	// 	$dyno.load(e.target.href + ' #immersive-body', function(){

	// 		// Deactivate vertical scroll
	// 		scrollConverter.deactivate(currentOffset);

	// 		// Dynamically load CSS
	// 		$('<link/>', {
	// 		   id: 'dynamicCSS',
	// 		   rel: 'stylesheet',
	// 		   type: 'text/css',
	// 		   href: '/wp-content/themes/be-boundless/immersive-stories/css/' + jsCssFiles + '.css'
	// 		}).appendTo('head');

	// 		// Add the JS - Does getscript need a promise or is the callback enough?
	// 		$.when(
	// 		    $.getScript( '/wp-content/themes/be-boundless/immersive-stories/js/' + jsCssFiles + '.min.js' ),
	// 		    	$.Deferred(function( deferred ){
	// 		        	$( deferred.resolve );
	// 		    	}
	// 		    )
	// 		).done(function(){
	// 		    setTimeout(function(){
	// 		    	$body.toggleClass('active-story loading');
	// 		    	// $body.removeClass('active-header');
	// 		    }, 500);
	// 		    setTimeout(function(){
	// 		    	$body.addClass('makeStatic');
	// 		    }, 1000);
	// 		});

	// 	})

	// })


	// Empty out dynamic story
	// $('button#empty').on('click',function(e){

	// 	storyUp = false;

	// 	e.preventDefault();
	// 	$body.removeClass('makeStatic');

	// 	// Important for performance = destroy story's controller after use.
	// 	currentController.destroy();

	// 	setTimeout(function(){
	// 		$dyno.empty();
	// 		$('#dynamicCSS').remove();
	// 		// Open and close menu based on whether the user has closed it.
	// 		if (!userClosedMenu && !isMobile.matches) {
	// 			// $('body').addClass('active-header');
	// 		}
	// 		scrollConverter.activate(currentOffset);
	// 	}, 500);

	// 	history.back();

	// 	// IE fallback
	// 	if ( typeof(document.body.scrollLeft) !== 'undefined' ) {
	// 		document.body.scrollLeft = currentOffset;
	// 	}
	// 	if ( typeof(document.documentElement.scrollLeft) !== 'undefined' ) {
	// 		document.documentElement.scrollLeft = currentOffset;
	// 	}
	// 	$body.removeClass('active-story');
	// })



});

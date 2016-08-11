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


	// Get the width of the viewport
	var widthInner 		= window.innerWidth,
		offsetXes 		= 500,
		$dyno 			= $('#dyno'),
		$body			= $('body'),
		section			= document.getElementsByTagName('section'),
		offseter 		= 800,
		currentOffset	= 0,
		widthAllSlides 	= widthInner * $('section').length

	// Get a list of all the slides in an array
	// var nodeList = Array.prototype.slice.call( document.getElementById('slides').children );
	// $(nodeList[2]).addClass('amar')


	// Reusable scroll to position for arrow navigation
    function scrollIt(el){
    	var $html 		= $('html, body'),
    		$activiado 	= $('.activiado'),
    		$distance	= 0;

    	// Check which anchor was clicked
    	if ( el.classList.contains('prevSlide') ) {
    		$distance = $activiado.prev().length ? $activiado.prev().offset().left : 0
    	} else {
    		$distance = $activiado.next().length ? $activiado.next().offset().left : 0
    	}

    	// main function
    	function scrollToY(scrollTargetXPar, speedPar, easingPar) {
    	    // scrollTargetY: the target scrollX property of the window
    	    // speed: time in pixels per second
    	    // easing: easing equation to use
    	    
    	    var scrollX = window.scrollX || document.documentElement.scrollLeft,
    	        scrollTargetX = scrollTargetXPar || 0,
    	        speed = speedPar || 2000,
    	        easing = easingPar || 'easeOutSine',
    	        currentTime = 0;

    	    // min time .1, max time .8 seconds
    	    var time = Math.max(0.1, Math.min(Math.abs(scrollX - scrollTargetX) / speed, 1.2));

    	    // easing equations from https://github.com/danro/easing-js/blob/master/easing.js
    	    var easingEquations = {
    	    	easeOutSine: function (pos) {
    	    	    return Math.sin(pos * (Math.PI / 2));
    	    	},
    	    	easeInOutSine: function (pos) {
    	    	    return (-0.5 * (Math.cos(Math.PI * pos) - 1));
    	    	},
    	    	easeInOutQuint: function (pos) {
    	    	    if ((pos /= 0.5) < 1) {
    	    	        return 0.5 * Math.pow(pos, 5);
    	    	    }
    	    	    return 0.5 * (Math.pow((pos - 2), 5) + 2);
    	    	}
    	    };

    	    // add animation loop
    	    function tick() {
    	        currentTime += 1 / 60;
    	        var p = currentTime / time;
    	        var t = easingEquations[easing](p);
    	        if (p < 1) {
    	            requestAnimFrame(tick);
    	            window.scrollTo(scrollX + ((scrollTargetX - scrollX) * t), 0);
    	        } else {
    	            window.scrollTo(scrollTargetX, 0);
    	        }
    	    }

    	    // call it once to get started
    	    tick();
    	}

    	// scroll it!
    	scrollToY($distance, 1500, 'easeInOutQuint');

    }         

    // Navigation via keyboard arrows

    document.onkeydown = function(e){
    	if ( e.keyCode == '37' ) {
    		$('.prevSlide').click();
    	} else if ( e.keyCode == '39')  {
    		$('.nextSlide').click();
    	} else {
    		return;
    	}
    }


    // Left/Right arrow event listener
	$('#arrows a').on('click',function(e){
		e.preventDefault();
		scrollIt(this);
	});



	// Listen for resizes
	window.addEventListener('resize', function(){
		widthInner 	= window.innerWidth;
		offsetX 	= window.pageXOffset;
	})



	//
	//
	//
	//     Build scrubber
	//
	//
	//


	var curXPos 			= 0,
		mouseX 				= 0,
	    curDown 			= false,
	    scrubBar			= document.getElementById('scrub'),
	    scrubContainer		= document.getElementById('scrubCont'),
	    ScrubContainerWidth	= scrubContainer.offsetWidth - 100,
	    elmX				= 0,
	    numSlides			= $('section').length - 1,
	    scrollWidth			= widthInner * numSlides;
	


	// Calculates the scrubber bottom scrubber bar based on mouse drag
	function mouseMove(cliX){
		if(curDown === true){
		  	scrubBar.style.left = Math.ceil(((cliX < 75 ? 75 : cliX) - (mouseX - elmX))) + 'px';
			window.scrollTo(widthInner * numSlides / (scrubContainer.offsetWidth / cliX), 0);
		}
	}

	// Event listeners for scroll and mouse movement	
	// Calculates the scrubber bottom scrubber bar based on scroll
	var cliX = 0,
		moveFlag = false

	window.addEventListener('mousemove', function(e) {
	  cliX = e.clientX;
	  if( !moveFlag ) {
	  	window.requestAnimFrame(function() {
	  	  mouseMove(cliX);
	  	  moveFlag = true;
	  	});
	  }
	  moveFlag = false;
	});

	// Set variables when clicked
	scrubContainer.addEventListener('mousedown', function(e){ 
		curDown = true; 
		curXPos = e.pageX; 
		mouseX = e.clientX;
		elmX = scrubBar.offsetLeft;
	});

	// Cancel drag event so scrubber doesn't fly around
	window.addEventListener('mouseup', function(e){ 
		curDown = false; 
	});
	
	// Test for mouse off of page
	// document.addEventListener('mouseout', function(e) {
    //     e = e ? e : window.event;
    //     var from = e.relatedTarget || e.toElement;
    //     if (!from || from.nodeName == "HTML") {
    //         curDown = false;
    //     }
    // });

	
	// Calculates the scrubber bottom scrubber bar based on scroll
	var last_known = 0, 
		scrollFlag = false;

	function scroller(last_known){
		scrubBar.style.left = Math.ceil((last_known / scrollWidth) * ScrubContainerWidth) + 'px';
	}

	// window.addEventListener('touchend', function(e) {
	// 	var head = document.getElementById('campaign-header'),
	// 		headLeft = head.getBoundingClientRect().left
	// });
	
	window.addEventListener('scroll', function(e) {
	  last_known = window.pageXOffset; 
	  if (!curDown) {
	    window.requestAnimFrame(function() {
	      scroller(last_known);
	      scrollFlag = true;
	    });
	  }
	  scrollFlag = false;
	});

	

	//
	//
	//
	//     ScrollMagic/GSAP Timelines
	//
	//
	//


	// ScrollMagic controller
	var controllerCampaign = new ScrollMagic.Controller({vertical: false});

	// Animations tweens
	var fade1 = new TimelineMax()
		.to('#slide1text', 2, {x: '-100%', ease: Power0.easeInOut }, 0)
		//.to('#bar', 1, { left: 0 })
	var fade2 = new TimelineMax()
		.fromTo('#slide2text', 1, {x: '100%', scale: 0.75 }, {x: '0%', scale: 1.025 })
		//.to('#bar', 1, { left: '45%' })
	var fade3 = new TimelineMax()
		.fromTo('#slide3text', 1, {x: '100%', scale: 0.75 }, {x: '0%', scale: 1.025 })
		//.to('#bar', 1, { left: '64%' })
	var fade4 = new TimelineMax()
		.fromTo('#slide4text', 1, {x: '100%', scale: 0.75 }, {x: '0%', scale: 1.025 })
		//.to('#bar', 1, { left: '103%'})
	// var bar = new TimelineMax()
	// 	.to('#bar', 1, { left: '100%' }, 0.5)


	// Scenes

	// In order to toggle current section, 
	$('section').each(function(index,element){
		var sceneToggle = new ScrollMagic.Scene({
			duration: '100%',
			triggerElement: this,
			triggerHook: 0.5
		});
		// sceneToggle.addIndicators()
		sceneToggle.addTo(controllerCampaign);
		sceneToggle.setClassToggle(this, 'activiado')
		sceneToggle.on('enter', function(){
			// index + num is the number of slides to look ahead. 1 is only one slide ahead.
			var sectionIndex = section[index + 1]

			// Focus on slide on enter 
			$(sectionIndex).focus();

			if (sectionIndex && sectionIndex.style.backgroundImage.length === 0) {
				// Set the background 2 slides upstream
				sectionIndex.style.backgroundImage = 'url(' + sectionIndex.getAttribute('data-img') + ')'
			}			
		})		
	})

	$('section div').each(function(){
		var sceneH2 = new ScrollMagic.Scene({
			duration: '50%',
			triggerElement: this,
			triggerHook: 0
		});
		// sceneH2.addIndicators()
		sceneH2.addTo(controllerCampaign);
		// sceneH2.setPin(this);
	})

	// var scrollBar = new ScrollMagic.Scene({
	// 	duration: widthAllSlides,
	// 	triggerElement: 'body',
	// 	triggerHook: 1
	// })
	// 	.setTween(bar)
	// 	.addTo(controllerCampaign);


	// These are to hide the previous and next arrows when we're on the first and last slides
	var firstSlide = new ScrollMagic.Scene({
		duration: '100%',
		triggerElement: '#slide1',
		triggerHook: 0
	})
		.setClassToggle('#arrows', 'hidePrev')
		.setTween(fade1)
		//.addIndicators({name: "1 (duration: 300)"})
		.addTo(controllerCampaign);

	var secondSlide = new ScrollMagic.Scene({
		duration: '125%',
		triggerElement: '#slide2',
		triggerHook: 0.9
	})
		.setTween(fade2)
		// .addIndicators({name: "2 (duration: 300)"})
		.addTo(controllerCampaign);


	var thirdSlide = new ScrollMagic.Scene({
		duration: '125%',
		triggerElement: '#slide3',
		triggerHook: 0.9
	})
		.setTween(fade3)
		//.addIndicators({name: "2 (duration: 300)"})
		.addTo(controllerCampaign);

	var fourthSlide = new ScrollMagic.Scene({
		duration: '125%',
		triggerElement: '#slide4',
		triggerHook: 0.9
	})
		.setTween(fade4)
		//.addIndicators({name: "2 (duration: 300)"})
		.addTo(controllerCampaign);


	var lastSlide = new ScrollMagic.Scene({
		duration: '125%',
		triggerElement: '#slides section:last-child',
		triggerHook: 0
	})
	.setClassToggle('#arrows', 'hideNext')
	//.addIndicators({name: "1 (duration: 300)"})
	.addTo(controllerCampaign);



	//
	//
	//
	//     Invert Scroll
	//
	//
	//

	scrollConverter.activate();



	//
	//
	//
	//     Dynamic content load
	//
	//
	//


	$('.uw-btn').on('click',function(e){
		var eTarget = $(e.target),
			jsFiles = eTarget.data('js') || 'test',
			title	= eTarget.data('title') || "Immersive story";

		currentOffset = window.pageXOffset;
		
		e.preventDefault();

		// Give loading animation
		$body.addClass('loading');

		// Change URL to immersive story URL
		history.pushState({page: title}, title, e.target.href);

		$dyno.load(e.target.href + ' #immersive-body', function(){

			scrollConverter.deactivate(currentOffset);

			$.when(
			    $.getScript( '/wp-content/themes/be-boundless/immersive-stories/js/' + jsFiles + '.min.js' ),
			    	$.Deferred(function( deferred ){
			        	$( deferred.resolve );
			    	}
			    )
			).done(function(){
			    setTimeout(function(){
			    	$body.toggleClass('dyno_story loading');
			    	$body.removeClass('active-header');
			    }, 500)
			    setTimeout(function(){
			    	$body.addClass('makeStatic');
			    }, 1000)
			});			

			// console.log(a,b,c)

		})

	})


	$('button#empty').on('click',function(e){
		e.preventDefault();
		$body.removeClass('makeStatic');
		document.body.scrollLeft = currentOffset;
		setTimeout(function(){
			$dyno.empty();
			if (userClosedMenu === true) {
				$body.addClass('active-header');
			} else {
				return
			}
			scrollConverter.activate(currentOffset);
		}, 500);
		history.back();
		$body.removeClass('dyno_story');
	})


	// Hides particular unsavory items
	$('body').toggleClass('pageLoaded');


});
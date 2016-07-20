$(function(){

	// Get the width of the viewport
	var widthInner 		= window.innerWidth,
		offsetXes 		= 500,
		$dyno 			= $('#dyno'),
		$body			= $('body'),
		offseter 		= 800,
		currentOffset	= 0,
		widthAllSlides 	= widthInner * $('section').length

	// Get a list of all the slides in an array
	// var nodeList = Array.prototype.slice.call( document.getElementById('slides').children );
	// $(nodeList[2]).addClass('amar')


	// Reusable scroll to position
    function scrollIt(el){
    	var $html 		= $('html, body'),
    		$activiado 	= $('.activiado'),
    		$el 		= $(el),
    		$type		= 0;

    	// Check which anchor was clicked
    	if ( $(el).hasClass('prevSlide') ) {
    		$type = $activiado.prev().length ? $activiado.prev().offset().left : 0
    	} else {
    		$type = $activiado.next().length ? $activiado.next().offset().left : 0
    	}

    	// Animated based to element
      	$html.animate({
      	  scrollLeft: $type
      	}, {
        	duration: 1000,
        	specialEasing: {
          	//scrollLeft: "easeInQuart"
        	}
   	 	});
    }         



    // Left/Right arrow event listener
	$('#arrows a').on('click',function(){
		scrollIt(this);
	});


	// Header - move this to common js
	$('#campaign-expand').on('click', function(){
	   $('body').toggleClass('active-header');
	})

	// Listen for resizes
	window.addEventListener('resize', function(){
		widthInner 	= window.innerWidth;
		offsetX 	= window.pageXOffset;
	})

	// ScrollMagic
	var controllerCampaign = new ScrollMagic.Controller({vertical: false});

	// Build scrubber

	var curXPos 		= 0,
		mouseX 			= 0,
	    curDown 		= false,
	    elm 			= document.getElementById('scrub'),
	    elmCont 		= document.getElementById('scrubCont'),
	    elmContWidth 	= elmCont.offsetWidth,
	    elmX			= 0
	
	elmCont.addEventListener('mousemove', function(e){ 
	  if(curDown === true){
	    elm.style.left = ((e.clientX < 50 ? 50 : e.clientX) - (mouseX - elmX)) + 'px';
		window.scrollTo(widthInner * ($('section').length - 1) / (elmCont.offsetWidth / (e.clientX)), 0);
		console.log(widthInner * ($('section').length - 1) / (elmCont.offsetWidth / (e.clientX - (mouseX - elmX))))
	  }
	});
	
	elmCont.addEventListener('mousedown', function(e){ 
		curDown = true; 
		curXPos = e.pageX; 
		mouseX = e.clientX;
		elmX = elm.offsetLeft;
	});
	elmCont.addEventListener('mouseup', function(e){ curDown = false; });

	document.addEventListener('scroll', function(e){
	    elm.style.left = widthInner * ($('section').length - 1) / (elmCont.offsetWidth / document.body.scrollLeft) + 'px'
	console.log('scroll')
	})


widthInner * ($('section').length - 1) / (elmCont.offsetWidth / (e.clientX - (mouseX - elmX)))


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
	var bar = new TimelineMax()
		.to('#bar', 1, { left: '100%' }, 0.5)

	// build scenes
	

	// In order to toggle current section, 
	$('section').each(function(e){
		var sceneToggle = new ScrollMagic.Scene({
			duration: '100%',
			triggerElement: this,
			triggerHook: 0.5
		});
		
		// scene.addIndicators()
		sceneToggle.addTo(controllerCampaign);
		sceneToggle.setClassToggle(this, 'activiado');
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



	var scrollBar = new ScrollMagic.Scene({
		duration: widthAllSlides,
		triggerElement: 'body',
		triggerHook: 1
	})
		.setTween(bar)
		.addTo(controllerCampaign);

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


	// Scroll Inversion
	scrollConverter.activate();


	$('.uw-btn').on('click',function(){
		currentOffset = window.pageXOffset;
		$body.addClass('loading');

		$dyno.load('growing-veterans/ #immersive', function(a,b,c){

			$.when(
			    $.getScript( 'http://69.91.242.113/cms/boundless/wp-content/themes/be-boundless/immersive-stories/js/common.min.js' ),
			    $.getScript( 'http://69.91.242.113/cms/boundless/wp-content/themes/be-boundless/immersive-stories/js/farmer-brown.min.js' ),
			    $.Deferred(function( deferred ){
			        $( deferred.resolve );
			    })
			).done(function(){
			    setTimeout(function(){
			    	$body.addClass('dyno_story');
			    	$body.removeClass('loading');
			    }, 500)
			});

			scrollConverter.deactivate();	

		})

	})


	$('button#empty').on('click',function(){
		setTimeout(function(){
			$dyno.empty();
		}, 500);
		$body.removeClass('dyno_story');
		scrollConverter.activate(currentOffset);
	})


	// Hides particular unsavory items
	$('body').toggleClass('pageLoaded');


});
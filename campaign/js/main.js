$(function(){

	// Get the width of the viewport
	var widthInner 	= window.innerWidth,
		offsetX 	= window.pageXOffset,
		$dyno 		= $('#dyno'),
		$body		= $('body')

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
        duration: 750,
        specialEasing: {
          scrollLeft: "easeInQuart"
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

	// build tweens

	// build scenes
	

	// In order to toggle current section, 
	$('section').each(function(){
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
		sceneH2.setPin(this);
	})



	// These are to hide the previous and next arrows when we're on the first and last slides
	var firstSlide = new ScrollMagic.Scene({
		duration: '10%',
		triggerElement: '#slides section:first-child',
		triggerHook: 0
	})
	.setClassToggle('#arrows', 'hidePrev')
	//.addIndicators({name: "1 (duration: 300)"})
	.addTo(controllerCampaign);

	var lastSlide = new ScrollMagic.Scene({
		duration: '100%',
		triggerElement: '#slides section:last-child',
		triggerHook: 0
	})
	.setClassToggle('#arrows', 'hideNext')
	//.addIndicators({name: "1 (duration: 300)"})
	.addTo(controllerCampaign);

	

	// Scroll Inversion
	scrollConverter.activate();


	$('.uw-btn').on('click',function(){
		$body.addClass('loading');
		$dyno.load('growing-veterans/ #immersive', function(a,b,c){


			$.ajax({
			    url: 'http://69.91.242.113/cms/boundless/wp-content/themes/be-boundless/immersive-stories/js/common.min.js',
			    dataType: "script",
			    timeout: 1 * 1000
			}).done(function() {
			    console.log('1 loaded')
			})

			$.ajax({
			    url: 'http://69.91.242.113/cms/boundless/wp-content/themes/be-boundless/immersive-stories/js/farmer-brown.min.js',
			    dataType: "script",
			    timeout: 1 * 1000
			}).done(function() {
			    $body.addClass('dyno_story');
				$body.removeClass('loading')
			})

			$('section').imagesLoaded( { background: true }, function() {
			}).done( function( instance ) {
				console.log('all images successfully loaded');

			});	

			scrollConverter.deactivate();		

		})


	})



		

	$('button#empty').on('click',function(){
		$dyno.empty();
		$body.removeClass('dyno_story');
		scrollConverter.activate(function (offset) {
    console.log(offset); // Logs the current horizontal scroll offset
});
		console.log('f')
	})


	// Hides particular unsavory items
	$('body').toggleClass('loaded');


});
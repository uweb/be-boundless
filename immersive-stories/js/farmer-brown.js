var isMobile;    
// The mobile check: 
// if (isMobile.matches) {}

// use a function to automatically adjust the duration to the window height.
var durationValueCache,
    windowHeight

function resize(controller){

    windowHeight = window.innerHeight - 170;
    durationValueCache = window.innerHeight + 1500;
    isMobile = window.matchMedia("only screen and (max-width: 768px)");            
    // if (!isMobile.matches) {
    //   $('.intro').css('height', windowHeight + 'px');
    // } 
    if (isMobile.matches && controller.enabled()) {
      controller.enabled(false);
    } else if (!controller.enabled()) {
      controller.enabled(true);
    }
}




$(function() {

	 $(".play").click(function(e){
	 	var $video = $('#video'),
	 		$body = $("body");
	 	e.preventDefault();
	    $body.toggleClass("playing");
	    document.getElementById("boundless-video").innerHTML = 
	    	'<button class="close-video"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>' +
	    	'<div id="youtube-video">' + 
			'<iframe title="YouTube video" id="embedVid" width=' + $video.width() + ' height=' + $video.height() + ' src="https://www.youtube.com/embed/V2svAdaEe30?rel=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen autoplay></iframe>' +
	    	'</div>';
	   	
	   	setTimeout( function(){
	   		$('#video iframe')[0].focus()
	   	}, 500 );

	   	$(".close-video").click(function(){
	   		$(".play").removeClass("hidden");
	   		$body.toggleClass("playing");
	   		document.getElementById("boundless-video").innerHTML = '';
	  	});

	 });
	  
	    // init controller
	var controller = new ScrollMagic.Controller(),
	  	  $people = $('#people li'),
	  	  $audioPlay = $('.audio-play');
	
	 // Resize video height
	 resize(controller);      

	  // Animation tweens

	var h1Skew = new TimelineMax ()
			.add([
				TweenMax.to("#intro-vid h1", 1, { skewY: -53, rotateY: 82, opacity: 0, ease: Linear.easeNone})
			])
	
	var parallaxer = new TimelineMax ()
	      .add([
	        TweenMax.to("#parallaxContainer1 .layer1", 1, {backgroundPosition: "0 -100%", ease: Linear.easeNone}),
	        TweenMax.to("#parallaxContainer1 .layer2", 1, {backgroundPosition: "0 -150%", ease: Linear.easeNone}),
	        TweenMax.to("#parallaxContainer1 .layer3", 1, {backgroundPosition: "0 -400%", ease: Linear.easeNone})
	      ]);

	var parallaxer2 = new TimelineMax ()
	    .add([
	      TweenMax.to("#parallaxContainer2 .layer1", 1, {backgroundPosition: "0 -100%", ease: Linear.easeNone}),
	      TweenMax.to("#parallaxContainer2 .layer2", 1, {backgroundPosition: "0 -150%", ease: Linear.easeNone}),
	      TweenMax.to("#parallaxContainer2 .layer3", 1, {backgroundPosition: "0 -400%", ease: Linear.easeNone})
	    ]);
	
	
	  // build scenes
	  new ScrollMagic.Scene({
	            triggerElement: "#intro-vid",
	            triggerHook: "onEnter",
	            duration: "100%",
	            offset: window.innerHeight - 175
	          })
	          .setTween(h1Skew)
	         // .addIndicators()
	          .addTo(controller);

	
	 // Parallax scene
	 var scene = new ScrollMagic.Scene({
	            triggerElement: "#parallaxContainer1",
	            offset: "60vh",      
	            duration: 3000
	          })
	         .setTween(parallaxer)
	        // .addIndicators()
	         .addTo(controller);	

	 // Veg Scene
	 var scene2 = new ScrollMagic.Scene({
	            triggerElement: "#parallaxContainer2", 
	            offset: 400,      
	            duration: 3000
	          })
	         .setTween(parallaxer2)
	         .addTo(controller);

	 new ScrollMagic.Scene({triggerElement: "#veg1", offset: "60vh"})
	 				.setClassToggle("#veg1", "active") // add class toggle
	 				//.addIndicators()
	 				.addTo(controller);
	 new ScrollMagic.Scene({triggerElement: "#veg2", offset: "60vh"})
	 				.setClassToggle("#veg2", "active") // add class toggle
	 				//.addIndicators()
	 				.addTo(controller);
	 new ScrollMagic.Scene({triggerElement: "#veg3", offset: "60vh"})
	 				.setClassToggle("#veg3", "active") // add class toggle
	 				//.addIndicators()
	 				.addTo(controller);
	 new ScrollMagic.Scene({triggerElement: "#veg4", offset: "60vh"})
	 				.setClassToggle("#veg4", "active") // add class toggle
	 				//.addIndicators()
	 				.addTo(controller);  

	// Audio interviews
	$people.on('click', function(){
		var $this = $(this);
		if( !$this.hasClass('active') ){
			$this.addClass('active');
		} else {
			$this.removeClass('active');
		}
		$this.parent().children('li').not($this).removeClass('active');
	})

<<<<<<< HEAD
	$('.slide a').on('click', function(e){
		e.preventDefault();
	})
=======
	// Prevent issues with clicking on slideshow
	$('.slide a').on('click',function(e){ e.preventDefault()  })
>>>>>>> 56f953327ca166dc192d41dee2e7fda6d51b3cd9


	// Focus on button triggers 
	$audioPlay.bind("focus blur", function(event){
	     event.stopPropagation();
	     if(event.type == "focus")  {
	     	$(event.target).closest('li').toggleClass('active-focus');
	     } 
	     else if(event.type == "blur") {
	     	$(event.target).closest('li').toggleClass('active-focus');
	     }
	 });



	$(window).resize(function() {
	    resize(controller); 
	});

});



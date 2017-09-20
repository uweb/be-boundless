$(function(){

	var controllerSW = new ScrollMagic.Controller();

	var introSW = new ScrollMagic.Scene({
		triggerElement:'#intro-vid',
		triggerHook:0,
		duration:'100%',
	})
	.setPin('.intro',{pushFollowers:false})
	.setTween('#intro-text',1,{opacity:0,transform:'translateY(-100px)',ease:Power0.easeIn})
	.addTo(controllerSW);
    $(window).resize(function(){
        introSW.update(true);
    });

	// var fade = new TimelineMax()
	// 	.add([
	// 		// TweenMax.from('#slide-1',1,{opacity:0,ease:Power0.easeIn}),
	// 		TweenMax.to('#slide-2',1,{autoAlpha:1}),
	// 		TweenMax.to('#slide-3',1,{autoAlpha:1}),
	// 		TweenMax.to('#slide-4',1,{autoAlpha:1}),
	// 		// TweenMax.staggerTo(['#slide-2','#slide-3','#slide-4'], 5000, {opacity:1,delay:500})
	// 	])
		
	// var photo2Scene = new ScrollMagic.Scene({
	// 	triggerElement:'.slides',
	// 	triggerHook:0,
	// 	offset:100,
	// 	duration:400,
	// 	reverse: true,
	// })
	// .setPin('.slides')
	// .setTween(fade)
	// .addIndicators()
	// .addTo(controllerSW);



	var ani2 = TweenMax.to('#slide-2', 1, {autoAlpha: 1});
	var ani3 = TweenMax.to('#slide-3', 1, {autoAlpha: 1});
	var ani4 = TweenMax.to('#slide-4', 1, {autoAlpha: 1});
	
	// scene used to pin the container
	var pinScene = new ScrollMagic.Scene({
		triggerHook: 0,
		triggerElement: '.slides',
		duration:2000
	})
		.setPin('.slides')
		.addTo(controllerSW)
		.addIndicators({zindex: 1, suffix: 'pin'});
	
	// scene used to fade the images
	var slide2 = new ScrollMagic.Scene({
		triggerHook: 0,
		triggerElement: '.slides',
		offset: 500,
		duration: 100
	})
	.setTween(ani2)
	.addTo(controllerSW)
	.addIndicators({zindex: 1, suffix: 'ani'});

	var slide3 = new ScrollMagic.Scene({
		triggerHook: 0,
		triggerElement: '.slides',
		offset: 1000,
		duration: 100
	})
	.setTween(ani3)
	.addTo(controllerSW)
	.addIndicators({zindex: 1, suffix: 'ani'});

	var slide4 = new ScrollMagic.Scene({
		triggerHook: 0,
		triggerElement: '.slides',
		offset: 1500,
		duration: 100
	})
	.setTween(ani4)
	.addTo(controllerSW)
	.addIndicators({zindex: 1, suffix: 'ani'});

});
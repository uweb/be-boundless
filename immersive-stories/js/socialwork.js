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

	// Parallax photos
	var aniBlount = new TimelineMax ()
		.add([
			TweenMax.to('#blount-2', 1, {opacity: 0, ease: Power0.easeIn, delay: 0.0 }),
		])
	var slideBlount = new ScrollMagic.Scene({
		triggerElement: '.profile',
		triggerHook: 0.5,
		duration:  '25%',
	})
		.setTween(aniBlount)
		.addIndicators()
		.addTo(controllerSW);

		var aniPascoe = TweenMax.to('#pascoe', 1, {className: '+=photo2', ease: Power0.easeIn, delay: 0.0});
		var slidePascoe = new ScrollMagic.Scene({
		triggerElement: '#pascoe',
		triggerHook: 0.5,
		duration:  '25%',
	})
		.setTween(aniPascoe)
		.addIndicators()
		.addTo(controllerSW);

	var aniAgyemang = TweenMax.to('#agyemang', 1, {className: '+=photo2', ease: Power0.easeIn, delay: 0.0});
	var slideAgyemang = new ScrollMagic.Scene({
		triggerElement: '#agyemang',
		triggerHook: 0.5,
		duration:  '25%',
	})
		.setTween(aniAgyemang)
		.addIndicators()
		.addTo(controllerSW);

	// var aniAgyemang = new TimelineMax ()
	// 	.add([
	// 		TweenMax("#agyemang", 1, {className: "+=photo2"})
	// 	])
	// var slideAgyemang = new ScrollMagic.Scene({
	// 	triggerElement: '#agyemang',
	// 	triggerHook: 0.5,
	// 	duration:  '25%',
	// })
	// 	.setTween(aniAgyemang)
	// 	.addIndicators()
	// 	.addTo(controllerSW);

	// Slideshow
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

	// scene used to fade the images
	var slide2 = new ScrollMagic.Scene({
		triggerHook: 0,
		triggerElement: '.slides',
		offset: 500,
		duration: 100
	})
	.setTween(ani2)
	.addTo(controllerSW)

	var slide3 = new ScrollMagic.Scene({
		triggerHook: 0,
		triggerElement: '.slides',
		offset: 1000,
		duration: 100
	})
	.setTween(ani3)
	.addTo(controllerSW)

	var slide4 = new ScrollMagic.Scene({
		triggerHook: 0,
		triggerElement: '.slides',
		offset: 1500,
		duration: 100
	})
	.setTween(ani4)
	.addTo(controllerSW)

	// lazyloading in 3... 2... 1...
	lazyload();

});
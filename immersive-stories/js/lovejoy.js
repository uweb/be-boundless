$(function(){

	var controllerLJ = new ScrollMagic.Controller();
	//var controllerLJHorizontal = new ScrollMagic.Controller({vertical: false});

	var introLJ = new ScrollMagic.Scene({
		triggerElement:'#intro-vid',
		triggerHook:0,
		duration:'100%',
	})
		.setPin('.intro',{pushFollowers:false})
		.setTween('#intro-text',1,{opacity:0,transform:'translateY(-100px)',ease:Power0.easeIn})
		.addTo(controllerLJ);
	$(window).resize(function(){
		introLJ.update(true);
	});


	var wipeAnimation = new TimelineMax()
			// animate to second panel
			//.to("#example-wrapper", 0.5, {z: -150})		// move back in 3D space
			.to("#example-wrapper", 1,   {x: "-25%"})	// move in to first panel
			//.to("#example-wrapper", 0.5, {z: 0})				// move back to origin in 3D space
			// animate to third panel
			//.to("#example-wrapper", 0.5, {z: -150, delay: 1})
			.to("#example-wrapper", 1,   {x: "-50%"})
			//.to("#example-wrapper", 0.5, {z: 0})
			// animate to forth panel
			//.to("#example-wrapper", 0.5, {z: -150, delay: 1})
			.to("#example-wrapper", 1,   {x: "-75%"})
			//.to("#example-wrapper", 0.5, {z: 0});

	var goHorizontal = new ScrollMagic.Scene({
		triggerElement: '#content-wrapper',
		triggerHook: "onLeave",
		duration:'400%',
	})
		.setPin('#content-wrapper')
		.setTween(wipeAnimation)
		// .on("enter", function(){
		// 	console.log("enter");
		// 	//convert scroll to translate of #content-wrapper
		// })
		// .on("leave", function(){
		// 	console.log("leave");
		// 	//scrollConverter.deactivate();
		// })
		.addIndicators()
		.addTo(controllerLJ);
});
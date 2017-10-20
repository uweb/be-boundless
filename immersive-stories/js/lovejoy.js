$(function(){

	var isMobile = ($(window).width() < 768) ? true : false;

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


	if(!isMobile) {

		var wipeAnimation = new TimelineMax()
			.to("#secondary-wrapper", 1,   {x: "-25%"})
			.to("#horizontal-image-2", 1,   {opacity: 1, visibility: "visible"}, "-=1.0")
			.to("#horizontal-image-1", 1,   {opacity: 0}, "-=1.0")
			.to("#secondary-wrapper", 1,   {x: "-50%"})
			.to("#horizontal-image-3", 1,   {opacity: 1, visibility: "visible"}, "-=1.0")
			.to("#find-help", 1,   {opacity: 1, visibility: "visible"}, "-=1.0")
			.to("#horizontal-image-2", 1,   {opacity: 0}, "-=1.0")
			.to("#secondary-wrapper", 1,   {x: "-75%"})
			.to("#horizontal-image-4", 1,   {opacity: 1, visibility: "visible"}, "-=1.0")
			.to("#horizontal-image-3", 1,   {opacity: 0}, "-=1.0")
			.to("#find-help", 1,   {opacity: 0}, "-=1.0");

		var goHorizontal = new ScrollMagic.Scene({
			triggerElement: '#primary-wrapper',
			triggerHook: "onLeave",
			duration:'500%',
		})
			.setPin('#primary-wrapper')
			.setTween(wipeAnimation)
			.on('leave', function(){
				$('#sidescroll').toggleClass("down");
			})
			.addTo(controllerLJ);
	}
});
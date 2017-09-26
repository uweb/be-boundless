$(function(){
	// Video play
	$("#full-bg-video")[0].addEventListener("timeupdate", function(){
		if(this.currentTime >= (this.duration - 0.8)) {
			this.pause();
			$('#intro-vid').addClass('paused');
		}
	});
	// Video pause
	$("video").get(0).play();
	$("#pause").unbind("click").click(function(){
		var vid = $("#intro-vid video");
		if(vid.get(0).paused){
			vid.get(0).currentTime = 0;
			vid.get(0).play();
		}
		else{
			vid.get(0).pause();
		}
		$('#intro-vid').toggleClass('paused');
	});

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
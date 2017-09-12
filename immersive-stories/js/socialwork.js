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

	var photo2Tween = new TimelineMax()
		.add([
			TweenMax.to('#photo-2',1,{opacity:0,ease:Power0.easeIn,delay:0.0}),
	])
	var photo2Scene = new ScrollMagic.Scene({
		triggerElement:'.transSection',
		triggerHook:0,
		duration:'100%',
		reverse: true,
	})
	.setPin('.transSection')
	.setTween(photo2Tween)
	.addIndicators()
	.addTo(controllerSW);

});
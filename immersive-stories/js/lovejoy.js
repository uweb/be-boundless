$(function(){

	var controllerLJ = new ScrollMagic.Controller();

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

});
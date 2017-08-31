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

	var infographics = document.querySelectorAll('div.infographic');
	for(var i=0;i<infographics.length;i++){
		j = i + 1;
		new ScrollMagic.Scene({
			triggerElement:infographics[i],
			triggerHook:0,
			duration:'100%',
		})
		.setPin(infographics[i],{pushFollowers:false})
		// .setTween(infographics[j],1,{opacity:0,ease:Power0.easeIn,delay:0.0})
		.addIndicators()
		.addTo(controllerSW);
	}

});
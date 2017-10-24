$(function(){

	var isMobile = ($(window).width() < 768) ? true : false;

	var xOffset = {'#slide-1': '0%',
						'#slide-2': '33%',
						'#slide-3': '67%'};

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
			.to("#secondary-wrapper", 1,   {x: "-33%"}) //step 2
			.to("#horizontal-image-2", 1,   {opacity: 1, visibility: "visible"}, "-=1.0")
			.to("#horizontal-image-1", 1,   {opacity: 0}, "-=1.0")
			.to("#marker-2", 1,   {opacity: 0.95}, "-=1.0")
			.to("#marker-1", 1,   {opacity: 0.25}, "-=1.0")
			.to("#marker-3", 1,   {opacity: 0.25}, "-=1.0")
			.to("#secondary-wrapper", 1,   {x: "-67%"}) //step 3
			.to("#horizontal-image-3", 1,   {opacity: 1, visibility: "visible"}, "-=1.0")
			.to("#horizontal-image-2", 1,   {opacity: 0}, "-=1.0")
			.to("#marker-3", 1,   {opacity: 0.95}, "-=1.0")
			.to("#marker-2", 1,   {opacity: 0.25}, "-=1.0")
			.to("#marker-1", 1,   {opacity: 0.25}, "-=1.0")
			.to(["#marker-1","#marker-2","#marker-3"], 0,   {opacity: 0.0}) //step 4
			.to("#marker-4", 0,   {opacity: 1, visibility: "visible"});

		var goHorizontal = new ScrollMagic.Scene({
			triggerElement: '#primary-wrapper',
			triggerHook: "onLeave",
			duration:'400%',
		})
			.setPin('#primary-wrapper')
			.setTween(wipeAnimation)
			.addTo(controllerLJ);
	}

	$("[data-href]").click(function() {
		$destination = $(this).attr("data-href");
		if($destination != "#charts") {
			$xOff = xOffset[$destination];
		    $('#secondary-wrapper').animate({
		            transform: "translate(" + $xOff + ", 0%) translate3d(0px, 0px, 0px)"
		    }, 1000);
		} else {
			$('html, body').animate({
		        scrollTop: $($destination).offset().top
		    }, 1000);
		}
	});
});
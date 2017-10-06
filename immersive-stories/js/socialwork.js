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

    //Play video through pin
    $('video').get(0).play();

    //  var introSWVid = new ScrollMagic.Scene({
    //   triggerElement: '#intro-vid',
    //   triggerHook: 1,
    //   duration: '100%',
    // })
    // .on('enter',function(){
    //   $('video').get(0).play()
    // })
    // .addTo(controllerSW);

	// Parallax photos
	var aniBlount = new TimelineMax ()
		.add([
			TweenMax.to('#blount-2', 1, {opacity: 0, ease: Power0.easeIn, delay: 0.0 }),
		])
	var slideBlount = new ScrollMagic.Scene({
			triggerElement: '#blount',
			triggerHook: 0.5,
			duration:  '25%',
		})
		.setTween(aniBlount)
		//.addIndicators()
		.addTo(controllerSW);

	var aniPascoe = new TimelineMax ()
		.add([
			TweenMax.to('#pascoe-2', 1, {opacity: 0, ease: Power0.easeIn, delay: 0.0 }),
		])
	var slidePascoe = new ScrollMagic.Scene({
			triggerElement: '#pascoe',
			triggerHook: 0.5,
			duration:  '25%',
		})
		.setTween(aniPascoe)
		//.addIndicators()
		.addTo(controllerSW);

	var aniAgyemang = new TimelineMax ()
		.add([
			TweenMax.to('#agyemang-2', 1, {opacity: 0, ease: Power0.easeIn, delay: 0.0 }),
		])
	var slideAgyemang = new ScrollMagic.Scene({
			triggerElement: '#agyemang',
			triggerHook: 0.5,
			duration:  '25%',
		})
		.setTween(aniAgyemang)
		//.addIndicators()
		.addTo(controllerSW);
	// 	var aniBlount = TweenMax.to('#blount', 1, {className: '+=photo2', ease: Power0.easeIn, delay: 0.0});
	// 	var slideBlount = new ScrollMagic.Scene({
	// 		triggerElement: '#blount',
	// 		triggerHook: 0.5,
	// 		duration:  '25%',
	// 	})
	// 	.setTween(aniBlount)
	// 	//.addIndicators()
	// 	.addTo(controllerSW);


	// 	var aniPascoe = TweenMax.to('#pascoe', 1, {className: '+=photo2', ease: Power0.easeIn, delay: 0.0});
	// 	var slidePascoe = new ScrollMagic.Scene({
	// 		triggerElement: '#pascoe',
	// 		triggerHook: 0.5,
	// 		duration:  '25%',
	// 	})
	// 	.setTween(aniPascoe)
	// 	//.addIndicators()
	// 	.addTo(controllerSW);

	// var aniAgyemang = TweenMax.to('#agyemang', 1, {className: '+=photo2', ease: Power0.easeIn, delay: 0.0});
	// var slideAgyemang = new ScrollMagic.Scene({
	// 		triggerElement: '#agyemang',
	// 		triggerHook: 0.5,
	// 		duration:  '25%',
	// 	})
	// 	.setTween(aniAgyemang)
	// 	//.addIndicators()
	// 	.addTo(controllerSW);



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
	// var ani2 = TweenMax.to('#slide-2', 1, {autoAlpha: 1});
	// var ani3 = TweenMax.to('#slide-3', 1, {autoAlpha: 1});
	// var ani4 = TweenMax.to('#slide-4', 1, {autoAlpha: 1});

	// scene used to pin the container
	// var pinScene = new ScrollMagic.Scene({
	// 	triggerHook: 0,
	// 	triggerElement: '.slides',
	// 	duration:2000
	// })
	// .setPin('.slides')
	// //.setPin('#video')
	// .addTo(controllerSW)

	// scene used to fade the images
	// var slide2 = new ScrollMagic.Scene({
	// 	triggerHook: 0,
	// 	triggerElement: '.slides',
	// 	offset: 500,
	// 	duration: 100
	// })
	// .setTween(ani2)
	// .addTo(controllerSW)

	// var slide3 = new ScrollMagic.Scene({
	// 	triggerHook: 0,
	// 	triggerElement: '.slides',
	// 	offset: 1000,
	// 	duration: 100
	// })
	// .setTween(ani3)
	// .addTo(controllerSW)

	// var slide4 = new ScrollMagic.Scene({
	// 	triggerHook: 0,
	// 	triggerElement: '.slides',
	// 	offset: 1500,
	// 	duration: 100
	// })
	// .setTween(ani4)
	// .addTo(controllerSW)

    //play youtube video
    $('.youtube-caption').on('click', function(event){
    	event.stopPropagation();
    	var iframe = $(this).siblings('iframe').get(0);
    	$(iframe).toggleClass("playing");
    	$(iframe).attr('src', $(iframe, parent).attr('src') + '&autoplay=1');
    	//$(iframe).trigger("click");
    });

    //reanimate gifs
    var gif1 = new ScrollMagic.Scene({
			triggerElement: '#gif1',
			triggerHook: 0.5,
			reverse: false,
		})
		.on('start', function(){
			$gif1 = $('#gif1');
			$gif2 = $('#gif2');
			$gif3 = $('#gif3');
			$gif4 = $('#gif4');
			
			$src1 = $gif1.attr('src');
			$src2 = $gif2.attr('src');
			$src3 = $gif3.attr('src');
			$src4 = $gif4.attr('src');

			$gif1.attr('src','');
			$gif1.attr('src',$src1 + "?");

			setTimeout(function() { 
				$gif2.attr('src','');
				$gif2.attr('src',$src2 + "?");
			}, 1000);

			setTimeout(function() { 
				$gif3.attr('src','');
				$gif3.attr('src',$src3 + "?");
			}, 3000);

			setTimeout(function() { 
				$gif4.attr('src','');
				$gif4.attr('src',$src4 + "?");
			}, 5000);
		})
		//.addIndicators()
		.addTo(controllerSW);

	var gif5 = new ScrollMagic.Scene({
			triggerElement: '#gif5',
			triggerHook: 0.5,
			reverse: false,
		})
		.on('start', function(){
			$gif5 = $('#gif5');
			$src5 = $gif5.attr('src');
			$gif5.attr('src','');
			$gif5.attr('src',$src5 + "?");
		})
		//.addIndicators()
		.addTo(controllerSW);

    // lazyloading (not IE) in 3... 2... 1...
	var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie < 0) // If NOT Internet Explorer
    {
        lazyload();
    }

});
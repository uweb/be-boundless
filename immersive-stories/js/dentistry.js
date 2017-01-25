
$(function(){

    var controllerDentistry = new ScrollMagic.Controller(),
        $windowHeight = $(window).height()
    
    currentController = controllerDentistry;

    var introMedicine = new ScrollMagic.Scene({
      triggerElement: '#intro-slide',
      triggerHook: 0,
      duration: '100%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setClassToggle("body", 'medicineIntro')
    .setTween('#intro-text', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
    .addTo(controllerDentistry);
    $(window).resize(function(){
        introMedicine.update(true);
    });




    var parallaxed = new TimelineMax ()
          .add([
            TweenMax.to('#back', 1,      { transform: 'translateY(0)', ease: Power0.easeIn }),
            TweenMax.to('#middle', 1,  { transform: 'translateY(-20vh)', ease: Power0.easeIn}),
            TweenMax.to('#fore', 1,   { transform: 'translateY(-40vh)', ease: Power0.easeIn})
          ])

    var jason = new ScrollMagic.Scene({
      triggerElement: '#intro-slide',
      triggerHook: 0.1,
      offset: $('#intro-slide').height() - $windowHeight,
      duration: '120%',
    })
    .setTween(parallaxed)
    .addTo(controllerDentistry)





})


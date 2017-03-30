$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerIschool = new ScrollMagic.Controller();
  var viewport = $(window).width();

  currentController = controllerIschool;


  var fade = new TimelineMax ()
        .add([
        //  TweenMax.to('.left', 1, { transform: 'translate(-250px,0)', ease: Power0.easeIn }),
        //  TweenMax.to('.top-right', 1, { transform: 'translate(250px,0)', ease: Power0.easeIn }),
          TweenMax.to('.right', 1, { transform: 'translate(250px,0)', ease: Power0.easeIn }),
          TweenMax.to('.top', 1, { transform: 'translate(0,-250px)', ease: Power0.easeIn }),
          TweenMax.to('.bottom', 1, { transform: 'translate(250px,250px)', ease: Power0.easeIn }),
          TweenMax.to('.bottom-left', 1, { transform: 'translate(0,250px)', ease: Power0.easeIn })
        ]);


    var introIschool = new ScrollMagic.Scene({
      triggerElement: '#immersive-body',
      triggerHook: 0,
      duration: '75%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setTween(fade)
    .addTo(controllerIschool);


    var paraBG = new ScrollMagic.Scene({
      triggerElement: '.paraBackground',
      triggerHook: 0.5,
      duration: '100%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setTween('.paraBG', 1, { transform: 'translateY(500px)', ease: Power0.easeIn })
    .addTo(controllerIschool)


    if (viewport > 1200 ) {
      var martezAnimation = new TimelineMax ()
            .add([
              TweenMax.to('#martez-II', 1, {  opacity: 1,  ease: Power0.easeIn }),
              TweenMax.to('#martez', 1,    {  opacity: 0, ease: Power0.easeIn, delay: 0.0 })
            ])

      var martez = new ScrollMagic.Scene({
        triggerElement: '.section-3',
        triggerHook: 0.4,
        duration: '15%',
      })
      .setTween(martezAnimation)
      .addTo(controllerIschool)
    }

    document.addEventListener('resize',function(){
      viewport = $(window).width()
    })

  // var jason = new ScrollMagic.Scene({
  //   triggerElement: '#jason',
  //   triggerHook: 0.1,
  //   offset: $('#jason').height() - $windowHeight,
  //   duration: '120%',
  // })
  // .setTween(parallaxed)
  // .addTo(controllerBothell)






})


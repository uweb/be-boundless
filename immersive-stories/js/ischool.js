$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerIschool = new ScrollMagic.Controller();

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
      triggerElement: '#intro-vid',
      triggerHook: 0,
      duration: '75%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setTween(fade)
    .addTo(controllerIschool);


    var intro = new ScrollMagic.Scene({
      triggerElement: '.section-3',
      triggerHook: 0.75,
      duration: '50%',
    })
    .setTween('#martez', 1, { transform: 'translateY(0)', ease: Power0.easeIn })
    .addTo(controllerIschool);


})


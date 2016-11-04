$(function(){

  var bodyBothell = document.getElementsByTagName('body')[0];

  var controllerBothell = new ScrollMagic.Controller();

  // This is to set global 
  currentController = controllerBothell;

  var introBothell = new ScrollMagic.Scene({
    triggerElement: '#intro-slide',
    triggerHook: 0,
    duration: '100%',
  })
  .setPin('.intro', {pushFollowers: false})
  .setClassToggle("body", 'bothellIntro')
  .setTween('#intro-text', 0.5, { opacity: 0, transform: 'translateY(100px)', ease: Power0.easeIn })
  .addTo(controllerBothell)


  var parallaxed = new TimelineMax ()
        .add([
          TweenMax.to('#back', 0.5,   { transform: 'translateY(0)', ease: Power0.easeIn }),
          TweenMax.to('#middle', 0.5, { transform: 'translateY(0)', ease: Power0.easeIn }),
          TweenMax.to('#fore', 0.7,   { transform: 'translateY(0)', ease: Power0.easeIn })
        ]);

  var jason = new ScrollMagic.Scene({
    triggerElement: '#jason',
    triggerHook: 0.3,
    duration: '100%',
  })
  .setTween(parallaxed)
  .addTo(controllerBothell)



})


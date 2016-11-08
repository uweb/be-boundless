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


  var videoTrigger = new ScrollMagic.Scene({
    triggerElement: '#video',
    triggerHook: 1
  })
  .on("start", function(){
    videoPlay("https://www.youtube.com/embed/sbELjIqhOZ4?theme=light;autoplay=1&rel=0&amp;showinfo=0&amp");
  })
  .reverse(false)
  .addTo(controllerBothell);


  var parallaxed = new TimelineMax ()
        .add([
          TweenMax.to('#back', 1,   { transform: 'translateY(0)', ease: Power0.easeIn }),
          TweenMax.to('#middle', 0.75, { transform: 'translateY(0)', ease: Power0.easeIn }),
          TweenMax.to('#fore', 0.65,   { transform: 'translateY(0)', ease: Power0.easeIn }),
          TweenMax.to('#robot', 0.2,   { transform: 'translateY(100px)', ease: Power0.easeIn })
        ]);

  var jason = new ScrollMagic.Scene({
    triggerElement: '#jason',
    duration: '150%',
  })
  .setTween(parallaxed)
  .addTo(controllerBothell)



})


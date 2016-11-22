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
          TweenMax.to('#back', 1,      { transform: 'translateY(0)', ease: Power0.easeIn }),
          TweenMax.to('#middle', 0.5,  { transform: 'translateY(0)', ease: Power0.easeIn, delay: 0.0 }),
          TweenMax.to('#fore', 0.3,    { transform: 'translateY(0)', ease: Power0.easeIn, delay: 0.1 }),
          TweenMax.to('#robot', 0.2,   { transform: 'translateY(100px)', ease: Power0.easeIn, delay: 0.3 })
        ])

  var jason = new ScrollMagic.Scene({
    triggerElement: '#jason',
    triggerHook: 0,
    duration: '100%',
  })
  .setTween(parallaxed)
  .addTo(controllerBothell)
  .on('end',function(){console.log('end')})



})



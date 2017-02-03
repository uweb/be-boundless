$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerPublic = new ScrollMagic.Controller();

  currentController = controllerPublic;



    var fade = new TimelineMax()
      .to('#slide-0', 0.2, {opacity: 0, ease: Power0.easeInOut }, 0)
      .to('#slide-1', 0.2, {opacity: 1, ease: Power0.easeInOut, delay: 0.2 }, 0)
      .to('#slide-2', 0.2, {opacity: 1, ease: Power0.easeInOut, delay: 0.4 }, 0)
      .to('#slide-3', 0.2, {opacity: 1, ease: Power0.easeInOut, delay: 0.6 }, 0)



    var introMedicine = new ScrollMagic.Scene({
      triggerElement: body,
      triggerHook: 0,
      duration: '200%',
    })
    .on('enter',function(){
      $('video').get(0).play()
    })
    .setPin('#intro-vid', {pushFollowers: true})
    .setTween(fade)
    .addTo(controllerPublic);

  //     .add([
  //       TweenMax.to('#back', 1,      { transform: 'translateY(-30px)', ease: Power0.easeIn }),
  //       TweenMax.to('#middle', 1,  { transform: 'translateY(16vh)', ease: Power0.easeIn, delay: 0.0 }),
  //       TweenMax.to('#middle2', 1,  { transform: 'translateY(8vh)', ease: Power0.easeIn, delay: 0.0 }),
  //       TweenMax.to('#middle3', 1,  { transform: 'translateY(14vh)', ease: Power0.easeIn, delay: 0.0 }),
  //       // TweenMax.to('#fore', 0.3,    { transform: 'translateY(0)', ease: Power0.easeIn, delay: 0.1 }),
  //       TweenMax.to('#robot', 1,   { transform: 'translateY(-100px)', ease: Power0.easeIn, delay: 0.3 })
  //     ])


    // Accordion action
    document.getElementById('expander').addEventListener('click',function(e){
      e.preventDefault();
      body.classList.toggle('accord-open');
    });


})


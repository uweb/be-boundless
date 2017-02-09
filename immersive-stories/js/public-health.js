$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerPublic = new ScrollMagic.Controller();

  currentController = controllerPublic;



    var fade = new TimelineMax()
      .to('#slide-0', 0.2, {opacity: 0, ease: Power0.easeInOut }, 0)
      .to('#slide-1 span', 0.2, {width: '60%', ease: Power0.easeInOut, delay: 0.2 }, 0)

      .to('#word-1', 0.2, {opacity: 1, transform: 'translateY(0px)',  ease: Power0.easeInOut, delay: 0.4 }, 0)
      .to('#word-2', 0.2, {opacity: 1, transform: 'translateY(0px)',  ease: Power0.easeInOut, delay: 0.4 }, 0)

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


    // Intro out

    var infoToggle = new ScrollMagic.Scene({
      //next scene
        triggerElement: ".info-3",
        duration: 0,
        triggerHook: 0.5,
        reverse: true
    })
    .setClassToggle(".info-3", 'active')
    .addTo(controllerPublic);


    // Accordion action
    document.getElementById('expander').addEventListener('click',function(e){
      e.preventDefault();
      body.classList.toggle('accord-open');
    });


})


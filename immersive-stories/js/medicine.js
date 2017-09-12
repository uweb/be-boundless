$(function(){

  $('body').addClass('medicineIntro');

  var body = document.getElementsByTagName('body')[0];
  var controllerMedicine = new ScrollMagic.Controller();

  currentController = controllerMedicine;

    var introMedicine = new ScrollMagic.Scene({
      triggerElement: '#intro-slide',
      triggerHook: 0,
      duration: '100%',
    })
    .setPin('.intro', {pushFollowers: false})
    // .setClassToggle("body", 'medicineIntro')
    .setTween('#intro-text', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
    .addTo(controllerMedicine);


    // Play Jayna's video

    var videoTrigger = new ScrollMagic.Scene({
      triggerElement: '#video',
      triggerHook: 1
    })
    .on("start", function(){
      videoPlay("https://www.youtube.com/embed/sbELjIqhOZ4?theme=light;autoplay=1&rel=0&amp;showinfo=0&amp");
    })
    .reverse(false)
    .addTo(controllerMedicine);


    // Accordion action
    document.getElementById('expander').addEventListener('click',function(e){
      e.preventDefault();
      body.classList.toggle('accord-open');
    });

    document.getElementsByClassName('audio-play')[0].addEventListener('click',function(){
      document.getElementsByClassName('background-profile')[0].classList.toggle('active');
    })



})


$(document).ready(function() {
    $(".animsition").animsition({
      inClass: 'fade-in',
      outClass: 'fade-out',
      inDuration: 500,
      outDuration: 500,
      linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
  });

$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerLibraries = new ScrollMagic.Controller();
  var slideshowFlag = true;
  var $windowHeight = $(window).height();
  var isMobile = ($(window).width() < 768) ? true : false;
  // define movement of panels


  // var wipeAnimationKorea = new TimelineMax()
  //   .to("#women-slides", 1,   {x: "-40%"});

  currentController = controllerLibraries;

    var introLibraries = new ScrollMagic.Scene({
      triggerElement: '#intro-vid',
      triggerHook: 0,
      duration: '100%',
    })
      // .setPin('.intro', {pushFollowers: false})
      // .setClassToggle("body", 'medicineIntro')
      // .setTween('.intro-body', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
      // .on('load',function(){
      //   $('video').get(0).play()
      // })
      // .addTo(controllerLibraries);
      .setPin('.intro',{pushFollowers:false})
      .setTween('#intro-text',1,{opacity:0,transform:'translateY(-100px)',ease:Power0.easeIn})
      .addTo(controllerLibraries);
      $(window).resize(function(){
        introLibraries.update(true);
      });

    //Play video through pin
    $('video').get(0).play();

  $(window).resize(function(){
      introLibraries.update(true);
  });

  $( ".pause" ).click(function(e) { 
    var $this = $(e.target);        
    var $vid = $(e.target).parent().find('video');
    if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
    $this.toggleClass('paused');
  });

})
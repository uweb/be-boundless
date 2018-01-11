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
      .setPin('.intro', {pushFollowers: false})
      .setClassToggle("body", 'medicineIntro')
      .setTween('.intro-body', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
      .on('enter',function(){
        $('video').get(0).play()
      })
      .addTo(controllerLibraries);


if(!isMobile) {
    var wipeAnimation = new TimelineMax()
      .to("#svg-stats-1", 1,   {x: "-55%"});
    var wipeAnimationSVG = new TimelineMax()
      .to("#svg-stats", 1,   {x: "-22%"});
    // create scene to pin and link animation
    var horizon = new ScrollMagic.Scene({
        triggerElement: '#libraries-stats',
        triggerHook: 0,
        duration: 1000,
      })
      .setPin("#libraries-stats", {pushFollowers: 1})
      .setTween(wipeAnimation)
       // .setTween("#stats-slides", 0, {
       //      right: window.innerWidth,
       //      }) // trigger a TweenMax.to tween
      // .addIndicators()
      .addTo(controllerLibraries);

          // create scene to pin and link animation
    var horizonSVG = new ScrollMagic.Scene({
        triggerElement: '#img-stats',
        triggerHook: 0,
        duration: 1000,
      })
      .setPin("#img-stats", {pushFollowers: 1})
      .setTween(wipeAnimationSVG)
       // .setTween("#stats-slides", 0, {
       //      right: window.innerWidth,
       //      }) // trigger a TweenMax.to tween
      // .addIndicators()
      .addTo(controllerLibraries);



      // var koreaStats = new ScrollMagic.Scene({
      //   triggerElement: '#korea-stats',
      //   triggerHook: 0,
      //   duration: "100%",
      // })
      // .setPin("#korea-stats")
      // .setTween(wipeAnimationKorea)
      //  // .setTween("#stats-slides", 0, {
      //  //      right: window.innerWidth,
      //  //      }) // trigger a TweenMax.to tween
      // // .addIndicators()
      // .addTo(controllerLibraries);

}

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


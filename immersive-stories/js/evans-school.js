$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerEvans = new ScrollMagic.Controller();

  currentController = controllerEvans;



    var fade = new TimelineMax()
      .to('#slide', 1, {opacity: 0, ease: Power0.easeInOut }, 0)


    var introMedicine = new ScrollMagic.Scene({
      triggerElement: body,
      triggerHook: 0,
      duration: '50%',
      reverse: true
    })
    .on('enter',function(){
      $('video').get(0).play()
    })
    .setClassToggle("body", 'activated')
    .setPin('#intro-vid', {pushFollowers: false})
    .setTween(fade)
    .addTo(controllerEvans);


    var studentpic1 = new ScrollMagic.Scene({
      triggerElement: "#profile-1",
      triggerHook: 0.6,
      duration: '80%',
    })
    .setTween(TweenMax.to('#profile-1 .col-a img', 1, { scaleX:2, scaleY:2, ease: Power0.easeIn }))
    .addTo(controllerEvans);

    var studentpic2 = new ScrollMagic.Scene({
      triggerElement: "#profile-2",
      triggerHook: 0.7,
      duration: '80%',
    })
    .setTween(TweenMax.to('#profile-2 .col-a img', 1, { scaleX:2, scaleY:2, ease: Power0.easeIn }))
    .addTo(controllerEvans);

    var studentpic3 = new ScrollMagic.Scene({
      triggerElement: "#profile-3",
      triggerHook: 0.7,
      duration: '80%',
    })
    .setTween(TweenMax.to('#profile-3 .col-a img', 1, { scaleX:2, scaleY:2, ease: Power0.easeIn }))
    .addTo(controllerEvans);

    $( ".pause" ).click(function(e) { 
      var $this = $(e.target);        
      var $vid = $(e.target).parent().find('video');
      if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
      $this.toggleClass('paused');
    });


})


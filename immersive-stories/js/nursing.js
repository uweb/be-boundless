$(function(){

  $('body').addClass('activated');

  var body = document.getElementsByTagName('body')[0];
  var controllerNursing = new ScrollMagic.Controller();

  currentController = controllerNursing;



    var fade = new TimelineMax()
      .to('#slide', 1, {opacity: 0, ease: Power0.easeInOut }, 0)


    var introMedicine = new ScrollMagic.Scene({
      triggerElement: '#intro-vid',
      triggerHook: 0,
      duration: '100%',
    })
    // .setClassToggle("body", 'activated')
    .setPin('.intro', {pushFollowers: false})
    .setTween(fade)
    .addTo(controllerNursing);

    var addSlideshow = new ScrollMagic.Scene({
      triggerElement: '#slideshow',
      triggerHook: 1,
    })
    .on("enter", function(){
      $('.slick-slideshows').slick({
        lazyLoad: 'ondemand',
        useTransform: true,
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
      });      
    })
    .addTo(controllerNursing);
  

    var tip = document.getElementsByClassName("tip");

    var toolTip = function(e) {
          e.preventDefault();
    };
    
    for (var i = 0; i < tip.length; i++) {
        tip[i].addEventListener('click', toolTip, false);
    }

    // var studentpic3 = new ScrollMagic.Scene({
    //   triggerElement: "#profile-3",
    //   triggerHook: 0.7,
    //   duration: '80%',
    // })
    // .setTween(TweenMax.to('#profile-3 .col-a img', 1, { scaleX:2, scaleY:2, ease: Power0.easeIn }))
    // .addTo(controllerNursing);

    $( ".pause" ).click(function(e) { 
      var $this = $(e.target);        
      var $vid = $(e.target).parent().find('video');
      if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
      $this.toggleClass('paused');
    });

    // flexibility(document.getElementById('intro-vid'));

})


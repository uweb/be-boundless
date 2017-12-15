$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerBuilt = new ScrollMagic.Controller();
  var slideshowFlag = true;
  var $windowHeight = $(window).height();

  currentController = controllerBuilt;

    var introMedicine = new ScrollMagic.Scene({
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
    .addTo(controllerBuilt);
    $(window).resize(function(){
        introMedicine.update(true);
    });
      if ( slideshowFlag ) {
        $('.library-slideshow').slick({
          lazyLoad: 'ondemand',
          useTransform: true,
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
        });
      }

    $( ".pause" ).click(function(e) { 
      var $this = $(e.target);        
      var $vid = $(e.target).parent().find('video');
      if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
      $this.toggleClass('paused');
    });



})


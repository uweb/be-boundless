$(function(){

  var controllerMedicine = new ScrollMagic.Controller()

    var introMedicine = new ScrollMagic.Scene({
      triggerElement: '#intro-slide',
      triggerHook: 0,
      duration: '100%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setClassToggle("body", 'medicineIntro')
    .setTween('#intro-text', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
    .addTo(controllerMedicine);


    // Play Jayna's video

    var videoTrigger = new ScrollMagic.Scene({
      triggerElement: '#video',
      triggerHook: 1
    })
    .on("start", function(){
      videoPlay("https://www.youtube.com/embed/-K0Ur4LV1pg?autoplay=1&rel=0&amp;showinfo=0&amp");
    })
    .reverse(false)
    .addTo(controllerMedicine);


    // Add video for video scroll

    //  $('.video-auto').each(function(index,element){
    //     var $this = $(element);
    //     var that = element;
    //     var videoAutoTrigger = new ScrollMagic.Scene({
    //       triggerElement: element,
    //       triggerHook: 1
    //     })
    //     .on("start", function(){
    //         videoAdder(element, $this)
    //     })
    //     .reverse(false)
    //     .addTo(controllerEngineering);
    // })


    // function videoAdder(el, $el){
    //     $el.addClass('active');
    //     // Dynamically add video
    //     var vid = $el.find('video'),
    //         atts = el.getAttribute('data-vid'),                        
    //         mp4 = atts + '.mp4',
    //         webm = atts + '.webm'

    //     $el.find('.mp4').attr('src', mp4)
    //     $el.find('.webm').attr('src', webm)
    //     vid[0].load();
    // }


  // // Audio interviews
  // $('#people li').on('click', function(){
  //   var $this = $(this);
  //   if( !$this.hasClass('active') ){
  //     $this.addClass('active');
  //   } else {
  //     $this.removeClass('active');
  //   }
  //   $this.parent().children('li').not($this).removeClass('active');
  // })


  // // Focus on button triggers 
  // $('.audio-play').bind("focus blur", function(event){
  //      event.stopPropagation();
  //      if(event.type == "focus")  {
  //       $(event.target).closest('li').toggleClass('active-focus');
  //      } 
  //      else if(event.type == "blur") {
  //       $(event.target).closest('li').toggleClass('active-focus');
  //      }
  //  });

  // $('.medicine-slideshow').slick({
  //   lazyLoad: 'ondemand',
  //   useTransform: true,
  //   dots: true,
  //   infinite: false,
  //   speed: 300,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  // });
  




})


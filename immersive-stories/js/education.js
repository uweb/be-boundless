$(function(){

  var controllerEducation = new ScrollMagic.Controller()

  currentController = controllerEducation;

    var zoomMap = new TimelineMax ()
      .add([
        TweenMax.to(".school-pic", 1, { y: '-50%', ease: Power0.easeOut }),
        TweenMax.to(".blurb1", 0.5, { x: '-100%', opacity: 0 }, 1),
        TweenMax.to(".blurb2", 0.5, { x: '0', opacity: 1 })
      ])

    // build scenes
    var schoolZoom = new ScrollMagic.Scene({
        triggerElement: ".school-zoom",
        triggerHook: 0.45,
        duration: "100%",
      })
      .setTween(zoomMap)
      // .on("progress", function (event) {
      //      window.requestAnimationFrame(function(){
      //       scollPlay(event.progress * 10)
      //      })
      //      console.log(event.progress * 10)
      // })
      // .setPin(".school-zoom")
      // .addIndicators()
      .addTo(controllerEducation);

    var studentpic1 = new ScrollMagic.Scene({
      triggerElement: "#pic1",
      triggerHook: 0.7,
      duration: '65%',
    })
    .setTween(TweenMax.from('#pic1 .pic-2', 1, { x: '100%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerEducation);


    var studentpic2 = new ScrollMagic.Scene({
      triggerElement: "#pic2",
      triggerHook: 0.6,
      duration: '25%',
    })
    .setTween(TweenMax.to('#pic2 .pic-2', 1, { x: '100%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerEducation);


    var intro = new ScrollMagic.Scene({
      triggerElement: '#intro-slide',
      triggerHook: 0,
      duration: '100%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setTween('#intro-text', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
    .addTo(controllerEducation);


    var mapTrigger = new ScrollMagic.Scene({
      triggerElement: '#mapid',
      triggerHook: 1
    })
    .on("start", function(){
      if (!isMobile.match) {
        mapInit();
      }
    })
    .reverse(false)
    .addTo(controllerEducation);


    var videoTrigger = new ScrollMagic.Scene({
      triggerElement: '#video',
      triggerHook: 1
    })
    .on("start", function(){
      videoPlay("https://www.youtube.com/embed/KlEdaGbgYG0?autoplay=1&rel=0&amp;showinfo=0&amp");
    })
    .reverse(false)
    .addTo(controllerEducation);



  // Control video frame by scrolling for future use: 

   // var frameNumber = 0, // start video at frame 0
        // lower numbers = faster playback
   //      playbackConst = 50, 
        // select video element         
   //      vid = document.getElementById('schoolVideo'); 
        // var vid = $('#v0')[0]; // jquery option


    // Use requestAnimationFrame for smooth playback
    // function scollPlay(e){  
    //       vid.currentTime  = e;
    // }




  // Audio interviews
  $('#people li').on('click', function(){
    var $this = $(this);
    if( !$this.hasClass('active') ){
      $this.addClass('active');
    } else {
      $this.removeClass('active');
    }
    $this.parent().children('li').not($this).removeClass('active');
  })


  // Focus on button triggers 
  $('.audio-play').bind("focus blur", function(event){
       event.stopPropagation();
       if(event.type == "focus")  {
        $(event.target).closest('li').toggleClass('active-focus');
       } 
       else if(event.type == "blur") {
        $(event.target).closest('li').toggleClass('active-focus');
       }
   });

  // Lightbox plugin

  MediumLightbox('figure.zoom-effect');    

  var img = document.getElementsByClassName('img')

  $(img).each(function(index){
    var imgIndex = img[index],
        $this = $(this),
        hasCaption = false;

    imgIndex.addEventListener("mouseover", function(){
      if (!hasCaption) {
        $this.after('<p>' + $this.attr('alt') + '</p>')
        hasCaption = true;
      }
    })
  })



})


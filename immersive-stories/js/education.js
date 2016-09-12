$(function(){

  var controllerEducation = new ScrollMagic.Controller()

  var zoomMap = new TimelineMax ()
      .add([
        TweenMax.to(".school-pic", 1, { y: '-50%', ease: Power0.easeOut }),
        TweenMax.to(".blurb1", 0.5, { y: '-100%', opacity: 0 }, 1),
        TweenMax.to(".blurb2", 0.5, { y: '0', opacity: 1 })
      ])

    // build scenes
    var schoolZoom = new ScrollMagic.Scene({
        triggerElement: ".school-zoom",
        triggerHook: 0.5,
        duration: "50%",
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
      triggerHook: 0.4,
      duration: '25%',
    })
    .setTween(TweenMax.from('#pic1 .pic-2', 1, { x: '100%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerEducation);


    var studentpic2 = new ScrollMagic.Scene({
      triggerElement: "#pic2",
      triggerHook: 0.6,
      duration: '15%',
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

    })
    .reverse(false)
    .addTo(controllerEducation);


    var videoTrigger = new ScrollMagic.Scene({
      triggerElement: '#video',
      triggerHook: 1
    })
    .on("start", videoPlay)
    .reverse(false)
    .addTo(controllerEducation);






  // Control video frame by scrolling: 

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

    function videoPlay(){
      var videoSrc = "https://www.youtube.com/embed/l3SLvfzwVkU?autoplay=1&rel=0&amp;showinfo=0&amp",          
          $video = $('#video'),
          $body = $("body");
          videoHTML = 
            '<button class="close-video"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>' +
            '<div id="youtube-video">' + 
            '<iframe title="YouTube video" id="embedVid" width=' + $video.width() + ' height=' + $video.height() + ' src="' + videoSrc + '" frameborder="0" allowfullscreen autoplay></iframe>' +
            '</div>';

      if (isMobile.matches) {

        document.getElementById("boundless-video").innerHTML = videoHTML;

        $(".play").click(function(e){
           e.preventDefault();  
           console.log('toogt')
         })

        $('iframe').click(function(){
          console.log('too')
        })
      
      } else {

        $(".play").click(function(e){

           e.preventDefault();     

           document.getElementById("boundless-video").innerHTML = videoHTML;

           setTimeout( function(){
             $('#video iframe')[0].focus()
           }, 500 );

           $(".close-video").click(function(){
             $(".play").removeClass("hidden");
             $body.toggleClass("playing");
             document.getElementById("boundless-video").innerHTML = '';
           });

            $body.toggleClass("playing");

        });

      }
    }


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


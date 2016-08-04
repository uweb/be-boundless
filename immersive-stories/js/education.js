$(function(){


  // Mobile check

  var isMobile = false;


  // On resize listener

  document.addEventListener('resize', resize);

  function resize(){
      isMobile = window.matchMedia("only screen and (max-width: 768px)");            
  }

  resize();


  // Toggle menu open on desktop

  if(!isMobile.matches) {
    document.getElementsByTagName('body')[0].classList.toggle('active-header')
  }

  var controllerEducation = new ScrollMagic.Controller()

  var zoomMap = new TimelineMax ()
      .add([
        TweenMax.to(".school-pic", 1, { transform: 'scale(4,4) translateX(-200px)' }),
        TweenMax.to(".blurb1", 2, { transform: 'translateY(-300px)', opacity: 0 }),
        TweenMax.to(".blurb2", 2, { transform: 'translateY(0)', opacity: 1 })
      ])

    // build scenes
    var schoolZoom = new ScrollMagic.Scene({
        triggerElement: ".school-zoom",
        triggerHook: 0.5,
        duration: "30%",
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


    var intro = new ScrollMagic.Scene({
      triggerElement: '#intro-slide',
      triggerHook: 0,
      duration: '50%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setTween('#intro-text', 1, { opacity: 0, transform: 'translateY(-100px)' })
    .addTo(controllerEducation);


    var frameNumber = 0, // start video at frame 0
        // lower numbers = faster playback
        playbackConst = 50, 
        // select video element         
        vid = document.getElementById('schoolVideo'); 
        // var vid = $('#v0')[0]; // jquery option



    // Use requestAnimationFrame for smooth playback
    // function scollPlay(e){  
    //       vid.currentTime  = e;
    // }



    $(".play").click(function(e){
     var $video = $('#video'),
       $body = $("body");
     e.preventDefault();
       $body.toggleClass("playing");
       document.getElementById("boundless-video").innerHTML = 
         '<button class="close-video"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>' +
         '<div id="youtube-video">' + 
       '<iframe title="YouTube video" id="embedVid" width=' + $video.width() + ' height=' + $video.height() + ' src="https://www.youtube.com/embed/V2svAdaEe30?rel=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen autoplay></iframe>' +
         '</div>';
       
       setTimeout( function(){
         $('#video iframe')[0].focus()
       }, 500 );

       $(".close-video").click(function(){
         $(".play").removeClass("hidden");
         $body.toggleClass("playing");
         document.getElementById("boundless-video").innerHTML = '';
       });

    });
      




})


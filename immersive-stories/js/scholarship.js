$(function(){

    var controllerScholarship = new ScrollMagic.Controller()


    // // build scenes
    // var schoolZoom = new ScrollMagic.Scene({
    //     triggerElement: ".school-zoom",
    //     triggerHook: 0.45,
    //     duration: "100%",
    //   })
    //   .setTween(zoomMap)
    //   // .on("progress", function (event) {
    //   //      window.requestAnimationFrame(function(){
    //   //       scollPlay(event.progress * 10)
    //   //      })
    //   //      console.log(event.progress * 10)
    //   // })
    //   // .setPin(".school-zoom")
    //   // .addIndicators()
    //   .addTo(controllerScholarship);

    var svg1 = new ScrollMagic.Scene({
      triggerElement: "#section1",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-tree', 1, { y: '-100%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);

    var svg2 = new ScrollMagic.Scene({
      triggerElement: "#section2",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-tube', 1, { y: '-100%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);

    var svg3 = new ScrollMagic.Scene({
      triggerElement: "#section3",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-mic', 1, { y: '-100%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);

    var svg4 = new ScrollMagic.Scene({
      triggerElement: "#section4",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-cord', 1, { y: '-100%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);

    var svg5 = new ScrollMagic.Scene({
      triggerElement: "#section5",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-planet', 1, { y: '-100%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);

    var svg6 = new ScrollMagic.Scene({
      triggerElement: "#section6",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-bike', 1, { y: '-100%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);


    // var intro = new ScrollMagic.Scene({
    //   triggerElement: '#intro-slide',
    //   triggerHook: 0,
    //   duration: '100%',
    // })
    // .setPin('.intro', {pushFollowers: false})
    // .setTween('#intro-text', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
    // .addTo(controllerEducation);

    // In order to toggle current section, 



    function videoAdder(el, $el){
        $el.addClass('active');
        // Dynamically add video
        if (!isMobile.matches) {
            var vid = $el.find('video'),
                atts = el.getAttribute('data-vid'),                        
                mp4 = atts + '.mp4',
                webm = atts + '.webm'

            $el.find('.mp4').attr('src', mp4)
            // $el.find('.webm').attr('src', webm)

            vid[0].load();
            // Play not needed, but just to be safe:
            vid[0].play();
            $el.find('button').on('click',function(e){
                e.preventDefault();
                if (vid[0].paused ) {
                    vid[0].play()
                } else {
                    vid[0].pause()
                }
            })
        } 
    }


    // Ducktype elements into an array
    var videoArray = [];
    [].push.apply(videoArray,document.getElementsByClassName('video-auto'))

    videoArray.forEach(function(element){
        var $this = $(element);
        var that = element;
        var videoAutoTrigger = new ScrollMagic.Scene({
          triggerElement: element,
          triggerHook: 1
        })
        .on("start", function(){
            videoAdder(element, $this)
        })
        .reverse(false)
        .addTo(controllerScholarship);
    })




})


$(function(){

    var controllerScholarship = new ScrollMagic.Controller()

    var svg1 = new ScrollMagic.Scene({
      triggerElement: "#section1",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-tree', 1, { y: '-20%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);

    var svg2 = new ScrollMagic.Scene({
      triggerElement: "#section2",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-tube', 1, { y: '-20%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);

    var svg3 = new ScrollMagic.Scene({
      triggerElement: "#section3",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-mic', 1, { y: '-20%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);

    var svg4 = new ScrollMagic.Scene({
      triggerElement: "#section4",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-cord', 1, { y: '-20%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);

    var svg5 = new ScrollMagic.Scene({
      triggerElement: "#section5",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-planet', 1, { y: '-20%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);

    var svg6 = new ScrollMagic.Scene({
      triggerElement: "#section6",
      triggerHook: 0.7,
      duration: '100%',
    })
    .setTween(TweenMax.to('#svg-bike', 1, { y: '-20%', ease: Power0.easeIn }))
    //.addIndicators()
    .addTo(controllerScholarship);


    // Video player
    var videoTriggerScholarhip = new ScrollMagic.Scene({
      triggerElement: '#video',
      triggerHook: 1
    })
    .on("start", function(){
      videoPlay("https://www.youtube.com/embed/l3SLvfzwVkU?autoplay=1&rel=0&amp;showinfo=0&amp");
    })
    .reverse(false)
    .addTo(controllerScholarship);



    // In order to toggle current section, 
    $('.person').each(function(index,element){
        var dotToggle = new ScrollMagic.Scene({
            duration: this.offsetHeight + 'px',
            triggerElement: this,
            triggerHook: 0.5
        });
        dotToggle.setClassToggle('#dot-nav li:nth-child(' + (parseInt(index) + 1) + ') a', 'active');
        dotToggle.addTo(controllerScholarship);
  
    })




    function videoAdder(el, $el){
        $el.addClass('active');
        // Dynamically add video
        if (!isMobile.matches) {
            var vid = $el.find('video'),
                atts = el.getAttribute('data-vid'),                        
                mp4 = atts + '.mp4',
                webm = atts + '.webm'

            $el.find('.mp4').attr('src', mp4)
            $el.find('.webm').attr('src', webm)

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


    $('.video-auto').each(function(index,element){
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



    //  bind scroll to anchor links
    $(document).on("click", "a[href^='#']", function (e) {
        var id = $(this).attr("href");
        if ($(id).length > 0) {
            e.preventDefault();

            // trigger scroll
            $('html, body').animate({
                scrollTop: $(id).offset().top - 90
              }, {
                duration: 1000
            });

                // if supported by the browser we can even update the URL.
            if (window.history && window.history.pushState) {
                history.pushState("", document.title, id);
            }
        }
    });



})


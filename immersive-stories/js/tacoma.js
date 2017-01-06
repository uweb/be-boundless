
$(function(){

    var controllerTacoma = new ScrollMagic.Controller()
    
    currentController = controllerTacoma;

    var introMedicine = new ScrollMagic.Scene({
      triggerElement: '#intro-slide',
      triggerHook: 0,
      duration: '100%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setClassToggle("body", 'medicineIntro')
    .setTween('#intro-text', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
    .addTo(controllerTacoma);
    $(window).resize(function(){
        introMedicine.update(true);
    });


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

    // In order to toggle current section, 
    $('.photo-break').each(function(index,element){
        var dotToggle = new ScrollMagic.Scene({
            duration: this.offsetHeight + 'px',
            triggerElement: this,
            triggerHook: 0.75
        });
        dotToggle.on("start", function(){
            $(element).addClass('active');
        })
        dotToggle.reverse(false)
        dotToggle.addTo(controllerTacoma);    
    })


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
        .addTo(controllerTacoma);
    })



})


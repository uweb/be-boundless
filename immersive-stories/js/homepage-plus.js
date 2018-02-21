$(function(){

    var body = document.getElementsByTagName('body')[0];
    var controllerHP = new ScrollMagic.Controller();
    var controller = controllerHP;
    var slideshowFlag = true;
    var $windowHeight = $(window).height();
    // var isMobile = ($(window).width() < 768) ? true : false;
    // detect if mobile browser. regex -> http://detectmobilebrowsers.com
      var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
    var imgs = $.makeArray( $('#test img') );
    var imgs2 = $.makeArray( $('#test2 img') );
    var xOffset = { '#slide-1': '0.15',
                    '#slide-2': '0.6',
                    '#slide-3': '1.0',
                    '#slide-4': '0.15',
                    '#slide-5': '0.6',
                    '#slide-6': '1.0'   };
    if (!isMobile) {

        var captionAnimation = new TimelineMax()
            .to(".caption-text.1", 1, {y: "-100%"})
            .add(TweenLite.to(imgs[1], 0.2,   {opacity: 1, visibility: "visible"}))
            .add(TweenLite.to(imgs[0], 0.2,   {opacity: 0}), "-=0.1")
            .to("#marker-2", 0.2,   {opacity: 0.95}, "-=0.3")
            .to("#marker-1", 0.2,   {opacity: 0.25}, "-=0.5")
            .to("#marker-3", 0.2,   {opacity: 0.25}, "-=0.7")
            .to(".caption-text.2", 1,   {y: "-210%"}, "-=0.4") 
            .add(TweenLite.to(imgs[2], 0.2,   {opacity: 1, visibility: "visible"}))
            .add(TweenLite.to(imgs[1], 0.2,   {opacity: 0}), "-=0.1")        
            .to("#marker-3", 0.2,   {opacity: 0.95}, "-=0.3")
            .to("#marker-2", 0.2,   {opacity: 0.25}, "-=0.5")
            .to("#marker-1", 0.2,   {opacity: 0.25}, "-=0.7")
            .to(".caption-text.3", 0.5,   {y: "-260%"}, "-=0.4")
            .to(["#marker-1","#marker-2","#marker-3"], 0,   {opacity: 0.0}) //step 4
            .to("#marker-next", 0,   {opacity: 1, visibility: "visible"});

        var galleryAnimation = new TimelineMax()
            .to(".caption-text.4", 1, {y: "-100%"})
            .add(TweenLite.to(imgs2[1], 0.2,   {opacity: 1, visibility: "visible"}))
            .add(TweenLite.to(imgs2[0], 0.2,   {opacity: 0}), "-=0.1")
            .to("#marker-5", 0.2,   {opacity: 0.95}, "-=0.3")
            .to("#marker-4", 0.2,   {opacity: 0.25}, "-=0.5")
            .to("#marker-6", 0.2,   {opacity: 0.25}, "-=0.7")
            .to(".caption-text.5", 1,   {y: "-210%"}, "-=0.4") 
            .add(TweenLite.to(imgs2[2], 0.2,   {opacity: 1, visibility: "visible"}))
            .add(TweenLite.to(imgs2[1], 0.2,   {opacity: 0}), "-=0.1")        
            .to("#marker-6", 0.2,   {opacity: 0.95}, "-=0.3")
            .to("#marker-5", 0.2,   {opacity: 0.25}, "-=0.5")
            .to("#marker-4", 0.2,   {opacity: 0.25}, "-=0.7")
            .to(".caption-text.6", 0.5,   {y: "-260%"}, "-=0.4")
            .to(["#marker-4","#marker-5","#marker-6"], 0,   {opacity: 0.0}) //step 4
            .to("#marker-next2", 0,   {opacity: 1, visibility: "visible"});

        var galleryHP = new ScrollMagic.Scene({
            triggerElement: '#test',
            triggerHook: 0,
            duration: '600%'
        })
            .setPin('.gallery-1',{pushFollowers:true})
            .setTween(captionAnimation)
            .addTo(controllerHP);

        var gallerytwoHP = new ScrollMagic.Scene({
            triggerElement: '#test2',
            triggerHook: 0,
            duration: '600%',
        })

            .setPin('.gallery-2',{pushFollowers:true})
            .setTween(galleryAnimation)
            .addTo(controllerHP);

        $("[data-href]").click(function() {
            $destination = $(this).attr("data-href");
            if($destination != "#going" && $destination != "#landscape") {
                var galleryID = $(this).parent().parent().parent().attr('id');
                var theScene;
                var theTween;
                if (galleryID == "test") {
                    theTween = captionAnimation;
                    theScene = galleryHP;
                } else {
                    theTween = galleryAnimation;
                    theScene = gallerytwoHP;
                }
                // console.log($(this).parent().parent().parent().attr('id'));
                $xOff = xOffset[$destination];
                // theScene.progress(1);
                // var progress = theScene.progress();
                TweenLite.to(theTween, 1, {progress:$xOff, ease:Power2.easeIn});
                theTween.progress($xOff);
                var Halfway = theScene.duration() * $xOff;
                controller.scrollTo(theScene.scrollOffset() + Halfway);
                // console.log(Halfway);
                controller.updateScene(theScene, true);
                theScene.progress($xOff);

            } else {
                $('html, body').animate({
                    scrollTop: $($destination).offset().top
                }, 1000);
            }
        });
    }

    var introHP = new ScrollMagic.Scene({
        triggerElement: '#intro-vid',
        triggerHook: 0,
        duration: '600%',
    })
        .setPin('.intro',{pushFollowers:false})
        .setTween('#intro-text',1,{opacity:0,transform:'translateY(-100px)',ease:Power0.easeIn})
        .addTo(controllerHP);

    
    $(window).resize(function(){
        controller.update(true);
    });

    //Play video through pin
    $('video').get(0).play();

    $( ".pause" ).click(function(e) { 
    var $this = $(e.target);        
    var $vid = $(e.target).parent().find('video');
    if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
      $this.toggleClass('paused');
    });

    
})
$(function(){

    var body = document.getElementsByTagName('body')[0];
    var controllerHP = new ScrollMagic.Controller();
    var slideshowFlag = true;
    var $windowHeight = $(window).height();
    var isMobile = ($(window).width() < 768) ? true : false;
    var imgs = $.makeArray( $('#test img') );
    function imageTransition(){
        var tl = new TweenMax();
        tl.to(imgs[1], 0.5,   {autoAlpha: 1, visibility: "visible", delay: 0, ease: Power2.easeOut}, "-=0.5")
        tl.to(imgs[0], 0.5,   {autoAlpha: 0, delay: 0, ease: Power2.easeOut})
        /* more tweens go here */

        return tl;
    }
    var captionAnimation = new TimelineMax()
        .to(".caption-text.1", 1,   {y: "-100%"})
        // .to(imgs[0], 1, {css:{autoAlpha:0}, ease:Expo.easeOut, delay:0})
        // .to(imgs[1], 1, {css:{autoAlpha:1}, ease:Expo.easeOut, delay:0}) 
        .to(imgs[1], 0.5,   {autoAlpha: 1, visibility: "visible", delay: 0, ease: Power2.easeOut}, "-=0.5")
        .to(imgs[0], 0.5,   {autoAlpha: 0, delay: 0, ease: Power2.easeOut})
        // .set("#test", {className:"+=image2"})
        // .to( $slides.eq(1), 1.3, {autoAlpha:0} )
        // .add( imageTransition())
        .to(".caption-text.2", 1,   {y: "-200%"}, "-=0.5")
        .to(imgs[2], 0.5,   {autoAlpha: 1, visibility: "visible", delay: 0, ease: Power2.easeOut}, "-=0.5")
        .to(imgs[1], 0.5,   {autoAlpha: 0, delay: 0, ease: Power2.easeOut})
        // .to(imgs[1], 0.5, {css:{autoAlpha:0}})
        // .to(imgs[2], 0.5, {css:{autoAlpha:1}}) 
        // .set("#test", {className:"+=image3"})
        // .to( $slides.eq(2), 1.3, {autoAlpha:0} )
        .to(".caption-text.3", 1,   {y: "-250%"}, "-=0.5");

    var galleryAnimation = new TimelineMax()
        .to(".caption2-text.1", 1,   {y: "-100%"})
        .set("#test2", {className:"+=image2"})
        .to(".caption2-text.2", 1,   {y: "-200%"})
        .set("#test2", {className:"+=image3"})
        .to(".caption2-text.3", 1,   {y: "-300%"});

    var showAnimation = new TimelineMax()
        .to("#test-2", 1, {autoAlpha: 0});

    controller = controllerHP;

    var introHP = new ScrollMagic.Scene({
        triggerElement: '#intro-vid',
        triggerHook: 0,
        duration: '600%',
    })
        .setPin('.intro',{pushFollowers:false})
        .setTween('#intro-text',1,{opacity:0,transform:'translateY(-100px)',ease:Power0.easeIn})
        .addTo(controllerHP);

    var galleryHP = new ScrollMagic.Scene({
        triggerElement: '#test',
        triggerHook: 0,
        duration: '600%',
        tweenChanges: 1
    })
        .addIndicators()
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



    $(window).resize(function(){
      introHP.update(true);
    });

    //Play video through pin
    $('video').get(0).play();

    $(window).resize(function(){
    introHP.update(true);
    });

    $( ".pause" ).click(function(e) { 
    var $this = $(e.target);        
    var $vid = $(e.target).parent().find('video');
    if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
      $this.toggleClass('paused');
    });
})
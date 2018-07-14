$(function () {

  var $heroVideo = $('#full-bg-video'),
    $heroVidMuteBtn = $('#mute-btn-hero'),
    $heroVidContainer = $('#section-intro'),
    heroAudioWasOn = false,

    $calloutAudio = $('#audio-callout'),
    $calloutAudioMuteBtn = $('#mute-btn-callout'),
    $calloutAudioContainer = $('.callout.right'),
    calloutAudioWasOn = false;

  // Mute / unmute jumbotron bg video
  $heroVidMuteBtn.click(function (e) {
    toggleHeroVideoMute();
    if ($calloutAudio.prop('paused') === false) {
      toggleCalloutMute();
      calloutAudioWasOn = true;
    }
  });

  // Mute / unmute body callout audio
  $calloutAudioMuteBtn.click(function (e) {
    toggleCalloutMute();
    if ($heroVideo.prop('muted') === false) {
      toggleHeroVideoMute();
      heroAudioWasOn = true;
    }
  });

  // Mute other audio and video when video modal is opened
  $(document)
    .on('lity:open', function (event, instance) {
      if ($heroVideo.prop('muted') === false) {
        toggleHeroVideoMute();
        heroAudioWasOn = true;
        calloutAudioWasOn = false;
      }
      if ($calloutAudio.prop('paused') === false) {
        toggleCalloutMute();
        heroAudioWasOn = false;
        calloutAudioWasOn = true;
      }
    })
    .on('lity:close', function (event, instance) {
      if (heroAudioWasOn) toggleHeroVideoMute();
      if (calloutAudioWasOn) toggleCalloutMute();
    });

  function toggleHeroVideoMute() {
    $heroVideo.prop('muted', !$heroVideo.prop('muted'));
    heroAudioWasOn = !$heroVideo.prop('muted');
    $heroVidContainer.toggleClass('muted');
  }

  function toggleCalloutMute() {
    if ($calloutAudio.prop('paused')) {
      $calloutAudio.get(0)
        .play();
    } else {
      $calloutAudio.get(0)
        .pause();
    }
    $calloutAudioContainer.toggleClass('muted');
  }

  // show / hide description text in profiles and photos sections
  // var $moreBtns = $('#section-profiles .item, #section-photos .item')

  // $moreBtns.click(function (e) {
  //   e.preventDefault();
  //   $(this)
  //     .closest('.item')
  //     .toggleClass('show-description');
  // });

  // main animation controller
  var controllerLaw = new ScrollMagic.Controller();



  /***************************
   * Animation: Intro
   ***************************/

  var $introText = $('#section-intro .intro-text'),
    $introVid = $('#full-bg-video'),
    introVidObj = {
      volume: $introVid.prop('volume')
    };

  var tweenIntro = new TimelineMax()
    .to($introText, 1.5, { alpha: 0, transform: 'translateY(-100px)', ease: Power0.easeIn }, 0)
    .to(introVidObj, 1, {
      volume: 0,
      ease: Linear.easeNone,
      onUpdate: function () {
        $('#full-bg-video').prop('volume', this.target.volume);
      }
    }, 0.5);

  var sceneIntro = new ScrollMagic.Scene({
      triggerElement: '#section-intro',
      triggerHook: 0,
      duration: '100%'
    })
    .setPin('#section-intro', { pushFollowers: false })
    .setTween(tweenIntro)
    .addTo(controllerLaw);

  // Play video through pin
  $('video')
    .get(0)
    .play();



  /***************************
   * Animation: Map
   ***************************/

  // animation vars
  var before1 = CSSRulePlugin.getRule("#section-map .item-1 .headline:before");
  var before2 = CSSRulePlugin.getRule("#section-map .item-2 .headline:before");
  var before3 = CSSRulePlugin.getRule("#section-map .item-3 .headline:before");
  var after1 = CSSRulePlugin.getRule("#section-map .item-1 .headline:after");
  var after2 = CSSRulePlugin.getRule("#section-map .item-2 .headline:after");
  var after3 = CSSRulePlugin.getRule("#section-map .item-3 .headline:after");
  var tweenMapDuration = 0.5;

  // build tween
  var tweenMap = new TimelineMax()

    // section 1 out
    .to(before1, tweenMapDuration * 0.5, { cssRule: { scaleX: 0, transformOrigin: '100% 50%' } }, 0)
    .to(after1, tweenMapDuration * 0.5, { cssRule: { scaleX: 0, transformOrigin: '0% 50%' } }, 0)
    .to("#section-map .item-1", tweenMapDuration * 0.125, { opacity: 0 }, tweenMapDuration * 0.375)
    .to("#section-map .background-1", tweenMapDuration * 0.125, { scale: 1.2, opacity: 0 }, tweenMapDuration * 0.375)

    // section 2 in
    .from(before2, tweenMapDuration * 0.5, { cssRule: { scaleX: 0, transformOrigin: '100% 50%' } }, tweenMapDuration * 0.5)
    .from(after2, tweenMapDuration * 0.5, { cssRule: { scaleX: 0, transformOrigin: '0% 50%' } }, tweenMapDuration * 0.5)
    .to("#section-map .item-2", tweenMapDuration * 0.125, { opacity: 1 }, tweenMapDuration * 0.5)
    .to("#section-map .background-2", tweenMapDuration * 0.125, { opacity: 1, scale: 1 }, tweenMapDuration * 0.5)

    // section 2 out
    //.to(before2, tweenMapDuration * 0.5, { cssRule: { scaleX: 0, transformOrigin: '100% 50%' } }, tweenMapDuration * 0.5)
    //.to(after2, tweenMapDuration * 0.5, { cssRule: { scaleX: 0, transformOrigin: '0% 50%' } }, tweenMapDuration * 0.5)
    .to("#section-map .item-2", tweenMapDuration * 0.625, { opacity: 0 }, tweenMapDuration * 0.875)
    .to("#section-map .background-2", tweenMapDuration * 0.625, { scale: 1.2, opacity: 0 }, tweenMapDuration * 0.875)

    // section 3 in
    //.from(before3, tweenMapDuration * 0.5, { cssRule: { scaleX: 0, transformOrigin: '100% 50%' } }, tweenMapDuration)
    //.from(after3, tweenMapDuration * 0.5, { cssRule: { scaleX: 0, transformOrigin: '0% 50%' } }, tweenMapDuration)
    .to("#section-map .item-3", tweenMapDuration * 0.625, { opacity: 1 }, tweenMapDuration)
    .to("#section-map .background-3", tweenMapDuration * 0.625, { opacity: 1, scale: 1 }, tweenMapDuration)

  var sceneMap = new ScrollMagic.Scene({
      triggerElement: '#section-map',
      triggerHook: 0,
      duration: '200%'
    })
    .setPin('#section-map', { pushFollowers: true })
    .on('leave', function(e) {
      console.log ( 'map leave' );
      if(e.scrollDirection === 'REVERSE') {
        $('#section-map').css({
          'position': 'relative'
        });
      } else {
        // $('#section-map').css({
        //   'position': 'fixed',
        //   'top': 0,
        //   'left': 0
        // });
      }
    })
    .setTween(tweenMap)
    .addTo(controllerLaw);


  /***************************
   * Animation: Body
   ***************************/

  var calloutLeft = $('#section-body .callout.left'),
    calloutRight = $('#section-body .callout.right');

  var tweenBodyLeft = new TimelineMax()
    .from(calloutLeft, 0.5, { alpha: 0, overwrite: false })
    .from(calloutLeft, 0.6, { x: '-=200px', overwrite: false, immediateRender: false }, 0);

  var tweenBodyRight = new TimelineMax()
    .from(calloutRight, 0.5, { alpha: 0, overwrite: false })
    .from(calloutRight, 0.6, { x: '+=200px', overwrite: false, immediateRender: false }, 0);

  var sceneBodyLeft = new ScrollMagic.Scene({
      triggerElement: '#section-body .callout.left',
      offset: -200
    })
    .setTween(tweenBodyLeft)
    .addTo(controllerLaw);

  var sceneBodyRight = new ScrollMagic.Scene({
      triggerElement: '#section-body .callout.right',
      offset: -200
    })
    .setTween(tweenBodyRight)
    .addTo(controllerLaw);


  /***************************
   * Animation: Profiles
   ***************************/

  var controllerProfiles = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: '0', duration: "500%"}});

  var profilesTween = new TimelineMax()
    .fromTo("#section-profiles .item-1 .group", 0.25, {alpha:0}, {alpha:1})
    .fromTo("#section-profiles .item-1 .group", 0.75,
      {transform: 'translateY(50vh)'},
      {transform: 'translateY(-50vh)'}, "-=0.25"
    )
    .to("#section-profiles .item-1 .group", 0.25, {alpha:0}, "-=0.25")
    .to("#section-profiles .item-1", 0.25, {autoAlpha:0})
    // second slide
    .fromTo("#section-profiles .item-2 .group", 0.25, {alpha:0}, {alpha:1})
    .fromTo("#section-profiles .item-2 .group", 0.75,
      {transform: 'translateY(50vh)'},
      {transform: 'translateY(-50vh)'}, "-=0.25"
    )
    .to("#section-profiles .item-2 .group", 0.25, {alpha:0}, "-=0.25")
    .to("#section-profiles .item-2", 0.25, {autoAlpha:0})
    // third slide
    .fromTo("#section-profiles .item-3 .group", 0.25, {alpha:0}, {alpha:1})
    .fromTo("#section-profiles .item-3 .group", 0.75,
      {transform: 'translateY(50vh)'},
      {transform: 'translateY(-50vh)'}, "-=0.25"
    )
    .to("#section-profiles .item-3 .group", 0.25, {alpha:0}, "-=0.25")
    .to("#section-profiles .item-3", 0.25, {autoAlpha:0})
    //fourth slide
    .fromTo("#section-profiles .item-4 .group", 0.25, {alpha:0}, {alpha:1})
    .fromTo("#section-profiles .item-4 .group", 0.75,
      {transform: 'translateY(50vh)'},
      {transform: 'translateY(-50vh)'}, "-=0.25"
    )
    .to("#section-profiles .item-4 .group", 0.25, {alpha:0}, "-=0.25")
    .to("#section-profiles .item-4", 0.25, {autoAlpha:0})
    //fifth slide
    .fromTo("#section-profiles .item-5 .group", 0.25, {alpha:0}, {alpha:1})
    .fromTo("#section-profiles .item-5 .group", 0.75,
      {transform: 'translateY(50vh)'},
      {transform: 'translateY(-50vh)'}, "-=0.25"
    )
    .to("#section-profiles .item-5 .group", 0.25, {alpha:0}, "-=0.25")
  new ScrollMagic.Scene({triggerElement: "#section-profiles"})
    .setPin("#section-profiles")
    .setTween(profilesTween)
    //.addIndicators({name: "pin profiles"})
    .addTo(controllerProfiles);

  /***************************
   * Animation: Photos
   ***************************/

   var controllerPhotos = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: '0', duration: '600%'}});

   var photosTween = new TimelineMax()
     .fromTo("#section-photos .item-1 .group", 0.25, {alpha:0}, {alpha:1})
     .fromTo("#section-photos .item-1 .group", 1,
       {transform: 'translateY(50vh)'},
       {transform: 'translateY(-50vh)'}, "-=0.25"
     )
     .to("#section-photos .item-1 .group", 0.25, {alpha:0}, "-=0.25")
     .to("#section-photos .item-1", 0.5, {autoAlpha:0})
     // second photo
     .fromTo("#section-photos .item-2 .group", 0.25, {alpha:0}, {alpha:1})
     .fromTo("#section-photos .item-2 .group", 1,
       {transform: 'translateY(50vh)'},
       {transform: 'translateY(-50vh)'}, "-=0.25"
     )
     .to("#section-photos .item-2 .group", 0.25, {alpha:0}, "-=0.25")
     .to("#section-photos .item-2", 0.5, {autoAlpha:0})
     // third photo
     .fromTo("#section-photos .item-3 .group", 0.25, {alpha:0}, {alpha:1})
     .fromTo("#section-photos .item-3 .group", 1,
       {transform: 'translateY(50vh)'},
       {transform: 'translateY(-50vh)'}, "-=0.25"
     )
     .to("#section-photos .item-3 .group", 0.25, {alpha:0}, "-=0.25")
     .to("#section-photos .item-3", 0.5, {autoAlpha:0})
     // fourth photo
     .fromTo("#section-photos .item-4 .group", 0.25, {alpha:0}, {alpha:1})
     .fromTo("#section-photos .item-4 .group", 1,
       {transform: 'translateY(50vh)'},
       {transform: 'translateY(-50vh)'}, "-=0.25"
     )
     .to("#section-photos .item-4 .group", 0.25, {alpha:0}, "-=0.25")
     .to("#section-photos .item-4", 0.5, {autoAlpha:0})
     // fifth photo
     .fromTo("#section-photos .item-5 .group", 0.25, {alpha:0}, {alpha:1})
     .fromTo("#section-photos .item-5 .group", 1,
       {transform: 'translateY(50vh)'},
       {transform: 'translateY(-50vh)'}, "-=0.25"
     )
     .to("#section-photos .item-5 .group", 0.25, {alpha:0}, "-=0.25")
     .to("#section-photos .item-5", 0.5, {autoAlpha:0})
     // sixth photo
     .fromTo("#section-photos .item-6 .group", 0.25, {alpha:0}, {alpha:1})
     .fromTo("#section-photos .item-6 .group", 1,
       {transform: 'translateY(50vh)'},
       {transform: 'translateY(-50vh)'}, "-=0.25"
     )
     .to("#section-photos .item-6 .group", 0.25, {alpha:0}, "-=0.25")
  new ScrollMagic.Scene({triggerElement: "#section-photos"})
    .setPin("#section-photos")
    .setTween(photosTween)
    //.addIndicators({name: "pin photos"})
    .addTo(controllerPhotos);

  /***************************
   * Resizing
   ***************************/

  $(window)
    .resize(function () {
      sceneIntro.update(true);
      sceneMap.update(true);
      sceneBodyLeft.update(true);
      sceneBodyRight.update(true);
      sceneProfiles1.update(true);
      sceneProfiles2.update(true);
      sceneProfiles3.update(true);
      scenePhotos1.update(true);
      scenePhotos2.update(true);
      scenePhotos3.update(true);
      scenePhotos4.update(true);
    });



  /***************************
   * Misc scripts
   ***************************/

  if (detectIE) {
    // fallback for object-fit: cover - header bg video
    // $('#section-intro video')
    //   .css('height', 'auto');
  } else {
    // TODO: re-enable this
    // lazyload();
  }







  /**
   * detect IE
   * returns version of IE or false, if browser is not Internet Explorer
   */
  function detectIE() {
    var ua = window.navigator.userAgent;

    // Test values; Uncomment to check result

    // IE 10
    // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';

    // IE 11
    // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';

    // Edge 12 (Spartan)
    // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';

    // Edge 13
    // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
      // IE 10 or older => return version number
      return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
      // IE 11 => return version number
      var rv = ua.indexOf('rv:');
      return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/');
    if (edge > 0) {
      // Edge (IE 12+) => return version number
      return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }

    // other browser
    return false;
  }


});

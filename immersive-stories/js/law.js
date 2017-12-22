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
  var $profilesMoreBtns = $('#section-profiles a.read-more')
    .off();
  var $photosMoreBtns = $('#section-photos a.read-more')
    .off();
  var $allMoreBtns = $profilesMoreBtns.add($photosMoreBtns);

  $allMoreBtns.click(function (e) {
    e.preventDefault();
    $(this)
      .closest('.item')
      .toggleClass('show-description');
  });

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

  // animation vars
  var before1 = CSSRulePlugin.getRule("#section-map .item-1 .headline:before");
  var before2 = CSSRulePlugin.getRule("#section-map .item-2 .headline:before");
  var before3 = CSSRulePlugin.getRule("#section-map .item-3 .headline:before");
  var after1 = CSSRulePlugin.getRule("#section-map .item-1 .headline:after");
  var after2 = CSSRulePlugin.getRule("#section-map .item-2 .headline:after");
  var after3 = CSSRulePlugin.getRule("#section-map .item-3 .headline:after");



  /***************************
   * Animation: Map
   ***************************/

  // graph line SVG
  var graphPaths = $('#map-graph-line .graph-path'),
    graphCircs = $('#map-graph-line .graph-circ');

  for (var i = 0; i < graphPaths.length; i++) {
    initSvgPath(graphPaths[i]);
  }

  function initSvgPath(path) {
    var pathLength = path.getTotalLength();
    path.style.strokeDasharray = pathLength;
    path.style.strokeDashoffset = pathLength;
    path.style.opacity = 1;
  }

  // build tween
  var tweenMap = new TimelineMax()
    // graph svg lines
    .to(graphPaths[0], 0.75, { css: { strokeDashoffset: 0 } }, 0)
    .to(graphPaths[1], 0.75, { css: { strokeDashoffset: 0 } }, 0.75)
    .to(graphPaths[2], 0.75, { css: { strokeDashoffset: 0 } }, 1.5)
    .to(graphPaths[3], 0.75, { css: { strokeDashoffset: 0 } }, 2.25)

    // graph svg points
    .from(graphCircs[0], 0.25, { scale: 0, transformOrigin: '50% 50%', ease: Back.easeOut }, 0)
    .from(graphCircs[1], 0.25, { scale: 0, transformOrigin: '50% 50%', ease: Back.easeOut }, 0.75)
    .from(graphCircs[2], 0.25, { scale: 0, transformOrigin: '50% 50%', ease: Back.easeOut }, 1.5)
    .from(graphCircs[3], 0.25, { scale: 0, transformOrigin: '50% 50%', ease: Back.easeOut }, 2.25)
    .from(graphCircs[4], 0.25, { scale: 0, transformOrigin: '50% 50%', ease: Back.easeOut }, 3)

    // headline fades
    .to("#section-map .item-1", 1, { opacity: 0 }, 0)
    .to("#section-map .item-2", 1, { opacity: 1 }, 1)
    .to("#section-map .item-2", 1, { opacity: 0 }, 2)
    .to("#section-map .item-3", 1, { opacity: 1 }, 3)

    // border animation
    .to(before1, 1, { cssRule: { scaleX: 0, transformOrigin: '100% 50%' } }, 0)
    .to(after1, 1, { cssRule: { scaleX: 0, transformOrigin: '0% 50%' } }, 0)

    .from(before2, 1, { cssRule: { scaleX: 0, transformOrigin: '100% 50%' } }, 1)
    .from(after2, 1, { cssRule: { scaleX: 0, transformOrigin: '0% 50%' } }, 1)
    .to(before2, 1, { cssRule: { scaleX: 0, transformOrigin: '100% 50%' } }, 2)
    .to(after2, 1, { cssRule: { scaleX: 0, transformOrigin: '0% 50%' } }, 2)

    .from(before3, 1, { cssRule: { scaleX: 0, transformOrigin: '100% 50%' } }, 3)
    .from(after3, 1, { cssRule: { scaleX: 0, transformOrigin: '0% 50%' } }, 3)

    // image scaling
    .to("#section-map .background-1", 1, { scale: 1.2, opacity: 0, transformOrigin: '15% 15%' }, 1)
    .to("#section-map .background-2", 1, { scale: 1, transformOrigin: '15% 15%' }, 1)
    .to("#section-map .background-2", 1, { scale: 1.2, opacity: 0, transformOrigin: '15% 15%' }, 3)
    .to("#section-map .background-3", 1, { scale: 1, transformOrigin: '15% 15%' }, 3)
    .to("#section-map .background-graph", 1, { opacity: 0 }, 3)

  var sceneMap = new ScrollMagic.Scene({
      triggerElement: '#section-map',
      triggerHook: 0,
      duration: '500%'
    })
    .setPin('#section-map', { pushFollowers: true })
    .setTween(tweenMap)
    .addTo(controllerLaw)
    .on('progress', function (event) {
      // console.log('Progress :: ', event.progress);
      // console.log(this.triggerElement());
      if (event.progress > 0.5) {
        $(this.triggerElement())
          .addClass('scrollHide');
      } else {
        $(this.triggerElement())
          .removeClass('scrollHide');
      }
    });


  /***************************
   * Animation: Body
   ***************************/
  var calloutLeft = $('#section-body .callout.left'),
    calloutRight = $('#section-body .callout.right');

  var tweenBodyLeft = new TimelineMax()
    .from(calloutLeft, 0.5, { alpha: 0 })
    .from(calloutLeft, 0.6, { x: '-=200px' }, 0);

  var tweenBodyRight = new TimelineMax()
    .from(calloutRight, 0.5, { alpha: 0 })
    .from(calloutRight, 0.6, { x: '+=200px' }, 0);

  var sceneBodyLeft = new ScrollMagic.Scene({
      triggerElement: '#section-body .callout.left',
      duration: '100%',
      offset: -550
    })
    .setTween(tweenBodyLeft)
    .addTo(controllerLaw);

  var sceneBodyRight = new ScrollMagic.Scene({
      triggerElement: '#section-body .callout.right',
      duration: '100%',
      offset: -550
    })
    .setTween(tweenBodyRight)
    .addTo(controllerLaw);


  /***************************
   * Animation: Profiles
   ***************************/

  var tweenProfiles = new TimelineMax()
    .set("#section-profiles .item-2", { autoAlpha: 0 })
    .set("#section-profiles .item-1 .nav", { autoAlpha: 1 })
    .set("#section-profiles .item-2 .nav", { autoAlpha: 0 })

    .to("#section-profiles .item-1", 1, { autoAlpha: 0 }, 0)
    .to("#section-profiles .item-2", 1, { autoAlpha: 1 }, 0)
    .to("#section-profiles .item-1 .nav", 0.5, { autoAlpha: 0 }, 0)
    .to("#section-profiles .item-2 .nav", 0.5, { autoAlpha: 1 }, 0.5);

  tweenProfiles.addCallback(bringProfileElToTop, 0, ['.item-1']);
  tweenProfiles.addCallback(bringProfileElToTop,
    tweenProfiles.duration() / 2, ['.item-2']);

  function bringProfileElToTop(el) {
    $('#section-profiles .item')
      .css('z-index', 0); // set all to 0
    $('#section-profiles ' + el)
      .css('z-index', 1); // bring passed to top
  }

  var sceneProfiles = new ScrollMagic.Scene({
      triggerElement: '#section-profiles',
      triggerHook: 0,
      duration: '200%'
    })
    .setPin('#section-profiles', { pushFollowers: true })
    .setTween(tweenProfiles)
    .addTo(controllerLaw);



  /***************************
   * Animation: Photos
   ***************************/

  var tweenPhotos = new TimelineMax()
    .set("#section-photos .item-2", { autoAlpha: 0 })
    .set("#section-photos .item-3", { autoAlpha: 0 })
    .set("#section-photos .item-1 .nav", { autoAlpha: 1 })
    .set("#section-photos .item-2 .nav", { autoAlpha: 0 })
    .set("#section-photos .item-3 .nav", { autoAlpha: 0 })

    .to("#section-photos .item-1", 1, { autoAlpha: 0 }, 0)
    .to("#section-photos .item-2", 1, { autoAlpha: 1 }, 0)
    .to("#section-photos .item-3", 1, { autoAlpha: 1 }, 1)
    .to("#section-photos .item-1 .nav", 0.5, { autoAlpha: 0 }, 0)
    .to("#section-photos .item-2 .nav", 0.5, { autoAlpha: 1 }, 0.5)
    .to("#section-photos .item-3 .nav", 0.5, { autoAlpha: 1 }, 1.5);

  tweenPhotos.addCallback(bringPhotoElToTop, 0, ['.item-1']);
  tweenPhotos.addCallback(bringPhotoElToTop,
    tweenPhotos.duration() / 3, ['.item-2']);
  tweenPhotos.addCallback(bringPhotoElToTop, (tweenPhotos.duration() /
    3) * 2, ['.item-3']);

  function bringPhotoElToTop(el) {
    $('#section-photos .item')
      .css('z-index', 0); // set all to 0
    $('#section-photos ' + el)
      .css('z-index', 1); // bring passed to top
  }

  var scenePhotos = new ScrollMagic.Scene({
      triggerElement: '#section-photos',
      triggerHook: 0,
      duration: '200%'
    })
    .setPin('#section-photos', { pushFollowers: true })
    .setTween(tweenPhotos)
    .addTo(controllerLaw);



  /***************************
   * Resizing
   ***************************/

  $(window)
    .resize(function () {
      sceneIntro.update(true);
      sceneMap.update(true);
      sceneBodyLeft.update(true);
      sceneBodyRight.update(true);
      sceneProfiles.update(true);
      scenePhotos.update(true);
    });



  /***************************
   * Misc scripts
   ***************************/

  // lazyloading (not IE) in 3... 2... 1...
  if (detectIE) {
    // fallback for object-fit: cover - header bg video
    $('#section-intro video')
      .css('height', 'auto');
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

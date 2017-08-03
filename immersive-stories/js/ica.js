$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerICA = new ScrollMagic.Controller();
  var slideshowFlag = true;
  var $windowHeight = $(window).height();
// detect if mobile browser. regex -> http://detectmobilebrowsers.com
  var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);




  currentController = controllerICA;

    var introMedicine = new ScrollMagic.Scene({
      triggerElement: '#intro-vid',
      triggerHook: 0,
      duration: '100%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setClassToggle("body", 'medicineIntro')
    .setTween('.pic-fade', 1, { opacity: 1, ease: Power0.easeIn })
    .addTo(controllerICA);
    $(window).resize(function(){
        introMedicine.update(true);
    });
    // 
    // 
    // $('#full-bg-video').on('ended', function(){
    //     //this.currentTime = 5;
    //     console.log("test")
    // });

    //var videdo = $("#intro-vid").find("video")[0];

    // Scrubs the video
      // var videoScrubber = new ScrollMagic.Scene({
      //     triggerElement: "#intro-vid",
      //     duration: '100%',
      //     triggerHook: 0,
      //     reverse: true
      // })
      // .setPin("#intro-vid",  {pushFollowers: false})
      // .on('start',function(){
      //   videdo.play()
      // })
      // .on('end',function(){
      //   videdo.pause()
      // })
      // .addTo(controllerICA)
      // $(window).resize(function(){
      //     videoScrubber.duration($(window).height()*2);
      //     videoScrubber.update(true);
      // });
      // 
  // Setup video 1
var scrolleo1 = new Scrolleo({

  acceleration: 0.8, // 1 = instant, 0 = never
  secondsPerScreen: 10, // Defaults to video duration
  additionalOffset: 0, // Negative starts the video later, positive starts earlier. default starts when top of video hits bottom of the screen
  wrapperEl: '#full-bg-video' // id of the video you want to control

});
scrolleo1.init();


  $( document )
    .on( "mousemove", ".para", function( event ) {

    var halfW = ( this.clientWidth / 2 );
    var halfH = ( this.clientHeight / 2 );

    var coorX = ( halfW - ( event.pageX - this.offsetLeft ) );
    var coorY = ( halfH - ( event.pageY - $(this).offset().top ) ); // this is the problem

    var degX  = ( ( coorY / halfH ) * 2 ) + 'deg'; // max. degree = 10 /// this is the problem
    var degY  = ( ( coorX / halfW ) * -2 ) + 'deg'; // max. degree = 10

    //var degX  = ( degX > 1.1 ? 1.1 : degX ) + 'deg'; 
    //var degY  = ( degY > 1.35 ? 1.35 : degY ) + 'deg'; 

    $( this ).css( 'transform', function() {
      return 'perspective( 1023px ) translate3d( 0, 0, 50px )  rotateX('+ degX +') rotateY('+ degY +')';
    } )

  } )
    .on( "mouseout", ".para", function() {
    $( this ).removeAttr( 'style' )
  } );


  // In order to toggle current section, 

  if (!isMobile) {
    $('.para').each(function(index,element){
        var el = $(this).find('.cutout');
        var elH3 = $(this).find('h3');
        var elHeight = $(this).height();
        var paraMove = new ScrollMagic.Scene({
            duration: (this.offsetHeight + elHeight) + 'px',
            triggerElement: this,
            triggerHook: 1
        })
        .setTween(new TimelineMax().add([
            TweenMax.to(elH3, 1, { transform: 'translateY(-90px)', ease: Power0.easeIn }),
            // TweenMax.to(el, 1, { transform: 'translateY(30px)', ease: Power0.easeIn })
        ]));
        paraMove.addTo(controllerICA);    
    })
  } 


    // Parallax photos 

    var delacruzAnimation = new TimelineMax ()
          .add([
            TweenMax.to('#photo-2', 1,    {  opacity: 0, ease: Power0.easeIn, delay: 0.0 }),
          ])
    var transHeight = -$('.transSection').height();
    //var hook = (isMobile) ? 0.5 : 0.3;

    var martez = new ScrollMagic.Scene({
      triggerElement: '.transSection',
      triggerHook: 0.5,
      duration:  '25%',
    })
    .setTween(delacruzAnimation)
    .addTo(controllerICA)

    // Parallax photos 

    // var delacruzAnimationII = new TimelineMax ()
    //       .add([
    //         TweenMax.to('.mask', 1,    {  opacity: 0, ease: Power0.easeIn, delay: 0.0 }),
    //       ])
    // var transHeightII = -$('.transSection').height();

    // var martezII = new ScrollMagic.Scene({
    //   triggerElement: '.clouds',
    //   triggerHook: 0.5,
    //   duration:  '45%',
    // })
    // .setTween(delacruzAnimationII)
    // .addTo(controllerICA)





});


/* Scrolleo - make your video scroll with inertia
 * MIT License - by Mark Teater
 */
(function(window, document, undefined) {

    "use strict";

    var _Scrolleo = function(opts) {
        // Defaults
        this.acceleration = 0.08; //1 is fastest, 0 is slowest, 0.08 is default
        this.secondsPerScreen = null; //Set this to the length of the video. "1" is 1 second.
        this.additionalOffset = 0; //Add or subtract pixels to when the video will start. "10" means that the video will start 10px earlier.
        this.wrapperEl = null;

        // Override defaults
        if (opts) {
            for (var opt in opts) {
                this[opt] = opts[opt];
            }
        }
    };

    var targetscrollpos;

    _Scrolleo.prototype = {
        init: function() {
            var self = this;
            this.wrapper = document.querySelectorAll(this.wrapperEl);

            // get the location of the top of the page
            targetscrollpos = window.pageYOffset;
            Array.prototype.forEach.call(this.wrapper, function(wr) {

                // Set the pixelsPerSecond to the full duration of the video if nothing was set in the options
                if (self.secondsPerScreen === null) {
                    self.wrapper[0].addEventListener('loadedmetadata', function() {
                        self.secondsPerScreen = self.wrapper[0].duration;
                        //recalculate values on video with new pixelsPerSecond
                        self.distanceToTop = getElemDistanceToTop(elem);
                        self.offsetFromTop = getOffsetFromTop(self.distanceToTop);
                        self.pixelsPerSecond = getPixelsPerSecond();
                    });
                }

                self.pixelsPerSecond = null;
                self.scrollpos = null;
                self.currentTime = null;
                self.offsetFromTop = null;
                self.distanceToTop = null;

                // http://paulirish.com/2011/requestanimationframe-for-smart-animating/
                // requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
                (function() {
                    var lastTime = 0;
                    var vendors = ['ms', 'moz', 'webkit', 'o'];
                    for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
                        window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
                        window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
                    }
                    if (!window.requestAnimationFrame)
                        window.requestAnimationFrame = function(callback, element) {
                            var currTime = new Date().getTime();
                            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                            var id = window.setTimeout(function() {
                                    callback(currTime + timeToCall);
                                },
                                timeToCall);
                            lastTime = currTime + timeToCall;
                            return id;
                        };
                    if (!window.cancelAnimationFrame)
                        window.cancelAnimationFrame = function(id) {
                            clearTimeout(id);
                        };
                }());

                // requestAnim shim layer by Paul Irish
                window.requestAnimFrame = (function() {
                    return window.requestAnimationFrame ||
                        window.webkitRequestAnimationFrame ||
                        window.mozRequestAnimationFrame ||
                        window.oRequestAnimationFrame ||
                        window.msRequestAnimationFrame ||
                        function( /* function */ callback, /* DOMElement */ element) {
                            window.setTimeout(callback, 1000 / 60);
                        };
                })();

                // Define functions to be used by Scrolleo
                var getElemDistanceToTop = function(elem) {
                        //http://gomakethings.com/get-distances-to-the-top-of-the-document-with-native-javascript/
                        var location = 0;
                        if (elem.offsetParent) {
                            do {
                                location += elem.offsetTop;
                                elem = elem.offsetParent;
                            } while (elem);
                        }
                        return location >= 0 ? location : 0;
                    },
                    getOffsetFromTop = function(distanceToTop) {
                        var offset = distanceToTop - window.innerHeight + self.additionalOffset;
                        return offset >= 0 ? offset : 0;
                    },
                    getPixelsPerSecond = function() {
                        var pixelsPerSecond = (window.innerHeight + self.wrapper[0].clientHeight) / self.secondsPerScreen;
                        return pixelsPerSecond >= 0 ? pixelsPerSecond : 0;
                    },
                    scrollHandler = function() {
                        targetscrollpos = window.pageYOffset;
                    },
                    resizeHandler = function() {
                        //recalculate values on resize
                        self.distanceToTop = getElemDistanceToTop(elem);
                        self.offsetFromTop = getOffsetFromTop(self.distanceToTop);
                        self.pixelsPerSecond = getPixelsPerSecond();
                    },
                    scrollControl = function() {
                        //what to do when scrolling
                        self.scrollpos += ((targetscrollpos - self.offsetFromTop) - self.scrollpos) * self.acceleration;
                        self.currentTime = self.scrollpos / self.pixelsPerSecond; //convert scrollpos from pixels to seconds to set self.currentTime
                        self.wrapper[0].currentTime = self.currentTime;
                        self.wrapper[0].pause();
                    };


                // Get an element's distance from the top of the page
                var elem = self.wrapper[0];

                // Calulate the initial size, distance, and offset of each scrolleo video
                self.distanceToTop = getElemDistanceToTop(elem);
                self.offsetFromTop = getOffsetFromTop(self.distanceToTop);
                self.pixelsPerSecond = getPixelsPerSecond();

                self.scrollpos = targetscrollpos - self.offsetFromTop;

                wr.pause();

                // Use requestAnimationFrame to ensure the video is updating when the browser is ready
                window.requestAnimFrame(function render() {
                    window.requestAnimFrame(render);
                    scrollControl();
                });

                window.addEventListener('scroll', scrollHandler, false);
                window.addEventListener('resize', resizeHandler, false);
            });
        }
    };
    window.Scrolleo = _Scrolleo;
    
})(window, document);

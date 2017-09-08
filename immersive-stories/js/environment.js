 $(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerEnviro = new ScrollMagic.Controller();
  var slideshowFlag = true;
  var $windowHeight = $(window).height();
// detect if mobile browser. regex -> http://detectmobilebrowsers.com
  var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);




  currentController = controllerEnviro;

    // var introMedicine = new ScrollMagic.Scene({
    //   triggerElement: '#intro-vid',
    //   triggerHook: 0,
    //   duration: '100%',
    // })
    // .setPin('.intro', {pushFollowers: false})
    // .setClassToggle("body", 'medicineIntro')
    // .setTween('.intro-body', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
    // .on('enter',function(){
    //   $('video').get(0).play()
    // })
    // .addTo(controllerBuilt);
    // $(window).resize(function(){
    //     introMedicine.update(true);
    // });


// Map

    var strokeLength = Math.round(document.querySelector('.path').getTotalLength() * 1.0),
        strokeDashoffset = strokeLength,
        miles = document.getElementById('counter'),
        $busMapHeight = $(".bus-map").height();

    function applyStroke() {
      TweenMax.set($(".path"), { strokeDashoffset:strokeDashoffset });
    }

    var tl2 = new TimelineMax();
        tl2.to($(".bus-map"), 4, { onUpdate:applyStroke })

    var map = new ScrollMagic.Scene({
        triggerElement: ".bus-map",
        duration: $windowHeight - ($busMapHeight * 0.6),
        offset: $busMapHeight * 0.6,
        triggerHook: 1,
        reverse: true
    })
    .setTween(tl2)
    .on('progress', function(e){
      strokeDashoffset = (1 - e.progress) * strokeLength;
     // miles.innerHTML = Math.round(e.progress * 144);
    })
    .addTo(currentController);
    $(window).resize(function(){
        map.duration($(window).height());
        map.update(true);
    });

  // $( document )
  //   .on( "mousemove", ".para", function( event ) {

  //   var halfW = ( this.clientWidth / 2 );
  //   var halfH = ( this.clientHeight / 2 );

  //   var coorX = ( halfW - ( event.pageX - this.offsetLeft ) );
  //   var coorY = ( halfH - ( event.pageY - $(this).offset().top ) ); // this is the problem

  //   var degX  = ( ( coorY / halfH ) * 5 ) + 'deg'; // max. degree = 10 /// this is the problem
  //   var degY  = ( ( coorX / halfW ) * -5 ) + 'deg'; // max. degree = 10

  //   $( this ).css( 'transform', function() {
  //     return 'perspective( 1500px ) translate3d( 0, 0, 30px )  rotateX('+ degX +') rotateY('+ degY +')';
  //   } )

  // } )
  //   .on( "mouseout", ".para", function() {
  //   $( this ).removeAttr( 'style' )
  // } );


  // In order to toggle current section, 

  // if (!isMobile) {
  //   $('.para').each(function(index,element){
  //       var el = $(this).find('.cutout');
  //       var elH3 = $(this).find('h3');
  //       var elHeight = $(this).height();
  //       var paraMove = new ScrollMagic.Scene({
  //           duration: (this.offsetHeight + elHeight) + 'px',
  //           triggerElement: this,
  //           triggerHook: 1
  //       })
  //       .setTween(new TimelineMax().add([
  //           TweenMax.to(elH3, 1, { transform: 'translateY(-90px)', ease: Power0.easeIn }),
  //           TweenMax.to(el, 1, { transform: 'translateY(-30px)', ease: Power0.easeIn })
  //       ]));
  //       paraMove.addTo(controllerBuilt);    
  //   })
  // } 


    // Parallax photos 

    var delacruzAnimation = new TimelineMax ()
          .add([
            TweenMax.to('#map-animation', 1,    {  opacity: 0, ease: Power0.easeIn, delay: 0.0 }),
            TweenMax.to('#drone-vid', 1,    {  opacity: 1, ease: Power0.easeIn, delay: 0.0 })
          ])
    var transHeight = -$('#drone-vid').height();

    var martez = new ScrollMagic.Scene({
      triggerElement: '#drone-vid',
      triggerHook: 0.3,
      duration:  '25%',
    })
    .setTween(delacruzAnimation)
    .addTo(currentController)

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
    // .addTo(controllerBuilt)


    // $( ".pause" ).click(function(e) { 
    //   var $this = $(e.target);        
    //   var $vid = $(e.target).parent().find('video');
    //   if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
    //   $this.toggleClass('paused');
    // });

    //$( "#pause" ).trigger('click');



//toggle scroll for pred
  // new ScrollMagic.Scene({triggerElement: "#pred-content"})
  //         .setClassToggle("#predators", "enable-scroll") // add class toggle
  //         .triggerHook("onEnter")
  //         .addIndicators() // add indicators (requires plugin)
  //         .addTo(currentController);
//toggle scroll for pred
  // new ScrollMagic.Scene({triggerElement: "#in-the-field"})
  //         .setClassToggle("#predators", "in-the-field") // add class toggle
  //         .triggerHook("onEnter")
  //         .addIndicators() // add indicators (requires plugin)
  //         .addTo(currentController);

// var opacityAnimation = new TimelineMax ()
//           .add([
//             TweenMax.to('#predators', 1,    {  opacity: 1, ease: Power0.easeIn, delay: 0.0 })
//           ])

var sectionHeight = $('#pred-content').height() + 20;
var scavHeight = $('#scav-content').height() + 20;
var peopleHeight = $('#people-content').height() + 20;
var preyHeight = $('#prey-content').height() + 20;

//pred
new ScrollMagic.Scene({triggerElement: "#predators", duration: sectionHeight, triggerHook:0})
          .setPin("#predators > .enviro-bg")
          .addTo(currentController);

new ScrollMagic.Scene({triggerElement: "#pred-content", duration: (0.7*sectionHeight), triggerHook:0.5})
          .setClassToggle(".enviro-bg", "darken")
          .addTo(currentController);

//scav
new ScrollMagic.Scene({triggerElement: "#scavengers", duration: scavHeight, triggerHook:0})
          .setPin("#scavengers > .enviro-bg")
          .addTo(currentController);

new ScrollMagic.Scene({triggerElement: "#scav-content", duration: (0.7*scavHeight), triggerHook:0.5})
          .setClassToggle(".enviro-bg", "darken")
          .addTo(currentController);

//prey
new ScrollMagic.Scene({triggerElement: "#prey", duration: preyHeight, triggerHook:0})
          .setPin("#prey > .enviro-bg")
          .addTo(currentController);

new ScrollMagic.Scene({triggerElement: "#prey-content", duration: (0.7*preyHeight), triggerHook:0.5})
          .setClassToggle(".enviro-bg", "darken")
          .addTo(currentController);

//people
new ScrollMagic.Scene({triggerElement: "#people", duration: peopleHeight, triggerHook:0})
          .setPin("#people > .enviro-bg")
          .addTo(currentController);

new ScrollMagic.Scene({triggerElement: "#people-content", duration: (0.7*peopleHeight), triggerHook:0.5})
          .setClassToggle(".enviro-bg", "darken")
          .addTo(currentController);

// get all slides
// var slides = document.querySelectorAll("#predators > section");

// // create scene for every slide
// for (var i=0; i<slides.length; i++) {
//   new ScrollMagic.Scene({
//       triggerElement: slides[i]
//     })
//     .triggerHook('onLeave')
//     .setPin(slides[i])
//     //.addIndicators() // add indicators (requires plugin)
//     .addTo(currentController);
//     }


//click students
$('.student-link').on('click', function(e) {
  e.preventDefault();
  e.stopPropagation();
  var hash = this.hash;
  $('#all-students').addClass("not-active");
  $(hash).addClass("active");
  $('#close-modal').addClass("active");
});

$('#close-modal').on('click', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $('#all-students').removeClass("not-active");
  $('section.student').removeClass("active");
  $('#close-modal').removeClass("active");
});


//audio
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

//
  //
  //
  //     Build scrubber
  //
  //
  //


  // var curXPos       = 0,
  //   mouseX        = 0,
  //     curDown       = false,
  //     widthInner    = window.innerWidth,
  //     scrubBar      = document.getElementById('scrub'),
  //     scrubContainer    = document.getElementById('scrubCont'),
  //     ScrubContainerWidth = scrubContainer.offsetWidth - 100,
  //     elmX        = 0,
  //     numSlides     = $('section').length - 1,
  //     scrollWidth     = widthInner * numSlides;
  


  // // Calculates the scrubber bottom scrubber bar based on mouse drag
  // function mouseMove(cliX){
  //   if(curDown === true){
  //       scrubBar.style.left = Math.ceil(((cliX < 75 ? 75 : cliX) - (mouseX - elmX))) + 'px';
  //     window.scrollTo(widthInner * numSlides / (scrubContainer.offsetWidth / cliX), 0);
  //   }
  // }

  // // Event listeners for scroll and mouse movement  
  // // Calculates the scrubber bottom scrubber bar based on scroll
  // var cliX = 0,
  //   moveFlag = false

  // window.addEventListener('mousemove', function(e) {
  //   cliX = e.clientX;
  //   if( !moveFlag ) {
  //     window.requestAnimFrame(function() {
  //       mouseMove(cliX);
  //       moveFlag = true;
  //     });
  //   }
  //   moveFlag = false;
  // });

  // // Set variables when clicked
  // scrubContainer.addEventListener('mousedown', function(e){ 
  //   curDown = true; 
  //   curXPos = e.pageX; 
  //   mouseX = e.clientX;
  //   elmX = scrubBar.offsetLeft;
  // });

  // // Cancel drag event so scrubber doesn't fly around
  // window.addEventListener('mouseup', function(e){ 
  //   curDown = false; 
  // });
  
  
  // // Calculates the scrubber bottom scrubber bar based on scroll
  // var last_known = 0, 
  //   scrollFlag = false;

  // function scroller(last_known){
  //   scrubBar.style.left = Math.ceil((last_known / scrollWidth) * ScrubContainerWidth) + 'px';
  // }


  // // The main scroll listener 
  // var timeout = null;

  // window.addEventListener('scroll', function() {
  //   last_known = window.pageXOffset; 
  //   if (!curDown) {
  //     window.requestAnimFrame(function() {
  //       scroller(last_known);
  //       scrollFlag = true;
  //     });
  //   }
  //   scrollFlag = false;
  // });


})
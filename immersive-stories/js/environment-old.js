 $(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerEnviro = new ScrollMagic.Controller();
  var slideshowFlag = true;
  var slideshowFlagStudents = true;
  var $windowHeight = $(window).height();
// detect if mobile browser. regex -> http://detectmobilebrowsers.com
  var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);




  currentController = controllerEnviro;

  // var introMedicine = new ScrollMagic.Scene({
  //     triggerElement: '#intro-vid',
  //     triggerHook: 0,
  //     duration: '100%',
  //   })
  //   .setPin('.intro', {pushFollowers: false})
  //   .setClassToggle("body", 'hide-dots')
  //   .setTween('.intro-body', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
  //   .on('enter',function(){
  //     $('video').get(0).play()
  //   })
  //   .addTo(currentController);
  //   $(window).resize(function(){
  //       introMedicine.update(true);
  //   });

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




    // Parallax photos 

    // var delacruzAnimation = new TimelineMax ()
    //       .add([
    //         TweenMax.to('#map-animation', 1,    {  opacity: 0, ease: Power0.easeIn, delay: 0.0 }),
    //         TweenMax.to('#drone-vid', 1,    {  opacity: 1, ease: Power0.easeIn, delay: 0.0 })
    //       ])
    // var transHeight = -$('#drone-vid').height();

    // var martez = new ScrollMagic.Scene({
    //   triggerElement: '#drone-vid',
    //   triggerHook: 0.3,
    //   duration:  '25%',
    // })
    // .setTween(delacruzAnimation)
    // .addTo(currentController)

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
//  
//        TOGGLE ON THE NAVIGATION      
 new ScrollMagic.Scene({triggerElement: "#main_content", triggerHook:0})
    .setClassToggle("#dot-nav" , "active")
    .addTo(currentController);


 // new ScrollMagic.Scene({triggerElement: ".field-notes.people", triggerHook:0})
 //    .setClassToggle("#dot-nav" , "active")
 //    .addTo(currentController);
 

// Map
  var tl2 = new TimelineMax();

  tl2.add([
          TweenMax.to($(".path"), .8, { strokeDashoffset:0, ease: Power0.easeIn }),
          TweenMax.to('#map-animation', .3,    {  opacity: 0, ease: Power0.easeIn, delay: .7 }),
          TweenMax.to('#drone-vid', .3,    {  opacity: 1, ease: Power0.easeIn, delay: .7 })
        ]);
      
  new ScrollMagic.Scene({triggerElement: "#map-transition", duration: '100%', triggerHook:0})
          .setTween(tl2)
          .setPin("#map-transition")
          .on("enter", function (event) {
              $('video').get(1).play(); //scene has second video on page
           })
          .addTo(currentController);






$(window).on("load resize", function (e) {

if (window.innerWidth < 600) {
  var addSlideshow = new ScrollMagic.Scene({
      triggerElement: '.enviro-section',
      triggerHook: 1,
    })
    .on("enter", function(){
      if ( slideshowFlag ) {
        $('.foster-slideshow').slick({
          lazyLoad: 'ondemand',
          useTransform: true,
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
        });    
        slideshowFlag = false;
      }
  
    })
    .addTo(currentController);

var addStudentSlideshow = new ScrollMagic.Scene({
      triggerElement: '#map-transition',
      triggerHook: 1,
    })
    .on("enter", function(){
      if ( slideshowFlagStudents ) {
        $('.student-container').slick({
          //lazyLoad: 'ondemand',
          useTransform: true,
          dots: true,
          infinite: false,
          speed: 300,
          //slide: '.student',
          slidesToShow: 1,
          slidesToScroll: 1,
        });    
        slideshowFlagStudents = false;
      }
  
    })
    .addTo(currentController);
} //end if


//sectionsssss
var sectionHeight = $('#pred-content').outerHeight() + 20;
var scavHeight = $('#scav-content').outerHeight() + 20;
var peopleHeight = $('#people-content').outerHeight() + 20;
var preyHeight = $('#prey-content').outerHeight() + 20;  

//pred
new ScrollMagic.Scene({triggerElement: "#predators", duration: sectionHeight, triggerHook:0})
          .setPin("#predators > .enviro-bg")
          .addTo(currentController);

new ScrollMagic.Scene({triggerElement: "#pred-content", duration: (1.0*sectionHeight), triggerHook:0.9})
          .setClassToggle(".enviro-bg", "darken")
          .addTo(currentController);

//scav
new ScrollMagic.Scene({triggerElement: "#scavengers", duration: scavHeight, triggerHook:0})
          .setPin("#scavengers > .enviro-bg")
          .addTo(currentController);

new ScrollMagic.Scene({triggerElement: "#scav-content", duration: (1.0*scavHeight), triggerHook:0.9})
          .setClassToggle(".enviro-bg", "darken")
          .addTo(currentController);

//prey
new ScrollMagic.Scene({triggerElement: "#prey", duration: preyHeight, triggerHook:0})
          .setPin("#prey > .enviro-bg")
          .addTo(currentController);

new ScrollMagic.Scene({triggerElement: "#prey-content", duration: (1.0*preyHeight), triggerHook:0.9})
          .setClassToggle(".enviro-bg", "darken")
          .addTo(currentController);

//people
new ScrollMagic.Scene({triggerElement: "#people", duration: peopleHeight, triggerHook:0})
          .setPin("#people > .enviro-bg")
          .addTo(currentController);

new ScrollMagic.Scene({triggerElement: "#people-content", duration: (1.0*peopleHeight), triggerHook:0.9})
          .setClassToggle(".enviro-bg", "darken")
          .addTo(currentController);


//draw lines dynamically
//
//foreach img in img-gal
//rand whether line touches top middle or bottom [0, .5, 1]*height of obj (to start just use middle)
//draw line from [i] bottom inside to [i+1] top inside 
//add plus symbol at end of eash side
//finish at i < length -1

var elems,
    x1,
    y1,
    x2,
    y2;

$('.section-content').each(function(){
  //find all with class .draw-line-link
  elems = $(this).find('.draw-line-link');
  //draw initial
  x1 = $(elems[0]).offset().left + $(elems[0]).innerWidth() - 50;
  y1 = $(elems[0]).offset().top + ($(elems[0]).innerHeight() / 2);
  for (i = 1; i < (elems.length); i++) { 
    var xOff = 50;
    //if [i] is even then use right as inside, else left is inside
    if(i%2==0) { 
      xOff = $(elems[i]).innerWidth() - 50;
    }
    x2 = $(elems[i]).offset().left + xOff;
    y2 = $(elems[i]).offset().top + ($(elems[i]).innerHeight() / 2);

    //draw line
    if(i%2==0) { 
      createLine(x1,y1,x2,y2);
    } else {
      createLine(x1,y1,x2,y2);
    }
    //move x2,y2 to x1,y1
    x1 = x2;
    y1 = y2;
  }
});

}); //end on load / resize

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

$('section.student').on('click', function(e) {
  e.preventDefault();
  e.stopPropagation();
  console.log("click")
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



/* 
DOT NAVIGATIOM
*/

    //when get to where want to turn on: .setClassToggle("body", 'hide-dots');

    // In order to toggle current section, 
    $('.dot-nav-section').each(function(index,element){
        var dotToggle = new ScrollMagic.Scene({
            duration: this.offsetHeight + 'px',
            triggerElement: this,
            triggerHook: 0.5
        });
        dotToggle.setClassToggle('#dot-nav li:nth-child(' + (parseInt(index) + 1) + ') a', 'active');
        dotToggle.addTo(currentController);
  
    })

})

 //DRAW LINES
function createLine(x1,y1, x2,y2){
    var length = Math.sqrt((x1-x2)*(x1-x2) + (y1-y2)*(y1-y2));
  var angle  = Math.atan2(y2 - y1, x2 - x1) * 180 / Math.PI;
  var transform = 'rotate('+angle+'deg)';

    var line = $('<div>')
        .appendTo('#immersive')
        .addClass('line')
        .css({
          'position': 'absolute',
          'transform': transform
        })
        .width(length)
        .offset({left: x1 < x2 ? x1 : x1 - (x1-x2), top: y1 < y2 ? y1 : y1 - (y1-y2)});
    return line;
}
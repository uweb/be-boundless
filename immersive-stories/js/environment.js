 $(function(){

  var body = document.getElementsByTagName('body')[0];
  //var controllerEnviro = new ScrollMagic.Controller();
  var $windowHeight = $(window).height();
// detect if mobile browser. regex -> http://detectmobilebrowsers.com
  //var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
  var isMobile = (window.innerWidth < 768);
  var indexArray = [0,12.5,25,37.5,41.65,45.8,50,54.15,58.3,62.5,66.65,70.8,75,79.15,83.3,87.5,100]; //array for percent of scroll bar, indexed by section index

if( isMobile ){
  $("section.fp-auto-height").removeClass("fp-auto-height");
}


function setFixedBG() {
  //$("#fixed-section").removeClass();
  $(".fixed-section").removeClass('active');
  if(window.location.hash.indexOf("predator") != -1) {
    $(".fixed-section.predator").addClass("active");
  } else if(window.location.hash.indexOf("prey") != -1) {
    $(".fixed-section.prey").addClass("active");
  } else if(window.location.hash.indexOf("scavenger") != -1) {
    $(".fixed-section.scavenger").addClass("active");
  } else if(window.location.hash.indexOf("people") != -1) {
    $(".fixed-section.people").addClass("active");
  } else {
    $(".fixed-section.blank").addClass("active");
  }
}
/*****************/
/***FULLPAGE.JS***/
/*****************/

if(!isMobile) {

//FULL INIT
$('#immersive-body').fullpage({
    //Navigation
    // menu: '#menu',
    // lockAnchors: false,
    anchors:['home', 'experience', 'meet', 'predator', 'predator-gallery', 'predator-lecture', 'prey', 'prey-gallery', 'prey-lecture', 'scavenger', 'scavenger-gallery', 'scavenger-lecture', 'people', 'people-gallery', 'people-lecture', 'explore', 'give'],
    // navigation: true,
    // navigationPosition: 'left',
    // navigationTooltips: ['firstSlide', 'secondSlide'],
    // showActiveTooltip: false,
    // slidesNavigation: false,
    // slidesNavPosition: 'bottom',

    //Scrolling
    // css3: true,
    scrollingSpeed: 1000,
    // autoScrolling: true,
    // fitToSection: true,
    // fitToSectionDelay: 1000,
    scrollBar: 'sections',
    // easing: 'easeInOutCubic',
    // easingcss3: 'ease',
    // loopBottom: false,
    // loopTop: false,
    // loopHorizontal: true,
    // continuousVertical: false,
    // continuousHorizontal: false,
    // scrollHorizontally: false,
    // interlockedSlides: false,
    // dragAndMove: false,
    // offsetSections: false,
    // resetSliders: false,
    fadingEffect: true,
    fadingEffectKey: 'd2FzaGluZ3Rvbi5lZHVfVVc4Wm1Ga2FXNW5SV1ptWldOME9oQQ==',
    // normalScrollElements: '#element1, .element2',
    scrollOverflow: true,
    // scrollOverflowReset: false,
    // scrollOverflowOptions: null,
    // touchSensitivity: 15,
    // normalScrollElementTouchThreshold: 5,
    // bigSectionsDestination: null,

    //Accessibility
    keyboardScrolling: true,
    animateAnchor: true,
    recordHistory: true,

    //Design
    // controlArrows: true,
    // verticalCentered: true,
    // sectionsColor : ['#ccc', '#fff'],
    paddingTop: '90px',
    paddingBottom: '30px',
    fixedElements: '#cv2-header, .fixed-section, #scrollbar', //eventually will add scrollbar on bottom.
    // responsiveWidth: 0,
    // responsiveHeight: 0,
    // responsiveSlides: false,
    // parallax: false,
    // parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

    //Custom selectors
    sectionSelector: 'section.section',
    slideSelector: '.slide',

    lazyLoading: true,

    //events
    onLeave: function(index, nextIndex, direction){
      //switching in/out of first slide
      if( index == 1 ){ 
        //$('#immersive').toggleClass("hide-white-menu");
        $('#cv2-header .cv2-header-white').addClass("hidemenu");
        $('#cv2-header-white-collapse').addClass("showicon");
      }
      if( nextIndex == 1 ){ 
        //$('#immersive').toggleClass("hide-white-menu");
        $('#cv2-header .cv2-header-white').removeClass("hidemenu");
        $('#cv2-header-white-collapse').removeClass("showicon");
      }
      
      setFixedBG();

      //Scrollbar action
      $('#full-line').width(indexArray[nextIndex - 1] + "%");
      //console.log(indexArray[nextIndex - 1]);
    },
    afterLoad: function(anchorLink, index){
      if( ( window.location.hash.indexOf("home") == -1 ) && (window.location.hash) ) {
        //$('#immersive').addClass("hide-white-menu");
        $('#cv2-header .cv2-header-white').addClass("hidemenu");
        $('#cv2-header-white-collapse').addClass("showicon");
      }

      setFixedBG();
    },
    // afterRender: function(){},
    // afterResize: function(){},
    // afterResponsive: function(isResponsive){},
    // afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
    // onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
  });


/****************/
/*****EXTRAS*****/
/**DESKTOP ONLY**/
/****************/

// Video pause
  $( "#pause-yellow" ).click(function() {     
    var vid =  $( "#intro-yellow video" )
    if ( vid.get(0).paused ) {
      vid.get(0).play() } 
    else { 
      vid.get(0).pause();
    }
    $('#intro-yellow').toggleClass('paused');
  });

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
  //console.log("click")
  $('#all-students').removeClass("not-active");
  $('section.student').removeClass("active");
  $('#close-modal').removeClass("active");
});

$("#cv2-header-white-collapse").on('click', function(e) {
    $('#cv2-header .cv2-header-white').toggleClass("hidemenu");
    $("#cv2-header-white-collapse").toggleClass("close");
})

// Audio Player
  $(".audio-ctrl").each(function(){
  
    var $this = $(this);
    $this.unbind();
  
    // Set ARIA attribute to false
    $this.attr("aria-pressed","false");
  
    $this.click(function(e){
      e.preventDefault();
      e.stopPropagation();

      var $audio = $(e.target).closest('.audio'),
           audioEl = $audio.find('audio')[0];
  
      if( !($audio.hasClass("active-audio")) ) {
        // Pause all currently playing
        var mp3s = document.body.getElementsByTagName('audio');    
        for (var i = 0; i < mp3s.length; i++ ) {
          mp3s[i].pause()
        }
      }
      $audio.addClass('active-audio');
      $audio.find('button').attr("aria-pressed","false");
      $this.attr("aria-pressed","true");
  
      if($this.hasClass("audio-play")){
        $('audio')[0].pause();
        setTimeout(function(){
          audioEl.play();
        },1000);
      }
      if($this.hasClass("audio-pause")){
        audioEl.pause();             
      }
      if($this.hasClass("audio-read")){
        $audio.find(".audio-transcript").removeClass("visually-hidden").focus();
        $audio.toggleClass("trans");
        if($this.hasClass('active-transcript')){
          $audio.find(".audio-transcript").addClass("visually-hidden")
          $this.removeClass('active-transcript');
          $audio.toggleClass("trans");
        } else {                
          $this.addClass('active-transcript');
        }              
      } 
    });
  });

  $("span.close-transcript").on('click', function(e) { 
    e.preventDefault();
    e.stopPropagation();
    //$("button.audio-ctrl.audio-read").trigger('click');
    var $audio = $(e.target).closest('.audio');
    var $this = $(this).closest('.audio-transcript').siblings().find('.audio-read');

    $audio.find(".audio-transcript").removeClass("visually-hidden").focus();
    $audio.toggleClass("trans");
    if($this.hasClass('active-transcript')){
      $audio.find(".audio-transcript").addClass("visually-hidden")
      $this.removeClass('active-transcript');
      $audio.toggleClass("trans");
    } else {                
      $this.addClass('active-transcript'); 
    }
  })

} else {
  //MOBILE INIT
$('#immersive-body').fullpage({
    //Navigation
    // menu: '#menu',
    // lockAnchors: false,
    anchors:['home', 'experience', 'meet', 'predator', 'predator-gallery', 'predator-lecture', 'prey', 'prey-gallery', 'prey-lecture', 'scavenger', 'scavenger-gallery', 'scavenger-lecture', 'people', 'people-gallery', 'people-lecture', 'explore', 'give'],
    // navigation: true,
    // navigationPosition: 'left',
    // navigationTooltips: ['firstSlide', 'secondSlide'],
    // showActiveTooltip: false,
    // slidesNavigation: false,
    // slidesNavPosition: 'bottom',

    //Scrolling
    // css3: true,
    scrollingSpeed: 1000,
    // autoScrolling: true,
    // fitToSection: true,
    // fitToSectionDelay: 1000,
    scrollBar: 'sections',
    // easing: 'easeInOutCubic',
    // easingcss3: 'ease',
    // loopBottom: false,
    // loopTop: false,
    // loopHorizontal: true,
    // continuousVertical: false,
    // continuousHorizontal: false,
    // scrollHorizontally: false,
    // interlockedSlides: false,
    // dragAndMove: false,
    // offsetSections: false,
    // resetSliders: false,
    fadingEffect: true,
    fadingEffectKey: 'd2FzaGluZ3Rvbi5lZHVfVVc4Wm1Ga2FXNW5SV1ptWldOME9oQQ==',
    // normalScrollElements: '#element1, .element2',
    scrollOverflow: true,
    // scrollOverflowReset: false,
    // scrollOverflowOptions: null,
    // touchSensitivity: 15,
    // normalScrollElementTouchThreshold: 5,
    // bigSectionsDestination: null,

    //Accessibility
    keyboardScrolling: true,
    animateAnchor: true,
    recordHistory: true,

    //Design
    // controlArrows: true,
    // verticalCentered: true,
    // sectionsColor : ['#ccc', '#fff'],
    paddingTop: '60px',
    paddingBottom: '0',
    fixedElements: '#cv2-header, .fixed-section, #scrollbar', //eventually will add scrollbar on bottom.
    // responsiveWidth: 0,
    // responsiveHeight: 0,
    // responsiveSlides: false,
    // parallax: false,
    // parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

    //Custom selectors
    sectionSelector: 'section.section',
    slideSelector: '.mobile-slide',

    lazyLoading: true,

    //events
    onLeave: function(index, nextIndex, direction){
      //switching in/out of first slide
      // if( (index == 1) || (nextIndex == 1) ){ 
      //   $('#immersive').toggleClass("hide-white-menu");
      // }
      
      setFixedBG();

      //Scrollbar action
      //$('#full-line').width(indexArray[nextIndex - 1] + "%");
      //console.log(indexArray[nextIndex - 1]);
    },
    afterLoad: function(anchorLink, index){
      // if( ( window.location.hash.indexOf("home") == -1 ) && (window.location.hash) ) {
      //   $('#immersive').addClass("hide-white-menu");
      // }

      setFixedBG();
    },
    // afterRender: function(){},
    // afterResize: function(){},
    // afterResponsive: function(isResponsive){},
    // afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
    // onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
  });


/****************/
/*****EXTRAS*****/
/*****MOBILE*****/
/****************/

  $('.fp-prev').append('<span></span>');
  $('.fp-next').append('<span></span>');

  $('button.audio-ctrl.audio-read').unbind();
  $('button.audio-ctrl.audio-read').on('click', function(e) {
    var tran = $(this).closest(".audio-buttons").siblings(".audio-transcript").html();
    var style = "<style>" +
                  "span.close-transcript { display: none; }" +
                  "p.tran-lit {" +
                  "    border-radius: 7px;" +
                  "    border: 2px solid white;" +
                  "    margin: 5px;" +
                  "    padding: 10px;" +
                  "    color: white;" +
                  "    background-color: #525252;" +
                  "}" +
                "</style>";
    lity(style + tran);
    //console.log(tran);
  });

}








/****************/
/*****EXTRAS*****/
/****************/

$('a.section-links').on('click', function(e) {
  $('#fixed-section').removeClass("blank");
  $('#fixed-section').addClass(this.hash.split('#',2)[1]);
})



});

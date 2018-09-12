$(function () {

  $("#main_content").prognroll();


  // $("#scrollbar").hide(); //hide your div initially
  var topOfOthIntro = $("#intro-vid").offset().top;  //set manually for example
  var introHeight = $("#intro-vid").outerHeight(); //gets height of header
    $(window).scroll(function() {
      if($(window).scrollTop() > ( topOfOthIntro + introHeight ) ) { //scrolled past the other div?
         $("#scrollbar").addClass('active'); //reached the desired point -- show div
      } else {
         $("#scrollbar").removeClass('active'); //reached the desired point -- hide div
      }
    });


  var $windowHeight = $(window).height();

  var isMobileSize = ($(window).width() < 993) ? true : false;

// detect if mobile browser. regex -> http://detectmobilebrowsers.com
var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
if(isMobile){ $('#immersive-body').addClass("no-hover"); }

    // main animation controller
    // var controller = new ScrollMagic.Controller();


    /***************************
     * Animation: Scrollbar
     ***************************/
//animate scrollbar in on header exit (add class = active)
var scrollIntro = new ScrollMagic.Scene({
    triggerElement: '#main_content',
    triggerHook: 0,
    duration: 0
})
.setClassToggle('#scrollbar','active')
.addTo(controller);

 //animate scrollbar span width based off page scroll
 var tweenScroll = new TimelineMax()
 .to("#scrollbar span", 1, {
    width: '100%',
    ease: Power0.easeNone
 }, 0);

 var scrollProgress = new ScrollMagic.Scene({
        triggerHook: 0,
        duration: $(document).height() - $(window).height()
    })
 .setTween(tweenScroll)
 .addTo(controller);


 $('.foster-slideshow').slick({
   lazyLoad: 'ondemand',
   useTransform: true,
   dots: true,
   infinite: false,
   speed: 300,
   slidesToShow: 1,
   slidesToScroll: 1,
 });

  $('.foster-slideshow2').slick({
   lazyLoad: 'ondemand',
   useTransform: true,
   dots: true,
   infinite: false,
   speed: 300,
   slidesToShow: 1,
   slidesToScroll: 1,
 });



  // show / hide description text in profiles and photos sections
  var $moreBtns = $('#section-profiles .item, #section-photos .item')

  $moreBtns.click(function (e) {
    e.preventDefault();
    $(this)
      .closest('.item')
      .toggleClass('show-description');
  });

    /***************************
   * Animation: Profiles
   ***************************/

  if (!isMobile) {
    if (!isMobileSize) {
        var controllerProfiles = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: '0', duration: "200%"}});
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
    // .to("#section-profiles .item-2", 0.25, {autoAlpha:0})
    var communityProfiles = new ScrollMagic.Scene({triggerElement: "#section-profiles"})
    .setPin("#section-profiles")
    .setTween(profilesTween)
    //.addIndicators({name: "pin profiles"})
    .addTo(controllerProfiles);
  }
}

  $(window).resize(function () {

    var isMobileSize = ($(window).width() < 993) ? true : false;
    console.log($(window).width());

    if (isMobileSize) {
      communityProfiles.destroy(true);
    } else {
      communityProfiles.update(true);
    }
    scrollIntro.update(true);
    // sceneMap.update(true);
    // sceneBodyLeft.update(true);
    // sceneBodyRight.update(true);
    // sceneProfiles1.update(true);
    // sceneProfiles2.update(true);
    controller.update(true);
  });


 /***************************
   * Animation: Videos       *
   ***************************/
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


    function videoPlay(vid, location){
        var videoSrc = vid,
            $video = $('#' + location),
            $body = $("body"),
            boundlessVideo = $video.find('.boundless-video')[0]; //  document.getElementById("boundless-video"),
            videoHTML =
              '<button class="close-video"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>' +
              '<div id="' + location + '-youtube-video">' +
              //'<iframe title="YouTube video" id="embedVid" width=' + $video.width() + ' height=' + $video.height() + ' src="' + videoSrc + '" frameborder="0" allowfullscreen autoplay></iframe>' +
              '</div>';
              videoHTMLMobile =
              '<button class="close-video"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>' +
              '<div id="' + location + '-youtube-video">' +
              '<iframe title="YouTube video" id="embedVid" width=' + $video.width() + ' height=' + $video.height() + ' src="https://www.youtube.com/embed/' + videoSrc + '?autoplay=1&rel=0&amp;showinfo=0&amp" frameborder="0" allowfullscreen autoplay></iframe>' +
              '</div>';


              // if (isMobile) {
              //   boundlessVideo.innerHTML = videoHTMLMobile;
              //   $(".play").click(function(e){
              //    e.preventDefault();
              //  });
              // } else {
                boundlessVideo.innerHTML = videoHTML;
                setTimeout( function(){
                 $('#' + location + ' iframe')[0].focus()
                }, 500 );
                new YT.Player(location + '-youtube-video', {
                  height: $video.height(),
                  width: $video.width(),
                  videoId: videoSrc,
                  playerVars: { 'autoplay': 1, 'rel': 0, 'showinfo': 0, 'controls' : 0 },
                  events: {
                    'onStateChange': function(event) {
                      if(location == "section-map"){
                        if (event.data == YT.PlayerState.ENDED) {
                          controller.scrollTo(slideplayPin.scrollOffset() + slideplayPin.duration() + 1);
                        }
                      }
                    }
                  }
                });

                 $(".close-video").click(function(e){
                  e.stopPropagation();
                   $(".play").removeClass("hidden");
                   $body.toggleClass("playing");
                   this.parentElement.innerHTML = '';
                 });

                $body.toggleClass("playing");
              // }
      }

    //prevent accessibility link from scrolling to top
    $(".click").click(function(e){
      e.preventDefault();
    });

});
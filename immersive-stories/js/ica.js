$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerICA = new ScrollMagic.Controller();
  var slideshowFlag = true;
  var $windowHeight = $(window).height();
// detect if mobile browser. regex -> http://detectmobilebrowsers.com
  var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

//set map vid to beginning
$("#map-video").get(0).currentTime = 0;

  $("#full-bg-video")[0].addEventListener("timeupdate", function(){
    if(this.currentTime >= (this.duration - 0.8)) {
        this.pause();
        $('#intro-vid').addClass('paused');
    }
  });

    // Video pause
  $( "#pause" ).unbind("click").click(function() {   
    var vid =  $( "#intro-vid video" )
    if ( vid.get(0).paused ) {
      vid.get(0).currentTime = 0;
      vid.get(0).play() } 
    else { 
      vid.get(0).pause();
    }
    $('#intro-vid').toggleClass('paused');
  });

  // // create scene
  // var scene = new ScrollMagic.Scene({
  //       triggerElement: '#intro-vid',
  //       triggerHook: 1
  //   })
  //   .on('end', function () {
  //       console.log("passed trigger");
  //       $(window).on("scroll", function(){
  //         console.log("scroll")
  //       });
  //   })
  //   .addIndicators()
  //   .addTo(controllerICA);

    // var introMedicine = new ScrollMagic.Scene({
    //   triggerElement: '#intro-vid',
    //   triggerHook: 0,
    //   duration: '100%',
    // })
    // .setPin('.intro', {pushFollowers: false})
    // .setClassToggle("body", 'medicineIntro')
    // .setTween('.pic-fade', 1, { opacity: 1, ease: Power0.easeIn })
    // .addTo(controllerICA);
    // $(window).resize(function(){
    //     introMedicine.update(true);
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



  // $( document )
  //   .on( "mousemove", ".para", function( event ) {

  //   var halfW = ( this.clientWidth / 2 );
  //   var halfH = ( this.clientHeight / 2 );

  //   var coorX = ( halfW - ( event.pageX - this.offsetLeft ) );
  //   var coorY = ( halfH - ( event.pageY - $(this).offset().top ) ); // this is the problem

  //   var degX  = ( ( coorY / halfH ) * 2 ) + 'deg'; // max. degree = 10 /// this is the problem
  //   var degY  = ( ( coorX / halfW ) * -2 ) + 'deg'; // max. degree = 10

  //   //var degX  = ( degX > 1.1 ? 1.1 : degX ) + 'deg'; 
  //   //var degY  = ( degY > 1.35 ? 1.35 : degY ) + 'deg'; 

  //   $( this ).css( 'transform', function() {
  //     return 'perspective( 1023px ) translate3d( 0, 0, 50px )  rotateX('+ degX +') rotateY('+ degY +')';
  //   } )

  // } )
  //   .on( "mouseout", ".para", function() {
  //   $( this ).removeAttr( 'style' )
  // } );


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
    .addTo(controllerICA);

    //var vidDuration = 0;

    var mapVid = new ScrollMagic.Scene({
      triggerElement: '.bottom-map',
      triggerHook: 1.0,
    })
    .addTo(controllerICA)
    .on("enter", function (e) {
      $("#map-video").get(0).play();
    });


          
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



// detect if mobile browser. regex -> http://detectmobilebrowsers.com
var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);




// we'd only like to use iScroll for mobile...
if (true) {

    var controller = new ScrollMagic.Controller();
    var ready = false;
    var videdo = $("#intro").find("video")[0];

    $(window).load(function(){

    	function artvideoPlay(vid){
    	  var videoSrc = vid,          
    	      $video = $('#slideplay'),
    	      $body = $("body"),
    	      boundlessVideo = document.getElementById("boundless-video"),
    	      videoHTML = 
    	        '<button class="close-video"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>' +
    	        '<div id="youtube-video">' + 
    	        '<iframe title="YouTube video" id="embedVid" width=' + $video.width() + ' height=' + $video.height() + ' src="' + videoSrc + '" frameborder="0" allowfullscreen autoplay></iframe>' +
    	        '</div>';

    	  if (isMobile.matches) {
    	  	console.log('tru')
    	    boundlessVideo.innerHTML = videoHTML;
    	    $(".play").click(function(e){
    	       e.preventDefault();
    	    });
    	  } else {
    	     boundlessVideo.innerHTML = videoHTML;
    	     setTimeout( function(){
    	       $('#slideplay iframe')[0].focus()
    	     }, 500 );

    	     $(".close-video").click(function(){
    	       $(".play").removeClass("hidden");
    	       $body.toggleClass("playing");
    	       boundlessVideo.innerHTML = '';
    	     });

    	    $body.toggleClass("playing");
    	  }
    	}



      $( ".pause" ).click(function(e) { 
      	var $this = $(e.target);      	
      	var $vid = $(e.target).parent().find('video');
        if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
        $this.toggleClass('paused');
      });

      $('.unmute').click(function(e){
      	var $this = $(e.target);
      	var $vid = $(e.target).parent().find('video');
      	$this.toggleClass('muted');
      	if( $vid.prop('muted') ) {
      		$vid.prop('muted', false)
      	} else {
      		$vid.prop('muted', true)
      	}
      })
 
      $("#loader").fadeOut();

      var videoScrubber = new ScrollMagic.Scene({
          triggerElement: "#intro",
          duration: '100%',
          triggerHook: 0,
          reverse: true
      })
      .setPin("#intro",  {pushFollowers: false})
      .addTo(controller)
      .on("progress", function (event) {
          var scene = this.triggerElement();
          var distance = videdo.duration;
          var change = event.progress * distance;
          videdo.currentTime = Math.floor(change) / 2;
      });
      $(window).resize(function(){
          videoScrubber.duration($(window).height()*2);
          videoScrubber.update(true);
      });


      // Intro senece

      var introToggleIn =  new ScrollMagic.Scene({
          triggerElement: "#intro",
          duration: 0,
          offset: -$(window).height(),
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          var scene = this.triggerElement();
          $(scene).toggleClass("active");
      });
      $(window).resize(function(){
          introToggleIn.offset(-$(window).height());
          introToggleIn.update(true);
      });

      var introToggleOut = new ScrollMagic.Scene({
        //next scene
          triggerElement: "#unexpected",
          duration: 0,
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          $("#intro").toggleClass("active");
      });
      $(window).resize(function(){
          introToggleOut.update(true);
      });



	  var blur = 0;

      function applyBlur() {
      	var toTop = window.pageYOffset || document.documentElement.scrollTop;
      	if (toTop < 4) {
      		blur = 0;
      	}
        TweenMax.set($("#intro").find(".text"), {webkitFilter:"blur(" + blur + "px)"});
      }

      var tl2 = new TimelineMax();
          tl2
          .to($("#intro").find(".text"), 4, {y: '-100%', onUpdate:applyBlur})

      var intro = new ScrollMagic.Scene({
          triggerElement: "#intro",
          duration: $(window).height()*2,
          triggerHook: 0,
          reverse: true
      })
      .setTween(tl2)
      .on('progress', function(e){
      	blur = e.progress * 25;
      })
      .addTo(controller);
      $(window).resize(function(){
          intro.duration($(window).height()*2);
          intro.update(true);
      });



      var unexpectedToggleIn = new ScrollMagic.Scene({
          triggerElement: "#unexpected",
          duration: 0,
          offset: -$(window).height(),
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          var scene = this.triggerElement();
          $(scene).toggleClass("active");
          var vid = $(scene).find("video")[0];
          vid.play();
          $("body").toggleClass("after-start");
      });
      $(window).resize(function(){
          unexpectedToggleIn.offset(-$(window).height());
          unexpectedToggleIn.update(true);
      });

      var unexpectedToggleOut =  new ScrollMagic.Scene({
        //next element
          triggerElement: "#inspiration",
          duration: 0,
          triggerHook: 0,
          reverse: true
      })
      .on('start', function () {
          $("#unexpected").toggleClass("active");
      })
      .addTo(controller);
      $(window).resize(function(){
          unexpectedToggleOut.update(true);
      });

      var tl3 = new TimelineMax();
          tl3
          .from($("#unexpected").find(".middle"), 0.5, {y:"-100%"})
          .from($("#unexpected").find(".middle .fun"), 0.5, {opacity:0})
          .from($("#unexpected").find(".pluses"), 0.5, {opacity: 0});

      var unexpected = new ScrollMagic.Scene({
          triggerElement: "#unexpected",
          duration: 0,
          offset: -$(window).height()*0.25,
          triggerHook: 0,
          reverse: true
      })
      .setTween(tl3)
      .addTo(controller);
      $(window).resize(function(){
          unexpected.offset(-$(window).height()*0.25);
          unexpected.update(true);
      });






      var inspirationToggleIn = new ScrollMagic.Scene({
          triggerElement: "#inspiration",
          duration: 0,
          offset: -$(window).height(),
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          var scene = this.triggerElement();
          $(scene).toggleClass("active");
          var vid = $(scene).find("video")[0];
          vid.play();
      });
      $(window).resize(function(){
          inspirationToggleIn.offset(-$(window).height());
          inspirationToggleIn.update(true);
      });

      var inspirationToggleOut =  new ScrollMagic.Scene({
        //next element
          triggerElement: "#slideplay",
          duration: 0,
          triggerHook: 0,
          reverse: true
      })
      .on('start', function () {
          $("#inspiration").toggleClass("active");
      })
      .addTo(controller);
      $(window).resize(function(){
          inspirationToggleOut.update(true);
      });




      var slideplayToggleIn = new ScrollMagic.Scene({
          triggerElement: "#slideplay",
          duration: 0,
          offset: -$(window).height(),
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          var scene = this.triggerElement();
          $(scene).toggleClass("active");
          if(isMobile.matches) {
          	artvideoPlay("https://www.youtube.com/embed/tViVIkxZQOI?autoplay=1&rel=0&amp;showinfo=0&amp");
          } else {
          	$("#slideplay").on("click", function(){
          	    $(this).find(".fader").toggleClass("show");
          	    artvideoPlay("https://www.youtube.com/embed/tViVIkxZQOI?autoplay=1&rel=0&amp;showinfo=0&amp");
          	});
          }

      });
      $(window).resize(function(){
          slideplayToggleIn.offset(-$(window).height());
          slideplayToggleIn.update(true);
      });

      var slideplayToggleOut =  new ScrollMagic.Scene({
        //next element
          triggerElement: "#copy-one",
          duration: 0,
          triggerHook: 0,
          reverse: true
      })
      .on('start', function () {
          $("#slideplay").toggleClass("active");
      })
      .addTo(controller);
      $(window).resize(function(){
          slideplayToggleOut.update(true);
      });


      var tl1 = new TimelineMax();
          tl1
          .from($("#slideplay").find(".possible"), 0.25, {opacity: 0})
          .from($("#slideplay").find(".click"), 0.25, {opacity: 0})
          .to($("#slideplay").find(".ring svg"), 0.5, {rotation: 360});

      var slideplay = new ScrollMagic.Scene({
          triggerElement: "#slideplay",
          duration: 0,
          offset: -$(window).height()*0.25,
          triggerHook: 0,
          reverse: true
      })
      .setTween(tl1)
      .addTo(controller);
      $(window).resize(function(){
          slideplay.offset(-$(window).height()*0.25);
          slideplay.update(true);
      });






      var copyoneToggleIn = new ScrollMagic.Scene({
          triggerElement: "#copy-one",
          duration: 0,
          offset: -$(window).height(),
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          var scene = this.triggerElement();
          $(scene).toggleClass("active");
          var vid = $(scene).find("video[autoplay]")[0];
          vid.play();
      });
      $(window).resize(function(){
          copyoneToggleIn.offset(-$(window).height());
          copyoneToggleIn.update(true);
      });

      var copyoneToggleOut =  new ScrollMagic.Scene({
        //next element
          triggerElement: "#copy-two",
          duration: 0,
          triggerHook: 0,
          reverse: true
      })
      .on('start', function () {
          $("#copy-one").toggleClass("active");
      })
      .addTo(controller);
      $(window).resize(function(){
          copyoneToggleOut.update(true);
      });







      var busToggleIn = new ScrollMagic.Scene({
          triggerElement: "#bus",
          duration: 0,
          offset: -$(window).height(),
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          var scene = this.triggerElement();
          $(scene).toggleClass("active");
          var vid = $(scene).find("video[autoplay]")[0];
          vid.play();
      });
      $(window).resize(function(){
          busToggleIn.offset(-$(window).height());
          busToggleIn.update(true);
      });

      var busToggleOut =  new ScrollMagic.Scene({
        //next element
          triggerElement: "#copy-two",
          duration: 0,
          triggerHook: 0,
          reverse: true
      })
      .on('start', function () {
          $("#bus").toggleClass("active");
      })
      .addTo(controller);
      $(window).resize(function(){
          busToggleOut.update(true);
      });





      var copytwoToggleIn = new ScrollMagic.Scene({
          triggerElement: "#bus",
          duration: 0,
          offset: -$(window).height(),
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          var scene = $("#copy-two");
          $(scene).toggleClass("active");
      });
      $(window).resize(function(){
          copytwoToggleIn.offset(-$(window).height());
          copytwoToggleIn.update(true);
      });

      var copytwoToggleOut =  new ScrollMagic.Scene({
        //next element
          triggerElement: "#surprise",
          duration: 0,
          triggerHook: 0,
          reverse: true
      })
      .on('start', function () {
          $("#copy-two").toggleClass("active");
      })
      .addTo(controller);
      $(window).resize(function(){
          copytwoToggleOut.update(true);
      });






      var surpriseToggleIn = new ScrollMagic.Scene({
          triggerElement: "#surprise",
          duration: 0,
          offset: -$(window).height(),
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          var scene = this.triggerElement();
          $(scene).toggleClass("active");
          var vid = $(scene).find("video[autoplay]")[0];
          vid.play();
      });
      $(window).resize(function(){
          surpriseToggleIn.offset(-$(window).height());
          surpriseToggleIn.update(true);
      });

      var surpriseToggleOut =  new ScrollMagic.Scene({
        //next element
          triggerElement: "#scroll-one",
          duration: 0,
          triggerHook: 0,
          reverse: true
      })
      .on('start', function () {
          $("#surprise").toggleClass("active");
      })
      .addTo(controller);
      $(window).resize(function(){
          surpriseToggleOut.update(true);
      });

      var tl4 = new TimelineMax();
          tl4
          .from($("#surprise").find(".text"), 0.25, {opacity: 0})
          .from($("#surprise").find(".other"), 0.25, {opacity: 0})

      var surprise = new ScrollMagic.Scene({
          triggerElement: "#surprise",
          duration: 0,
          offset: -$(window).height()*0.25,
          triggerHook: 0,
          reverse: true
      })
      .setTween(tl4)
      .addTo(controller);
      $(window).resize(function(){
          surprise.offset(-$(window).height()*0.25);
          surprise.update(true);
      });















      var scrollOneToggleIn = new ScrollMagic.Scene({
          triggerElement: "#scroll-one",
          duration: 0,
          offset: -$(window).height(),
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          var scene = this.triggerElement();
          $(scene).toggleClass("active");
          $(scene).find("video[autoplay]").each(function(){
              $(this)[0].play();
          });
      });
      $(window).resize(function(){
          scrollOneToggleIn.offset(-$(window).height());
          scrollOneToggleIn.update(true);
      });

      var scrollOneToggleOut =  new ScrollMagic.Scene({
        //next element
          triggerElement: "#ispossible",
          duration: 0,
          triggerHook: 0,
          reverse: true
      })
      .on('start', function () {
          $("#scroll-one").toggleClass("active");
      })
      .addTo(controller);
      $(window).resize(function(){
          scrollOneToggleOut.update(true);
      });

      var scrollOne = new ScrollMagic.Scene({
          triggerElement: "#scroll-one",
          duration: $("#scroll-one").find(".inner").width() - $(window).width(),
          triggerHook: 0,
          reverse: true
      })
      .setPin("#scroll-one")
      .addTo(controller)
      .on("progress", function (event) {
          var scene = this.triggerElement();
          var inner = $(scene).find(".inner");
          var distance = $(inner).width() - $(window).width()
          var change = event.progress * distance;
          $(inner).css("transform", "translateX(-" + change + "px) translateZ(0px)");
      });
      $(window).resize(function(){
          scrollOne.duration($("#scroll-one").find(".inner").width() - $(window).width());
          scrollOne.update(true);
      });






      var isPossibleToggleIn = new ScrollMagic.Scene({
          triggerElement: "#ispossible",
          duration: 0,
          offset: -$(window).height(),
          triggerHook: 0,
          reverse: true
      })
      .addTo(controller)
      .on('start', function () {
          var scene = this.triggerElement();
          $(scene).toggleClass("active");
          var vid = $(scene).find("video[autoplay]")[0];
          vid.play();
      });
      $(window).resize(function(){
          isPossibleToggleIn.offset(-$(window).height());
          isPossibleToggleIn.update(true);
      });

      var isPossibleToggleOut =  new ScrollMagic.Scene({
        //next element
          triggerElement: "#scroll-two",
          duration: 0,
          triggerHook: 0,
          reverse: true
      })
      .on('start', function () {
          $("#ispossible").toggleClass("active");
      })
      .addTo(controller);
      $(window).resize(function(){
          isPossibleToggleOut.update(true);
      });

    var tl = new TimelineMax();
      tl
      .from($("#ispossible").find(".input"), 0.25, {opacity: 0})
      .from($("#ispossible").find(".text"), 0.25, {opacity: 0})
      .from($("#ispossible").find(".other"), 0.25, {opacity: 0});

    var isPossible = new ScrollMagic.Scene({
        triggerElement: "#ispossible",
        duration: 0,
        offset: -$(window).height()*0.25,
        triggerHook: 0,
        reverse: true
    })
    .setTween(tl)
    .addTo(controller);
    $(window).resize(function(){
        isPossible.offset(-$(window).height()*0.25);
        isPossible.update(true);
    });






    var scrollTwoToggleIn = new ScrollMagic.Scene({
        triggerElement: "#scroll-two",
        duration: 0,
        offset: -$(window).height(),
        triggerHook: 0,
        reverse: true
    })
    .addTo(controller)
    .on('start', function () {
        var scene = this.triggerElement();
        $(scene).toggleClass("active");
        $(scene).find("video[autoplay]").each(function(){
            $(this)[0].play();
        });
    });
    $(window).resize(function(){
        scrollTwoToggleIn.offset(-$(window).height());
        scrollTwoToggleIn.update(true);
    });

    var scrollTwoToggleOut =  new ScrollMagic.Scene({
      //next element
        triggerElement: "#threedvid",
        duration: 0,
        triggerHook: 0,
        reverse: true
    })
    .on('start', function () {
        $("#scroll-two").toggleClass("active");
    })
    .addTo(controller);
    $(window).resize(function(){
        scrollTwoToggleOut.update(true);
    });

    var scrollTwo = new ScrollMagic.Scene({
        triggerElement: "#scroll-two",
        duration: $("#scroll-two").find(".inner").width() - $(window).width(),
        triggerHook: 0,
        reverse: true
    })
    .setPin("#scroll-two")
    .addTo(controller)
    .on("progress", function (event) {
        var scene = this.triggerElement();
        var inner = $(scene).find(".inner");
        var distance = $(inner).width() - $(window).width()
        var change = event.progress * distance;
        $(inner).css("transform", "translateX(-" + change + "px) translateZ(0px)");
    });
    $(window).resize(function(){
        scrollTwo.duration($("#scroll-two").find(".inner").width() - $(window).width());
        scrollTwo.update(true);
    });


      var first = true;

      var lastScrollTop = 0;
      document.addEventListener("scroll", function(){
         var st = window.pageYOffset || document.documentElement.scrollTop;
         if (st > lastScrollTop && st > ($(window).height() / 2)){
             $("body").addClass("hide-menu");
         } else {
            $("body").removeClass("hide-menu");
         }
         lastScrollTop = st;
      }, false);

  });




} else {
  $("#loader").hide();
  $("#intro, #inspiration, #slideplay, #copy-one, #bus, #copy-two, #ispossible").addClass("active");
}

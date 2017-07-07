// Set up mobile check
var isMobile = window.matchMedia("only screen and (max-width: 768px)"); 

// Check for empty
function isEmpty( el ){
  return !$.trim(el.html())
}

// Video player for iphone/Android/desktop

function videoPlay(vid){
  var videoSrc = vid,          
      $video = $('#video'),
      $body = $("body"),
      boundlessVideo = document.getElementById("boundless-video"),
      videoHTML = 
        '<button class="close-video"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>' +
        '<div id="youtube-video">' + 
        '<iframe title="YouTube video" id="embedVid" width=' + $video.width() + ' height=' + $video.height() + ' src="' + videoSrc + '" frameborder="0" allowfullscreen autoplay></iframe>' +
        '</div>';

  if (isMobile.matches) {
    boundlessVideo.innerHTML = videoHTML;
    $(".play").click(function(e){
       e.preventDefault();
    });
  } else {
    $(".play").click(function(e){
       e.preventDefault();     
       boundlessVideo.innerHTML = videoHTML;

       setTimeout( function(){
         $('#video iframe')[0].focus()
       }, 500 );

       $(".close-video").click(function(){
         $(".play").removeClass("hidden");
         $body.toggleClass("playing");
         boundlessVideo.innerHTML = '';
       });

      $body.toggleClass("playing");
    });
  }
}

// Video Popup, much like the above, but makes it a modal




$(function(){

  // Giving widget at the bottom of the Immersive stories
  var immersiveGive = document.getElementById('immersive-give');

  if(!!immersiveGive){
    immersiveGive.addEventListener('click', function(e){
      e.preventDefault(); 
      var $immersiveGiveIframe = $('#immersive-give-iframe');

      $('.giving-widget').addClass('active');
      
      if(isEmpty($immersiveGiveIframe)) {
        $('<iframe>', {
          src: 'https://online.gifts.washington.edu/secure/makeagift/givingOpps.aspx?nobanner=true&source_typ=3&appeal=17XIS&source=' + e.target.getAttribute('data-fund'),
          frameborder: 0,
          width: '100%',
          height: 'auto',
        }).appendTo('#immersive-give-iframe'); 
      }
      
      setTimeout(function(){
        $immersiveGiveIframe.find('iframe').focus();
      },500)

    })
  }


  // Promoted giving widget found within stories // I should really combine this with the old giving iframe code
  var immersiveGivePromoted = document.getElementById('immersive-give-promoted');

  if(!!immersiveGivePromoted){
    immersiveGivePromoted.addEventListener('click', function(e){
      e.preventDefault(); 
      var $immersiveGiveIframe = $('#immersive-give-iframe-promoted');

      $('.giving-widget-promoted').toggleClass('active');
      
      if(isEmpty($immersiveGiveIframe)) {
        $('<iframe>', {
          src: 'https://online.gifts.washington.edu/secure/makeagift/givingOpps.aspx?nobanner=true&source_typ=3&appeal=17XIS&source=' + e.target.getAttribute('data-fund'),
          frameborder: 0,
          width: '100%',
          height: 'auto',
        }).appendTo('#immersive-give-iframe-promoted'); 
      }
      


      setTimeout(function(){
        $immersiveGiveIframe.find('iframe').focus();
      },500)

    })
    $('#close-give').click(function(){
      $('#immersive-give-iframe-promoted').empty();
      $('.giving-widget-promoted').toggleClass('active');
    });

  }




  // Audio Player
  $(".audio-ctrl").each(function(){
  
    var $this = $(this);
  
    // Set ARIA attribute to false
    $this.attr("aria-pressed","false");
  
    $this.click(function(e){
      e.preventDefault();
  
      // Pause all currently playing
      var mp3s = document.body.getElementsByTagName('audio');    
      for (var i = 0; i < mp3s.length; i++ ) {
        mp3s[i].pause()
      }
  
      var $audio = $(e.target).closest('.audio'),
          audioEl = $audio.find('audio')[0]
          
      $audio.addClass('active-audio');
      $audio.find('button').attr("aria-pressed","false")
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
  
  // Read more link
  
  $('.read-more').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: (document.getElementsByTagName('main')[0].getBoundingClientRect().top - 80)
      }, {
        duration: 1000
    });
  })
  
  
  // Video pause
  $( "#pause" ).click(function() {     
    var vid =  $( "#intro-vid video" )
    if ( vid.get(0).paused ) {
    	vid.get(0).play() } 
    else { 
    	vid.get(0).pause();
    }
    $('#intro-vid').toggleClass('paused');
  });


});


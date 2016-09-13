var isMobile = window.matchMedia("only screen and (max-width: 768px)"); 



$(function(){

  // Audio Player
        // Audio Player
        alert(1)
        $(".audio-ctrl").each(function(){

          var $this = $(this);

          // Set ARIA attribute to false
          $this.attr("aria-pressed","false");

          $this.click(function(e){
            e.preventDefault();

            // Pause all currently playing
            document.body.getElementsByTagName('audio')[0].pause()

            var $audio = $(e.target).closest('.audio'),
                audioEl = $audio.find('audio')[0]
                
            $audio.addClass('active-audio');
            $audio.find('button').attr("aria-pressed","false")
            $this.attr("aria-pressed","true");

            if($this.hasClass("audio-play")){
              setTimeout(function(){
                audioEl.play();
              },1000);
            }
            if($this.hasClass("audio-pause")){
              audioEl.pause();              
            }
            if($this.hasClass("audio-read")){
              $audio.find(".audio-transcript").removeClass("visually-hidden").focus();
              if($this.hasClass('active-transcript')){
                $audio.find(".audio-transcript").addClass("visually-hidden")
                $this.removeClass('active-transcript');
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


var isMobile = window.matchMedia("only screen and (max-width: 768px)"); 



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


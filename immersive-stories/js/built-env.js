$(function(){

  var body = document.getElementsByTagName('body')[0];
  var controllerBuilt = new ScrollMagic.Controller();
  var slideshowFlag = true;
  var $windowHeight = $(window).height();

  currentController = controllerBuilt;

    var introMedicine = new ScrollMagic.Scene({
      triggerElement: '#intro-vid',
      triggerHook: 0,
      duration: '100%',
    })
    .setPin('.intro', {pushFollowers: false})
    .setClassToggle("body", 'medicineIntro')
    .setTween('.intro-body', 1, { opacity: 0, transform: 'translateY(-100px)', ease: Power0.easeIn })
    .on('enter',function(){
      $('video').get(0).play()
    })
    .addTo(controllerBuilt);
    $(window).resize(function(){
        introMedicine.update(true);
    });


//   $( document )
//     .on( "mousemove", ".para", function( event ) {

//     var halfW = ( this.clientWidth / 2 );
//     var halfH = ( this.clientHeight / 2 );

//     var coorX = ( halfW - ( event.pageX - this.offsetLeft ) );
//     var coorY = ( halfH - ( event.pageY - $(this).offset().top ) ); // this is the problem

//     var degX  = ( ( coorY / halfH ) * 10 ) + 'deg'; // max. degree = 10 /// this is the problem
//     var degY  = ( ( coorX / halfW ) * -10 ) + 'deg'; // max. degree = 10

//     $( this ).css( 'transform', function() {
//       return 'perspective( 1500px ) translate3d( 0, 0, 30px )  rotateX('+ degX +') rotateY('+ degY +')';
//     } )

//   } )
//     .on( "mouseout", ".para", function() {
//     $( this ).removeAttr( 'style' )
//   } );


  // In order to toggle current section, 
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
          TweenMax.to(elH3, 1, { transform: 'translateY(-150px)', ease: Power0.easeIn }),
          TweenMax.to(el, 1, { transform: 'translateY(-75px)', ease: Power0.easeIn })
      ]));
      paraMove.addTo(controllerBuilt);    
  })



    // Parallax photos 

    var delacruzAnimation = new TimelineMax ()
          .add([
            TweenMax.to('#photo-2', 1,    {  opacity: 0, ease: Power0.easeIn, delay: 0.0 }),
            TweenMax.to('#fade-text', 1,    {  opacity: 1, ease: Power0.easeIn, delay: 0.0 })
          ])
    var transHeight = -$('.transSection').height();

    var martez = new ScrollMagic.Scene({
      triggerElement: '.transSection',
      triggerHook: 0,
      offset: -$('.transSection').height() / 2,
      duration:  ($('.transSection').height() / 2) + 'px',
    })
    .setTween(delacruzAnimation)
    .addTo(controllerBuilt)


    $( ".pause" ).click(function(e) { 
      var $this = $(e.target);        
      var $vid = $(e.target).parent().find('video');
      if( $vid.get(0).paused ) { $vid.get(0).play() } else { $vid.get(0).pause() }
      $this.toggleClass('paused');
    });



})


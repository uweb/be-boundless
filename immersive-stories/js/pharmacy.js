$(function(){
  var controllerPharm = new ScrollMagic.Controller();
  var introPharm = new ScrollMagic.Scene({
    triggerElement:'#intro-vid',
    triggerHook:0,
    duration:'100%',
  })
  .setPin('.intro',{pushFollowers:false})
  .setTween('#intro-text',1,{opacity:0,transform:'translateY(-100px)',ease:Power0.easeIn})
  .addTo(controllerPharm);
  $(window).resize(function(){
    introPharm.update(true);
  });
  var addSlideshow = new ScrollMagic.Scene({
    triggerElement: '#slideshow',
    triggerHook: 1,
  })
  .on("enter", function(){
    $('.slick-slideshows').slick({
      lazyLoad: 'ondemand',
      useTransform: true,
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  })
  .addTo(controllerPharm);
  $('a.givebutton2-inner').on('click',function(){
    $('.givebutton2').hide();
    console.log('a.givebutton2 clicked!');
  });
  $('.iframe-pic').on('click', function(e){
      //e.preventDefault();
      //e.stopPropagation();
      $(this).toggleClass('active');
      $(this).find('iframe')[0].src += "&autoplay=1";
      //$(this).unbind("click");
  });
})


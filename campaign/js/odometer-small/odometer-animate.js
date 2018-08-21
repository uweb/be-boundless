$.fn.isInViewport = function() {
var elementTop = $(this).offset().top;
var elementBottom = elementTop + $(this).outerHeight();
var viewportTop = $(window).scrollTop();
var viewportBottom = viewportTop + $(window).height();
return elementBottom > viewportTop && elementTop < viewportBottom;
};

var endNum = [];

$(window).on('scroll resize',
  function() {
    $( ".odometer" ).each(function( index ) {
      if ($(this).isInViewport()) {
        $(this).html(endNum[index] + '');
      } else {
        $(this).html(0);
      }
    });
});

$(window).load(
  function() {
    setTimeout(function(){
      $( ".odometer" ).each(function( index ) {
        $(this).html(endNum[index]);
      });
     }, 2000);
});

$(document).ready(function(){
  $( ".odometer" ).each(function( index ) {
    endNum.push($(this).text());
    $(this).html(0);
  });
});

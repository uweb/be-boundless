//BOUNDLESS.Mobile is a utility class that does general mobile specific things
//and makes whether or not this is a mobile experience available to other classes

BOUNDLESS.Mobile = function (){

  this.checkMobile = function() {
    this.win_height = window.outerHeight;
    this.win_width = window.outerWidth;
    this.is_mobile = (this.win_width <= MOBILE_BREAKPOINT);
  };

  resized = function() {
    this.checkMobile();
    if (this.is_mobile){
      //manipulate slide height here? Make it same (min) height as boundless slide
      $('#slide').height($('#boundless-slide').height());
    }
    else {
      $('#slide').removeAttr('style');
    }
  }.bind(this);

  var MOBILE_BREAKPOINT = 768;
  resized();
  $(window).resize(resized);
}

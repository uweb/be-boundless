BOUNDLESS.Analytics = function () {
  
  $('#nav-wrap li').on({
    click: function () {
      ga('send', 'event', 'nav', 'click', this.id);
    }
  });

  $('a#static.play').on({
    click: function (){
      ga('send', 'event', 'play-video', 'click', "Home brand video");
    }
  });

  // needs to get attached and detached for slides as well
  $('.boundless-button a').on({
    click: function () {
      //console.log(this.innerHTML);
      ga('send', 'event', 'call-to-action', 'click', this.innerHTML + ': ' + this.href);
    }
  });

  //only relevant in slides
  $('button.play').on({
    click: function (){
      if(!$(this).hasClass('close')){
        var video = $(this).attr('aria-controls');
        //console.log($(video).attr('aria-label') + ' played');
        ga('send', 'event', 'play-video', 'click', $(video).attr('aria-label'));
      }
    }
  });

  this.ready = true;
}

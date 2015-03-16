BOUNDLESS.Analytics = function () {
  
  $('#nav-wrap li').on({
    click: function () {
      ga('send', 'event', 'Boundless', 'click', 'Navigation item: ' + this.id);
    }
  });

  $('a#static.play').on({
    click: function (){
      ga('send', 'event', 'Boundless', 'click', "Home brand video played");
    }
  });

  // needs to get attached and detached for slides as well
  $('.boundless-button a').on({
    click: function () {
      //console.log(this.innerHTML);
      ga('send', 'event', 'Boundless', 'click', 'CTA clicked: ' + this.innerHTML + '- ' + this.href);
    }
  });

  //only relevant in slides
  $('button.play').on({
    click: function (){
      if(!$(this).hasClass('close')){
        var video = $(this).attr('aria-controls');
        //console.log($(video).attr('aria-label') + ' played');
        ga('send', 'event', 'Boundless', 'click', 'Slide video played: ' + $(video).attr('aria-label'));
      }
    }
  });

  this.ready = true;
}

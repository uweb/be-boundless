BOUNDLESS.Analytics = function () {
  _.extend(this, Backbone.Events);

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

  $('.boundless-button a').on({
    click: function () {
      //console.log(this.innerHTML);
      ga('send', 'event', 'Boundless', 'click', 'Main CTA clicked: ' + this.innerHTML + '- ' + this.href);
    }
  });

  this.on('slideloaded', function () {
    // needs to get attached and detached for slides as well
    $('#slide .boundless-button a').on({
      click: function () {
        ga('send', 'event', 'Boundless', 'click', 'Slide CTA clicked: ' + this.innerHTML + '- ' + this.href);
      }
    });

    //only relevant in slides
    $('#slide button.play').on({
      click: function (){
        if(!$(this).hasClass('close')){
          var video = $(this).attr('aria-controls');
          ga('send', 'event', 'Boundless', 'click', 'Slide video played: ' + $(video).attr('aria-label'));
        }
      }
    });
  });

  this.on('infowindowready', function () {
    $('.infowindow .boundless-button a').on({
      click: function () {
        ga('send', 'event', 'Boundless', 'click', 'Map Point CTA clicked: ' + this.innerHTML + '- ' + this.href);
      }
    });
  });

  this.ready = true;
}

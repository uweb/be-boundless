BOUNDLESS.TransitionEvents = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd';
// List out the classes that each component searches for
BOUNDLESS.AnimationDuration = 1000

BOUNDLESS.App = Backbone.Model.extend({

  attributes : {
    'map' : false,
    'instagram' : false
  },

  initialize : function() {
    this.on('change:map', BOUNDLESS.initialize )
  }

})

BOUNDLESS.begin = function() {
  BOUNDLESS.app = new BOUNDLESS.App()
  BOUNDLESS.map = new BOUNDLESS.Map()
  BOUNDLESS.gallery = new BOUNDLESS.Gallery()
  // BOUNDLESS.navigation = new BOUNDLESS.Navigation()
  BOUNDLESS.page = []
  BOUNDLESS.pages = new BOUNDLESS.Pages( PAGES )
  BOUNDLESS.pages.each( function( page ) {
    BOUNDLESS.page[ page.get('slug') ] = new BOUNDLESS.Page({ el: '.page .' + page.get('slug') , model: page })
  })
  BOUNDLESS.analytics = new BOUNDLESS.Analytics()
}

BOUNDLESS.initialize = function()
{
  BOUNDLESS.search = new BOUNDLESS.Search()
  BOUNDLESS.scroll = new BOUNDLESS.Scroll()
  // todo: incoorporate into MV*
  jQuery('ul.uw-select').on( 'click' , 'li.inactive', BOUNDLESS.map.handleClickListItems )
  jQuery( 'a.play').click( function() {
    $('#boundless-video').hide()
    var player = new YT.Player( 'boundless-video', {
      videoId : '0h33Y9Zw8oQ',
      player_vars : {
        'rel' : 0,
        'controls' : 0,
        'modestbranding' : 1,
        'wmode' : 'transparent'
      },
      width : $(window).width(),
      height: $(window).height(),
      events : {
        onReady :  function( event ) {
          event.target.playVideo()
          $('#boundless-video').hide().fadeIn()
          $('#close-boundless-video').show()
        }
      }
    })
    return false;
  } )

  $('#close-boundless-video').click( function() {
    $('#boundless-video').fadeOut(function() {
      $(this).replaceWith('<div id="boundless-video"/>')
    })
    $(this).hide()
  })
}

jQuery(document).ready( BOUNDLESS.begin )


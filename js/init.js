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
  BOUNDLESS.navigation = new BOUNDLESS.Navigation()
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
  jQuery('ul.uw-select').on( 'click' , 'li.inactive', BOUNDLESS.map.handleClickListItems )
}

jQuery(document).ready( BOUNDLESS.begin )


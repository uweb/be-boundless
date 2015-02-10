BOUNDLESS.Search = Backbone.View.extend({

  el : 'li.search',

  searchBar : 'input.search-bar',

  events : {
    'click' : 'expandTheSearchBar'
  },

  initialize : function()
  {
    _.bindAll(this, 'expandTheSearchBar')
    this.$searchBar = $(this.searchBar)

  },

  expandTheSearchBar : function ()
  {
    this.$searchBar.toggleClass('open')
  }

})
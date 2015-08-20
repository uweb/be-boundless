// Page view
BOUNDLESS.Page = Backbone.View.extend({

  template : '<div id=\'<%= page.slug %>\' class="container">'+
    '<h3><%= page.title %></h3>' +
    '<%= page.content %>' +
  '</div>',

  initialize : function( options ) {
    this.render()
  },

  render : function() {
    this.$el.html( _.template( this.template, { page: this.model.toJSON() } ) )
    this.$el.css('background', 'url(' + this.model.get('image') + ')' )
  }

})


BOUNDLESS.Pages = Backbone.Collection.extend({
})

// Page view
BOUNDLESS.Page = Backbone.View.extend({

  template : '<div class="container">'+
    '<%= page.content %>' +
  '</div>',

  initialize : function( options ) {
    this.render()
  },

  render : function() {
    this.$el.html( _.template( this.template, { page: this.model.toJSON() } ) )
  }

})


BOUNDLESS.Pages = Backbone.Collection.extend({
})

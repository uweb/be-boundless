// Page view
BOUNDLESS.Page = Backbone.View.extend({

  className : 'slide',

  tagName : 'div',

  template : '<div class="container">'+
    '<%= page.content %>' +
  '</div>',

  initialize : function( options ) {
    this.render()
  },

  render : function() {
    $('#slides').prepend( this.el )
    this.$el.html( _.template( this.template, { page: this.model.toJSON() } ) )
  }

})


BOUNDLESS.Pages = Backbone.Collection.extend({
})


BOUNDLESS.Beginning = Backbone.View.extend({

  el : 'body',

  events : {
  },

  initialize : function() {
    // _.bindAll(this, 'unblur')
    // this.$el.children('div.slide').hide()
    // BOUNDLESS.router.mprogress.start()
    // this.$el.imagesLoaded( this.unblur )

    // TODO: when do we load the map?
      // BOUNDLESS.uwtiles = new BOUNDLESS.UWTiles()
      // BOUNDLESS.map = new BOUNDLESS.Map()
      // BOUNDLESS.map.on('googlemaploaded', this.unblur )
      BOUNDLESS.initialize()

  },

  // unblur : function() {
  //   BOUNDLESS.router.mprogress.end()
  //   this.$el.find('#boundless-slide .overlay').fadeIn( BOUNDLESS.AnimationDuration, BOUNDLESS.initialize )
  // }





})

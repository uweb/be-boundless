// Map Point View
// Mostly temporary rendering until segues are established
BOUNDLESS.Interactions = Backbone.View.extend({

  initialize : function( options )
  {
  	_.bindAll( this, 'hide', 'show', 'animation');

    this.navigation = $(".navigation")
    var message = $('#message')

    // Bounce in the tiles
    this.navigation.find("li").each(function () { 		 

  		  $(this).animate({
  		  			marginRight: 20,
  		  			opacity:1
  		  		},{ 
  		  			duration: 1500, 
  		  			easing: 'easeOutElastic'
  		  		}
  		  );  	

  	});
  	this.navigation.toggleClass("show-nav");

    // Animate in the entire menu as a whole
	this.animation(-230)


    //Instantiate load bar

    var bufferIntObj = {
 		 template: 3
	};

    var mprogress = new Mprogress(bufferIntObj);

    // Call bar on click
    this.navigation.on('click', "li", function(){
    	mprogress.start() 
    	mprogress.set(0.2)
    });

    // Blur background
    this.navigation.find("li").on({  		
    	mouseenter: function() {
  		  message.addClass("blur")
  		}, mouseleave: function() {
  		  message.removeClass("blur")
  		}
    });

    // Show nav bar on click


  },

  hide: function(){
    // Animate in the entire menu as a whole
    this.animation(-1600)
  	console.log('Hiding the navigation')

  },

  show: function(){
  	console.log('Showing the navigation')
  },

  animation: function(left) {
    this.navigation.animate({ 
    		left: left 	
    	},{ 
  			duration: 500, 
  		  	easing: 'easeInOutQuad'
  		 }
    );
  }


})



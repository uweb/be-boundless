// Map Point View
// Mostly temporary rendering until segues are established
BOUNDLESS.Interactions = Backbone.View.extend({

  initialize : function( options )
  {
    var $ = jQuery
    var navigation = $(".navigation")
    var message = $('#message')

    // Bounce in the tiles
    navigation.find("li").each(function () { 		 

  		  $(this).animate({
  		  			marginRight: 20,
  		  			opacity:1
  		  		},{ 
  		  			duration: 1500, 
  		  			easing: 'easeOutElastic'
  		  		}
  		  );  	

  	});

    // Animate in the entire menu as a whole
    navigation.animate({ 
    		left: -230 	
    	},{ 
  			duration: 500, 
  		  	easing: 'easeInOutQuad',

  		  	// Was gonna animate left to bounce in

  		  	//complete: function() {
  		  	//	navigation.animate({
  		  	//			left: 0 
  		  	//		},{ 
  			//			duration: 500, 
  		  	//			easing: 'easeOutCubic'
  		  	//	});
  		  	//}
  		 }
    );


    // The progress bar at the top

    //Instantiate

    var bufferIntObj = {
 		 template: 3
	};

    var mprogress = new Mprogress(bufferIntObj);

    // Call bar on click
    navigation.on('click', "li", function(){
    	mprogress.start() 
    	mprogress.set(0.2)
    });

    // Blur background
    navigation.find("li").on({  		
    	mouseenter: function() {
  		  message.addClass("blur")
  		  $(this).show( "scale", {percent: 100}, 2000 );
  		}, mouseleave: function() {
  		  message.removeClass("blur")
  		}
    });


  }

})



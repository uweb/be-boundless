// Mobile check

// var isMobile = false,
// 	userClosedMenu = false;


$(function(){

	/////////////////
	// CAMPAIGN V2 //
	/////////////////
		$("#cv2-toggle").click(function(){
			$(".cv2-header-mobile").slideToggle("slow");
			$(".cv2-header-white").slideToggle("slow");
		});
		$("#cv2-more").click(function(){
			$("#cv2-more span").toggleClass("expando");
			$("#cv2-more span").toggleClass("collapso");
			$(".cv2-header-grey").slideToggle("slow");
		});

	// var bodyEl 		= document.getElementsByTagName('body')[0].classList,
	// 	campExpand 	= document.getElementById('campaign-expand'),
	// 	thin		= document.getElementsByClassName('thin')[0],
	// 	thick		= document.getElementsByClassName('thick')[0],
	 	// give 		= document.getElementById('give-now')
	 	var give 		= document.getElementById('cv2-give');

	// document.getElementById('campaign-expand').addEventListener('click', function(){
	// 	bodyEl.toggle('active-header')
	// 	// Register user's preference for menu
	// 	userClosedMenu = (userClosedMenu === true) ? false : true;
	// 	if (userClosedMenu) {
	// 		thin.setAttribute('aria-hidden', 'false');
	// 		thick.setAttribute('aria-hidden', 'true');
	// 		// Give animation 410ms to play
	// 		setTimeout(function(){
	// 			thin.focus();
	// 		}, 410)
	// 	} else {
	// 		thin.setAttribute('aria-hidden', 'true');
	// 		thick.setAttribute('aria-hidden', 'false');
	// 		setTimeout(function(){
	// 			thick.focus();
	// 		}, 410)
	// 	}

	// });

	// isMobile = window.matchMedia("only screen and (max-width: 768px)");


	// Toggle menu open on desktop
	// if(!isMobile.matches) {
	//  	bodyEl.toggle('active-header');
	//  	campExpand.setAttribute('aria-hidden', 'true');
	// }

	// Check for empty
	// function isEmpty( el ){
	//   return !$.trim(el.html())
	// }

	give.addEventListener('click', function(e){

		e.preventDefault();

		if(isEmpty($('#give-iframe'))) {
			$('<iframe>', {
				src: 'https://online.gifts.washington.edu/secure/?nobanner=true&activateTab=0&appeal=17XBS',
				frameborder: 0,
				width: '100%',
				height: '100%',
			}).appendTo('#give-iframe');
		}

		if(give.innerHTML === 'Give now'){
			give.innerHTML = 'Close';
		} else {
			give.innerHTML = 'Give now';
		}

		$('body').toggleClass('give-modal-active');

	})



});

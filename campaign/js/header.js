// Mobile check
// 
/* V1 */
var isMobile = false,
	userClosedMenu = false;
/* end V1 */

$(function(){

	/////////////////
	// CAMPAIGN V2 //
	/////////////////
		$("#cv2-toggle").on( 'click', function(e){
			e.stopPropagation();
			$(".cv2-header-mobile").slideToggle("slow");
			$(".cv2-header-white").slideToggle("slow");
			//close cv2-more
			if($("#cv2-more").hasClass("active")){
				$("#cv2-more").trigger("click");
			}
		});
		$("#cv2-more").on( 'click', function(e){
			e.stopPropagation();
			$("#cv2-more").toggleClass("active");
			$("#cv2-more span").toggleClass("expando");
			$("#cv2-more span").toggleClass("collapso");
			$(".cv2-header-grey").slideToggle("slow");
		});

/* V1 */
	var bodyEl 		= document.getElementsByTagName('body')[0].classList,
		campExpand 	= document.getElementById('campaign-expand'),
		thin		= document.getElementsByClassName('thin')[0],
		thick		= document.getElementsByClassName('thick')[0],
	 	give 		= document.getElementById('give-now'), 
/* end V1 */
	 	giveNew		= document.getElementById('cv2-give'),
	 	close 		= document.getElementById('cv2-close');

/* V1 */
if(campExpand){
	campExpand.addEventListener('click', function(){
		bodyEl.toggle('active-header')
		// Register user's preference for menu
		userClosedMenu = (userClosedMenu === true) ? false : true;
		if (userClosedMenu) {
			thin.setAttribute('aria-hidden', 'false');
			thick.setAttribute('aria-hidden', 'true');
			// Give animation 410ms to play
			setTimeout(function(){
				thin.focus();
			}, 410)
		} else {
			thin.setAttribute('aria-hidden', 'true');
			thick.setAttribute('aria-hidden', 'false');
			setTimeout(function(){
				thick.focus();
			}, 410)
		}

	});
}
	isMobile = window.matchMedia("only screen and (max-width: 768px)");


	// Toggle menu open on desktop
	if(!isMobile.matches) {
	 	bodyEl.toggle('active-header');
	 	if(campExpand){ campExpand.setAttribute('aria-hidden', 'true'); }
	}

	// Check for empty
	function isEmpty( el ){
	  return !$.trim(el.html())
	}
if(give){
	give.addEventListener('click', function(e){

		e.preventDefault();

		if(isEmpty($('#give-iframe'))) {
			$('<iframe>', {
				src: 'https://online.gifts.washington.edu/secure/?nobanner=true&activateTab=0&appeal=17XBS&code=IMPFND',
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
}
/* end V1 */
if(giveNew){
	giveNew.addEventListener('click', function(e){

		e.preventDefault();

		$('#give-iframe').toggleClass("active");

		if(isEmpty($('#give-iframe .container'))) {
			$('<iframe>', {
				src: 'https://online.gifts.washington.edu/secure/?nobanner=true&activateTab=0&appeal=17XBS&page=make&code=' + 'IMPFND' + '&amount=' + $("#cv2-header-give-amount").val().replace(/,/g, ''),
				frameborder: 0,
				width: '100%',
				height: '100%',
			}).appendTo('#give-iframe');
		}

		/* V1 */
		// if(give.innerHTML === 'Give now'){
		// 	give.innerHTML = 'Close';
		// } else {
		// 	give.innerHTML = 'Give now';
		// }
		/* end V1 */

		$('body').toggleClass('give-modal-active');

	})
}
if(close){
	close.addEventListener('click', function(e) {

		e.preventDefault();

		$('#give-iframe').toggleClass("active");

		$('#give-iframe iframe').remove();
			

		$('body').toggleClass('give-modal-active');
	})
}


});

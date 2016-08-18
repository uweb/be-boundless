// Mobile check

var isMobile = false,
	userClosedMenu = false;


$(function(){

	var bodyEl 		= document.getElementsByTagName('body')[0].classList,
		campExpand 	= document.getElementById('campaign-expand'),
		thin		= document.getElementsByClassName('thin')[0],
		thick		= document.getElementsByClassName('thick')[0]

	document.getElementById('campaign-expand').addEventListener('click', function(){
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
			// Give animation 410ms to play
			setTimeout(function(){
				thick.focus();
			}, 410)
		}

	});	

	isMobile = window.matchMedia("only screen and (max-width: 768px)"); 


	// Toggle menu open on desktop

	if(!isMobile.matches) {
	  bodyEl.toggle('active-header')
	}

});

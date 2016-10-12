// Mobile check

var isMobile = false,
	userClosedMenu = false;


$(function(){

	var bodyEl 		= document.getElementsByTagName('body')[0].classList,
		campExpand 	= document.getElementById('campaign-expand'),
		thin		= document.getElementsByClassName('thin')[0],
		thick		= document.getElementsByClassName('thick')[0],
		give 		= document.getElementById('give-now'),
		close 		= document.getElementById('empty')

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

	// Check for empty
	function isEmpty( el ){
		return !$.trim(el.html())
	}

	give.addEventListener('click', function(e){

		e.preventDefault();	

		if(isEmpty($('#give-iframe'))) {
			$('<iframe>', {
				src: 'https://online.gifts.washington.edu/secure/?tab=0&appeal=17XEX',
				frameborder: 0,
				width: '100%',
				height: '100%',
			}).appendTo('#give-iframe');
		}
		
		if(give.innerHTML === 'Give now'){
			give.innerHTML = 'Close';
			close.className += ' hide';
		} else {
			give.innerHTML = 'Give now';
			close.className = close.className.replace('hide','');
		}

		$('body').toggleClass('give-modal-active');

	})



});

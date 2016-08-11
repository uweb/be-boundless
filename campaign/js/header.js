// Mobile check

var isMobile = false,
	userClosedMenu = false;


$(function(){

	var bodyEl = document.getElementsByTagName('body')[0].classList;

	document.getElementById('campaign-expand').addEventListener('click', function(){
		bodyEl.toggle('active-header')
		// Register user's preference for menu
		userClosedMenu = (userClosedMenu === true) ? false : true;
	});	

	isMobile = window.matchMedia("only screen and (max-width: 768px)"); 

	// On resize listener
	// (function(){
	// 	window.addEventListener('resize', function(){
	// 		isMobile = window.matchMedia("only screen and (max-width: 768px)");  
	// 	});
	// })();


	// Toggle menu open on desktop

	if(!isMobile.matches) {
	  bodyEl.toggle('active-header')
	}

})




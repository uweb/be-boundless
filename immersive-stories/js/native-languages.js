$(function () {
	// Image swap on scroll
	var swapScrollNum = 0;
	var displayPanel = $('#flex-content-section-6').offset().top;
	$( '#flex-content-section-6' ).addClass( 'lushootseed-writing-2' );
	$(window).scroll(function () {
		swapScrollNum = $(window).scrollTop();
		if ( swapScrollNum > ( displayPanel - $( '#flex-content-section-6' ).height() / 2 ) && ( swapScrollNum < ( displayPanel + $( '#flex-content-section-7' ).height() / 1.5 )) ) {
			$( '#flex-content-section-6' ).addClass( 'lushootseed-writing-2' ).removeClass( 'lushootseed-writing-1');
		} else {
			$( '#flex-content-section-6' ).addClass( 'lushootseed-writing-1' ).removeClass( 'lushootseed-writing-2');
		}
	});
});
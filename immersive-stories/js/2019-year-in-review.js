$(function () {
    // Blur to focus on scroll images
    var blurScroll = 0;
	var diverPhoto = $( '#flex-content-section-1' ).offset().top;
	console.log(diverPhoto);
	var crewPhoto = $( '#flex-content-section-5' ).offset().top;
	console.log(crewPhoto);
	var forestPhoto = $( '#flex-content-section-8' ).offset().top;
	console.log(forestPhoto);
	var microplasticsPhoto = $( '#flex-content-section-16' ).offset().top;
	console.log(microplasticsPhoto);

	$( '#flex-content-section-1 img' ).addClass('blur-focus');
	$( '#flex-content-section-5 img' ).addClass('blur-focus');
	$( '#flex-content-section-8 img' ).addClass('blur-focus');
	$( '#flex-content-section-16 img' ).addClass('blur-focus');

    $(window).scroll(function () {
		blurScroll = $(window).scrollTop();
		console.log(blurScroll);

        // diver photo
        if ( blurScroll > diverPhoto ) {
			$('#flex-content-section-1 img').removeClass('blur-focus');
			$('#flex-content-section-1 img').addClass('focus-blur');
        }

        // crew photo
        if ( blurScroll > ( crewPhoto + 1500 ) ) {
			$('#flex-content-section-5 img').removeClass('blur-focus');
			$('#flex-content-section-5 img').addClass('focus-blur');
        }

        // forest photo
        if ( blurScroll > ( forestPhoto + 2000 ) ) {
            $('#flex-content-section-8 img').removeClass('blur-focus');
            $('#flex-content-section-8 img').addClass('focus-blur');
        }

		// microplastics photo
		if ( blurScroll > ( microplasticsPhoto * 1.5 ) ) {
            $('#flex-content-section-16 img').removeClass('blur-focus');
            $('#flex-content-section-16 img').addClass('focus-blur');
        }
    });
});
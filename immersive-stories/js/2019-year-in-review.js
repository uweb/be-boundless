$(function () {
    // Blur to focus on scroll images
    var blurScroll = 0;
    var diverPhoto = $( '#flex-content-section-1 img' ).offset().top;
    var crewPhoto = $( '#flex-content-section-5 img' ).offset().top;
	var forestPhoto = $( '#flex-content-section-8 img' ).offset().top;
	var microplasticsPhoto = $( '#flex-content-section-16 img' ).offset().top;

    $(window).scroll(function () {
        blurScroll = $(window).scrollTop();

        // diver photo
        if ( (blurScroll > diverPhoto) && (blurScroll < (diverPhoto + $('#flex-content-section-1 img').height() ))) {
            $('#flex-content-section-1 img').removeClass('blur-focus');
            $('#flex-content-section-1 img').addClass('focus-blur');
        } else {
            $('#flex-content-section-1 img').removeClass('focus-blur');
            $('#flex-content-section-1 img').addClass('blur-focus');
        }

        // crew photo
        if ( (blurScroll > crewPhoto) && (blurScroll < (crewPhoto + $('#flex-content-section-5 img').height() ))) {
            $('#flex-content-section-5 img').removeClass('blur-focus');
            $('#flex-content-section-5 img').addClass('focus-blur');
        } else {
            $('#flex-content-section-5 img').removeClass('focus-blur');
            $('#flex-content-section-5 img').addClass('blur-focus');
        }

        // forest photo
        if ( (blurScroll > forestPhoto) && (blurScroll < (forestPhoto + $('#flex-content-section-8 img').height() ))) {
            $('#flex-content-section-8 img').removeClass('blur-focus');
            $('#flex-content-section-8 img').addClass('focus-blur');
        } else {
            $('#flex-content-section-8 img').removeClass('focus-blur');
            $('#flex-content-section-8 img').addClass('blur-focus');
		}

		// microplastics photo
		if ( (blurScroll > microplasticsPhoto ) && (blurScroll < (microplasticsPhoto + $('#flex-content-section-16 img').height() ))) {
            $('#flex-content-section-16 img').removeClass('blur-focus');
            $('#flex-content-section-16 img').addClass('focus-blur');
        } else {
            $('#flex-content-section-16 img').removeClass('focus-blur');
            $('#flex-content-section-16 img').addClass('blur-focus');
		}
    });
});
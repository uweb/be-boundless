$(function () {
	// Image swap on scroll
	var swapScrollNum = 0;
	var displayPanel = $('#flex-content-section-6').offset().top;
	$( '#flex-content-section-7' ).addClass( 'lushootseed-writing-2' );
	$(window).scroll(function () {
		swapScrollNum = $(window).scrollTop();
		if ( swapScrollNum > ( displayPanel - $( '#flex-content-section-6' ).height() / 2 ) && ( swapScrollNum < ( displayPanel + $( '#flex-content-section-7' ).height() / 1.5 )) ) {
			$( '#flex-content-section-6' ).addClass( 'lushootseed-writing-2' ).removeClass( 'lushootseed-writing-1');
		} else {
			$( '#flex-content-section-6' ).addClass( 'lushootseed-writing-1' ).removeClass( 'lushootseed-writing-2');
		}
	});

	// PULLED FROM COMMON.JS (Campaign) and cleaned up
	// Audio Player
	// $( '.audio-ctrl' ).each( function() {
	// 	var $this = $(this);

	// 	// Set ARIA attribute to false
	// 	$this.attr("aria-pressed","false");

	// 	$this.click(function(e){
	// 	  	e.preventDefault();

	// 		// Pause all currently playing
	// 		var mp3s = document.body.getElementsByTagName( 'audio' );
	// 		for (var i = 0; i < mp3s.length; i++ ) {
	// 		mp3s[i].pause()
	// 	}

	// 	var $audio = $(e.target).closest( '.audio' ),
	// 			audioEl = $audio.find( 'audio' )[0]

	// 	$audio.addClass( 'active-audio' );
	// 	$audio.find( 'button' ).attr( 'aria-pressed', 'false');
	// 	$this.attr( 'aria-pressed', 'true');

	// 	if( $this.hasClass( 'audio-play' ) ) {
	// 		$( 'audio' )[0].pause();
	// 		setTimeout(function(){
	// 			audioEl.play();
	// 			},1000);
	// 		};

	// 		if( $this.hasClass( 'audio-pause' ) ) {
	// 			audioEl.pause();
	// 		}

	// 		if( $this.hasClass( 'audio-read' ) ) {
	// 			$audio.find( '.audio-transcript' ).removeClass( 'visually-hidden' ).focus();
	// 			$audio.toggleClass( 'trans' );

	// 			if( $this.hasClass( 'active-transcript' ) ) {
	// 				$audio.find( '.audio-transcript' ).addClass( 'visually-hidden' );
	// 				$this.removeClass( 'active-transcript' );
	// 				$audio.toggleClass( 'trans' );
	// 			} else {
	// 				$this.addClass( 'active-transcript' );
	// 			}
	// 		}
	// 	});
	// });
});
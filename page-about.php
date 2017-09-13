<?php
	$meta = '';
	$styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/leadership.css' type='text/css' media='all' />";
	//$scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/socialwork.min.js' type='text/javascript'></script>";
	get_header( "campaign-v2" );
?>
<main>
	<?php
		while ( have_posts() ) : the_post();
		the_content();
		endwhile;
	?>
</main>
<script type="text/javascript">
	$(function(){
		var current = document.getElementById('camp-current').innerHTML,
		goal    = document.getElementById('camp-goal').innerHTML,
		height  = window.innerHeight * 0.9,
		thermo  = document.getElementById('thermo'),
		thermoWidth = thermo.getBoundingClientRect().width * ( current / goal),
		isMobile = window.matchMedia("only screen and (max-width: 768px)");  
		thermo.style.backgroundPosition =  (Math.ceil(thermoWidth + 60) - (isMobile.matches ? 0 : 190)) + "px top"
		document.addEventListener('scroll',function(){
			var el = thermo.getBoundingClientRect().top;
			if ( height >  el ) {
				thermo.classList.remove('inactive');
			} else {
				thermo.classList.add('inactive');
			}
		})
		if (!isMobile.matches) {
			$('#people li').bind('touchstart touchend', function(e) {
				e.preventDefault();
				$(this).toggleClass('hover');
			});
		}
	})
</script>
<iframe width="0" height="0" name="Trade Desk Tracking - IP1714153_University of Washington Primary Conv_Core" frameborder="0" scrolling="no" src="//insight.adsrvr.org/tags/4uvcj6dn/wocltll/iframe"></iframe>
<?php get_template_part('footer', 'campaign-v2'); ?>

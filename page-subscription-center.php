<?php
	$meta = '';
	$styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' />";
	get_header( "campaign-v2" );
?>
<script type="text/javascript" src="https://subscribe.gifts.washington.edu/Scripts/SubManBuilder/submanbuilder.js" id="uwSubscriptionManager"></script>
<script type="text/javascript">
	SUBMANBUILDER.makeIframe({
		preferenceID: 27,
		managePreferences: true,
		fromName: "University of Washington",
		fromEmail: "uwcmpgn@uw.edu",
		showHeader: true
	});
</script>
<?php get_template_part('footer', 'campaign-v2'); ?>

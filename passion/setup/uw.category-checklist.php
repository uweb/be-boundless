<?php

$UW->Category_Checklist = new Category_Checklist;


class Category_Checklist {

	function __construct() {
	    add_filter( 'wp_terms_checklist_args', array( __CLASS__, 'checklist_args' ) );
	}

	public static function checklist_args( $args ) {
	    add_action( 'admin_footer', array( __CLASS__, 'script' ) );

	    $args['checked_ontop'] = false;

	    return $args;
	}

	// Scrolls to first checked category
	function script() {
	?>
	<script type="text/javascript">
	(function($){
	    $('[id$="-all"] > ul.categorychecklist').each(function() {
	        var list = $(this);
	        var firstChecked = list.find(':checked').first();

	        if ( !firstChecked.length )
	            return;

	        var pos_first = list.find(':checkbox').position().top;
	        var pos_checked = firstChecked.position().top;

	        list.closest('.tabs-panel').scrollTop(pos_checked - pos_first + 5);
	    });

	    $("#filterschecklist>li>label input").each(function(){
	        if ($(this).parent().next('ul').hasClass('children')) {
	            $(this).remove();
	        }
	    });

	})(jQuery);
	</script>
	<?php
	    }
}

//Category_Checklist::init();

?>
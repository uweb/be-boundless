<?php get_header(); ?>
</div>

		<?php
				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'menu', 'mobile' );
        ?>
        <main id='main_content'>
        <h1 class='offscreen'>University Of Washington</h1>
        <?php
				get_template_part( 'content', 'slideshow' );

				get_template_part( 'content', 'links' );

				get_template_part( 'content', 'on-campus' );

				get_template_part( 'content', 'charts' );
		?>
        </main>

<?php get_footer(); ?>

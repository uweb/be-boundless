<?php get_template_part('header', 'app'); ?>

    <div class="stripes">
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span><span></span>
    </div>

    <ul class="navigation">
      <?php echo  Navigation::get_navigation() ?>
    </ul>

    <div id="slides" class="curtains">

    <?php  ?>

    <div id="boundless-slide" class="slide current">
        <div id="boundless-background"></div>
        <div class="midground"><img width="90%" height="auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/middleground.png"></div>
        <div class="foreground"></div>

            <a class="play" href="#!/video/boundless"></a>

            <?php while( have_posts() ) :       the_post(); ?>

                <div class="homepage-text">

                   <h1>  <?php # the_title(); ?></h1>
                   <!-- <span class="udub-slant"><span></span></span> -->
                    <p><?php the_content(); ?></p>
                </div>

            <?php endwhile; ?>

    </div>

    <?php echo  Navigation::get_navigation_slides() ?>

    </div>

<?php get_template_part( 'footer', 'app' ) ?>

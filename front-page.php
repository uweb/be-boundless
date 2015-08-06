<?php get_template_part('header', 'app'); ?>

    <div class="stripes">
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span><span></span>
    </div>

    <div class="navigation segue">
        <div id="nav-wrap">
            <ul>
              <li class="spacer"></li>
              <?php echo  Navigation::get_navigation() ?>
            </ul>
        </div>
    </div>

    <div id="slides">

    <div id="boundless-slide" class="slide current">
        <div id="boundless-background"></div>

            <a class="play" href="#!/video/boundless"></a>

            <?php while( have_posts() ) :       the_post(); ?>

                <div class="homepage-text">

                    <h1><?php the_title(); ?></h1>
                    <span class="udub-slant"><span></span></span>
                    <p><?php the_content(); ?></p>
                </div>

            <?php endwhile; ?>


    </div>

    </div>

<?php get_template_part( 'footer', 'app' ) ?>

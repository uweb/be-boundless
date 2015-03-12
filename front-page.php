<?php get_template_part('header', 'app'); ?>

    <div id="boundless-slide">
        <div id="boundless-background"></div>
        <!--
        <button id="topRight" class="play"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>
        -->

        <div class="navigation segue">

            <?php while( have_posts() ) :       the_post(); ?>

                <div class="homepage-text">

                    <h1><?php the_title(); ?></h1>
                    <span class="udub-slant"><span></span></span>
                    <p></p>
                    <p class="p1"><?php the_content(); ?></p>
                </div>
            <?php endwhile; ?>


            <a id="static" class="play" href="#!/video/boundless"><span class="top"></span><span class="left"></span><span class="bottom"></span></a>
            <div id="nav-wrap">
            <ul>
              <li class="spacer"></li>
              <?php echo  Navigation::get_navigation() ?>
            </ul>
            </div>
            <a class="show-nav" href="#">Show navigation</a>
        </div>

    </div>

    <div id="slide"></div>

    <div class="stripes">
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span><span></span>
    </div>

    <h3 class="be-boundless">Be boundless</h3>

<?php get_template_part( 'footer', 'app' ) ?>

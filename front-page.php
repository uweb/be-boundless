<?php get_template_part('header', 'app'); ?>

    <div class="stripes">
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span><span></span>
    </div>

    <ul id="dots" class="navigation">
      <?php echo  Navigation::get_navigation() ?>
    </ul>

    <ul id="slides" class="curtains">

    <?php  ?>

    <li id="boundless-slide" class="slide current">
        
        <div class="stars"></div>
        <div class="twinkling"></div>
        
        <div class="midground"><img width="95%" height="auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/middleground.png"></div>
        
        <div class="foreground"></div>

            <?php while( have_posts() ) :       the_post(); ?>

                <div class="homepage-text">
                    
                    <a class="play" href="#!/video/boundless"></a>

                   <h1>  <?php # the_title(); ?></h1>
                   <!-- <span class="udub-slant"><span></span></span> -->
                    <p><?php the_content(); ?></p>
                </div>

            <?php endwhile; ?>

        <p class="scroll-more"></p>

    </li>s

    <?php echo  Navigation::get_navigation_slides() ?>

    </ul>

<?php get_template_part( 'footer', 'app' ) ?>

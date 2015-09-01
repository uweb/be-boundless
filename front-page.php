<?php get_template_part('header', 'app'); ?>

    <div class="stripes">
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></span><span></span>
    </div>

    <ul id="dots" class="navigation">
        <li class="active"><a href="#boundless-slide"></a></li>
      <?php echo  Navigation::get_navigation() ?>
    </ul>

    <ul id="slides" class="curtains">

    <?php  ?>

    <li id="boundless-slide" class="slide current">

        <div id="boundless-video"></div>
        <button id="close-boundless-video" class="play close" aria-controls="boundless-video"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>

        <div class="stars"></div>
        <div class="twinkling"></div>

        <div class="midground"><img width="95%" height="auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/middleground.png"></div>

        <div class="foreground"></div>

            <?php while( have_posts() ) :       the_post(); ?>

                <div class="homepage-text">
                   <h1>  <?php the_title(); ?></h1>
                   <a class="play" href="#!/video/boundless"></a>
                   <!-- <span class="udub-slant"><span></span></span> -->
                    <p><?php the_content(); ?></p>
                </div>

            <?php endwhile; ?>

        <p class="scroll-more"></p>
        <a href="#visit" class="visit-button">Visit UW</a>
    </li>

    <?php echo  Navigation::get_navigation_slides() ?>

<!--     <li id="tagboard" class="slide">
        <div class="tagboard-embed" tgb-slug="NEWHUSKIES2015" style="overflow:hidden;"></div>
        <script src="https://static.tagboard.com/public/js/embedAdvanced.js"></script>
    </li> -->

 </ul>

<?php //get_template_part( 'footer', 'app' ) ?>
<?php get_footer(); ?>

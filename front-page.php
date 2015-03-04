<?php get_header(); ?>

    <!-- <div id="overlay"></div> -->


    <div id="boundless-slide">
            <div id="boundless-background"></div>

        <button id="topRight" class="play"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>
        <div class="navigation">
            <button id="static" class="play"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>
            <div id="nav-wrap">
            <ul>
              <li class='spacer'></li> 
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

<?php get_footer(); ?>

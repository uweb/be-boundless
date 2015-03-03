<?php get_header(); ?>

    <!-- <div id="overlay"></div> -->


    <div id="boundless-slide">
            <div id="boundless-background"></div>

        <button id="topRight" class="play"><span class="top"></span><span class="left"></span><span class="bottom"></span></button>
        <div class="navigation">
          <!--
              <div class="homepage-text">
                  <h1>Husky <br>EXPERIENCE</h1>
                  <span class="udub-slant"><span></span></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac iaculis purus, id facilisis purus. In porta molestie erat, eget dignissim sapien sodales a. Vivamus molestie purus nec dui venenatis bibendum. Etiam eleifend purus ut ante varius adipiscing. Duis ullamcorper, erat sed egestas porta, magna purus mollis quam, sed ullamcorper esx<a href="#"></a></p>
               </div>
              
            -->

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

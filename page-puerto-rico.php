<?php
    $meta = '';
    $slug = 'puerto-rico';
    $styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/" . $slug . ".css' type='text/css' media='all' />";
    $scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/" . $slug . ".min.js' type='text/javascript'></script>";
    $storyCodes = 'PRERFD';
    $storyAppeal = 'PLACEHOLDER TEXT - PLEASE REPLACE';
    get_header("campaign-v2");
?>

<!-- INSERT SCROLL BAR -->
<div id="scrollbar"><span></span><img class="grayW" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/W-Logo_gray.png' ?>"></div>


<div id="immersive-body">

    <div class="version-switch">
        <a href="../puerto-rico-sp"><button id="spanish" href="../puerto-rico-sp" class="animsition-link" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">View Spanish version</button></a>
    </div>

    <section class="intro" id="intro-vid">
        <div id="vid-overlay"></div>
        <button id="pause">Pause</button>
        <video autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/header-preview.jpg' ?>" class="fullscreen-bg__video" id="full-bg-video">
            <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/ess/header2.mp4' ?>" type="video/mp4">
        </video>
        <div class="intro-body">
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-1 col-md-offset-1 col-lg-offset-2" id='intro-text'>
                    <h1>Grid by grid</h1>
                    <span class="udub-slant"><span></span></span>
                    <p>Months after Hurricane Maria, thousands in rural Puerto Rico still lack electricity. In partnership with local communities, UW researchers are working to restore their power.</p>
                </div>
            </div>
        </div><!-- .intro-body -->
        <section class="scrollit read-more">
            <p>Scroll Down</p>
            <div class="mouse">
                <div class="scroll"></div>
            </div><!-- .mouse -->
        </section><!-- .scrollit .read-more -->
    </section><!-- .intro #intro-vid -->


    <main id="main_content">
        <section class="text-block start white">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 copy">
                        <p>In many respects, CoMotion Labs @ HQ looks like you’d expect a startup incubator to look. Glass-walled conference rooms with idea maps sketched on whiteboards. Entrepreneurs in T-shirts with futuristic company names hanging above their desks: BiNomial. PixelFyzz. WiBotic.</p>

                        <div id="2020">
                             <!-- The before image is first -->
                             <img src="http://placehold.it/1000x300/4b2e83/b7a57a"
                             />
                             <!-- The after image is last -->

                             <img src="http://placehold.it/1000x300/b7a57a/4b2e83"
                             />
                        </div>



                    </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .text-block .start .white -->


        <!--Expanding block -->
        <section class="text-block" id="expanding">
            <div class="container">
                <!-- [slide deck image] -->
                <img class="slide1" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/SLIDE_1.png' ?>">
                <!-- [slide deck image flipped] -->
                <img class="slide2" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/SLIDE_2.png' ?>">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 copy expandable-container">
                        <div class="visible-part">
                            <h2 class="big-big">What is VR?</h2>

                            <p>Virtual reality isn’t a new idea, but the technology that makes it possible is quickly catching up to experiences we’ve long dreamed of creating. From low-tech toys to high-tech headsets, here are a few examples of devices that have brought the virtual world into our lives.</p>

                            <div style="text-align: center"><a id="expander" class="expander" href="#" role="button">Show more</a></div>
                        </div>
                        <div class="hidden-part">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                                    <!-- [stereoscope image] -->
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/STEREOSCOPE.png' ?>">
                                </div>
                                <div class="item-desc col-md-6 col-sm-8 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                                    <h3>Late 19th century</h3>
                                    <span>Stereoscope</span>
                                    <p>In 1838, British physicist Sir Charles Wheatstone publishes a paper explaining how the mind combines images from each eye to create depth perception. He coins it the “stereoscope,” and by the mid-19th century it has been adapted for handheld use and gained significant popularity.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                                    <!-- [view master image] -->
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/VIEWMASTER.png' ?>">
                                </div>
                                <div class="item-desc col-md-6 col-sm-8 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                                    <h3>1939</h3>
                                    <span>View-Master</span>
                                    <p>Introduced in 1939 at the New York World’s Fair, the View-Master<sup>&reg;</sup> soon becomes a household toy that whisks people to destinations and scenes around the world. Shown at left is a Model G, circa 1959-1977.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                                    <!-- [Google cardboard image] -->
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/GOOGLE_CARDBOARD.png' ?>">
                                </div>
                                <div class="item-desc col-md-6 col-sm-8 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                                    <h3>2014</h3>
                                    <span>Google Cardboard</span>
                                    <p>Harnessing the smartphone’s power and small size, Google releases Google Cardboard, a DIY headset that offers a lightweight, relatively inexpensive way to experience virtual reality.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                                    <!-- [HTC VIVE image] -->
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/HTC_VIVE.png' ?>">
                                </div>
                                <div class="item-desc col-md-6 col-sm-8 col-xs-10 col-sm-offset-0 col-xs-offset-1">
                                    <h3>2016</h3>
                                    <span>HTC VIVE</span>
                                    <p>One of several commercial VR headsets released in 2016, the HTC VIVE<sup>&trade;</sup> is part of a watershed moment in the progress of virtual technology.</p>
                                </div>
                            </div>
                            <div style="text-align: center"><a class="expander less" href="#" role="button">Show less</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="profiles">
          <div class="who-section">
              <ul id="people">
                  <li class="pax-1 navy" tabindex="0">
                      <div class="hider">
                          <h2>Madeline Hille, ‘18 (left)</h2>
                          <p><span>Home state: </span>Washington (Madeline)</p>
                      </div>
                  </li>
                  <li class="pax-2 airforce" tabindex="0">
                      <div class="hider">
                          <h2>Jacqueline Sherburne, ‘18</h2>
                          <p><span>Home state: </span>Washington</p>
                      </div>
                  </li>
                  <li class="pax-3" tabindex="0">
                      <div class="hider">
                          <h2>Joshua Anderson, ‘18</h2>
                          <p><span>Home state: </span>Minnesota</p>
                      </div>
                  </li>
                  <li class="pax-4 navy" tabindex="0">
                      <div class="hider">
                          <h2>Weston Brown, ‘18</h2>
                          <p><span>Home state: </span>California</p>
                      </div>
                  </li>
                  <li class="pax-5 army" tabindex="0">
                      <div class="hider">
                          <h2>Allison Nelson, ‘18</h2>
                          <p><span>Home state: </span>Washington</p>
                      </div>
                  </li>
                  <li class="pax-6 army" tabindex="0">
                      <div class="hider">
                          <h2>Fairuz Aisyah Binti<br />Ahmad Zamri, ‘18</h2>
                          <p><span>Home country: </span>Malaysia</p>
                      </div>
                  </li>

                  <li class="pax-7 navy" tabindex="0">
                      <div class="hider">
                          <h2>Ruslan Pavlenko, ‘17</h2>
                          <p><span>Home state: </span>Washington</p>
                      </div>
                  </li>
              </ul>

          </div>
      </section>

    </main><!-- #main_content -->

    <div id="popup"></div>

</div><!-- #immersive-body -->

<?php
    include(locate_template('include-giving.php'));//ADD CUSTOM PHOTO
    get_template_part('footer', 'campaign-v2');
?>

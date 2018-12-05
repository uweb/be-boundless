<?php

    $twitter_photo = '';
    $twitter_title = 'Learning from the ground up';
    $twitter_description = 'At the College of the Environment’s geology field camp, students hit the dirt for lessons you can’t find in a textbook.';
    $meta = twitter_card($twitter_photo, $twitter_title, $twitter_description);
    $styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/homepage-plus.css' type='text/css' media='all' />";
    $scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/homepage-plus.min.js' type='text/javascript'></script>";

    // The fund code(s) for the giving widget in a comma delimited list
    $storyCodes = 'GEOLUG';

    // The appeal code for the story
    $storyAppealCodes = 'IEG19';

    // The call to action for the giving widget
    $storyAppeal = '';

    // Original publication month and year
    $publishMonthYear = '';

    get_header("campaign-v2");

?>


<div id="immersive-body">

    <section class="intro" id="intro-vid">
        <button id="pause">Pause</button>
        <video autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/header-preview.jpg' ?>" class="fullscreen-bg__video">
            <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/ess/header2.mp4' ?>" type="video/mp4">
        </video>
        <div class="intro-body">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-offset-1 col-xs-11 col-lg-offset-2 col-xs-offset-1" id="intro-text">
                    <h1>Learning from the ground up</h1>
                    <span class="udub-slant"><span></span></span>
                    <p>At the College of the Environment’s geology field camp, students hit the dirt for lessons you can’t find in a textbook.</p>
                </div><!-- .intro-text -->
            </div><!-- .row -->
        </div><!-- .intro-body -->

        <div class="scrollit read-more">
            <p>Scroll Down</p>
            <div class="mouse">
                <div class="scroll"></div>
            </div><!-- .mouse -->
        </div><!-- .scrollit .read-more -->
    </section><!-- .intro #intro-vid -->

    <main id="main_content">

        <section class="single-column">
            <div class="text-content container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <p>At just past 2 p.m. in early July, the temperature in southwestern Montana is hovering around 93 degrees.</p>

                        <p>Impervious to the heat, Michael McGroder climbs swiftly up a steep, rocky hill where a group of geology students and teaching assistants from the University of Washington stand observing two small ridges below.</p>

                        <p>It’s their fourth day at Block Mountain, just outside the town of Dillon, and the students are trying to map an area known informally as the Rat’s Nest. The name is well earned by this giant tangle of rocks: The oldest layers are somehow on top of younger layers, some layers are upside down, and the <i>entire</i> Triassic period (the layer that formed between 251 million and 199 million years ago) is missing in places.</p>

                        <p>“Geologists love a good murder mystery,” says McGroder, the group’s instructor — and making sense of geologic complexities is akin to tracking down the culprit.</p>

                        <p>Over six weeks, his students tried out their detective skills by mapping, surveying and exploring this slice of Big Sky Country as part of the Department of Earth and Space Sciences’ geology field camp. For many of them, it was their first opportunity to practice geology like a professional would.</p>

                    </div>
                </div>
            </div>
        </section>


        <section id="test" class="gallery-1 full-screen-gallery">

            <div class="images">
                <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/1.jpg' ?>" alt="Students at Block Mountain" class="slide">
                <div class="caption-text 1" id="slide-1" data-src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/1.jpg' ?>">
                    <p>Students spent a week of field camp at Block Mountain, with the goal of mapping the area’s puzzling geologic features.</p>
                </div>
                 <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/2.jpg' ?>" alt="Michael McGroder, Wylee Cleverley, and Madeline Hille" class="slide">
                <div class="caption-text 2" id="slide-2" data-src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/2.jpg' ?>">
                    <p>Field camp instructor Michael McGroder helps Wylee Cleverley (left) and Madeline Hille work through a section of their map.</p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/3.jpg' ?>" alt="Erosion of top soil in Montana" class="slide">
                <div class="caption-text 3" id="slide-3" data-src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/3.jpg' ?>">
                    <p>In this part of Montana, erosion has laid bare an astounding 3.2 billion years of Earth history.</p>
                </div>
            </div>
            <section id="sidescroll">
                <p>Continue scrolling down</p>
                <p class="sideways">
                    <a id="marker-1" data-href="#slide-1"></a>
                    <a id="marker-2" data-href="#slide-2"></a>
                    <a id="marker-3" data-href="#slide-3"></a>
                    <a id="marker-next" class="down" data-href="#landscape"></a>
                </p>
            </section>
        </section>

        <!-- A landscape made for learning -->
        <section class="single-column" id="landscape">
            <div class="text-content container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2>A landscape made for learning</h2>
                        <p>UW students have been coming to field camp in Dillon for 25 years — and they’re not alone. Mud-splattered vans with license plates from West Virginia, Texas and Georgia attest to the area’s widespread draw. </p>

                        <p>What brings people here? In this area, erosion has laid bare an astounding 3.2 billion years of Earth history, giving students the opportunity to cut their teeth in geologic settings they’ve only read about before. </p>

                        <p>“In the classroom, everything is much more black-and-white,” says field camp participant Ruslan Pavlenko, ’17. “Whereas here, it’s all right in front of you, and you’re able to see the bigger picture.”</p>

                        <div class="photo-collection">
                            <div class="col md-12">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/4.jpg' ?>" alt="Michael Barber and Mary Alice Benson">
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/5.jpg' ?>" alt="Joshua Anderson on a hillside">
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/6.jpg' ?>" alt="Weston Brown and Esten Kingis crossed by a thrust fault">
                            </div>
                            <div class="caption">
                                <strong>Top:</strong> Michael Barber <i>(left)</i> and Mary Alice Benson head to the top of a ridge. <strong>Bottom left:</strong> Joshua Anderson examines a piece of the hillside. <strong>Bottom right:</strong> Weston Brown <i>(left)</i> and Esten King study a thrust fault — where one section of land slips over another.
                            </div>
                        </div>

                        <p>During camp, the UW students work on mapping projects that take them from Dillon in the south to Glacier National Park in the north. Arguably the hardest work is at Block Mountain, where they spend six eight-hour days mapping the large site, including the Rat’s Nest. </p>

                        <p>Block Mountain and other areas around Dillon are special for another reason, too: Over the years, geology field camp instructors have honored an informal “gentleman’s agreement” to never publish research on the sites, explains McGroder. This has left them spoiler-proof for questing students — a true rarity in the digital age.</p>
                    </div>
                </div>
            </div>
        </section>


        <section id="test2" class="gallery-2 full-screen-gallery">
          <div class="images">
            <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/7.jpg' ?>" alt="Block Mountain" class="slide">
            <div class="caption-text 4" id="slide-4">
              <p>Students hiked for miles each day to map Block Mountain, avoiding cacti and rattlesnakes during their trek.</p>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/8.jpg' ?>" alt="Student examines Block Mountain rocks" class="slide">
            <div class="caption-text 5" id="slide-5">
              <p>By examining the rocks in the area, students can see years’ worth of stress and change on the landscape.</p>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/9.jpg' ?>" alt="Night shot of the mountain" class="slide">
            <div class="caption-text 6" id="slide-6">
              <p>While most local animals seek shade during the day, at night you can encounter deer, mountain lions and even cows from nearby ranches.</p>
            </div>
            <section id="sidescroll">
              <p>Continue scrolling down</p>
              <p class="sideways">
                <a id="marker-4" data-href="#slide-4"></a>
                <a id="marker-5" data-href="#slide-5"></a>
                <a id="marker-6" data-href="#slide-6"></a>
                <a id="marker-next2" class="down" data-href="#going"></a>
              </p>
            </section>
          </div>
        </section>

       <section class="single-column" id="going">
            <div class="text-content container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2>Giving back by going outside</h2>
                        <p>McGroder has overseen field camp since 2016, but he’d been to Dillon long before: As a master’s candidate at the University of Montana, he was a TA for a field camp in the area and was impressed by its learning opportunities. </p>

                        <p>He went on to a Ph.D. program in geology at the UW, with Professors Emeritus Jody Bourgeois and Darrel Cowan (who led field camp for its first 23 years) as his advisers. </p>

                        <p>After earning his Ph.D. in 1988, McGroder spent a long career at ExxonMobil. When he retired a few years ago, he sought a way to give back beyond financial support by sharing his industry knowledge with geology students. When he ran into Cowan at a conference, his former adviser suggested that McGroder try his hand as field camp leader. </p>

                        <p>While it’s clear that McGroder makes a lasting impact on his students, being around them has changed him as well. “It’s energizing for me to think back to when I was that age and had epiphanies about what I wanted to do for a career in geoscience,” he says.</p>

                        <p>McGroder’s teaching style has also resonated with the group. “Mike was very hands-off,” says UW senior Allison Nelson. “But if you asked a question, he’d be very detailed and point you in the right direction. It was great.”</p>

                    </div>
                </div>
            </div>
        </section>



        <section id="profiles">
          <div class="who-section">
              <ul id="people">
                  <li class="pax-1 navy" tabindex="0">
                      <div class="hider">
                          <h2>Madeline Hille, ‘18 (left)<br />and Wylee Cleverley, ‘17</h2>
                          <p><span>Home state: </span>Washington (Madeline)</p>
                          <p><span>Home state: </span>Washington (Wylee)</p>
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
                  <li class="pax-8 army" tabindex="0">
                      <div class="hider">
                          <h2>Michael McGroder, ‘88</h2>
                          <p><span>Home state: </span>Texas</p>
                      </div>
                  </li>
                  <li class="pax-9 army" tabindex="0">
                      <div class="hider">
                          <h2>Bing Yu Lee, ‘18</h2>
                          <p><span>Home country: </span>Malaysia</p>
                      </div>
                  </li>
              </ul>

          </div>
        </section>




       <section class="single-column">
            <div class="text-content container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2>Preserving field camp for future generations</h2>
                        <p>Across the country, field camps are disappearing or consolidating — many factors, including the growth of remote-sensing mapping strategies and the rise of lab-based technologies, have played a role in this shift. The UW is one of the few remaining universities to operate its own program, which means that securing funding is more crucial than ever. </p>

                        <p>Without the field camp experience, students would miss out on essential knowledge, techniques and personal growth that can set them up for success. “They gain so many skills beyond simply learning to make maps — skills that come only from spending six weeks out here,” says McGroder. He particularly hopes that they build scientific confidence and learn about science communication, as students who wish to pursue a career in geology need to be able to tell the public about their work in a way that non-geologists can understand.</p>

                        <p>Nelson experienced several a-ha moments during her time at field camp. “You climb on top of a ridge, and it clicks,” she says. “Suddenly all the rock formations you’ve put on your map make sense, and you can actually figure it out.”</p>

                        <p>In her final year at the UW, Nelson plans to take classes that expand the knowledge she gained during field camp, and she’d like to continue with geology after graduation. Many other camp participants also intend to pursue careers in the field.</p>

                        <p>“When they come to camp, they’re geology students,” McGroder says. “When they leave, they’re geologists.”</p>

                        <h2 style="text-align: center;">Mary Alice Benson's journal</h2>
                        <p style="text-align: center;"><a href="http://environment.uw.edu/fieldcamp"><img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/ess/Coenv_link_ESS_Camp_IMGOnly.png' ?>"></a><br />
                        <a href="http://environment.uw.edu/fieldcamp">Explore this firsthand account</a> of a UW senior’s career-defining field camp experience.</p>

                        <?php campaign_pubdate($post, $publishMonthYear); ?>
                    </div>
                </div>
            </div>
        </section>

        </main><!-- #main_content -->
        <div id="popup"></div>
    </div><!-- #immersive-body -->

<section class="text-block giving-widget arrow branded">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 copy">
                <div class="text-center">
                    <h2 class="headline-gold">What you care about <br>can change the world</h2>
                    <p>The UW’s geology field camp is made possible by the generosity of donors. You can help future students take advantage of this incredible learning opportunity by supporting the Geology Undergraduate Field Support Fund.</p>
                    <div class="visible-md-block visible-lg-block">
                        <div id="immersive-give-iframe"></div>
                        <div class="boundless-button sm dark give"><span><a id="immersive-give" data-fund="<?php echo $storyCodes; ?>" href="#">Give now</a></span></div>
                        </div><!-- .visible-md-block .visible-lg-block -->
                    <div class="visible-xs-block visible-sm-block">
                        <div class="boundless-button sm dark give"><span><a href="https://www.washington.edu/giving/make-a-gift/?page=funds&source_typ=3&source=<?php echo $storyCodes; ?>">Give now</a></span></div>
                    </div><!-- .visible-xs-block .visible-sm-block -->
                </div><!-- .text-center -->
            </div><!-- .col-md-10 .col-md-offset-1 .copy -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .text-block .giving-widget .branded .arrow -->

<?php
    get_template_part('footer', 'campaign-v2');
?>

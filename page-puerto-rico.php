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
        <video autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/header.jpg' ?>" class="fullscreen-bg__video" id="full-bg-video">
            <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/puerto-rico/header.mp4' ?>" type="video/mp4">
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

            <!-- INTRO PARAGRAPHS -->
            <section class="text-block start white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <p class="first">The stout house built into a hillside in Jayuya, a rural municipality in the mountains of central Puerto Rico, hasn’t been connected to the electricity grid for six months. Someone inside suffers from sleep apnea, and his family has relied on a noisy generator — and the gas it consumes — to power the machine he needs each night.</p>

                            <p>Outside, under the thin smile of a crescent moon, four engineers from the University of Washington complete their work. Soon a new solar/battery nanogrid will power the sleep-aid machine: no gas, no fumes, no cacophony.</p>

                            <p>Doctoral students Mareldi Ahumada and Wesley Tatum secure four flexible solar panels to the roof using yellow rope. Anya Raj, ’17, feeds wires from the panels through a hole in the roof, while sophomore Hugo Pontes illuminates Raj’s efforts with his smartphone.</p>

                            <p>The team connects the panels to a battery inside the house that will be charged by tomorrow’s sun. They finish just as the mosquitoes emerge.</p>

                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->

            <!-- MAP + STORM PATH ANIMATION -->
            <section>
                <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/map.jpg' ?>" class="img-responsive">
            </section>

            <!-- GETTING TO THE HEART OF THE DAMAGE -->
            <section class="text-block start white small-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>Getting to the heart of the damage</h2>
                            <p>Ahumada, Tatum, Raj and Pontes are part of a team of UW engineers and public health scientists who are assessing the long-term impact of Puerto Rico’s power loss on the health of rural residents.</p>

                            <p>Over four days in late March 2018, the researchers crisscrossed this 39-square-mile region on single-lane switchbacks, some of which have narrowed sharply since Hurricane Maria struck the U.S. territory last September. Jayuya is home to the highest peaks in Puerto Rico — and 17,000 people.</p>
                            <div class="slideshow-container">
                                <div id="eng-slideshow" class="foster-slideshow">
                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_1.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_2.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_3.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_4.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                </div>
                            </div>

                            <p>The team visited homes and community centers, interviewing dozens of caregivers and residents who use electronic medical devices, as part of a long-term field study on the impact of power loss on public health. They also donated and installed 17 solar/battery nanogrid systems —  prototypes of a sustainable, clean energy infrastructure that can buoy public health in rural areas when power grids fail.</p>

                            <p>Their work is supported by the UW’s Clean Energy Institute and the Global Innovation Fund, and it aligns with the Population Health Initiative, a University-wide effort to eliminate health disparities around the world. Like many natural disasters, Hurricane Maria had a disproportionate effect on those with the fewest resources: low- and fixed-income families, the elderly, the sick and rural residents in places like Jayuya.</p>

                            <p>Thousands have remained disconnected from the electrical grid since Maria sliced through. The UW team hopes that the storm’s lessons will help engineers develop better microgrids — like the prototypes they’ve installed — for an infrastructure that meets the needs of the most vulnerable communities.</p>

                            <p>As the team has learned in their two trips here, the current infrastructure’s shortcomings have left deeper scars than downed utility poles and darkened homes.</p>

                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->

            <!-- COMMUNITY MEMEBER PHOTOS W/ SCROLL -->
            <section>
            </section>

            <!-- EXPOSING THE BLUE -->
            <section class="text-block white small-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>Exposing the blue beneath</h2>
                            <p>Blue FEMA tarps are still common, but many overt signs of storm damage have been repaired: People have cleared debris, replaced windows and patched roofs. But the UW researchers have documented myriad “hidden” adjustments that residents have made since losing power. These include eating canned and preserved food, despite the lower nutritional value, or making daily trips to a doctor’s office for refrigerated medicine.</p>

                            <p>“You adapt because you have to,” says Pozzo. “But you never achieve the normal life you had back when you had power.”</p>

                            <div class="slideshow-container">
                                <div id="eng-slideshow" class="foster-slideshow2">
                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_1.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_2.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_3.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_4.jpg' ?>" alt="ALT TEXT HERE">
                                        <p>CAPTION GOES HERE</p>
                                    </div>

                                </div>
                            </div>


                            <p>Pozzo chose Jayuya for this study because her spouse, Marvi Matos, a chemical engineer, grew up there. Like many with family ties to Puerto Rico, the couple sent supplies to the island after the hurricane. But a month after Maria, barely 20 percent of the electricity grid had been restored.</p>

                            <p>Pozzo and Matos envisioned using their expertise to unearth the storm’s impact on health and energy infrastructure. Pozzo recruited partners from the School of Public Health and the College of Engineering. They received funding for the study from the Clean Energy Institute and the Global Innovation Fund, while private donations covered the cost of the nanogrids. Contacts in Jayuya connected them with community organizers and needy families.</p>

                            <p>“This storm’s lasting impact is that it uncovered the vulnerable places of Jayuya,” says Maria Pérez, a local community organizer. “It showed us the people in our midst who didn’t have help, who were living in inhumane conditions.”</p>

                            <blockquote>
                                You adapt because you have to, but you never achieve the normal life you had back when you had power <span>— <span class="name">Lilo Pozzo</span></span>
                            </blockquote>
                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->

            <!-- NEW VIDEO SECTION BASED ON LIBRARIES -->
            <section id="video">
                    <a data-lity="" href="https://www.youtube.com/embed/-zYESWG9HxE?autoplay=1&amp;rel=0&amp;showinfo=0" class="center-block play">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="125" height="125" viewBox="0 0 150 150" class="opening-slash">
                                <circle id="play-cir" fill="none" stroke="#fff" stroke-width="7" stroke-miterlimit="10" cx="75" cy="75" r="55"></circle>
                                <path id="play-tri" fill="#fff" d="M57.767,46.187L110.382,75l-52.616,28.816"></path>
                            </svg>
                            <div>Watch Story</div>
                        </div>
                        <div class="video-caption">
                            <h3>FIRST NAME LAST NAME</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam accumsan nisi eget nulla pharetra suscipit. Curabitur id mi rhoncus, molestie orci sed, commodo eros. Maecenas vitae mollis est
                        </div>
                    </a>
                <img alt="Fabric" src="<?php echo get_stylesheet_directory_uri() .'/immersive-stories/img/puerto-rico/video.jpg' ?>" />
            </section>

            <!-- DEDICATED TO A SUSTAINABLE FUTURE -->
            <section class="text-block start white small-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>Dedicated to a sustainable future</h2>
                            <p>The UW team first visited in November 2017, gathering data and donating four solar/battery systems. They expanded their goals for the March trip, buying and assembling three types of solar/battery systems. The smallest can power a miniature refrigerator for storing medical supplies like insulin, while the largest can power more complex devices, such as an oxygen concentrator or a full-size refrigerator.</p>

                            <p>“We want these systems to be simple for the patients and their caregivers,” Ahumada says. “There’s no point in donating something that they’re unable to use easily.”</p>

                            <p>The researchers also installed 11 data loggers into some of the nanogrids. These devices will record information on energy use for download during future visits.</p>

                            <p>“We can combine the information that the data loggers record with information from the interviews to design even more effective microgrids,” says Chanaka Keerthisinghe, a postdoctoral researcher in electrical engineering.</p>

                            <p>The data that the researchers collected in March, which should offer clues to more needs they can help uncover and address, awaits analysis. The team is planning another trip to Jayuya this summer. Partners in Jayuya stand ready to assist in their efforts.</p>

                            <p>After installing their final nanogrid, the UW team passed a boy playing in front of his powerless house. He was wearing a Captain America costume and saluting passing cars. A nearby house sported the island’s flag with a handwritten message: Puerto Rico se levanta.</p>

                            <p><b>Puerto Rico rises.</b></p>

                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->

            <!-- PROFILES OF RESEARCHERS -->
            <section id="profiles">
                <div class="who-section">
                    <ul id="people">
                        <li class="pax-1 navy" tabindex="0">
                            <div class="hider">
                                <h2>Anya Raj, ‘17</h2>
                                <p><span>Home town: </span>Manchester, United Kingdom</p>
                            </div>
                        </li>
                        <li class="pax-2 airforce" tabindex="0">
                            <div class="hider">
                                <h2>Chanaka Keerthisinghe, ‘XX</h2>
                                <p><span>Home town: </span>CITY</p>
                            </div>
                        </li>
                        <li class="pax-3" tabindex="0">
                            <div class="hider">
                                <h2>Mareldi Ahumada Parás, ‘22</h2>
                                <p><span>Home town: </span>Mexico City, Mexico</p>
                            </div>
                        </li>
                        <li class="pax-4 navy" tabindex="0">
                            <div class="hider">
                                <h2>Marvi Matos, ‘XX</h2>
                                <p><span>Home town: </span>CITY</p>
                            </div>
                        </li>
                        <li class="pax-5 army" tabindex="0">
                            <div class="hider">
                                <h2>Hugo Pontes, ‘20</h2>
                                <p><span>Home town: </span>Rio de Janeiro, Brazil</p>
                            </div>
                        </li>
                        <li class="pax-6 army" tabindex="0">
                            <div class="hider">
                                <h2>Lilo Pozzo, ‘XX</h2>
                                <p><span>Home town: </span>CITY</p>
                            </div>
                        </li>

                        <li class="pax-7 navy" tabindex="0">
                            <div class="hider">
                                <h2>Yohan Min, ‘21</h2>
                                <p><span>Home town: </span>Seoul, South Korea</p>
                            </div>
                        </li>

                        <li class="pax-8 navy" tabindex="0">
                            <div class="hider">
                                <h2>Michael Chapko, ‘XX</h2>
                                <p><span>Home town: </span>CITY</p>
                            </div>
                        </li>

                        <li class="pax-9 navy" tabindex="0">
                            <div class="hider">
                                <h2>Wesley K. Tatum, ‘20</h2>
                                <p><span>Home town: </span>Vancouver, Washington</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </section>

            <!-- UW COLLABORATORS -->
            <section class="text-block" id="expanding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy expandable-container">
                            <div class="visible-part">
                                <h2>UW collaborators</h2>
                                <div style="text-align: center"><a id="expander" class="expander" href="#" role="button">Show more</a></div>
                            </div>
                            <div class="hidden-part">
                                <strong>Dan Schwartz</strong>, director of the Clean Energy Institute and professor of chemical engineering<br />
                                <strong>Charbel El Bcheraoui</strong>, assistant professor of global health at the Institute for Health Metrics and Evaluation<br />
                                <strong>Yougjun Choe</strong>, assistant professor of industrial and systems engineering<br />
                                <strong>Daniel Kirschen</strong>, professor of electrical engineering<br />
                                <strong>Jessica Kaminsky</strong>, assistant professor of civil and environmental engineering<br />
                                <div style="text-align: center"><a class="expander less" href="#" role="button">Show less</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main><!-- #main_content -->

        <div id="popup"></div>

    </div><!-- #immersive-body -->

    <?php
        include(locate_template('include-giving.php'));//ADD CUSTOM PHOTO
        get_template_part('footer', 'campaign-v2');
    ?>

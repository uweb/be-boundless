<?php
        $twitter_photo = 'http://www.washington.edu/wp-content/themes/be-boundless/immersive-stories/img/puerto-rico/twitter-card.jpg';
        $twitter_title = 'Grid by grid';
        $twitter_description = 'Months after Hurricane Maria, thousands in rural Puerto Rico still lacked electricity. In partnership with local communities, UW researchers worked to restore their power.';
        $meta = twitter_card($twitter_photo, $twitter_title, $twitter_description);
        $slug = 'puerto-rico';
        $styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/" . $slug . ".css' type='text/css' media='all' />";
        $scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/" . $slug . ".min.js' type='text/javascript'></script>";
        $storyCodes = 'PRERFD,PHIGFD,OGAGIF,CEIGIF';
        $storyAppeal = 'Support Lilo Pozzo’s research team in their efforts to improve community health by contributing to the Puerto Rico Energy Recovery Fund.';
        get_header("campaign-v2");
?>

<!-- INSERT SCROLL BAR -->
<div id="scrollbar"><span></span><img class="grayW" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/W-Logo_gray.png' ?>"></div>


<div id="immersive-body">

    <div class="version-switch">
        <a href="../puerto-rico-sp"><button id="spanish" href="../puerto-rico-solar-es" class="animsition-link" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">Ver versión en Español</button></a>
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
                        <p>Months after Hurricane Maria, thousands in rural Puerto Rico still lacked electricity. In partnership with local communities, UW researchers have worked to restore their power.</p>
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
            <section class="text-block white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <p class="first">The stout house built into a hillside in Jayuya, a rural municipality in the mountains of central Puerto Rico, hasn’t been connected to the electrical grid for six months. Someone inside suffers from sleep apnea, and his family has relied on a noisy generator — and the gas it consumes — to power the machine he needs each night.

                            <p>Outside, under the thin smile of a crescent moon, four engineers from the University of Washington complete their work. Soon a new solar/battery nanogrid will power the sleep-aid machine: no gas, no fumes, no cacophony.</p>

                            <p>Doctoral students Mareldi Ahumada Parás and Wesley Tatum secure four flexible solar panels to the roof using yellow rope. Anya Raj, ’17, feeds wires from the panels through a hole in the roof, while sophomore Hugo Pontes illuminates Raj’s efforts with his smartphone.</p>

                            <p>The team connects the panels to a battery inside the house that will be charged by tomorrow’s sun. They finish just as the mosquitoes emerge.</p>

                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->

            <!-- MAP + STORM PATH ANIMATION -->
            <section id="section-map">
                <a role="button" class="click" href="#">
                View storm path
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="3 3 102 26">
                        <style type="text/css">

                        .st0{fill:#FFFFFF;}
                        .st1{fill:#B6A87D;}
                        .st2{opacity:0.16;}
                        .st3{filter:url(#Adobe_OpacityMaskFilter);}
                        .st4{opacity:0;mask:url(#SVGID_1_);}
                        .st5{fill:#070808;}
                        .st6{font-family:'UniSansLight';}
                        .st7{font-size:12px;}
                        .st8{fill:#82774F;}
                        .st9{opacity:0.72;fill:#82774F;}
                        .st10{fill:none;stroke:#FFFFFF;stroke-width:0.25;stroke-miterlimit:10;}

                    </style>
                    <polygon class="st0" points="98 28.4 4 28.4 4.3 3.4 104.7 3.4 "></polygon>
                    <polygon class="st1" points="5.4 27.4 5.4 4.4 103.5 4.4 97.6 27.4 "></polygon>
                    <g class="st2">
                        <polygon class="st0" points="5.4 27.4 5.4 4.4 52.4 4.4 46.5 27.4 "></polygon>
                        <defs>
                            <filter filterUnits="userSpaceOnUse" x="5.4" y="4.4" width="47" height="23">
                                <feColorMatrix type="matrix" values="-1 0 0 0 1  0 -1 0 0 1  0 0 -1 0 1  0 0 0 1 0" color-interpolation-filters="sRGB" result="source"></feColorMatrix>
                            </filter>
                        </defs>
                        <g class="st4">
                            <polygon class="st5" points="5.4 27.4 5.4 4.4 52.4 4.4 46.5 27.4 "></polygon>
                        </g>
                    </g>
                    <text transform="matrix(1 0 0 1 19.328 20.4167)" class="st0 st6 st7">
                        ON
                    </text>
                    <text transform="matrix(1 0 0 1 64.9947 20.4167)" class="st8 st6 st7">
                        OFF
                    </text>
                    <polygon class="st9" points="45.7 27.4 51.6 4.4 52.3 4.4 46.4 27.4 "></polygon>
                    <line class="st10" x1="19.3" y1="23" x2="35.7" y2="23"></line>
                </svg></a>

                <div id="bg"><img alt="Puerto Rico map" src="<?php echo get_stylesheet_directory_uri() .'/immersive-stories/img/puerto-rico/map-2-loc.jpg' ?>" /></div>

                <div class="boundless-video"></div>
            </section><!-- #section-map -->

            <!-- GETTING TO THE HEART OF THE DAMAGE -->
            <section class="text-block white small-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>Getting to the heart of the damage</h2>
                            <p>Ahumada, Tatum, Raj and Pontes are part of a team of UW engineers and public health scientists who are assessing the long-term impact of Puerto Rico’s power loss on the health of rural residents.</p>

                            <p>Over four days in late March 2018, the researchers crisscrossed this 39-square-mile region on single-lane switchbacks, some of which have narrowed sharply since Hurricane Maria struck the U.S. territory last September. Jayuya is home to the highest peaks in Puerto Rico — and 17,000 people. </p>
                            <div class="slideshow-container">
                                <div id="eng-slideshow" class="foster-slideshow">
                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_1.jpg' ?>" alt="Lilo Pozzo">
                                        <p>Lilo Pozzo instructs Juan on using the nanogrid that will power his mother’s refrigerator.</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_2.jpg' ?>" alt="Marvi Matos and the UW team">
                                        <p>Marvi Matos (center) presents the next day’s schedule to the UW team.</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_3.jpg' ?>" alt="A UW team member sitting">
                                        <p>A UW team member rests after interviewing a family in Jayuya.</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_1_4.jpg' ?>" alt="Mareldi Ahumada Parás installing solar panel">
                                        <p>Mareldi Ahumada Parás helps install a donated solar/battery nanogrid.</p>
                                    </div>

                                </div>
                            </div>

                            <p>The team visited homes and community centers, interviewing dozens of caregivers and residents who use electronic medical devices, as part of a long-term field study on the impact of power loss on public health. They also donated and installed 17 solar/battery nanogrid systems —  prototypes of a sustainable, clean energy infrastructure that can buoy public health in rural areas when power grids fail. </p>

                            <p>Their work is supported by the UW’s <a href="https://www.cei.washington.edu/" target="blank">Clean Energy Institute</a> and the <a href="http://www.washington.edu/globalaffairs/gif/" target="_blank">Global Innovation Fund</a>, and it aligns with the <a href="https://uw.edu/populationhealth/" target="_blank">Population Health Initiative</a>, a University-wide effort to eliminate health disparities around the world. Like many natural disasters, Hurricane Maria had a disproportionate effect on those with the fewest resources: low- and fixed-income families, the elderly, the sick and rural residents in places like Jayuya.</p>

                            <p>Thousands have remained disconnected from the electrical grid since Maria sliced through. The UW team hopes that the storm’s lessons will help engineers develop better microgrids — like the prototypes they’ve installed — for an infrastructure that meets the needs of the most vulnerable communities. </p>

                            <p>As the team has learned in their two trips here, the current infrastructure’s shortcomings have left deeper scars than downed utility poles and darkened homes.</p>

                            <p>“It is invisible suffering,” says Lilo Pozzo, associate professor of chemical engineering, who has led both trips. “You don’t know what the situation is until you go into homes and see exactly how people are getting by.”</p>

                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->

            <!-- COMMUNITY MEMEBER PHOTOS W/ SCROLL -->
            <section id="section-profiles">
                <div class="item-1 item">
                    <div class="img"></div>
                    <div class="caption">
                        <div class="group">
                            <h2>Jayuya Community /</h2>
                            <h3 class="headline">Alejandro De Jesús Quiles</h3>
                            <div class="inner">
                                <div class="more">
                                    <span class="text">Read more</span>
                                    <div class="parallelogram">
                                        <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.98 4.46">
                                            <defs><style>.icon-line{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.5px;}</style></defs>
                                            <title>Vector Smart Object1</title>
                                            <path class="icon-line" d="M.86,2.75c.43.55,1.68,2,3.17,2s2.77-1.44,3.18-2A4.44,4.44,0,0,0,4,.77C2.5.77,1.28,2.2.86,2.75Z" transform="translate(-0.55 -0.52)"/>
                                            <path class="icon-line" d="M4,3.94A1.19,1.19,0,1,1,5.23,2.75,1.19,1.19,0,0,1,4,3.94Z" transform="translate(-0.55 -0.52)"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="description">He sits next to his wife’s adjustable bed, which will be powered by a UW-installed nanogrid until their home in Jayuya is reconnected to the island’s electrical grid.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-2 item">
                    <div class="img"></div>
                    <div class="caption">
                        <div class="group">
                            <h2>Jayuya Community /</h2>
                            <h3 class="headline">Ernesto Torres Rodriguez</h3>
                            <div class="inner">
                                <div class="more">
                                    <span class="text">Read more</span>
                                    <div class="parallelogram">
                                        <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.98 4.46">
                                            <defs><style>.icon-line{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.5px;}</style></defs>
                                            <title>Vector Smart Object1</title>
                                            <path class="icon-line" d="M.86,2.75c.43.55,1.68,2,3.17,2s2.77-1.44,3.18-2A4.44,4.44,0,0,0,4,.77C2.5.77,1.28,2.2.86,2.75Z" transform="translate(-0.55 -0.52)"/>
                                            <path class="icon-line" d="M4,3.94A1.19,1.19,0,1,1,5.23,2.75,1.19,1.19,0,0,1,4,3.94Z" transform="translate(-0.55 -0.52)"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="description">A nanogrid donated by UW researchers will get his elderly mother’s refrigerator up and running for the first time in six months, which will help with her restricted diet and daily insulin injections.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- #section-profiles -->

            <!-- EXPOSING THE BLUE -->
            <section class="text-block white small-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>Uncovering the hidden harm</h2>
                            <p>Blue FEMA tarps are still common, but many overt signs of storm damage have been repaired: People have cleared debris, replaced windows and patched roofs. But the UW researchers have documented myriad “hidden” adjustments that residents have made since losing power. These include eating canned and preserved food, despite the lower nutritional value, or making daily trips to a doctor’s office for refrigerated medicine.</p>

                            <p>“You adapt because you have to,” says Pozzo. “But you never achieve the normal life you had back when you had power.”</p>

                            <p>Pozzo chose Jayuya for this study because her spouse, Marvi Matos, a chemical engineer, grew up there. Like many with family ties to Puerto Rico, the couple sent supplies to the island after the hurricane. But a month after Maria, barely 20 percent of the electricity grid had been restored.</p>

                            <p>Pozzo and Matos envisioned using their expertise to unearth the storm’s impact on health and energy infrastructure. Pozzo recruited partners from the School of Public Health and the College of Engineering. They received funding for the study from the Clean Energy Institute and the Global Innovation Fund, while private donations covered the cost of the nanogrids. Contacts in Jayuya connected them with community organizers and needy families.</p>

                            <p>“This storm’s lasting impact is that it uncovered the vulnerable places of Jayuya,” says Maria Pérez, a local community organizer. “It showed us the people in our midst who didn’t have help, who were living in inhumane conditions.”</p>

                            <blockquote>
                                You adapt because you have to, but you never achieve the normal life you had back when you had power.
                            </blockquote>
                            <div class="byline">Lilo Pozzo</div>

                            <div id="eng-slideshow" class="slideshow-container">
                                <div class="foster-slideshow2">
                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/COMMUNITY_PHOTO.jpg' ?>" alt="Community meeting in Jayuya">
                                        <p>Residents share struggles and concerns with Jayuya’s municipal administrator at a community meeting held on March 20 in the central plaza.</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_2.jpg' ?>" alt="Jayuya electrical grid">
                                        <p>Six months after Maria, many rural areas like Jayuya are still disconnected from the island’s electrical grid.</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_1.jpg' ?>" alt="Roof covered in blue tarp">
                                        <p>A home with a temporary roof in a sheltered valley of hilly Jayuya.</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_4.jpg' ?>" alt="Yohan Min adjusting solar panel">
                                        <p>Yohan Min adjusts a solar panel donated by the UW team last fall.</p>
                                    </div>

                                    <div>
                                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/puerto-rico/GALLERY_2_3.jpg' ?>" alt="Puerto Rican flag">
                                        <p>Due in part to steep topography, Jayuya remains largely disconnected from Puerto Rico’s power grid.</p>
                                    </div>

                                </div>
                            </div>

                            <h2>Dedicated to a sustainable future</h2>
                            <p>The UW team first visited Jayuya in November 2017, gathering data and donating four solar/battery systems. They expanded their goals for the March trip, buying and assembling three types of solar/battery systems. The smallest can power a miniature refrigerator for storing medical supplies like insulin, while the largest can power more complex devices, such as an oxygen concentrator or a full-size refrigerator.</p>

                            <p>“We want these systems to be simple for the patients and their caregivers,” Ahumada says. “There’s no point in donating something that they’re unable to use easily.”</p>

                            <p>The researchers also installed 11 data loggers into some of the nanogrids. These devices will record information on energy use for download during future visits.</p>

                            <p>“We can combine the information that the data loggers record with information from the interviews to design even more effective microgrids,” says Chanaka Keerthisinghe, a postdoctoral researcher in electrical engineering.</p>

                            <p>The data that the researchers collected in March, which should offer clues to more needs they can help uncover and address, awaits analysis. The team is planning another trip to Jayuya this summer. Partners in the community stand ready to assist in their efforts.</p>

                            <p>After installing their final nanogrid, the UW team passed a boy playing in front of his powerless house. He was wearing a Captain America costume and saluting passing cars. A nearby house sported the island’s flag with a handwritten message: <i>Puerto Rico se levanta</i>.</p>

                            <p><b>Puerto Rico rises.</b></p>

                            <p><em>On Aug. 14, 2018, the Puerto Rico Electric Power Authority announced that power restoration efforts across the island were complete. But the UW team’s work continues toward a power infrastructure that can support the most vulnerable communities — even when natural disasters strike.</em></p>
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
                                <p><span>Hometown: </span>Manchester, United Kingdom</p>
                            </div>
                        </li>
                        <li class="pax-2 airforce" tabindex="0">
                            <div class="hider">
                                <h2>Chanaka Keerthisinghe</h2>
                                <p>Postdoctoral Researcher, Electrical Engineering</p>
                            </div>
                        </li>
                        <li class="pax-3" tabindex="0">
                            <div class="hider">
                                <h2>Mareldi Ahumada Parás, ‘22</h2>
                                <p><span>Hometown:  </span>Mexico City, Mexico</p>
                            </div>
                        </li>
                        <li class="pax-4 navy" tabindex="0">
                            <div class="hider">
                                <h2>Marvi Matos</h2>
                                <p>Engineer, Blue Origin</p>
                            </div>
                        </li>
                        <li class="pax-5 army" tabindex="0">
                            <div class="hider">
                                <h2>Hugo Pontes, ‘20</h2>
                                <p><span>Hometown: </span>Rio de Janeiro, Brazil</p>
                            </div>
                        </li>
                        <li class="pax-6 army" tabindex="0">
                            <div class="hider">
                                <h2>Lilo Pozzo</h2>
                                <p>Associate Professor, Chemical Engineering and the Clean Energy Institute</p>
                            </div>
                        </li>

                        <li class="pax-7 navy" tabindex="0">
                            <div class="hider">
                                <h2>Yohan Min, ‘21</h2>
                                <p><span>Hometown: </span>Seoul, South Korea</p>
                            </div>
                        </li>

                        <li class="pax-8 navy" tabindex="0">
                            <div class="hider">
                                <h2>Michael Chapko</h2>
                                <p>Professor Emeritus, Health Services</p>
                            </div>
                        </li>

                        <li class="pax-9 navy" tabindex="0">
                            <div class="hider">
                                <h2>Wesley K. Tatum, ‘20</h2>
                                <p><span>Hometown: </span>Vancouver, Washington</p>
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
                                <h2>UW collaborators</h2>
                                <strong>Dan Schwartz</strong>, Director of the Clean Energy Institute and Professor of Chemical Engineering<br />
                                <strong>Charbel El Bcheraoui</strong>, Assistant Professor of Global Health at the Institute for Health Metrics and Evaluation<br />
                                <strong>Yougjun Choe</strong>, Assistant Professor of Industrial and Systems Engineering<br />
                                <strong>Daniel Kirschen</strong>, Professor of Electrical Engineering<br />
                                <strong>Jessica Kaminsky</strong>, Assistant Professor of Civil and Environmental Engineering<br /><br />

                            <p><em>Originally published May 2018</em></p>
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

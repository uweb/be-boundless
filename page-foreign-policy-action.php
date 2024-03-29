<?php

        $slug = 'task-force';
        $twitter_photo = "http://www.washington.edu/wp-content/themes/be-boundless/immersive-stories/img/" . $slug . "/twitter-card.jpg";
        $twitter_title = 'Policy in action';
        $twitter_description = 'Through the Task Force program, students in the Jackson School of International Studies tackle critical policy challenges &mdash; and set their career paths in motion.';
        $meta = twitter_card($twitter_photo, $twitter_title, $twitter_description);
        $styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/" . $slug . ".css' type='text/css' media='all' />";
        $scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/" . $slug . ".min.js' type='text/javascript'></script>";

        // The fund code(s) for the giving widget in a comma delimited list
        $storyCodes = 'HELLMA';

        // The appeal code for the story
        $storyAppealCodes = 'ITF19';

        // The call to action for the giving widget
        $storyAppeal = 'By supporting the Task Force program and the Jackson School, you can help build the next generation of global leaders.';

        // Original publication month and year
        $publishMonthYear = 'April 2019';

        get_header("campaign-v2");
?>

<!-- INSERT SCROLL BAR -->
<div id="scrollbar"><span></span><img class="grayW" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/W-Logo_gray.png' ?>"></div>


<div id="immersive-body">
    <section class="intro" id="intro-vid">
        <span id="area-1" class="areas" aria-hidden="true"></span>
        <span id="area-2" class="areas" aria-hidden="true"></span>
        <span id="area-3" class="areas" aria-hidden="true"></span>
        <span id="area-4" class="areas" aria-hidden="true"></span>
        <span id="area-5" class="areas" aria-hidden="true"></span>
        <span id="area-6" class="areas" aria-hidden="true"></span>
        <span id="area-7" class="areas" aria-hidden="true"></span>
        <span id="area-8" class="areas" aria-hidden="true"></span>
        <span id="area-9" class="areas" aria-hidden="true"></span>
        <span id="area-10" class="areas" aria-hidden="true"></span>
        <button id="tfPauseButton" aria-hidden="true" title="Pause animation" alt="Pause animation">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                width="50px" height="50px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131" xml:space="preserve">
              <ellipse fill="none" stroke="#FFFFFF" stroke-width="7.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>
              <line id='line1' x1="60" y1="50" x2="60" y2="90" style="stroke-width:5px;stroke:white;stroke-linecap: round;" />
              <line id='line2' x1="80" y1="50" x2="80" y2="90" style="stroke-width:5px;stroke:white;stroke-linecap: round;" />
            </svg>
        </button>
        <button id="tfPlayButton" aria-hidden="true" title="Play animation" alt="Play animation">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                width="50px" height="50px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131" xml:space="preserve">
                <ellipse fill="none" stroke="#FFFFFF" stroke-width="7.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>
                <polygon fill="#FFFFFF" points="48.611,37.617 103.268,68.345 48.611,99.072 "/>
            </svg>
        </button>
        <div class="intro-body">
            <div class="row">
                <div class="col-md-6" id="intro-text">
                    <h1>Policy in action</h1>
                    <hr />
                    <p>Through the Task Force program, students in the Jackson School of International Studies tackle critical policy challenges &mdash; and set their career paths in motion.</p>
                </div>
            </div><!-- .row -->
        </div><!-- .intro-body -->
    </section><!-- .intro #intro-vid -->


        <main id="main_content">

            <!-- CONTENT SECTIONS -->
            <section class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy no-heading">
                            <p>A country is in the midst of a brutal conflict.</p>

                            <p>The capital city has become a battlefield, and residents are caught in the chaos. Food is scarce, and every bed in the understaffed hospital is full. Public utilities were cut off months ago, so there&rsquo;s no running water, electricity or garbage collection.</p>

                            <p>As a foreign aid worker, you&rsquo;re trying to get basic supplies to civilians. It&rsquo;s work that involves more than simple logistics: Will you need armed protection to reach people safely? If you do, will some groups see you as a threat? And should you even be doing this if the government in power doesn’t want your country&rsquo;s help?</p>

                            <p>At the Henry M. Jackson School of International Studies, students grapple with questions like these as part of the <a href="https://jsis.washington.edu/task-force">Donald C. Hellmann Task Force Program</a>. By giving undergraduates the chance to address real-world crises, Task Force &mdash; the capstone project for all international studies majors &mdash; immerses them in culture, politics, economics and human rights.</p>

                            <p>It has also created a pipeline for the next generation of global leaders, which is more crucial now than ever.</p>
                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->

            <section class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2 class="tf">Finding community abroad</h2>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/heading-underline.jpg' ?>" class="tf hr" />
                            <p>Maya Sullivan, &rsquo;19, is undoubtedly one of those future leaders.</p>

                            <p>Sullivan grew up in Redmond, Washington, with an American father and a Japanese mother. Because of her biracial background, she says, she never felt fully accepted by either culture.</p>

                            <p>&ldquo;People in my shoes often feel like they&rsquo;re floating between cultures,&rdquo; says Sullivan, who speaks Japanese and French and is learning Arabic. &ldquo;That feeling makes me want to create a community, and I think the best way to do that is to understand as much as you can about other people.&rdquo;</p>

                            <p>At the UW, Sullivan found that studying international relations was the perfect way to nurture her curiosity. It also opened the door to two invaluable internships abroad: one at the U.S. Embassy in Senegal, and another with a strategic intelligence company in Amman, Jordan.</p>

                            <p>These internships were funded in part by the Donald C. and Margery S. Hellmann Scholar Award for Jackson School students who wish to pursue a career in international affairs. Sullivan is the inaugural recipient.</p>

                            <p>When she came home from Jordan last December, Sullivan was eager to apply what she&rsquo;d learned to Task Force.</p>
                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->

            <section class="photo-text-block maya">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 grid">

                            <div class="img-maya">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/maya.png' ?>" />
                                <p class="caption"><strong>Maya Sullivan</strong>, &rsquo;19</p>
                            </div>

                            <blockquote class="purple">I just hope I can do some good for the world.</blockquote>

                        </div><!-- .col-lg-12 .grid -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .photo-text-block -->

            <section class="text-block tf">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2 class="tf">Learning the world of policy</h2>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/heading-underline.jpg' ?>" class="tf hr" />
                            <p>Task Force was founded in 1983 by Professor Emeritus Donald C. Hellmann, then director of the international studies program.  In gratitude for a generous gift from Hellmann&rsquo;s son Jack and daughter-in-law Betsy, the Jackson School later renamed the program in his honor.</p>

                            <p>Hellmann worked in international relations for decades. His experiences led to his idea that the best way to prepare students for the field was to help them test the waters.</p>

                            <p>&ldquo;It&rsquo;s important for students to have a sense of how people deal with and explore various solutions to real-world problems,&rdquo; says Re&scedil;at Kasaba, the Stanley D. Golub Chair of International Studies and director of the Jackson School.</p>

                            <p>In winter quarter, groups of about 15 students are placed in Task Force sections, each covering a current topic in national or international policy. Then they spend nine weeks working on a report with recommendations for their focus area, which they present in March on a single high-energy, high-stakes Evaluation Day.</p>

                            <p>Sullivan joined a Task Force exploring humanitarian aid in the post-9/11 era. Because most program participants have never studied their section topic before, they&rsquo;re guided by deeply experienced instructors.</p>

                            <p>Sullivan&rsquo;s was Mark Ward, who retired as a career minister with the Foreign Service in 2017 after more than 30 years in high-risk regions like Afghanistan and Libya. Most recently, Ward led a State Department task force to improve humanitarian access to Syria.</p>

                            <p>&ldquo;I&rsquo;ve seen what humanitarian aid can do, how politicized and manipulated it can be and what challenges it can face,&rdquo; he says. &ldquo;Students who are considering careers in international affairs need to think about those challenges with the hope that someday they can fix them. That&rsquo;s the job of the next generation.&rdquo;</p>
                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->

            <section class="photo-text-block resat">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 grid">

                            <div class="img-resat">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/resat.png' ?>" />
                                <p class="caption"><strong>Re&scedil;at Kasaba</strong>, director of the Jackson School</p>
                            </div>

                            <blockquote class="purple">It&rsquo;s important for students to explore various solutions to real-world problems.</blockquote>

                        </div><!-- .col-lg-12 .grid -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .photo-text-block -->

            <section class="text-block tf">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2 class="tf">A career-defining day</h2>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/heading-underline.jpg' ?>" class="tf hr" />
                            <p>After weeks of researching, writing and editing, Sullivan&rsquo;s section produced their report. Among other measures, they proposed that NGOs leverage their status as essential aid providers to push back against the demands of local governments and armed groups. This would enable the organizations to increase the efficiency and safety of aid delivery.</p>

                            <p>The true culmination of Task Force is Evaluation Day, when a guest evaluator assesses students&rsquo; reports for realism and practicality.</p>

                            <p>Sullivan&rsquo;s evaluator was Colin Thomas-Jensen, who served for four years as senior policy adviser to Ambassador Samantha Power, the United States&rsquo; former permanent representative to the United Nations.</p>

                            <p>&ldquo;Students should realize there are no black-and-white solutions in humanitarian aid,&rdquo; Thomas-Jensen says. &ldquo;When I worked for Ambassador Power, it wasn&rsquo;t about whether or not you knew the answer &mdash; but rather looking at a situation, evaluating it and making a judgment call.&rdquo;</p>

                            <p>In addition to expert feedback, evaluators offer Task Force students another rare opportunity: the chance to network with people who could help kick-start their careers. Past evaluators include U.S. Representative Adam Smith, journalist Jill Dougherty and former ambassador Ryan Crocker. As a result, many program alumni consider Task Force to be a defining moment in their professional lives.</p>
                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->

            <section class="photo-text-block mark">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 grid">
                            <div class="video-mark">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/mark-ward.jpg' ?>" alt="Mark Ward" />
                                <a data-lity href="https://www.youtube.com/embed/kK_B8Gnrb8M?autoplay=1&rel=0&showinfo=0">
                                    <svg version="1.1" id="mark-ward-video" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="137.909px" height="137.131px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131"
                                 xml:space="preserve" alt="Play Mark Ward video">
                                        <ellipse fill="none" stroke="#FFFFFF" stroke-width="7.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>
                                        <polygon fill="#FFFFFF" points="48.611,37.617 103.268,68.345 48.611,99.072 "/>
                                    </svg>
                                </a>
                                <p class="caption reverse"><strong>Mark Ward</strong>, Task Force instructor and former Foreign Service career minister</p>
                            </div>

                            <blockquote class="gold">I&rsquo;ve seen what humanitarian aid can do, how politicized and manipulated it can be.</blockquote>
                        </div><!-- .col-lg-12 .grid -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .photo-text-block -->

            <section class="text-block tf">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2 class="tf">Next steps for Task Force</h2>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/heading-underline.jpg' ?>" class="tf hr" />
                            <p>After graduation, Sullivan plans to either start working with an NGO or the Foreign Service or get her master&rsquo;s degree, she says. She credits the Jackson School, including her Hellmann Scholar Award, for making those paths possible.</p>

                            <p>That award is part of the the Donald C. Hellmann Task Force Endowment. In the future, more funding will be needed to ensure that Task Force can continue educating global citizens who are equipped to make a difference in our politically intricate world.</p>

                            <p>In particular, the school wants to expand the number of sections held abroad. One Task Force takes place in Italy, and Kasaba hopes to add other countries. A major part of this effort would be providing travel scholarships so that students from any financial background can participate.</p>

                            <p>Additional support would also enable the Jackson School to open up Task Force to other relevant majors, in turn preparing more students to impact policy and people across the globe.</p>

                            <p>Because of her Task Force experience, Sullivan is poised to do just that.</p>

                            <p>&ldquo;In five years, I&rsquo;ll be able to look back and say, &lsquo;I learned these skills from Task Force,&rsquo;&rdquo; she says. &ldquo;I just hope I do some good for the world.&rdquo;</p>

                            <p><em>Update:</em> Maya Sullivan, &rsquo;19, was awarded a Fulbright Research Grant to Oman for the 2019-2020 academic year.</p>
                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->

            <section class="map-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="tf tf-map">The Global Reach of Task Force</h2>
                            <p>Thousands of UW students have taken part in the Task Force program. See below to find out where some of them landed after graduation.</p>
                            <div id="tfMap"></div>
                        </div><!-- .col-md-10 .col-md-offset-1 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .map-block -->


            <section class="photo-text-block alumni">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h2 class="centered">What Task Force Taught Me</h2>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/heading-underline-white.png' ?>" class="tf hr white" />
                            <div class="tf-alumni-boxes">
                                <div class="tf-alumni-box">
                                    <img class="headshot" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/carmela-conroy.jpg' ?>" alt="Carmela Conroy" width="100" height="100" />
                                    <h4>Carmela Conroy, &rsquo;84</h4>
                                    <p class="alum-title">Director, Japanese Field School, Foreign Service Institute</p>
                                    <blockquote>&ldquo;I remember Professor Hellmann and Professor Pyle pushing us to think about realistic ways to accomplish goals. As a deputy prosecutor and Foreign Service officer, I strive to remember that my job isn&rsquo;t just to admire a problem &mdash; it&rsquo;s to solve it.&rdquo;</blockquote>
                                    <div class="alum-map yokohama"><span>Yokohama, Japan</span></div>
                                </div>
                                <div class="tf-alumni-box">
                                    <img class="headshot" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/andrew-lambert.jpg' ?>" alt="Andrew Lambert" width="100" height="100" />
                                    <h4>Andrew Lambert, &rsquo;94</h4>
                                    <p class="alum-title">Key Populations Senior Technical Adviser</p>
                                    <blockquote>&ldquo;Task Force inspired me to think about global development outside of what is in a textbook. In order to find solutions that can be adopted, it is important to incorporate the wide array of beliefs and lived histories of individuals and groups.&rdquo;</blockquote>
                                    <div class="alum-map cape-town"><span>Cape Town, South Africa</span></div>
                                </div>

                                <div class="tf-alumni-box">
                                    <img class="headshot" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/teresa-hillis.jpg' ?>" alt="Teresa Hillis" width="100" height="100" />
                                    <h4>Teresa Hillis, &rsquo;06</h4>
                                    <p class="alum-title">Director, 30/30 Project</p>
                                    <blockquote>&ldquo;I participated in the &lsquo;Intellectual Property and Access to Medicines in the Global South&rsquo; Task Force, and the topic of access to quality health care has continued to be a defining point in my career. I&rsquo;m currently wrapping up the 30/30 Project, which helps fund and build health-care facilities in communities that are impacted by HIV/AIDS.&rdquo;</blockquote>
                                    <div class="alum-map seattle"><span>Seattle, WA</span></div>
                                </div>
                                <div class="tf-alumni-box hide-mobile">
                                    <img class="headshot" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/geoffrey-morgan.jpg' ?>" alt="Geoffrey Morgan" width="100" height="100" />
                                    <h4>Geoffrey Morgan, &rsquo;11</h4>
                                    <p class="alum-title">Infrastructure Sustainability and Resilience Specialist</p>
                                    <blockquote>&ldquo;Task Force gave me my first opportunity to see how policy shapes the world we live in and to engage with it in a hands-on way. This had a major influence on my career, as I saw the impact that appropriate policy can have on the people it is designed to serve and protect.&rdquo;</blockquote>
                                    <div class="alum-map denmark"><span>Copenhagen, Denmark</span></div>
                                </div>
                                <div class="tf-alumni-box hide-mobile">
                                    <img class="headshot" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/sarah-boone.jpg' ?>" alt="Sarah Boone" width="100" height="100" />
                                    <h4>Sarah Boone, &rsquo;13</h4>
                                    <p class="alum-title">Senior Policy Analyst</p>
                                    <blockquote>&ldquo;The value of Task Force is the way it replicates the complex policymaking environment. It forced me and my team to grapple with the real ambiguities of policy work, preparing me well for my current role advising political decision-makers.&rdquo;</blockquote>
                                    <div class="alum-map wellington"><span>Wellington, New Zealand</span></div>
                                </div>
                                <div class="tf-alumni-box hide-mobile">
                                    <img class="headshot" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/julia-yoon.jpg' ?>" alt="Julia Yoon" width="100" height="100" />
                                    <h4>Julia Yoon, &rsquo;18</h4>
                                    <p class="alum-title">Associate Security Engineer</p>
                                    <blockquote>&ldquo;Task Force provided me with unique challenges that made me who I am today. The opportunities it provided led me to the start of a career I am proud of. I developed the right skills and attitude to make something of myself.&rdquo;</blockquote>
                                    <div class="alum-map bellevue"><span>Bellevue, WA</span></div>
                                </div>
                            </div>

                            <?php campaign_pubdate($post, $publishMonthYear); ?>
                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->



        </main><!-- #main_content -->

    </div><!-- #immersive-body -->

    <?php
        include(locate_template('include-giving.php'));//ADD CUSTOM PHOTO
        get_template_part('footer', 'campaign-v2');
    ?>

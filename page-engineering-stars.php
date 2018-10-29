<?php

        $slug = 'stars';
        $twitter_photo = "http://www.washington.edu/wp-content/themes/be-boundless/immersive-stories/img/" . $slug . "/twitter-card.jpg";
        $twitter_title = 'Changing the future of engineering';
        $twitter_description = 'A redshirt year helps athletes gain confidence and skills. One UW program is doing the same for engineering students.';
        $meta = twitter_card($twitter_photo, $twitter_title, $twitter_description);
        $styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/" . $slug . ".css' type='text/css' media='all' />";
        $scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/" . $slug . ".min.js' type='text/javascript'></script>";

        // The fund code(s) for the giving widget in a comma delimited list
        $storyCodes = 'STARSS';

        // The appeal code for the story
        $storyAppealCodes = 'IES19';

        // The call to action for the giving widget
        $storyAppeal = 'You can help students like Tammy Teal and Ivan Cordero pursue engineering by giving to the STARS Program Student Support Fund.';

        // Original publication month and year
        $publishMonthYear = 'October 2018';

        get_header("campaign-v2");
?>

<!-- INSERT SCROLL BAR -->
<div id="scrollbar"><span></span><img class="grayW" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/W-Logo_gray.png' ?>"></div>


<div id="immersive-body">

    <section class="intro" id="intro-vid">
        <button id="pause">Pause</button>
        <video autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/' . $slug . '/header.jpg' ?>" class="fullscreen-bg__video" id="full-bg-video">
            <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/' . $slug . '/header.mp4' ?>" type="video/mp4">
            </video>
            <div class="intro-body">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-1 col-md-offset-1 col-lg-offset-2" id='intro-text'>
                        <h1>Changing the future of engineering</h1>
                        <span class="udub-slant"><span></span></span>
                        <p>A redshirt year helps athletes gain confidence and skills. One UW program is doing the same for engineering students.</p>
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
            <section class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <blockquote class="blockquote-bold"><span>Across the country, colleges and universities are helping students from underserved communities pursue careers in engineering. But one key factor is often overlooked: how to keep supporting these students <em>after</em> they start school.</span></blockquote>

                            <p>Only 25 percent of first-generation and low-income students who enter the UW as pre-engineers will go on to earn a degree in the field. One likely cause? “These students are not getting the same level of high school education as peers from highly resourced schools,” says Sonya Cunningham, director of the STARS program at the College of Engineering.</p>

                            <p>Since 2013, STARS — the Washington <strong>ST</strong>ate <strong>A</strong>cademic <strong>R</strong>ed<strong>S</strong>hirt program — has provided the extra support that underserved students from Washington need to succeed in engineering. It’s also helping increase diversity in engineering at the UW. </p>

                            <p>Initially funded by a National Science Foundation (NSF) grant, the program was later supplemented by funding from the Washington State Opportunity Scholarship and an additional NSF grant.</p>

                            <p>Borrowing a term from college sports, STARS gives its students an additional “redshirt” year at the UW before they officially begin their engineering curricula. For Tammy Teal, ’18, and Ivan Cordero, a current senior, that year made all the difference.</p>


                            <h2>Two paths to the UW</h2>

                            <p>Teal was raised by her mother in Mukilteo, Washington. But after her mother’s multiple sclerosis advanced, Teal went to live with her father, a refugee of the Cambodian civil war, and eventually they moved to Auburn, Washington. </p>

                            <p>“I took on a lot of responsibilities at a young age,” she says, including caring for a younger brother with autism. </p>

                            <p>Teal’s parents and most of her siblings did not pursue higher education, so applying to college felt like “walking in the dark,” Teal says. She was elated when she was admitted to the UW — and the first STARS cohort. </p>

                            <p>Cordero grew up in Yakima, Washington, working in fields and orchards alongside his parents, who emigrated from Mexico to the U.S. Like Teal, he wasn’t sure at first how to approach college and financial aid applications. But he knew he wanted to try engineering: “I was always pretty good at math and science,” he says. </p>

                            <p>With his entry into STARS, Cordero knew that he’d receive the necessary support to navigate college — and his plans to become a Husky were set.</p>

                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block .start .white -->



            <!-- Tammy's quote + video -->
            <section class="image-slide left-img">
                <div class="photo arrow-right">
                    <img class="responsive-img" src="<?php echo get_stylesheet_directory_uri() .'/immersive-stories/img/stars/tammy.jpg' ?>">
                </div>
                <div class="slide-content">
                    <blockquote>I know that without STARS, I wouldn’t be an engineer.</blockquote>
                    <cite>— Tammy Teal, ’18</cite>
                    <div class="playit" data-lity href="//youtu.be/4H8L3xOIkHI?&rel=0" role="button" tabindex="0">
                        <span>play Tammy&rsquo;s video</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 150 150" class="opening-slash" aria-role="">
                            <circle id="play-cir" fill="none" stroke="#474747" stroke-width="6" stroke-miterlimit="10" cx="75" cy="75" r="60"/>
                            <path id="play-tri" fill="#474747" d="M57.767,46.187L110.382,75l-52.616,28.816"/>
                        </svg>
                    </div>
                </div>
            </section>



            <!-- Tammy's slideshow -->
            <section  class="slideshow">
                <div class="slick">

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/tammy/8.jpg' ?>" alt="Tammy and her mother">
                        <div class="caption">
                            <p>Tammy Teal’s mother was diagnosed with multiple sclerosis at age 20. </p>
                        </div>
                    </div>

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/tammy/1.jpg' ?>" alt="Tammy Teal with her mother and brother"></img>
                        <div class="caption">
                            <p>Teal and her siblings were raised by their mother in Mukilteo.</p>
                        </div>
                    </div>

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/tammy/3.jpg' ?>" alt="Tammy and coworker on worksite">
                        <div class="caption">
                            <p>Teal was inspired to become an engineer after seeing relatives in Cambodia who didn’t have electricity or running water.</p>
                        </div>
                    </div>

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/tammy/4.jpg' ?>" alt="Tammy on highway">
                        <div class="caption">
                            <p>Today, Teal is a transportation engineer with Jacobs Engineering Group.</p>
                        </div>
                    </div>
                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/tammy/5.jpg' ?>" alt="Tammy holding notebook">
                        <div class="caption">
                            <p>Her current projects include working on storm water inventory mapping.</p>
                        </div>
                    </div>

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/tammy/6.jpg' ?>" alt="Tammy w/hair up and bun">
                        <div class="caption">
                            <p>“I’m outside every day in my boots, vest and hard hat. I’m doing what I always imagined engineers do,” says Teal.</p>
                        </div>
                    </div>

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/tammy/7.jpg' ?>" alt="Orange sign in foreground">
                        <div class="caption">
                            <p>“STARS helped me get to where I am today,” Teal says.</p>
                        </div>
                    </div>

                </div>
            </section>

            <!-- How STARS makes an engineering degree possible -->
            <section class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>How STARS makes an engineering degree possible</h2>

                            <p>STARS participants hit the ground running, with advising and orientation before school starts.</p>

                            <p>During fall quarter, they take introductory math and chemistry to prepare for upcoming prerequisite courses. Weekend study sessions help them tackle challenging classes like calculus and physics. Students also enroll in a STARS seminar on study skills, UW resources and professional development.</p>

                            <p>In their second year, they attend some STARS programming and meet regularly with academic advisers. But, says Cunningham, “Our job is to make sure that you don’t need us anymore.” </p>

                            <p>This is also when students choose their major. All STARS students are guaranteed a spot in the College of Engineering, but they must identify a specific degree program to pursue. Teal picked civil engineering, and Cordero went with aeronautics and astronautics.</p>

                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->



            <!-- Ivan's quote + video -->
            <section class="image-slide right-img">
                <div class="photo arrow-left">
                    <img class="responsive-img" src="<?php echo get_stylesheet_directory_uri() .'/immersive-stories/img/stars/ivan.jpg' ?>">
                </div>
                <div class="slide-content">
                    <blockquote>I never thought I’d be doing the things I am now. I want a good career, so in the future I can support my parents the way they’ve supported me.</blockquote>
                    <cite>— Ivan Cordero, ’19</cite>
                    <div class="playit" data-lity href="//youtu.be/cLRGno_3F3s?&rel=0" role="button" tabindex="0">
                        <span>play Ivan&rsquo;s video</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 150 150" class="opening-slash" aria-role="">
                            <circle id="play-cir" fill="none" stroke="#474747" stroke-width="6" stroke-miterlimit="10" cx="75" cy="75" r="60"/>
                            <path id="play-tri" fill="#474747" d="M57.767,46.187L110.382,75l-52.616,28.816"/>
                        </svg>
                    </div>
                </div>
            </section>



            <!-- Ivan's slideshow -->
            <section class="slideshow">
                <div class="slick">
                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/ivan/ivan_plane.jpg' ?>" alt="Ivan at boeing field">
                        <div class="caption">
                            <p>An aerospace engineering major, Ivan Cordero has interned with Boeing and hopes to work for the company after graduating.</p>
                        </div>
                    </div>

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/ivan/4.jpg' ?>" alt="Dad leaning on ladder and Ivan kneeling">
                        <div class="caption">
                            <p>“I try to go home whenever I can,” says Cordero. “It makes me feel good knowing that I can help my parents.”</p>
                        </div>
                    </div>

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/ivan/3.jpg' ?>" alt="Ivan and dad on ladders">
                        <div class="caption">
                            <p>Cordero and his father prune apple trees in an orchard near Yakima.</p>
                        </div>
                    </div>

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/ivan/2.jpg' ?>" alt="Ivan at top of ladder w/cutters">
                        <div class="caption">
                            <p>With his entry into STARS, Cordero had the support he needed to navigate college.</p>
                        </div>
                    </div>

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/ivan/5.jpg' ?>" alt="Dad and Ivan carrying ladder">
                        <div class="caption">
                            <p>“I want my parents to feel like they’re on this journey with me,” Cordero says.</p>
                        </div>
                    </div>

                    <!-- <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/ivan/6.jpg' ?>" alt="Dad at top of ladder">
                        <div class="caption">
                            <p>“We’ve worked [in the orchards] so that our children can do something more,” says Cordero’s father.</p>
                        </div>
                    </div> -->

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/ivan/8.jpg' ?>" alt="Ivan and dad leaning against crates">
                        <div class="caption">
                            <p>“I want a good career, so in the future I can support my parents the way they’ve supported me,” says Cordero.</p>
                        </div>
                    </div>

                    <!-- <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/ivan/7.jpg' ?>" alt="Apple">
                        <div class="caption">
                            <p>Apples get their color from sun exposure, which is why workers prune the tops of apple trees.</p>
                        </div>
                    </div> -->

                    <div>
                        <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/ivan/9.jpg' ?>" alt="Honeycrisp sign">
                        <div class="caption">
                            <p>On this day, Cordero and his father picked Honeycrisp apples.</p>
                        </div>
                    </div>

                </div>
            </section>



            <!-- The power of a support network -->
            <section class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>The power of a support network</h2>

                            <p>While the program’s academic support was crucial, Teal and Cordero emphasize the relationships that STARS fosters. “The biggest thing was knowing there’s a group of individuals with similar backgrounds to mine,” Cordero says. “It made me feel like I belong.”</p>

                            <p>STARS students act as a peer support system during the highs and lows of college. “You struggle together and succeed together,” says Teal. “That’s so valuable.”</p>

                            <p>Both Teal and Cordero also mention Cunningham’s mentorship as essential. “There were times when I didn’t think I had what it takes,” says Teal. “Then I’d talk to Sonya, and she’d show me that I can push through.”</p>

                            <p>Cunningham recalls a similar conversation with Cordero: “He didn’t believe he could do it,” she says. “So I talked with him about how, actually, he could. And I’m not kidding you — I saw the lightbulb go on.”</p>


                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->

            <!-- Sonya's Video -->
            <section class="video arrow">
                <a data-lity href="//youtu.be/vY3RjXNw1D0?&rel=0" class="center-block play">

                    <div class="playit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 150 150" class="opening-slash" aria-role="">
                            <circle id="play-cir" fill="none" stroke="#fff" stroke-width="4.649" stroke-miterlimit="10" cx="75" cy="75" r="70"/>
                            <path id="play-tri" fill="#fff" d="M57.767,46.187L110.382,75l-52.616,28.816"/>
                        </svg>
                        <span>Play Sonya&rsquo;s Video</span>
                    </div>
                </a>
                <div class="contain">
                    <blockquote>
                        Going to college changed my life and changed the life of my family — completely and totally.
                    </blockquote>
                    <cite>— Sonya Cunningham</cite>
                </div>
            </section>

            <!-- Expanding diversity in engineering -->
            <section class="text-block ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 copy">
                            <h2>Expanding diversity in engineering </h2>

                            <p>Fifteen students from the first STARS cohort, including Teal, graduated with engineering degrees in 2018. Teal is now a transportation engineer with Jacobs Engineering Group, working on projects like the revitalization of the downtown Seattle waterfront. </p>

                            <p>“I know that without STARS, I wouldn’t be an engineer,” she says. She hopes to pay her success forward by volunteering with <a href="https://www.ewb-usa.org/" target="_blank">Engineers Without Borders</a> and providing financial assistance to her family.</p>

                            <div class="slick original-slideshow">

                                <div>
                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/tammy/2.jpg' ?>" alt="Tammy at worksite">
                                    <div class="caption">
                                        <p>Tammy Teal and a colleague at a work site south of Seattle.</p>
                                    </div>
                                </div>
                                <div>
                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/slideshow/1.jpg' ?>" alt="Ivan and dad sitting">
                                    <div class="caption">
                                        <p>Ivan Cordero and his father at a cherry orchard near Yakima.</p>
                                    </div>
                                </div>

                                <div>
                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/slideshow/2.jpg' ?>" alt="Ivan at fence">
                                    <div class="caption">
                                        <p>“I could never have pictured myself doing the things I am now, like interning at Boeing,” says Cordero.</p>
                                    </div>
                                </div>

                                <div>
                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/ivan/6.jpg' ?>" alt="Dad at top of ladder">
                                    <div class="caption">
                                        <p>“We’ve worked [in the orchards] so that our children can do something more,” says Cordero’s father.</p>
                                    </div>
                                </div>

                                <div>
                                    <img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/stars/slideshow/3.jpg' ?>" alt="Cherries">
                                    <div class="caption">
                                        <p>Cherries at an orchard near Yakima.</p>
                                    </div>
                                </div>

                            </div>

                            <p>Cordero also has bright prospects: He finished his third internship with Boeing this summer, and he hopes to join the company full time as an engineer after graduation. “I never thought I’d be doing the things I am now,” he says. “I want a good career, so in the future I can support my parents the way they’ve supported me.”</p>

                            <blockquote class="blockquote-bold"><span>STARS is clearly making an impact on all its participants: 95 percent of students enrolled in the program have stuck with engineering through their junior year, compared with 33 percent of students from similar backgrounds who also expressed an interest in engineering when they began at the UW.</span></blockquote>

                            <p>The program is also helping increase diversity in the major. Engineering is still predominantly white and male in the U.S., but half of STARS students come from underrepresented minority backgrounds.</p>

                            <p>As engineering continues to grow in popularity — and the UW freshman class keeps increasing in size — more funding will be needed for STARS to expand its cohorts. There were just 30 students in the first one, but 50 Huskies are part of the current cohort, and Cunningham hopes to enroll even more in 2019.</p>

                            <p>With additional staff and resources, STARS can continue to help students chart a successful course in school and in life. “It can be challenging to be at a university like this without someone to support you,” says Cordero. “The STARS program does a really good job of that.”</p>


                            <p><em>Originally published <?php echo $publishMonthYear; ?></em></p>

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

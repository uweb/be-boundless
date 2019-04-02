<?php

        $slug = 'autism';
        $twitter_photo = "http://www.washington.edu/wp-content/themes/be-boundless/immersive-stories/img/" . $slug . "/twitter-card.jpg"; // NEED
        $twitter_title = 'Caring for every child';
        $twitter_description = ''; // NEED
        $meta = twitter_card($twitter_photo, $twitter_title, $twitter_description);
        $styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/" . $slug . ".css' type='text/css' media='all' />";
        $scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/" . $slug . ".min.js' type='text/javascript'></script>";

        // The fund code(s) for the giving widget in a comma delimited list
        $storyCodes = 'AUTHCC,EXDISC,HCSEND';

        // The appeal code for the story
        $storyAppealCodes = 'IAU19';

        // The call to action for the giving widget
        $storyAppeal = 'The Haring Center and UW Medicine are working to create a healthier, more inclusive future for children and families. By supporting their efforts, you can help kids of all abilities access the services they need to succeed in school and in life.';

        // Original publication month and year
        $publishMonthYear = 'May 2019';

        get_header("campaign-v2");
?>

<!-- INSERT SCROLL BAR -->
<div id="scrollbar"><span></span><img class="grayW" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/W-Logo_gray.png' ?>"></div>


<div id="immersive-body">

    <section class="intro" id="intro-vid"><!--<div class="intro-rollover"></div>-->
            <div class="intro-body">
                <div class="row">
                    <div class="col-md-6 col-lg-5 col-md-offset-1 col-xs-10 col-lg-offset-2 col-xs-offset-1" id="intro-text">
                        <h1>Caring for Every Child</h1>
                        <span class="udub-slant"><span></span></span>
                        <p>The Sunderlands were changed forever by the UW&rsquo;s groundbreaking support for children with autism. Now they want to help other families access the same opportunities.</p>
                    </div>
                </div><!-- .row -->
            </div><!-- .intro-body -->
    </section><!-- .intro #intro-vid -->


        <main id="main_content">

            <!-- CONTENT SECTIONS -->
            <section class="photo-text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 grid">
                            <div class="img-first grandfather arrow-left"></div>
                            <div class="copy">
                                <p>Gareth had a good day.</p>

                                <p>His grandpa picked up him in the morning for a trip to the park, where the 6-year-old showed his prowess on the monkey bars. Back at home, he bounced through the door and headed down to the basement playroom with his brother and sister under the watchful eyes of their parents, Bill and Alyssa Sunderland.</p>

                                <p>This could describe a typical Saturday for many kids in the United States. But for Gareth, who has autism, good days are precious.</p>

                                <p>Across the U.S., about one in 59 children has been diagnosed with autism spectrum disorder. At the University of Washington, a groundbreaking exploration of autism is underway. From inclusive learning to genetics research to diagnoses, these efforts are centered on helping children of all abilities access the resources and education they need to thrive.</p>

                                <p>For Gareth and his family, the UW&rsquo;s work has helped them have more good days.</p>
                            </div>
                            <div class="img-last gareth">
                                <a class="play-video" data-lity href="https://www.youtube.com/embed/m_dqkuviBVI?autoplay=1&rel=0&showinfo=0">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="137.909px" height="137.131px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131"
                         xml:space="preserve">
                                    <ellipse fill="none" stroke="#FFFFFF" stroke-width="7.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>
                                    <polygon fill="#FFFFFF" points="48.611,37.617 103.268,68.345 48.611,99.072 "/>
                                    </svg>

                                    <p>Watch Gareth&rsquo;s Story</p>
                                </a>
                            </div>
                        </div><!-- .col-lg-12 .copy .grid -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .photo-text-block -->

            <section class="photo-block answers arrow">
                <div class="container">
                    <div class="row">
                        <h2 class="answers">Looking for answers</h2>
                        <p class="caption">Gareth was diagnosed with autism spectrum disorder when he was about 2.</p>
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .photo-block -->

            <section class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 grid">
                            <div class="copy">
                                <p>&ldquo;We knew something wasn&rsquo;t right as early as six months,&rdquo; says Alyssa. Gareth was a happy baby who showed signs of growth and language development, but not in the usual forward trajectory. &ldquo;He would say a word or gain a skill, then lose another,&rdquo; she says.</p>
                                <p>When Gareth was 15 months old, the Sunderlands&rsquo; pediatrician recommended that he be screened for developmental delays through a birth-to-three program. One option stood out immediately: the UW&rsquo;s <a href="https://haringcenter.org/">Haring Center for Inclusive Education</a>.</p>
                                <p>&ldquo;We knew the UW well since Bill earned his Ph.D. there, but we&rsquo;d never heard of the Haring Center,&rdquo; says Alyssa. &ldquo;We didn&rsquo;t know just how lucky we were in making that decision.&rdquo;</p>
                            </div>

                            <div class="quote-cite center-mobile top-quote">
                                <blockquote>We knew something wasn&rsquo;t right as early as six months.</blockquote>
                                <cite>&mdash; Alyssa Sunderland</cite>
                            </div>
                        </div><!-- .col-lg-12 .copy .grid -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->

            <section class="photo-block learning arrow">
                <div class="container">
                    <div class="row">
                        <h2 class="learning">Learning better by learning together</h2>
                        <p class="caption">Children with and without disabilities learn and play together in the Haring Center&rsquo;s inclusive classrooms.</p>
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .photo-block -->

            <section class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 copy">
                            <p>After Haring Center staff found that Gareth was behind in development, the Sunderlands enrolled him in the Infant and Toddler Program, part of the center&rsquo;s Experimental Education Unit (EEU).</p>

                            <p>Founded in 1964, the Haring Center is one of the country&rsquo;s oldest centers for research on and education for children with disabilities. All under the same roof, it studies, tests and disseminates best practices for inclusive learning &mdash; and trains teachers from across the country.</p>

                            <p>&ldquo;One problem we continue to face in the U.S. is that children with disabilities are more likely to be educated in segregated settings and excluded from extracurricular and school-based activities,&rdquo; says Ilene Schwartz, Ph.D., the center&rsquo;s director. </p>

                            <p>That&rsquo;s despite studies showing the immense benefits of inclusive classrooms, says Jennifer Fung, Ph.D., a research scientist for the center: &ldquo;We know that kids who are included more have higher graduation rates, are more likely to be employed and live more independently.&rdquo;</p>

                            <p>Typically developing peers benefit from the experience, too. &ldquo;When you talk about how everyone is different and how that&rsquo;s exciting and beneficial, it normalizes it,&rdquo; says Fung. &ldquo;Children are more accepting and have a greater capacity for friendship.&rdquo;</p>

                            <p>&ldquo;It was wonderful to see other kids at the Haring Center trying to engage Gareth or just be his friend and play with him, even if he couldn&rsquo;t communicate with them in a typical way,&rdquo; says Alyssa.</p>

                            <p>To ensure that all students can take part in activities, EEU teachers provide personalized help to students who need it. For children with autism, much of that care stems from one of the center&rsquo;s largest research efforts, <a href="http://projectdata.haringcenter.org/project-data/">Project DATA</a> (Developmentally Appropriate Treatment for Autism).</p>

                            <p>As part of Project DATA, Gareth spent the first half of his day with typically developing peers and the second half receiving intensive individualized instruction. If he still struggled, teachers would map out a new strategy for the next day. Since it began in 1997, the Project DATA model has been adopted by teachers in more than 25 states.</p>

                            <div class="quote-cite center">
                                <blockquote>One problem we continue to face is that children with disabilities are more likely to be educated in segregated settings and excluded from extracurricular and school-based activities.</blockquote>
                                <cite>&mdash; Ilene Schwartz / Director, Haring Center for Inclusive Education</cite>
                            </div>
                        </div><!-- .col-lg-12 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->

            <section class="photo-block diagnosis arrow">
                <div class="container">
                    <div class="row">
                        <h2 class="diagnosis">The importance of early diagnosis</h2>
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .photo-block -->

            <section class="photo-text-block gareth-img-vid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 grid">
                            <div class="img-first gareth arrow-left"></div>
                            <div class="copy">
                                <p class="caption">The Sunderlands are working to help other kids access the same care their son received.</p>
                                <p>When Gareth was about 2 years old, Haring Center staff recommended that he visit the UW&rsquo;s Center on Human Development and Disability (CHDD), where he could receive an official diagnosis of autism spectrum disorder and undergo genomic sequencing to find a potential genetic cause of his autism.</p>

                                <p>This testing revealed that Gareth&rsquo;s delays were likely caused by a new mutation of the ZNF292 gene. Since then, Bill &mdash; who received his doctorate from the UW&rsquo;s Department of Physiology and Biophysics in 1998 &mdash; has worked with researchers at the UW and Seattle Children&rsquo;s Hospital to better understand the function of the gene.</p>

                                <p>The Sunderlands also began attending workshops for parents of children with autism at the <a href="https://depts.washington.edu/uwautism/">UW Autism Center</a>, another unit of the CHDD. With faculty and staff from the School of Medicine, the College of Arts &amp; Sciences and the College of Education, the Autism Center conducts research on autism and trains UW students and community professionals in providing services.</p>

                                <p>Though Gareth was diagnosed as a toddler, most families don&rsquo;t find out until much later. &ldquo;We can identify the signs and symptoms in almost every case of autism before children are 24 months old, but the average age in the U.S. for diagnosing autism is four to five years old,&rdquo; says Annette Estes, Ph.D., the center&rsquo;s director.</p>

                                <p>Those few years can make a huge difference. &ldquo;Evidence-based early intervention has been shown to move the needle tremendously,&rdquo; Estes says &mdash; and the earlier a child receives those interventions, the more effective they are.</p>
                            </div>
                            <div class="video-last video-placeholder">
                                <a data-lity href="https://www.youtube.com/embed/UtlaTNI1TaU?autoplay=1&rel=0&showinfo=0"><img src="<?php echo get_stylesheet_directory_uri() .'/immersive-stories/img/autism/video-placeholder.jpg' ?>" alt="placeholder for video" width="500" /></a>
                                <p class="caption">Gareth graduated from the Haring Center in a ceremony designed to include all students.</p>
                            </div>
                        </div><!-- .col-lg-12 .grid -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .photo-text-block -->

            <section class="photo-block access arrow">
                <div class="container">
                    <div class="row">
                        <h2 class="access">Helping more families access autism care</h2>
                        <p class="caption">Every Saturday, Gareth&rsquo;s grandpa takes him to the park to climb as high as he can.</p>
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .photo-block -->

            <section class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 copy">
                            <p>In 2018, Gareth started first grade at his local public school. He continues to make progress, thanks in large part to ongoing private therapy with UW applied behavior analysis graduate students.</p>

                            <p>The Sunderlands understand how fortunate they&rsquo;ve been to be able to access and afford Gareth’s care. During trips to the CHDD, Bill noticed how far many other families had traveled to get there.</p>

                            <p>&ldquo;It was pretty clear that they&rsquo;d been in their cars for hours,&rdquo; he says. &ldquo;It&rsquo;s really hard on families who don&rsquo;t live in an urban area where they can access these services.&rdquo;</p>

                            <p>Says Estes, &ldquo;The people I&rsquo;m most worried about are those whom we don&rsquo;t see at all.&rdquo;</p>

                            <div class="quote-cite center">
                                <blockquote>The people I&rsquo;m most worried about are those whom we don&rsquo;t see at all.</blockquote>
                                <cite>&mdash; Annette Estes / Director, UW Autism Center</cite>
                            </div>
                        </div><!-- .col-md-10 .col-md-offset-1 .copy -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .text-block -->

            <section class="photo-block future arrow">
                <div class="container">
                    <div class="row">
                        <h2 class="future">A more inclusive future</h2>
                        <p class="caption">The Sunderland family in their playroom, from left: Yuri, Keziah, Alyssa, Bill and Gareth.</p>
                    </div><!-- .row -->
                </div><!-- .container -->
            </section><!-- .photo-block -->

            <section class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 copy">
                            <p>The Sunderlands are supporting two major efforts to ensure that all families with children on the spectrum can access life-changing care.</p>

                            <p>At the UW, they&rsquo;ve dedicated philanthropic support to Access to On-Time Intervention, a partnership between the Haring Center and the UW Autism Center. The project, which launched in May 2018, enables researchers and educators to develop a program for helping children from low-income and underserved families connect with autism intervention, support and education.</p>

                            <p>The Sunderlands have also joined UW Foundation Board member Mike Halperin, M.D., in supporting the recently announced Autism Spectrum 360 Initiative, which aims to foster collaboration between local organizations that focus on autism and to expand resources for families across Washington state.</p>

                            <p>&ldquo;Very few families are as lucky as we are,&rdquo; says Bill. &ldquo;There are a lot of kids who could benefit from the services Gareth received, and there&rsquo;s no reason why they shouldn&rsquo;t be easily accessible.&rdquo;</p>

                            <p>Because every child, including Gareth, deserves as many good days as possible.</p>

                            <div class="quote-cite center bottom-quote">
                                <blockquote>There are a lot of kids who could benefit from the services Gareth received, and there&rsquo;s no reason why they shouldn&rsquo;t be easily accessible.</blockquote>
                                <cite>&mdash; Bill Sunderland</cite>
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

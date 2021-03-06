<?php
	$twitter_photo = 'http://www.washington.edu/wp-content/themes/be-boundless/immersive-stories/img/evans-school/twitter-card.jpg';
	$twitter_title = 'Powering policy locally and globally';
	$twitter_description = 'Students at the UW Evans School of Public Policy & Governance see the world as their laboratory — whether they’re researching the effects of Seattle’s minimum wage law or looking for ways to reduce poverty in developing countries.';
	$meta = twitter_card($twitter_photo, $twitter_title, $twitter_description);
	$styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/evans-school.css' type='text/css' media='all' />";
	$scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/evans-school.min.js' type='text/javascript'></script>";

    // The fund code(s) for the giving widget in a comma delimited list
    $storyCodes = 'GSPAED,EVAN50';

    // The appeal code for the story
    $storyAppealCodes = 'IEP19';

    // The call to action for the giving widget
    $storyAppeal = 'By supporting the Evans School of Public Policy &amp; Governance, more students can take part in opportunities that change not only their lives, but also those of people around the world.';

    // Original publication month and year
    $publishMonthYear = 'February 2017';

    get_header("campaign-v2");
?>

<div id="immersive-body">


<div class="intro" id="intro-vid">
    <div id="slide">
      <h1>Powering policy locally and globally</h1>
      <hr>
      <p>How can you change the world? Two students at the Evans School of Public Policy &amp; Governance share their stories.
</p>
    </div>
    <section class="scrollit read-more">
        <p>Scroll Down</p>
        <div class="mouse">
          <div class="scroll"></div>
        </div>
    </section>
</div>



<main id="main_content">

      <section class="text-block start">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 copy">

                    <p>The <a href="http://evans.uw.edu/">Evans School</a> uses the world as their laboratory. Diving deep into the pressing public policy and governance issues of today, the Evans School strives to create leaders who will solve the issues of tomorrow. </p>
                    <p>From guiding investments in developing countries to shaping policy in Washington state, research undertaken by Evans School faculty in collaboration with graduate students informs policymaking around the world. </p>
                    <p>Ph.D. student Hilary Wething and MPA candidate Matthew Fowle are making the most of their experiences at the UW. Thanks to the generosity of donors like you, both Wething and Fowle received scholarships that enable them to focus on academic pursuits and research with real-world influence: Wething studies the effects of Seattle’s historic minimum wage law, and Fowle is working to find evidence-based solutions to reduce poverty in developing countries.</p>

                    <div class="wide"><img alt="Photo of Hilary Wething" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/evans-school/hilary.jpg' ?>"><p><span><b>Hilary Wething</b> / Research Assistant / City of Seattle Minimum Wage Study</span></p></div>
                    <h2 class="slant"><span><span>Local</span></span> Impact</h2>

                    <p class="bolder"><b>The City of Seattle Minimum Wage Study</b></p>

                    <p>In January 2014, Seattle made history when it became the first major city in the U.S. to adopt a $15 minimum wage. </p>
                    <p>When the new law took effect the following year, policymakers were entering uncharted waters, as were workers and businesses. No one knew how the increase would play out with real people in the real world.</p>
                    <p>With the rest of the nation watching to see how it would unfold — and waiting to see if they should follow suit — the City of Seattle contracted with an interdisciplinary team of UW faculty from the Evans School, the School of Social Work and the School of Public Health to conduct a <a href="http://evans.uw.edu/policy-impact/minimum-wage-study">multi-year study</a> of the new law and its effects.</p>
                    <p>For researchers at the Evans School, the wage increase presented an unprecedented opportunity: the ability to track and study the effects of a new policy in real time. </p>
                    <p>“Often when you’re studying public policy, you either come in after a policy has been implemented, or your team helps design a program and then studies it from the beginning,” explains <a href="http://evans.uw.edu/profile/hill">Heather Hill</a>, an associate professor at the Evans School and co-investigator for the study. “But this is different. We get to evaluate as it happens.”                     </p>
                    <p>As the new wages were implemented, the researchers tracked potential bellwethers of the law’s impact, including wages, the number of hours employees worked and the prices of local goods. </p>
                    <p>But numbers can only say so much. </p>

                </div>
          </div>
        </div>
      </section>

      <section class="mosaic georgetown" id="profile-1">
        <div>
          <p>Georgetown Brewing Company</p>
        </div>
        <div>
          <!-- 100% -->
          <div>
            <div>
              <span>
                <h3>More than just higher wages</h3>
                <p>Three years into the new minimum wage law, we spoke with local workers about how they’ve been impacted.</p>
              </span>
            </div>
          </div>


          <!-- 50% -->
          <div class="col-b">
              <p>When did Georgetown Brewing start talking about the minimum wage law?</p>
              <div><blockquote><span>&ldquo;</span>When I first heard about this happening, I sent [owners] Manny and Roger an e-mail saying let’s implement this now and get ahead of the game. They knew what I was talking about and were both on board with it.<span>&rdquo;</span></blockquote></div>
              <small><b>Lisa Ulrich</b> / Assistant Retail Manager </small>
          </div>

          <!-- 50% -->
          <div class="col-a">
            <div><img alt="Lisa Ulrich standing by brewing vats" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/evans-school/georgetown-woman.jpg' ?>"></div>
            <div class="content pause-enabled">
              <video  autoplay loop muted playsinline class="media" poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/public-health/georgetown.jpg' ?>" class="fullscreen-bg__video">
                  <!-- <source src="img/street-bw-webm.webm" type="video/webm"> -->
                  <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/evans-school/GEORGETOWN_609.mp4' ?>" type="video/mp4">
                  <source src="<?php echo plugins_url('uw-template-hierarchy') . '/assets/asb/video/public-health/GEORGETOWN_609.webm' ?>" type="video/webm">
              </video>
              <button class="pause">Pause</button>
            </div>
          </div>

        </div>
      </section>


      <section class="mosaic campagne" id="profile-2">
        <div>
          <p>Cafe Campagne</p>
        </div>
        <div>
          <!-- 100% -->
          <div></div>
          <div class="col-a">
            <div><img alt="Daisley Gordon standing in restaurant" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/evans-school/campagne-man.jpg' ?>"></div>
            <div class="content pause-enabled">
              <video  autoplay loop muted playsinline class="media" poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/public-health/campagne.jpg' ?>" class="fullscreen-bg__video">
                  <!-- <source src="img/street-bw-webm.webm" type="video/webm"> -->
                  <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/evans-school/CAMPANGE_609.mp4' ?>" type="video/mp4">
                  <source src="<?php echo plugins_url('uw-template-hierarchy') . '/assets/asb/video/public-health/CAMPANGE_609.webm' ?>" type="video/webm">
              </video>
              <button class="pause">Pause</button>
            </div>
          </div>

          <!-- 50% -->
          <div class="col-b">
              <p>What are your thoughts on the minimum wage law?</p>
              <div><blockquote><span>&ldquo;</span>Working in the restaurant industry used to be an entry-level job. But circumstances have changed. Now, you have adults working those jobs trying to make enough money to have a reasonable life. That needs to be considered whether people support a $15 minimum wage or are against it. <span>&rdquo;</span></blockquote></div>
              <small><b>Daisley Gordon</b> / Owner and Executive Chef</small>
          </div>
        </div>
      </section>



      <section class="text-block white">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 copy">

                  <p>“While administrative data will give comprehensive results about changes in the number of jobs and hours worked, it doesn’t tell us how workers affected by the minimum wage view their quality of life,” explains Hilary Wething, a Ph.D. student at the Evans School and member of the Minimum Wage Study.</p>
                  <p>Wething, Hill and a team of other UW students make up a subgroup of the Minimum Wage Study aimed at collecting qualitative data related to the adoption of the new law. </p>
                  <p>Over two years, their team conducted interviews with 55 local low-income workers, all of whom were working for no more than $15 per hour. All 55 participants have children. At the start of the study, all were working for no more than $15 per hour. </p>
                  <p>Beyond hours worked or tips received, the workers divulged more detailed and complex aspects of their lives. “We asked how well their work hours fit with their family life, what works about that and what doesn't,” explains Wething. “We asked questions that allowed them to provide a lot of detail that otherwise wouldn’t be given.”</p>
                  <p>Wething previously worked primarily with quantitative data on low-wage work, and was surprised by the intimate nature of qualitative research. </p>

                  <p>Hearing people’s stories was not only moving, it also provided a lot of context about the perspective they bring to their work lives and how they view their roles as a parent, she says.</p>

                  <blockquote ><span>&ldquo;</span>It feels like you’re going from black and white to full color.<span>&rdquo;</span></blockquote>

                  <p>As the team embarks on final interviews this spring, Wething and Hill hope their data will help create a more complete picture in conjunction with the analysis of state administrative data and survey responses from employers. </p>
                  <p>“For instance, if we see that there were positive, negative, or no effects of the minimum wage change on workers, their earnings or their employment, then the interviews from the workers study could provide insight into why that’s the case,” says Hill.</p>
                  <p>For Wething, the opportunity to be part of the qualitative team has not only provided a one-of-a-kind research experience, it also helped her define her post-Ph.D. path. Inspired by collaborating with Evans School faculty, she hopes to follow in their footsteps and pursue a career in academia, which would enable her to continue researching the lives of low-wage workers and their families.</p>
                  <p>"To be involved with the Minimum Wage Study is a privilege,” she says.</p>
                  <blockquote><span>&ldquo;</span>People nationwide have eyes on what we’re doing. I feel inspired and grateful every day to get to work on this.<span>&rdquo;</span></blockquote>

                </div>
          </div>
        </div>
      </section>

      <section class="text-block abroad">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 copy reduced-pad">

                    <h2 class="slant"><span><span>Global</span></span> impact</h2>

                    <p class="bolder"><b>The Evans School Policy Analysis &amp; Research Group</b></p>

                    <p>The Evans School is a policy partner with impact far beyond the city of Seattle. By partnering with local and international development organizations, students at the Evans School are able to reach and influence global communities.</p>

                    <p>Reducing poverty around the world is graduate student Matthew Fowle’s dream. As a student researcher with the <a href="http://evans.uw.edu/policy-impact/epar">Evans School Policy Analysis &amp; Research Group</a> (EPAR), he's looking for evidence-based solutions to the problem.</p>

                    <p>Fowle, an MPA candidate at the Evans School, was fairly young when he first decided to work for a more equitable world. He grew up in the English countryside. His mother was born in a small town in Southern Malaysia. He recalls travelling with her to visit his Malaysian relatives.</p>

                    <p>“I remember watching mothers boiling murky water to make it safe for their families to drink,” he says. “I started to question the reasons for poverty and to grapple with the inequity between my living conditions in England and the living conditions in my mother's hometown.” This led him to develop a commitment to work on behalf of people without access to safe water, shelter, adequate nutrition or formal education.</p>

                    <p> He went on to study evidence-based social intervention and policy evaluation at the University of Oxford, which intensified his commitment to equity. “I became determined to find evidence-based solutions that would more effectively reduce poverty.” </p>

                    <p>That desire led him to the Evans School, to learn how to turn research into action. </p>

                </div>
          </div>
        </div>

        <div class="featured-full">
          <div><img alt="Photo of money and cellphone" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/evans-school/cash.jpg' ?>"></div>
          <div>
            <blockquote><span>&ldquo;</span>I didn’t want to conduct research for the sake of research, I wanted to conduct research with real-world impact,” he says. “Above all, I wanted to make a difference, and that’s where EPAR comes in.<span>&rdquo;</span></blockquote>
          </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 copy reduced-pad">

                <p>With support from the <a href="http://www.gatesfoundation.org/">Bill &amp; Melinda Gates Foundation</a>, EPAR was established in 2008 by <a href="http://evans.uw.edu/profile/anderson">C. Leigh Anderson</a>, the Marc Lindenberg Professor for Humanitarian Action, International Development, and Global Citizenship at the Evans School.</p>

                <p>Led by Anderson and co-principal investigator Travis Reynolds (Ph.D. ’11), an Evans School alumnus, EPAR is comprised of 15 graduate research assistants and a network of other UW faculty. The group's mission is to conduct objective research and analysis to help inform international stakeholders who tackle some of the world’s most complex and pressing financial, agricultural, public health and environmental challenges.</p>

                    <div class="wide border"><img alt="Photo of Hilary Wething" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/evans-school/matthew.jpg' ?>"><p><span><b>Matthew Fowle</b> / Research Assistant / Evans School Policy Analysis &amp; Research Group</span></p></div>

                    <p>To date, EPAR’s evidence reviews have been used by development practitioners, including those at the MasterCard Foundation, the International Telecommunications Union, developing country government ministries and international non-governmental organizations. </p>
                    <p>One of Fowle’s EPAR research projects analyzes the use of digital financial services in developing countries. </p>

                    <p>“Many people in low-income countries lack access to basic financial services,” he says, whether because they live in a remote area far from a bank or because banks do not offer suitable services. “Globally, there are about two billion individuals without a bank account, a large proportion of whom are women.”</p>

                    <img alt="Photo of Matthew Fowle" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/evans-school/van.jpg' ?>">
                    <small class="photo-caption">An advertisement for Tigo Pesa, a Tanzanian mobile phone company that allows users to send and receive money through mobile devices.</small>

                    <p>In examining populations without access to banks, researchers began looking instead at what resources are widely available: phones. </p>

                    <blockquote><span>&ldquo;</span>Half of the unbanked population has a mobile phone.<span>&rdquo;</span></blockquote>

                  <p>Fowle continues, “In Kenya, for example, almost 90 percent of the population has a mobile device, which represents a significant opportunity for financial inclusion.”</p>

                  <p>Through money transfer apps available on mobile phones, people can save, send and receive money, creating greater financial inclusion and — ideally — a pathway out of poverty.  </p>

                  <p>Fowle and his EPAR team members trawled through data from four South Asian and four Sub-Saharan African countries to determine both why people adopt mobile money services and how they regularly use it. </p>

                  <p>In just the eight years since EPAR has been in operation, Anderson has seen the immense benefit of the EPAR experience to students’ careers. “Combined with their Evans School professional training, this makes them phenomenal policy researchers. They learn great technical tools for finding, analyzing and communicating information; they learn from each other; and they push themselves beyond the threshold of what's considered 'quality' work," she says. "They get hired very quickly after they graduate."</p>

                  <iframe width="1280" height="720" src="https://www.youtube.com/embed/Mz-NPAq924g?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                  <small class="video-caption">Learn more about how the Evans School is impacting communities around the world through its partnerships with international development organizations. </small>

                  <p>EPAR alumni have taken up positions with global development organizations such as USAID, the Center for Global Development, the Research Triangle Institute and PATH.</p>

                  <p>Fowle plans to earn his Ph.D. and continue to conduct original, innovative poverty reduction research that makes a difference in people’s lives, a decision influenced by his time at the Evans School.</p>

                  <p>“It’s a rich and collaborative environment,” he says, “and a unique opportunity to conduct research with a dedicated team of talented colleagues and mentors who are renowned experts. Working with EPAR has enabled me to help tackle the complex equity problems that stirred my passions so strongly as a boy.”</p>

                  <p>Both Wething’s and Fowle’s extraordinary experiences have been fueled by the generosity of donors like you.  Your gifts make student scholarships, fellowships and faculty professorships possible&mdash;and ensure that the Evans School's extraordinary real-world research will continue to make an impact.</p>

                  <p>“Giving enables students to focus on being their best and brightest research selves,” says Wething. “I don’t have to worry about making ends meet. I can just be fully immersed in this process.”</p>

                  <?php campaign_pubdate($post, $publishMonthYear); ?>

                </div>
          </div>
        </div>
      </section>



                <?php /*<section class="text-block giving-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 copy ">
                              <div style="text-align: center">
                                <h2 class="headline-gold">Help make a difference</h2>
                                <p>The University of Washington is undertaking its most ambitious campaign ever: Be Boundless — For Washington, For the World. By supporting the Evans School of Public Policy &amp; Governance, more students can take part in opportunities that change not only their lives, but also those of people around the world.</p>
                                <div id="immersive-give-iframe"></div>
                                <div class="boundless-button sm dark give"><span><a id="immersive-give" data-fund="GSPAED,EVAN50" href="#">Give now</a></span></div>
                              </div>
                            </div>
                        </div>
                  </div>
                </section>*/ ?>







</main>

<div id="popup"></div>


</div>
<?php
	include(locate_template('include-giving.php'));
	get_template_part('footer','campaign-v2');
?>

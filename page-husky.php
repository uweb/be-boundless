<?php

        $slug = 'hometown-huskies';
        $twitter_photo = "http://www.washington.edu/wp-content/themes/be-boundless/immersive-stories/img/" . $slug . "/twitter-card.jpg"; // NEED
        $twitter_title = ''; // NEED
        $twitter_description = "Last year, standout high school athlete Hallie Jensen had never rowed - but now she's training on the UW's Division I crew team, thanks to the Hometown Huskies program."; // NEED
        $meta = twitter_card($twitter_photo, $twitter_title, $twitter_description);
        $styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/" . $slug . ".css' type='text/css' media='all' />";
        $scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/" . $slug . ".min.js' type='text/javascript'></script>";

        // The fund code(s) for the giving widget in a comma delimited list
        $storyCodes = 'CREWFD,CEF';

        // The appeal code for the story
        $storyAppealCodes = 'IHH19';

        // The call to action for the giving widget
        $storyAppeal = 'When you support student-athletes like Hallie Jensen, you can help them reach for their athletic and academic dreams.';

        // Original publication month and year
        $publishMonthYear = 'June 2019';

        get_header("campaign-v2");
?>

<!-- INSERT SCROLL BAR -->
<div id="scrollbar"><span></span><img class="grayW" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/comotion/W-Logo_gray.png' ?>"></div>

<div id="immersive-body">
    <section class="intro" id="intro-vid">
        <div class="intro-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-1" id="intro-text">
                    <h1>Setting the Pace</h1>
                    <span class="udub-slant"><span></span></span>
                    <p>Last year, standout high school athlete Hallie Jensen had never rowed &mdash; but now she&rsquo;s training on the UW&rsquo;s Division I crew team, thanks to the Hometown Huskies program.</p>
                </div>
				<div class="col-md-4 col-lg-3 col-md-offset-1 col-xs-12 col-lg-offset-1 col-xs-offset-1 play-button" >
                        <a data-lity href="https://www.youtube.com/embed/a6KGPBflhiM?autoplay=1&rel=0&showinfo=0">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="137.909px" height="137.131px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131"
                         xml:space="preserve">
                            <ellipse fill="none" stroke="#FFFFFF" stroke-width="7.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>
                            <polygon fill="#FFFFFF" points="48.611,37.617 103.268,68.345 48.611,99.072 "/>
                        </svg>

                        <p>Play full video</p>
                      </a>
                  </div>
            </div><!-- .row -->
        </div><!-- .intro-body -->
	</section><!-- .intro #intro-vid -->
	
    <main id="main_content">
		<!-- CONTENT SECTIONS -->
		<section class="photo-text-block rowing-background">
			<div class="container">
				<div class="row">
					<div class="col-md-8 copy">
						<p>On a bluebird Saturday in March, Hallie Jensen bobs in the University of Washington&rsquo;s novice eight boat in Lake Washington&rsquo;s Union Bay. The glassy waters lap gently against the hull, and a pair of cautious ducks paddle by. It would be the perfect morning for a contemplative canoe ride through the nearby Washington Park Arboretum.</p>

						<p>It&rsquo;s also the perfect morning for a race.</p>

						<p>After months of training, the Husky Open marks the first official race of Jensen&rsquo;s collegiate career. Just seconds away from the start, she turns her focus inward, running through the plan her coxswain laid out for the team an hour earlier.</p>

						<p><em>Launch off the starting line with 15 strokes at 36, seven at 34, then drop to 32. Heads up, in sync. Boom &mdash; legs. Boom &mdash; legs. Boom &mdash; legs. Just crush it.</em></p>

						<p>&ldquo;Attention!&rdquo; barks the megaphone, and Jensen shifts forward, gripping the oar and softening her gaze.</p>

						<p>The starting flag drops, and Jensen&rsquo;s boat erupts. Sixteen flexed legs and arms strain in perfect sync, digging in for the first of what will be hundreds of powerful, exhausting strokes.</p>

						<p>Two thousand meters behind them, under Montlake Bridge and through the crowd-packed Montlake Cut, waits the finish line.</p>

					</div><!-- .col-lg-12 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .photo-text-block -->

		<section class="photo-block photo-quote hallie-close blur-focus">
			<div class="container">
				<div class="row">
					<blockquote>I just expected that I was going to play basketball or run track at a small school.
						<p class="caption">Hallie Jensen</p>
					</blockquote>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .photo-block -->

		<section class="text-block">
			<div class="container">
				<div class="row">
					<div class="copy">
						<h2>Charting a new course</h2>
						<p>Last year, Jensen didn&rsquo;t know how to row. She barely knew what crew was. But she did know &mdash; as did her family, friends and coaches &mdash; that she was a natural athlete who liked to push herself physically and mentally.</p>

						<p>A cross-country, track and basketball star and senior class president at Lakeside High School, about 30 minutes west of Spokane, Jensen brought teams together with her innate kindness and leadership. It was her intense focus on conditioning that set her apart.</p>

						<p>&ldquo;Sometimes she would go on runs in the snow on her own before basketball practice,&rdquo; says Jeff Pietz, Lakeside&rsquo;s athletic director and women&rsquo;s basketball coach. &ldquo;She scored a ton of points just outrunning people.&rdquo;</p>

						<p>When it came time to think about college, the UW wasn&rsquo;t on Jensen’s radar. &ldquo;I just expected that I was going to play basketball or run track at a small school,&rdquo; she says.</p>

						<p>Then she discovered Hometown Huskies.</p>
					</div><!-- .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block -->

		<section class="photo-block hallie-starting"></section><!-- .photo-block -->

		<section class="text-block">
			<div class="container">
				<div class="row">
					<div class="copy">
						<h2>Keeping it local</h2>
						<p>UW Women&rsquo;s Rowing recruits top talent from around the world. But, says Josh Gautreau, assistant coach and lead recruiter, much of the team&rsquo;s historic success stems from walk-ons from Washington state. Like Jensen, many have proven themselves in a range of other sports.</p>

						<p>They have what Gautreau calls &ldquo;engines,&rdquo; and those engines have powered success: &ldquo;At each of the last five Olympics, someone who walked on at the UW has medaled,&rdquo; he says.</p>

						<p>Gautreau helped launch Hometown Huskies to broaden the walk-on talent pipeline even more. The program offers a one-year, full-tuition scholarship to a promising student-athlete from Washington state who has never rowed before. If she excels, she may earn additional rowing scholarships. But first she has to prove herself.</p>

						<p>When Jensen heard about the scholarship, she decided to apply &mdash; and when she visited the UW, she knew it was where she wanted to be. She loved the Seattle campus and the high academic standards, and she especially liked the challenge of competing at the Division I level.</p>

						<p>&ldquo;I remember the moment I walked into Conibear Shellhouse and saw everyone working out,&rdquo; she says. &ldquo;I heard someone say that rowing is like cross-country on steroids. It&rsquo;s endurance and strength &mdash; everything about it just locked me in.&rdquo;</p>
					</div><!-- .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block -->

		<section class="photo-block photo-quote classroom blur-focus">
			<div class="container">
				<div class="row">
					<blockquote>Excellence should be a habit in both the classroom and the boathouse.
						<p class="caption">Hallie Jensen</p>
					</blockquote>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .photo-block -->

		<section class="text-block">
			<div class="container">
				<div class="row">
					<div class="copy">
						<h2>On and off the water</h2>
						<p>Jensen was among several promising finalists for the inaugural Hometown Huskies scholarship, and Gautreau cites her physical ability, work ethic and resiliency as the factors that pushed her over the top.</p>

						<p>These qualities have served Jensen well over the past year. She has thrived in her transition to a fulfilling student life, as well as Division I athletics.</p>

						<p>&ldquo;I really like the atmosphere of my classes and and studying things I&rsquo;m interested in,&rdquo; Jensen says, citing her courses in English, women&rsquo;s studies and the history of classical music. Though her schedule is packed, Jensen has adjusted quickly to the independence of university life. &ldquo;I&rsquo;ve really enjoyed being in charge of my time so far,&rdquo; she says.</p>

						<p>Between two-a-day practices at Conibear Shellhouse, Jensen can usually be found studying at the nearby <a href="https://gohuskies.com/sports/2016/10/2/saas_about.aspx">Ackerley Academic Center</a>. With group and private study space, computers and tutors, the center has been crucial in helping Jensen stay on top of her schoolwork.</p>

						<p>&ldquo;Excellence should be a habit in both the classroom and the boathouse,&rdquo; says Jensen, who hopes to become a coach and a high school English teacher. &ldquo;Ultimately, I know I&rsquo;m here to get an education.&rdquo;</p>
					</div><!-- .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block -->

		<section class="photo-block photo-quote gym-rowing">
			<div class="container">
				<div class="row">
					<blockquote>Rowing is like cross-country on steroids. It&rsquo;s endurance and strength &mdash; everything about it just locked me in.
						<p class="caption">Hallie Jensen</p>
					</blockquote>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .photo-block -->

		<section class="text-block">
			<div class="container">
				<div class="row">
					<div class="copy">
						<h2>Shaping potential into reality</h2>
						<p>Most mornings at 6:45, Jensen and her teammates arrive at Conibear for a workout on land, then hit Lake Union to test their mettle against each other before heading to class.</p>

						<p>In the afternoon, they return to Conibear, often going back out on the water. Rain or shine, they push themselves as Gautreau, Assistant Coach Maggie Philipps and Head Coach Yasmin Farooq speed by on motorized boats, instructing the rowers on everything from mechanics to mindset.</p>

						<p><em>Shoulders down, no rocking, stay strong through the core!</em></p>

						<p><em>Watch your outside wrist!</em></p>

						<p><em>Get your minds right. Demand more earlier!</em></p>

						<p>Especially in the dark hours of fall and early winter, it can be tough. When race season is still far off, the qualities of patience, commitment and positivity can be as important as talent. Jensen has the added motivation &mdash; and pressure &mdash; of her Hometown Husky scholarship.</p>

						<p>&ldquo;They put a lot of trust in me by selecting me,&rdquo; she says. &ldquo;It&rsquo;s my duty to prove that they made the right choice.&rdquo;</p>

						<p>As race season grows closer, Jensen&rsquo;s hard work begins to pay off. &ldquo;All the hours I spent on the erg [ergonomic rowing machine] working on my form and core, sitting up straight and using my legs have really helped. Those things are becoming muscle memory,&rdquo; she says.</p>

						<p>Her coaches have noticed. Just a few days before the Husky Open, Jensen is bumped up to stroke oar in the novice eight boat. A key link between the coxswain and the rest of the boat, the stroke oar sets the pace for the rest of the team.</p>

						<p>&ldquo;Hallie has great rhythm,&rdquo; says Farooq. &ldquo;Her stroke is longer than everybody else&rsquo;s in that boat. If she can carve a long arc through the water, it&rsquo;s going to make everybody behind her row longer.&rdquo;</p>
					</div><!-- .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block -->

		<section class="photo-block photo-quote hallie-rowing blur-focus">
			<div class="container">
				<div class="row">
					<blockquote>They put a lot of trust in me, it&rsquo;s my duty to prove that they made the right choice.
						<p class="caption">Hallie Jensen</p>
					</blockquote>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .photo-block -->

		<section class="slideshow">
			<div class="slick">
				<div>
					<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/hometown-huskies/slider/1.jpg' ?>" alt="TBD">
                    <div class="caption">
                        <p>Caption TBD</p>
                    </div>
				</div>
				<div>
					<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/hometown-huskies/slider/2.jpg' ?>" alt="TBD">
                    <div class="caption">
                        <p>Caption TBD</p>
                    </div>
				</div>
				<div>
					<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/hometown-huskies/slider/3.jpg' ?>" alt="TBD">
                    <div class="caption">
                        <p>Caption TBD</p>
                    </div>
				</div>
				<div>
					<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/hometown-huskies/slider/4.jpg' ?>" alt="TBD">
                    <div class="caption">
                        <p>Caption TBD</p>
                    </div>
				</div>
				<div>
					<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/hometown-huskies/slider/5.jpg' ?>" alt="TBD">
                    <div class="caption">
                        <p>Caption TBD</p>
                    </div>
				</div>
				<div>
					<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/hometown-huskies/slider/6.jpg' ?>" alt="TBD">
                    <div class="caption">
                        <p>Caption TBD</p>
                    </div>
				</div>
				<div>
					<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/hometown-huskies/slider/7.jpg' ?>" alt="TBD">
                    <div class="caption">
                        <p>Caption TBD</p>
                    </div>
				</div>
				<div>
					<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/hometown-huskies/slider/8.jpg' ?>" alt="TBD">
                    <div class="caption">
                        <p>Caption TBD</p>
                    </div>
				</div>
			</div>
		</section><!-- .slideshow -->

		<section class="text-block">
			<div class="container">
				<div class="row">
					<div class="copy">
						<h2>Beyond the finish line</h2>
						<p>On that sunny morning in March, the novice eight flies down the course. To an outsider, the rowers seem to glide in sync effortlessly. The only reminder of the intense physical demands of the race is the coxswain&rsquo;s shout.</p>

						<p><em>Boom! Legs! Boom! Legs! Boom! Legs!</em></p>

						<p>Tailed closely by a boat of UW sophomores and juniors &mdash; and far ahead of boats from two other schools &mdash; Jensen and her teammates look calm and controlled.</p>

						<p>As they race through the Montlake Cut, Jensen doesn&rsquo;t hear the crowd. Her muscles are on fire, but months of pushing herself to her limits has prepared her for this. Only when her team crosses the finish line first does she relax.</p>

						<p>&ldquo;I could barely hold myself up, but I was very proud of our performance,&rdquo; says Jensen later in the day. Then she turns quickly to the next hurdle. &ldquo;Hopefully I&rsquo;ll get to race at the San Diego Crew Classic next weekend,&rdquo; she says. &ldquo;After that, who knows?&rdquo;</p>

						<p>Jensen has a lot to look forward to in the next three years. She hopes to keep challenging herself and her teammates, contributing to the UW&rdquo;s winning legacy along the way.</p>

						<p>&ldquo;I could have played it safe and pursued collegiate running or basketball,&rdquo; she says. &ldquo;But since the first day of training, I&rsquo;ve felt that this is where I should be. I love this program and feel so blessed that I get to live out this dream.&rdquo;</p>

						<h2>About Hometown Huskies</h2>
						
						<p>The Hometown Huskies program is open to athletes from across Washington state. Current and future UW students are invited to try out for the women&rsquo;s crew team, and the scholarship is awarded annually to the most deserving walk-on athlete.</p>

						<?php campaign_pubdate($post, $publishMonthYear); ?>
					</div><!-- .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block -->

	</main><!-- #main_content -->
</div><!-- #immersive-body -->

<?php
	include(locate_template('include-giving.php'));//ADD CUSTOM PHOTO
	get_template_part('footer', 'campaign-v2');
?>

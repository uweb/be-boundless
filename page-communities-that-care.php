<?php
	$meta = '';
	$styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/socialwork.css' type='text/css' media='all' />";
	$scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/socialwork.min.js' type='text/javascript'></script>";
	$storyCodes = 'ESIEND';
	$storyAppeal = 'Your support of students like Stephan Blount, Kelley Pascoe and Eric Agyemang and programs like Communities That Care propels our global community forward, giving all children the chance to reach their fullest potential.';
	get_header( "campaign-v2" );
?>

<div id="immersive-body">
	<section class="intro" id="intro-vid">
		<button id="pause">Pause</button>
		<video autoplay muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/socialwork/poster.png' ?>" class="fullscreen-bg__video" id="full-bg-video">
			<source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/socialwork/header.mp4' ?>" type="video/mp4">
		</video>
		<div class="intro-body">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-1 col-md-offset-1 col-lg-offset-2" id='intro-text'>
					<h1>Creating communities that care</h1>
					<span class="udub-slant"><span></span></span>
					<p>In communities across Seattle, students from the UW School of Social Work are dedicated to increasing young people’s chances of achieving success.</p>
				</div><!-- .col-xs-8 .col-sm-8 .col-md-8 .col-lg-8 .col-xs-offset-1 .col-md-offset-1 .col-lg-offset-2 #intro-text -->
			</div><!-- .row -->
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
						<p>Stephan Blount stands before a group of Madrona Elementary sixth-graders eager to be set free after sitting in classrooms all day. On this particular afternoon, he’s teaching these young students about the best and worst ways to communicate.</p>
						<p>“Let’s try a game,” Blount tells them, and the children’s faces light up instantly. “Everyone get in a circle. I’m going to whisper something in the ear of one of you. I want you to whisper that to the next person. When it’s gone around the circle, we’ll check how close it is to what we started with.”</p>
						<p>It may seem simple — but through games like telephone, Blount, a second-year master’s candidate at the University of Washington School of Social Work, is working to change outcomes for youth through the principles of a program developed at the UW. It’s called Communities That Care (CTC), and its evidence-based content is now used around the world.</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .start .white -->
<!-- 		<section class="text-block profile white">
			<div class="background"></div>
			<div class="text">
				<h2>Stephan Blount</h2>
				<p>
					Master’s candidate,<br />
					School of Social Work
				</p>
			</div>
			<div id="blount-1" class="photograph"></div>
			<div id="blount-2" class="photograph"></div>
		  </section> --><!-- .profile .profile-1 -->
		  <section id="blount" class="text-block grey photo1">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-1 two-column-copy-left">
						<blockquote>
							<cite>
								<p>
									<span>Stephan Blount</span><br />
									Master’s candidate,<br />
									School of Social Work
								</p>
							</cite>
						</blockquote>
					</div><!-- .col-md-5 .col-md-offset-1 .two-column-copy-left -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .grey -->
		<section class="text-block white">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy reduced-top">
						<h3>Changing futures, one student at a time</h3>
						<p>For his social work practicum, Blount is helping implement Communities That Care principles through Communities in Action, a program where Seattle residents come together to increase protective factors and reduce risk factors to promote healthy child development.</p>
						<p>Along with fellow UW master’s candidates Kelley Pascoe and Eric Agyemang, Blount is teaching students from schools in southeast and central Seattle.</p>
						<p>“We’re working to deliver life skills training to middle schoolers,” Blount explains. “Our part began after a group of agencies came together to address things in their communities affecting their youth that they wanted to work through.”</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block white -->



		<section id="video" class="text-block">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h3>How does Communities in Action bring about change?</h3>
						<p>Little League coach Aaron Parker is using Communities in Action principles to help his team succeed both on the field and off.</p>
						<p class="play-container">
							<a data-lity class="play" href="https://www.youtube.com/embed/3DvGGqEh0ug?autoplay=1&rel=0&showinfo=0">
								See his story 
								<svg aria-hidden="true" x="0px" y="0px" width="14px" height="3px" viewBox="0 0 14 3" enable-background="new 0 0 14 3" xml:space="preserve"><rect fill="#4b2e83" width="14" height="3"/></svg>
							</a>
						</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #video .text-block .white -->



		<section class="slides">
			<!-- <div id="slide-1" class="slide"></div> -->
			<!-- <div id="slide-2" class="slide"></div>
			<div id="slide-3" class="slide"></div>
			<div id="slide-4" class="slide"></div> -->
			<img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/SocialDev_graphic-static.png" aria-hidden class="img-responsive" />
			<img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/SocialDev_graphic-static-mobile.png" aria-hidden class="img-responsive mobile" />
		</section><!-- .text-block .slides -->
		<div class="sr-only">
			<h3>It takes a team</h3>
			<p>Applying Communities That Care’s social development strategy lets community leaders like Aaron Parker help young people learn how to choose healthy behaviors that lead to bright futures. Life, like baseball, is a team sport that requires good habits, hard work and supportive relationships.</p>
			<h4>Coach</h4>
			<p>The coach is the committed and clear-headed adult who sets the standards, such as showing up on time and playing by the rules of the game.</p>
			<h4>Team</h4>
			<p>The team is a unified group with diverse players that share a common goal and follow the same rules, but also get the celbrate their differences and develop their strengths.</p>
			<h4>Community</h4>
			<p>Communities are emplowered when they connect with young people and provide meaningful opportunities for youth to thrive and flourish.</p>
			<h4>Bonding</h4>
			<p>Bonding &mdash; with other youth, coaches, teachers and family and community members &mdash; is teh magic that makes the social development strategy work, and it's what fosters lasting, healthy behaviors. Bonding is waht motivates young poeple to follow standards for healthy behaviors, and stengthens each step of the strategy.</p>
			<h4>Opportunities</h4>
			<p>The social development strategy emphasizes the importance of providing real-world opportunities for young people so they can develop new skills.</p>
			<h4>Skills</h4>
			<p>As young people master new skills, they build pride in themselves and confidence in their communities, which stand behind them.</p>
			<h4>Recognition</h4>
			<p>Recognizing a young person’s newly acquired skills cements their sense of accomplishment and helps them build trust with the positive adults and peers in their lives.</p>
			<h4>Healthy behaviors</h4>
			<p>Now that they’ve learned the social development strategy, children are more likely to choose healthy behaviors, like conflict resolution, over unhealthy ones, like drinking or doing drugs.</p>
		</div><!-- .sr-only -->
		<section class="text-block white">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-1 two-column-copy-left">
						<p>Communities in Action began in 2013, when more than 2,300 students in grades six, eight, 10 and 12 responded to a survey about the challenges in their daily lives. Like the data from Communities That Care, the results showed that the students faced bullying, fighting, drug use and depression.</p>
						<p>Margaret Spearmon, chief officer of community engagement and diversity at the School of Social Work, oversees Communities in Action with project manager Vaughnetta J. Barton. Their goal is to help communities use data about their youth to make informed decisions on how to meet kids’ needs — and develop a plan of action to meet those needs. While the communities drive the plan, local organizations and schools put it in play.</p>
					</div><!-- .col-md-5 .col-md-offset-1 .two-column-copy-left -->
					<div class="col-md-5 two-column-copy-right">
						<div class="pull-quote">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/MargaretSpearmon.png" alt="Photograph of Margaret Spearmon, Ph.D." class="img-inset pull-left" />
							<p class="meta">
								<span class="name">Margaret Spearmon, Ph.D.</span><br />
								<span class="title">Chief Officer of Community Engagement and Diversity, School of Social Work</span>
							</p>
							<div class="clearfix"></div>
							<p class="quote">“The most exciting part about partnering with the UW has been the opportunity to work with knowledgeable, creative and talented partners who are committed to excellence in promoting healthy youth development through prevention programs.”</p>
						</div><!-- .pull-quote -->
						<div class="pull-quote">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/VaughnettaBarton.png" alt="Photograph of Vaughnetta Barton, M.S.W." class="img-inset pull-left" />
							<p class="meta">
								<span class="name">Vaughnetta Barton, M.S.W.</span><br />
								<span class="title">Project Manager, Communities in Action, School of Social Work</span>
							</p>
							<div class="clearfix"></div>
							<p class="quote">“Community-based initiatives are about empowerment. When communities use their own voice and data to identify challenges and make decisions about what they need to do, they are empowered and real change happens.”</p>
					</div><!-- .col-md-5 .two-column-copy-right -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block white -->
		<section id="pascoe" class="text-block grey photo1">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-1 two-column-copy-left">
						<blockquote>
							<p class="quote">I really enjoyed watching the students help each other. When we led games or discussions, students were always willing to support their classmates in understanding the material at hand.</p>
							<cite>
								<p>
									<span>Kelley Pascoe</span><br />
									Master’s candidate,<br />
									School of Social Work
								</p>
							</cite>
						</blockquote>
					</div><!-- .col-md-5 .col-md-offset-1 .two-column-copy-left -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .grey -->
		<section id="agyemang" class="text-block grey photo1">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-6 two-column-copy-right">
						<blockquote>
							<p class="quote">Students have gained a lot of tools for decision-making and self-image, and this will go a long way toward helping them make good decisions in their daily lives and become responsible citizens.</p>
							<cite>
								<p>
									<span>Eric Agyemang</span><br />
									Master’s candidate,<br />
									School of Social Work
								</p>
							</cite>
						</blockquote>
					</div><!-- .col-md-5 .two-column-copy-right -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .grey .quote2 -->
		<section class="text-block giving-widget-promoted">
			<div class="container">
				<div class="row">
					<div class="col-md-6 copy">
						<h3>You can help today’s youth</h3>
						<p>By supporting UW students like Stephan Blount, Kelley and Eric, you can help children access a brighter future for themselves and their communities.</p>
						<div class="visible-md-block visible-lg-block">
							<div class="boundless-button sm dark give"><span><a id="immersive-give-promoted" data-fund="<?php echo $storyCodes; ?>" href="#giving-widget-promoted">Give now</a></span></div>
							<button id="close-give">Close</button>
							<div id="immersive-give-iframe-promoted"></div>
						</div><!-- .visible-md-block .visible-lg-block -->
						<div class="visible-xs-block visible-sm-block">
							<div class="boundless-button sm dark give"><span><a href="https://www.washington.edu/giving/make-a-gift/?page=funds&source_typ=3&source=<?php echo $storyCodes; ?>">Give now</a></span></div>
						</div><!-- .visible-xs-block .visible-sm-block -->
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block gold -->
		<section class="text-block white">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy reduced-top no-bottom">
						<h3>Inspired by his mother</h3>
						<p>Communities That Care is close to Blount’s heart. He was born to a 16-year-old single mother in Anchorage, Alaska, and during his childhood they often relied on outside assistance to cope with the challenges of everyday life.</p>
						<img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/mother.png" alt="Photograph of Stephen Bount's Mother" class="img-responsive pull-image" />
						<p>“My mom was so young when she had me,” he says. “We had a lot of help from human service agencies while I was growing up. It taught me the importance of that type of work, and it gave me a lot of empathy for others facing similar challenges.”</p>
						<p>It also gave him a direction in life: social work. To support himself while earning an undergraduate degree in human services at the University of Alaska, Blount took a job working in a group home for adults with developmental disabilities.</p>
						<p>“It was just such cool work,” he says. “One resident at the group home was around my age. I could see how he became more independent when you gave him opportunities to do so.”</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy notop no-bottom">
						<h3>A community leader’s perspective</h3>
						<div class="youtube-container">
							<iframe width="1280" height="720" src="https://www.youtube.com/embed/9CTe-yBWu_Y?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							<div class="youtube-caption">
								<p class="h3">How does Communities in Action help local nonprofits?</p>
								<p class="small"><span>Edith Elion, ’74, ’77 </span></br>Member, Communities in Action Board Leadership Workgroup </br>Executive Director, Atlantic Street Center</p>
							</div>
						</div>
					</div><!-- .col-md-10 .col-md-offset-1 .copy .notop -->
				</div><!-- .row -->
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy notop">
						<h2 class="h3">Healthy behaviors and bright futures</h2>
						<p>Fostering healthy, resilient communities is part of the UW’s <a href="http://www.washington.edu/populationhealth/">Population Health Initiative</a>, as well as a critical component of CTC. In particular, a major focus of the CTC program is that change must develop organically with the help of community stakeholders, rather than be imposed on them by an outside agency that thinks it knows best what a given group needs or wants.</p>
						<p>In the case of Blount’s group, the agencies involved decided for themselves what outcomes would be most beneficial to the youth in their community, as well as how to get there. The children were then surveyed about what they perceived to be their biggest struggles. Only after that work was complete did the stakeholders choose what to tackle.</p>
						<p>In the end, they determined that it was critical to help youth resist the lures of underage drinking and smoking — behaviors that put them at risk for delinquency — and instead opt to stay in school and choose peaceful behavior over violence.</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy .notop -->
				</div><!-- .row -->
			</div><!-- .container -->
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h3 class="fancypants">Youth whose communities participate in Communities That Care are less likely to engage in risky behaviors.</h3>
						<p class="caption fancy"><a href="https://www.ncbi.nlm.nih.gov/pubmed/19736331">Archives of Pediatrics and Adolescent Medicine</a>, 2009</p>
					</div><!-- .col-md-8 .col-md-offset-2 -->
				</div><!-- .row -->
				<div class="row row-purple">
					<div class="col-xs-6 col-sm-3 col-md-3">
						<img data-src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/CTC-Communities-Illustration-01-1.gif" src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/CTC-Communities-Illustration-01-1.gif" alt="25% less likely to start engaging in crimes" class="img-responsive lazyload" />
					</div><!-- .col-xs-3 .col-sm-3  .col-md-3 -->
					<div class="col-xs-6 col-sm-3 col-md-3">
						<img data-src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/CTC-Communities-Illustration-02-1.gif" src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/CTC-Communities-Illustration-02-1.gif" alt="32% less likely to start drinking alcohol" class="img-responsive lazyload" />
					</div><!-- .col-xs-3 .col-sm-3 .col-md-3 -->
					<div class="col-xs-6 col-sm-3 col-md-3">
						<img data-src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/CTC-Communities-Illustration-03-1.gif" src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/CTC-Communities-Illustration-03-1.gif" alt="33% less likely to start smoking cigarettes" class="img-responsive lazyload" />
					</div><!-- .col-xs-3 .col-sm-3 .col-md-3 -->
					<div class="col-xs-6 col-sm-3 col-md-3">
						<img data-src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/CTC-Communities-Illustration-04-1.gif" src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/CTC-Communities-Illustration-04-1.gif" alt="37 less likely to binge-drink" class="img-responsive lazyload" />
					</div><!-- .col-xs-3 .col-sm-3 .col-md-3 -->
				</div><!-- .row -->
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<p>Because the CTC program is evidence-based and draws on the strengths of the community it serves, Blount says he’s confident the program will change the outcomes of the sixth-graders he works with.</p>
						<p>“I’m just implementing what the stakeholders have chosen,” he says. “They’re the experts on what they need.”</p>
						<p>It’s clear that the model works. In the years since CTC was first implemented, numerous scientific studies have shown just how effective it is. Data from one CTC model shows that youth who participated in the program were 25 to 37 percent less likely to have health and behavior problems like smoking, drug and alcohol use, or delinquency.</p>
						<p>In addition to improving lives, the program also offers significant cost savings: For every dollar invested in CTC, $5.31 is returned in the form of lower substance abuse and delinquency costs.</p>
						<p class="text-center"><img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/socialwork/CTC-Communities-Illustration-05-1.gif" alt="$1 invested in the CTC program equals $5.31 in savings for community health" class="img-responsive center-block" /></p>
						<p class="caption">*Washington State Institute for Public Policy, May 2017</p>
						<p>Alongside the valuable partnerships with community members, a big part of the success of CTC and Communities in Action has been student support from the Excellence in Social Impact Scholarship. Blount, Agyemang and Pascoe all received scholarships from this fund, which was established in 2016 to help reduce the debt load of social work students. The fund is transforming the school’s ability to prepare highly gifted students to lead, innovate and serve in local, national and global communities.</p>
						<p>For Blount, this financial support meant that he could focus time and energy on his studies and his students at Madrona Elementary. Even more important, it has helped him explore the career he knows he was meant to pursue. “I have always been set on doing some sort of human services or social work,” he says. “I don’t see myself doing anything else.”</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block white -->
	</main><!-- #main_content -->
	<div id="popup"></div>
</div><!-- #immersive-body -->

<?php
	include(locate_template('include-giving.php'));
	get_template_part('footer','campaign-v2');
?>
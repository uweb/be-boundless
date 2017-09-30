<?php
	$meta = '';
	$styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/pharmacy.css' type='text/css' media='all' />";
	$scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/pharmacy.min.js' type='text/javascript'></script>";
	$storyCodes = 'PHARSU';
	$storyAppeal = 'Support groundbreaking research and the future of health care by contributing to the School of Pharmacy.';
	get_header( "campaign-v2" );
?>
<div id="immersive-body">
	<section class="intro" id="intro-vid">
		<div class="intro-body">
			<div class="row">
				<div class="col-sm-8 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-2" id='intro-text'>
					<h1>A POCKET-SIZE RESEARCH REVOLUTION</h1>
					<p>With a device that can model a real kidney, researchers at the UW School of Pharmacy are giving new hope to people with kidney conditions — as well as astronauts who dream of exploring the farthest reaches of space.</p>
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
		<section class="text-block start white before">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<p>Imagine that you live in a house on the beach.</p>
						<p>Day to day, your view of the ocean never seems to change. But after 10 or 15 years, you look outside one morning and see the water lapping at your porch.</p>
						<p>For many, that’s what it’s like to have kidney disease. “It slowly progresses over years, maybe even decades, but people often don’t know it until something goes wrong — until the water is at their door,” explains Catherine Yeung, research assistant professor at the University of Washington School of Pharmacy.</p>
						<img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/pharmacy/img-infographic.png" alt="15% of adults in the U.S. have chronic kidney disease" class="img-responsive pull-right" />
						<p>The Centers for Disease Control and Prevention (CDC) estimates that while 15 percent of American adults have chronic kidney disease, most of them don’t know it. Only when the disease is in its later stages — when it’s often too late for reversal — do more severe symptoms cause people to seek help.</p>
						<p>An inability to track the early stages of chronic kidney disease leaves researchers like Yeung at a loss to understand what early biological markers might look like. There’s also much to learn about how kidney problems affect the body’s ability to eliminate medications.</p>
						<p>At the School of Pharmacy, an interdisciplinary team is undertaking revolutionary work that could change the future of precision medicine and kidney research — all with a device the size of a credit card.</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .start .white -->
		<section id="video" class="video-block video-ani">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="video video-ani center-block text-center">
							<a data-lity href="https://www.youtube.com/embed/CYBrpCUkdVQ?autoplay=1&rel=0&showinfo=0">
								<p class="play-text">What is kidney-on-a-chip?</p>
								<svg xmlns="http://www.w3.org/2000/svg" width="75.649" height="75.625" viewBox="0 0 75.649 75.625">
									<circle fill="none" stroke="#4b2e83" stroke-width="4.649" stroke-miterlimit="10" cx="37.785" cy="37.822" r="34.703"/>
									<path fill="#4b2e83" d="M25.88 19.814l32.885 18.008-32.886 18.01"/>
								</svg>
							</a>
						</div><!-- .video .video-ani .center-block .text-center -->
					</div><!-- .col-md-10 .col-md-offset-1 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #video .text-block .white -->

		<section class="text-block white after">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h2>A breakthrough in kidney research</h2>
						<p>It’s called kidney-on-a-chip. Inside its small frame are thousands of live kidney cells that can model the functions of a human kidney. For pharmacy researchers, this device has opened up countless possibilities, as kidneys play a major role in the body’s ability to process medications.</p>
						<p>“Kidneys are part of the ‘holy trinity’ of drug clearance,” says Edward Kelly, associate professor at the School of Pharmacy and lead investigator on the project. “The intestine is involved in absorption, the liver is involved in metabolism and the kidneys are involved in excretion,” he says, meaning that they help the body clear medication via urine.</p>
						<p>People with failing kidneys might not be able to process medications as efficiently as those with healthy kidneys. On top of that, there’s the possibility that certain medications could further compromise unhealthy kidneys. This is critical because — unlike the liver and other organs — the kidney lacks the ability to regenerate.</p>
						<div class="center-block">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/pharmacy/img-scientistatdesk.jpg" alt="Team member Jonathan Himmelfarb, M.D., holds an early prototype of kidney-on-a-chip." class="img-responsive center-block img-teammate" />
							<p class="caption">Team member Jonathan Himmelfarb, M.D., holds an early prototype of kidney-on-a-chip.</p>
						</div><!-- .center-block -->
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .white -->
		<section class="text-block graphpaper-white first">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/pharmacy/img-chip.png" alt="Photograph of the Kidney on a Chip" class="img-responsive pull-left img-chip" />
						<p>That’s where the UW is focusing with kidney-on-a-chip.</p>
						<p>Working alongside Kelly and Yeung is Jonathan Himmelfarb, M.D., the Joseph W. Eschbach, M.D., Endowed Chair in Kidney Research at the UW School of Medicine and the internationally renowned director of the Kidney Research Institute, a collaborative effort between UW Medicine and Northwest Kidney Centers.</p>
						<blockquote>
							<p>“This big advance allows us to study the kidney in a very native, natural environment.”</p>
							<cite>&mdash; Catherine Yeung, Research Assistant Professor, UW School of Pharmacy</cite>
						</blockquote>
						<p>With support from both the UW and Northwest Kidney Centers, team members brought their expertise together for the kidney-on-a-chip project. The team was also instrumental in the design of the chip: They worked with UW spin-out Nortis to create a device that allows researchers to run medications through the system.</p>
						<p>Previously, researchers would put kidney cells on a plate, add medications and examine the interaction. “But that’s not what happens in the body,” says Yeung. “In the body, there’s always blood flowing, and one of the things that we’ve been able to address with kidney-on-a-chip is that we have flow.” As a result, the chip functions as a kidney normally would. “We push media through the chip using a syringe, and it flows out,” says Kelly. The fluid is then collected and tested.</p>
						<p>With a closed system, drugs can flow through the chip without requiring gravity to keep the fluids in contact with the cells. This distinguishing factor helped the UW team be selected for special research that they’ll conduct in a place where liquids don’t follow the laws of gravity — but more on that later.</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .graphpaper-white .first -->
		<section class="text-block giving-widget-promoted">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-5 col-lg-6 col-lg-offset-4">
						<div>
							<h2>A brighter future for patients everywhere</h2>
							<p>Kidney-on-a-chip is one of the UW’s many efforts to tackle today’s biggest medical challenges. By supporting the Pharmaceutics Fund for Excellence, you can help improve disease treatment and prevention around the world.</p>
						</div>
					</div><!-- .first-col .col-xs-12 .col-sm-6 .col-sm-offset-6 .col-md-4 .col-md-offset-4 -->
					<div class="col-sec col-md-3 col-lg-2 visible-md-block visible-lg-block">
						<div>
							<div class="boundless-button sm dark give"><span><a id="immersive-give-promoted" data-fund="PHARSU" href="#giving-widget-promoted">Give now</a></span></div>
							<button id="close-give">Close</button>
						</div>
					</div><!-- .col-md-2 .col-md-offset-1 .col-sm-3 .col-xs-offset-1 .visible-md-block .visible-lg-block -->
					<div class="col-sec col-sm-6 col-sm-offset-6 visible-xs-block visible-sm-block">
						<div>
							<div class="boundless-button sm dark give"><span><a href="https://www.washington.edu/giving/make-a-gift/?page=funds&source_typ=3&source=<?php echo $storyCodes; ?>">Give now</a></span></div>
						</div>
					</div><!-- .col-md-2 .col-md-offset-1 .col-sm-3 .col-xs-offset-1 .visible-xs-block .visible-sm-block -->
				</div><!-- .row -->
			</div><!-- .container -->
			<div id="immersive-give-iframe-promoted"></div>
		</section>
		<section class="text-block white">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy lessspaceforjj">
						<h2 class="h3">A faster, safer method for testing medications</h2>
						<p>By giving researchers the ability to test multiple drugs at the same time, the chip may lead to a quicker and safer approval process for new medications. Because the harmful effects of medications would be detected with the chip, the need for human and animal test subjects would drop dramatically.</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy .lessspaceforjj -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .white -->
		<section class="text-block graphpaper-white second">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<iframe width="1280" height="666" src="https://www.youtube.com/embed/Y-PNrzjxGUc?rel=0&amp;showinfo=0" title="How will kidney-on-a-chip help pharmacists? Catherine Yeung explains." frameborder="0" allowfullscreen></iframe>
						<p>The UW team has already begun testing various drugs, including antibiotics that are less harmful to kidneys.</p>
						<p>“In one instance, we tested two antibiotics against each other,” describes Wade Washington, a sophomore at the UW and a researcher in Kelly’s lab. “With the chips, we could tell that at certain dosages, one drug was less nephrotoxic [damaging to the kidneys] than the other.”</p>
						<div id="slideshow">
							<div class="slick-slideshows">
								<div>
									<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/pharmacy/slide-1.jpg' ?>" alt=""/>
									<p>Edward Kelly, associate professor at the UW School of Pharmacy, holds a kidney-on-a-chip.</p>
								</div>
								<div>
									<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/pharmacy/slide-3.jpg' ?>" alt=""/>
									<p>Catherine Yeung (left), research assistant professor, and Edward Kelly at work in Kelly’s lab.</p>
								</div>
								<div>
									<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/pharmacy/slide-2.jpg' ?>" alt=""/>
									<p>Inside kidney-on-a-chip are thousands of live kidney cells that model the functions of a human kidney.</p>
								</div>
								<div>
									<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/pharmacy/slide-4.jpg' ?>" alt=""/>
									<p>By giving researchers the ability to test multiple drugs at the same time, kidney-on-a-chip may lead to a quicker and safer approval process for new medications.</p>
								</div>
								<div>
									<img data-lazy="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/pharmacy/slide-5.jpg' ?>" alt=""/>
									<p>Wade Washington (left), a sophomore at the UW, is part of the kidney-on-a-chip team, alongside School of Pharmacy graduate students such as Elijah Weber.</p>
								</div>
							</div><!-- .slick-slideshows -->
						</div><!-- #slideshow -->
						<p>Washington knows firsthand the impact this research could have. He was born with chronic kidney disease and underwent a successful transplant when he was 15.</p>
						<p>“I took antibiotics after my transplant surgery,” Washington says. “For people like me with kidney disease, antibiotics can be a double-edged sword. I see the chips as definitely a better way to test for nephrotoxicity in new drugs.”</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .graphpaper-white .second .video1 -->
		<section class="text-block">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<iframe width="1280" height="666" src="https://www.youtube.com/embed/-NZueNYSwnY?rel=0&amp;showinfo=0" title="How does kidney-on-a-chip work? Edward Kelly explains." frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>
		<section class="text-block graphpaper-black graphpaper-black-1">
			<div class="satellite"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h2 class="h3">Kidney-on-a-chip heads to outer space</h2>
						<p>What if you could speed up the development of kidney disease? What if you could see the water creeping toward your front door inch by inch?</p>
						<p>In 2018, the UW team will have the opportunity to find out. They’re sending kidney-on-a-chip to the one place where time does speed up: outer space.</p>
						<p>Microgravity acts as an accelerant, so kidney problems that take decades to develop on Earth need only weeks or months on the International Space Station, where astronauts will study the chips over the course of a few weeks.</p>
						<p>“Use of the kidney-on-a chip here on Earth has already taught us a lot about kidney function and kidney diseases,” says Himmelfarb. “The opportunity to study how the loss of gravitational forces affects kidney cellular function has the potential to improve the health of people on Earth, as well as prevent medical complications that astronauts experience from weightlessness.”</p>
						<blockquote>
							<p>“Kidneys synthesize the active form of vitamin D, which is necessary to maintain healthy bones, so we’ll be asking if kidney cells still perform that function in microgravity.”</p>
							<cite>&mdash; Edward Kelly, Associate Professor, UW School of Pharmacy</cite>
						</blockquote>
						<p>Team member Kenneth Thummel, the Milo Gibaldi Endowed Chair in Pharmaceutics at the School of Pharmacy, has previous experience keeping astronauts healthy. With long-standing research interests in vitamin D metabolism and the regulation of mineral homeostasis, a key component of kidney function, Thummel was part of a special National Research Council committee that established guidelines for chemical exposure in spacecraft air and water.</p>
						<p>Bone loss is also a major concern for astronauts, Kelly says. “That’s why astronauts exercise and employ other means to counter this issue when they’re in space. Kidneys synthesize the active form of vitamin D, which is necessary to maintain healthy bones, so we’ll be asking if kidney cells still perform that function in microgravity.”</p>
						<p>Sending kidney-on-a-chip to the Space Station also stands to benefit another group of interstellar travelers: the first Mars colonists.</p>
						<p>The current record for the most consecutive days in space is 438 — but in theory, Mars colonists would remain for decades. After studying chips on the Space Station, researchers might have a better idea of how to help the human body withstand the effects of spending so much time in a lower-gravity environment.</p>
						<p>“Sending cells to space like this has never been done before,” says Yeung. “This is experimental in the truest sense of the word, which is incredibly exciting.”</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .graphpaper-black -->
		<section class="text-block graphpaper-black graphpaper-black-2">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h2 class="h3">Real-life impact for people with kidney disease</h2>
						<p>After the chips return from space, the UW team plans to use their improved understanding of kidney mechanics to test whether kidney-on-a-chip can be used to cure diseases, in addition to treating and preventing them.</p>
						<p>Instead of giving patients experimental treatments that may or may not work, “We could see the effects in kidney-on-a-chip before we test them in humans,” says Kelly.</p>
						<p>For the researchers involved, kidney-on-a-chip might very well bring about changes in their lifetime, a rarity for big medical breakthroughs. This trailblazing science is made possible in large part by donors who support the Pharmaceutics Fund for Excellence, which invests in startup research projects like kidney-on-a-chip.</p>
						<p>A mission to improve the lives of people around the world — and the solar system — is shared across the UW as part of the <a href="http://www.washington.edu/populationhealth">Population Health Initiative</a>. By leveraging capabilities and opportunities on campus and beyond, researchers will have the tools to create healthier and more fulfilling lives for all.</p>
						<p>“As a pharmacist, I’m very satisfied to be able to show people what we’re doing and where their research dollars are going,” says Yeung. “With kidney-on-a-chip, we have an actual chance to impact the lives of patients.”</p>
						<div class="giving-widget">
							<h2>What you care about can change the world</h2>
							<p>The University of Washington is undertaking its most ambitious campaign ever: Be Boundless — For Washington, For the World. Support groundbreaking research and the future of health care by contributing to the School of Pharmacy.</p>
							<div class="visible-md-block visible-lg-block">
								<div class="text-center">
									<div class="boundless-button sm dark give givebutton2"><span><a id="immersive-give" class="givebutton2-inner" data-fund="<?php echo $storyCodes; ?>" href="#">Give now</a></span></div>
									<div id="immersive-give-iframe"></div>
								</div><!-- .text-center -->
							</div><!-- .visible-md-block .visible-lg-block -->
							<div class="visible-xs-block visible-sm-block">
								<div class="text-center">
									<div class="boundless-button sm dark give"><span><a href="https://www.washington.edu/giving/make-a-gift/?page=funds&source_typ=3&source=<?php echo $storyCodes; ?>">Give now</a></span></div>
								</div><!-- .text-center -->
							</div><!-- .visible-xs-block .visible-sm-block -->
							<img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/pharmacy/bkg-globe.png" alt="Illustration of earth from space" class="img-responsive center-block img-world" />
						</div><!-- .giving-widget -->
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
			<div class="planet"></div>
		</section><!-- .text-block .graphpaper-black -->
	</main><!-- #main_content -->
	<div id="popup"></div>
</div><!-- #immersive-body -->
<?php
	get_template_part('footer','campaign-v2');
?>
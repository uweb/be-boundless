<?php
	$meta = '';
	$styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/lovejoy.css' type='text/css' media='all' />";
	$scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/lovejoy.min.js' type='text/javascript'></script>";
	$storyCodes = 'EXCELL';
	$storyAppeal = 'Lorem ipsum dolor sit amet...';
	get_header( "campaign-v2" );
?>
<div id="immersive-body">
	<section class="intro" id="intro-vid">
		<div class="intro-body container">
			<div class="row">
				<div class="col-md-5 col-md-offset-6 col-xs-10 col-xs-offset-2" id='intro-text'>
					<h1>A Lifeline</br>to Mental Health</h1>
					<p>Lisa Lovejoy, a program coordinator at Harborview Medical Center, suffered for years with mental illness. By sharing her story, she hopes to inspire others to find their way to better health.</p>
				</div><!-- .col-sm-8 .col-md-8 .col-lg-8 .col-md-offset-1 .col-lg-offset-2 #intro-text -->
			</div><!-- .row -->
		</div><!-- .intro-body -->
		<!-- <section class="scrollit read-more">
			<p>Scroll Down</p>
			<div class="mouse">
				<div class="scroll"></div>
			</div> --><!-- .mouse -->
		<!-- </section> --><!-- .scrollit .read-more -->
	</section><!-- .intro #intro-vid -->
	<main id="main_content">
		<section class="text-block start white">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<p class="purple">“We looked like the perfect family,” says Lisa Lovejoy. “Everything looked so nice on the outside.”</p>
						<p>Family photos prove her point. Lovejoy had a beautiful mother and a handsome father who enjoyed spending time with friends and family. When she was a toddler, Lovejoy and her mother wore matching outfits. Later on, Lovejoy would star in high-school plays. She was talented, vibrant, going places.</p>
						<p>But those photos tell only a portion of the truth. “The discrepancy between what was real and what it looked like from the outside made me angry,” says Lovejoy. Her parents argued, then divorced. Her mother, who had mental health challenges, abused her. She spent years as a child, then as an adult, struggling with anxiety and depression.</p>
						<p>“It took me a long time to get help,” Lovejoy says. But eventually she did — at Harborview Medical Center.</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .start .white -->
		<section id="video" class="text-block white">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<a data-lity href="https://www.youtube.com/embed/7AYdC1iNhZs?autoplay=1&rel=0&showinfo=0" class="center-block">
							<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150">
								<circle id="play-cir" fill="none" stroke="#fff" stroke-width="4.649" stroke-miterlimit="10" cx="75" cy="75" r="70"/>
								<path id="play-tri" fill="#fff" d="M57.767,46.187L110.382,75l-52.616,28.816"/>
							</svg>
						</a>
					</div><!-- .col-md-10 .col-md-offset-1 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #video .text-block .white -->
		<section class="text-block white gradient-ending">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h2>The many faces of mental illness</h2>
						<p>Mental illness comes in many forms, from anxiety to schizophrenia and beyond, but all these illnesses share a stigma: People don’t want to talk about them. The distressing truth is that most of us know someone with mental illness.</p>
						<p>“One-third of Americans will have a mental health disorder, a substance-use disorder or both at some point in their lives,” says Jürgen Unützer, M.D., the chair of UW Medicine’s Department of Psychiatry and Behavioral Sciences. “Unfortunately, no family goes untouched.”</p>
						<p>Mental illness often arrives in full force in youth, as it did for Lovejoy. But when she set off for college, the Seattle native had big dreams.</p>
						<p>“I always wanted to do great things, to do things in the world,” she says.</p>
						<p>Unfortunately, she brought more than dreams to Bard College. She brought depression, mania and an ever-present sense of loneliness. Lovejoy lost sleep, lied to her teachers, stole a friend’s phone card and skipped classes. “I completely fell apart in a short amount of time,” she says. She left school and returned to Seattle, defeated.</p>
						<p class="gold-quote headline-gold white">I called it 'the darkness.'</br>It felt like I was falling down a chute. <b>– Lisa Lovejoy</b></p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .white -->

<section id="side-slider">
<div id="primary-wrapper" class="scroll-pane horizontal-only">
	<div id="horizontal-static-images">
		<img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/lovejoy/side-1.jpg' ?>" alt="image" class="img-responsive" id="horizontal-image-1" />
		<img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/lovejoy/side-2.jpg' ?>" alt="image" class="img-responsive" id="horizontal-image-2" />
		<!-- <img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/lovejoy/side-3.jpg' ?>" alt="image" class="img-responsive" id="horizontal-image-3" /> -->
		<img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/lovejoy/side-4.jpg' ?>" alt="image" class="img-responsive" id="horizontal-image-3" />
		<section id="sidescroll">
			<p>Continue scrolling</p>
			<p class="sideways">
				<a id="marker-1" data-href="#slide-1"></a>
				<a id="marker-2" data-href="#slide-2"></a>
				<a id="marker-3" data-href="#slide-3"></a>
				<a id="marker-4" class="down" data-href="#charts"></a>
			</p>
		</section>
		<!-- <section id="scrollit" class="scrollit read-more scroll-down-mid-story">
			<p>Scroll Down</p>
			<div class="mouse">
				<div class="scroll"></div>
			</div>
		</section> -->
	</div>
    <div id="secondary-wrapper" class="horizontal">
      <!-- <div class="scrollContent" id="slides"> -->
        <!-- START HORIZONTAL -->

		<section class="text-block black" id="slide-1">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h2>Losing her way</h2>
						<p>OOver the next two decades, Lovejoy handled her mental health issues as best she could. She took a series of easy jobs, but felt ashamed of them; she clearly wasn’t living up to her potential. She married a man, even though she thought she might be gay.</p> 
						<p>At the same time, Lovejoy was carrying a serious burden: a creeping sense of despair. “Every time I went to that place in my head, I called it ‘the darkness,’” she says. “It felt like I was falling down a chute.”</p> 
						<p>In 2007, as she entered the final year of her 30s, Lovejoy found herself divorced and living in an attic apartment with her two children. She was manic, depressed, worn out and barely maintaining her job. Then, at a doctor’s appointment, she broke down and wept — and the doctor admitted her to the psychiatric unit at UW Medical Center.</p>
						<p>“Finally, someone noticed that I was miserable,” Lovejoy says.</p> 
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .black -->
		<section class="text-block black" id="slide-2">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<p class="no-h2">It was the first of three hospitalizations that year. But instead of turning a corner, Lovejoy felt her life begin to dissolve.</p>
						<p>Her boss gently told her not to come back to work. She lost her apartment and moved in with her boyfriend — “a bad move,” she says. And in a decision that she still regrets, Lovejoy surrendered custody rights to her children, Zola and Delilah, saying that she felt like “a horrible mother.”</p>
						<p>Then she found a lifeline at Harborview Medical Center: dialectical behavioral therapy, or DBT.</p> 
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .black -->
		<section class="text-block black gradient" id="slide-3">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h2>Finding a therapeutic lifeline</h2>
						<p>A type of cognitive behavioral therapy developed by Marsha Linehan, a professor of psychology at the University of Washington, DBT was groundbreaking in that it brought together two therapeutic opposites: acceptance (through meditation, exercise and other activities) and change (through therapy and learned skills).</p>
						<p>In a stroke of good fortune for Lovejoy, Harborview was doing research on DBT when, encouraged by a friend, she called the hospital. Doctors diagnosed her with borderline personality disorder and entered her into the trial, which involved group therapy and individual counseling.</p>
						<p>“At first, I hated everyone in the group,” says Lovejoy with a laugh. But she started exercising and meditating. She argued less with her boyfriend and felt less depressed. Her relationship with her kids improved.</p>
						<p>“I saw examples of people who were getting much better,” says Lovejoy. “That gave me a lot more confidence.”</p> 
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .black -->

        <!-- END HORIZONTAL -->
  	<!-- </div> -->
  </div>
</div><!-- #primary-wrapper -->
</section>
		<section id="charts" class="text-block white charts">
			<div class="container">
				<div class="row">
					<div class="copy">
						<h2 class="orange">Who do you know?</h2>
						<div class="col-md-6">
							<img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/lovejoy/chart-1.jpg' ?>" alt="1 in 5 adults have a mental health condition; 1,049,000 in Washington state." class="img-responsive" />
							<p class="highlight orange">1 <span>in</span> 5</p>
							<p class="orange">adults has a mental health condition</p>
							<p>1,049,000 in Washington state</p>
						</div><!-- .col-md-6 .copy -->
						<div class="col-md-6">
							<img src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/lovejoy/chart-2.jpg' ?>" alt="60% do not receive adequate care; 635,000 in Washington state." class="img-responsive" />
							<p class="highlight orange">60%</p>
							<p class="orange">do not receive any treatment</p>
							<p>635,000 in Washington state</p>
						</div><!-- .col-md-6 .copy -->
						<p class="caption fancy"><a href="http://www.mentalhealthamerica.net/issues/state-mental-health-america">The State of Mental Health in America</a>, 2017</p>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .white -->
		<section class="text-block white">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy no-top">
						<p class="gold-quote headline-gold purple">You’re not a healthcare provider if all you do is what you bill for. <b>— Darcy Jaffe, Chief Nursing Officer, Harborview Medical Center</b></p>
						<h2>Providing more than healthcare</h2>
						<p>Today, Lovejoy works at the Housing and Recovery Through Peer Services (HARPS) program, funded by King County and administered at Harborview. HARPS staff help patients transfer into housing after they leave hospital-based behavioral health programs.</p>
						<p>Harborview and its faculty and staff offer more than physical health care. Their patients come from all walks of life, and some are hungry, poor and homeless. “All of these components have an impact on health,” says Darcy Jaffe, Harborview’s chief nursing officer and senior associate for patient care services. “You’re not a health care provider if all you do is what you bill for.”</p>
						<p>In the area of mental health and wellness, Harborview is part of a team, working with the government and nonprofits on programs like HARPS. The forthcoming UW Medicine Behavioral Health Institute, a key element of the <a href="http://www.acceleratemed.org">Campaign for UW Medicine</a> and the UW’s <a href="http://www.washington.edu/populationhealth">Population Health Initiative</a>, will further accelerate mental health work at Harborview — making the organization’s efforts in research, advocacy, training and patient care even more effective.</p>
						<p>When it comes to care, focused personal attention is essential. Harborview depends on employees like Lovejoy — formerly a hands-on client liaison, or “peer bridger,” and now a program coordinator — because they develop deep bonds with the people they help.</p>
						<p>“So much of what we do is working with motivation and hope,” says Brigitte Folz, the head of HARPS. “Lisa seemed like a perfect fit for the HARPS program.”</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .white -->
		<section id="video-body" class="text-block transSection mentors-caption">
			<p><span>Lisa Lovejoy with one of her daughters, Delilah, and her wife, Robie Flannagan.</span></p>
		</section><!-- #video-body-->
		<section class="text-block white">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy">
						<h2>A hard, joyous journey to recovery</h2>
						<p>Now 50, Lovejoy has a smile that lights up the room and a lively, self-aware sense of humor. In addition to having a job she loves, she recently married her wife, Robie, and she has reconciled with her mother and her children. Lovejoy is in therapy, and she meditates; lithium helps, too. There are still bad days, but DBT has given her the tools to cope.</p>
						<p>As Lovejoy says, recovery is not a straight upward line — there are hills and valleys, stops and starts. This is a truth that patients need to hear, especially when they’re having a hard time.</p>
						<p>“You can get back to that high point again,” she tells them. “It’s a zigzag. It’s a journey. And it’s hard and joyous.”</p>
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
					<hr>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .white -->
		<section class="text-block find-help-blank"> <!-- BLANK PLACE HOLDER FOR CRISIS COMM -->
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 copy no-top">
						<h2>Where to find help</h2>    
						<p>If you’re in crisis, please call the <b>Crisis Clinic of King County: 866-4-CRISIS (866-427-4747)</b>. They can schedule next-day crisis appointments at Harborview or other local sites with behavioral health clinics.</p>
						<p>Other resources include the <b>National Suicide Prevention Lifeline (1-800-273-8255)</b>, the <b>Lifeline Crisis Chat (crisischat.org)</b> and <b>911</b>.</p>
						<p>If you are anxious, depressed or unhappy, or have other health-related concerns, <b>please don’t suffer in silence. There are solutions — and treatment works</b>. Start by reaching out to your family doctor, your school counselor or anyone else you trust.</p> 
					</div><!-- .col-md-10 .col-md-offset-1 .copy -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .text-block .black -->
		      <section class="text-block giving-widget-promoted">
              <div class="row">
                  <div class="first-col col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-1 col-xs-offset-1 col-xs-10">
                    <div>             
                      <h2 class="headline-gold white">You deserve good mental health care.</h2>
                      <p>Everyone does. Help us make recovery possible for everyone by supporting the UW Medicine Behavioral Health Institute at Harborview.</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-offset-1 ">
                    <div>                                 
                      <div class="boundless-button sm dark give"><span><a id="immersive-give-promoted" data-fund="HCPSYD" href="#giving-widget-promoted">Give now</a></span></div>
                      <button id="close-give">Close</button>
                    </div>
                  </div>
              </div>
             <div id="immersive-give-iframe-promoted"></div>
      </section>
	</main><!-- #main_content -->
	<div id="popup"></div>
</div><!-- #immersive-body -->
<?php
	//include(locate_template('include-giving.php'));
	get_template_part('footer','campaign-v2');
?>
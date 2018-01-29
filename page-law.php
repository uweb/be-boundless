<?php
    $meta = '';
    $styles = "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' /><link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/law.css' type='text/css' media='all' />";
    $scripts = "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script><script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/law.min.js' type='text/javascript'></script>";
    $storyCodes = '';
    $storyAppeal = '';
    get_header("campaign-v2");
?>


<div id="immersive-body">

	<section id="section-intro">
		<!-- <button id="pause">Pause</button> -->
		<button id="mute-btn-hero" class="mute-btn">
            <span class="icon"></span>
            <span class="text">Turn Audio On / Off</span>
        </button>
		<video autoplay loop muted playsinline id="full-bg-video" style="height: 100%;" class="media fullscreen-bg__video" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/law/poster.jpg' ?>">
			<source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/law/header.mp4' ?>" type="video/mp4">
		</video>
		<div class="intro-body">
      <div class="inner">
        <div class="row">
  				<div class="intro-text">
  					<h1>Hoy yud dud</h1>
            <h2 class="headline">Sentenced to treatment</h2>
  					<p>Struck by the number of nonviolent offenders imprisoned on drug charges, UW Law grad Brian Kilgore and the Tulalip Tribes have partnered to offer second chances through treatment.</p>
  				</div><!-- .col-xs-8 .col-sm-8 .col-md-8 .col-lg-8 .col-xs-offset-1 .col-md-offset-1 .col-lg-offset-2 #intro-text -->
  			</div><!-- .row -->
      </div>
		</div><!-- .intro-body -->
		<div class="scrollit read-more">
			<p>Scroll Down</p>
			<div class="mouse">
				<div class="scroll"></div>
			</div><!-- .mouse -->
		</div><!-- .scrollit .read-more -->
	</section><!-- .intro #intro-vid -->

	<main id="main_content">
    <section id="section-story">
      <div class="text-content container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <p><em>This story was produced in collaboration with the Tulalip Tribes. The University of Washington is grateful for their cooperation and support.</em></p>
            <p>When Everest* was 12 years old, an inline skating accident left her with a compound fracture. The excruciating break was made bearable only by Percocet, a high-octane prescription of acetaminophen and oxycodone.</p>
            <p>The combination is fairly standard, but dangerously addictive. Everest, a member of Snohomish County's Tulalip Tribes, became dependent before she even realized it. Percocet led to meth, which quickly gave way to heroin. Fifteen years later, Everest has more than 20 drug charges on her record and jail time hanging over her head.</p>
            <p>Her story is a common one across America. But Tulalip Tribal Court prosecutor and University of Washington School of Law graduate Brian Kilgore, '11, believes that jail time and a criminal record are not the way these stories should end — and neither does the community he serves.</p>
            <p>*Name has been changed.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="section-map">
      <div class="item-1 item">
           <h2 class="headline">The number of incarcerated non-violent drug offenders has increased twelvefold since 1980 in the United States. <span class="source">SOURCE: The Sentencing Project</span></h2>
      </div>
      <div class="item-2 item">
	         <h2 class="headline">The wellness court is changing the paradigm.</h2>
      </div>
      <div class="background-1 background"></div>
      <div class="background-2 background"></div>

		</section><!-- #section-map -->

    <section id="section-body">
      <div class="text-content container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <p>Enter the Healing to Wellness Court. Founded by Tulalip Tribal Court chief judge and UW School of Law graduate Ron Whitener, '94, the Wellness Court is a tribal drug court that provides nonviolent offenders whose crimes stem from drug abuse and mental health conditions with an alternative to incarceration: real help.</p>

            <div class="callout left">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/law/callout-ronwhitener.jpg" alt="">
              <p class="caption">Ron Whitener</p>
            </div>

            <h2 class="headline">Taking a repatriation approach</h2>
            <p>"The traditional criminal justice system says, ‘We're going to punish you, and you're going to behave differently,'" says Kilgore, who joined the Tulalip Tribal Court's legal team after completing his UW degree. But reality proves otherwise — studies show that up to 80 percent of drug abusers commit a new crime once they're released from prison, and 95 percent start using again.</p>
            <p>"The tribal drug court says the reason some people commit crimes isn't because they're bad people, but because they're addicts," Kilgore continues. "Punishment won't change their behavior, but resources and options and tools will help them develop into people who aren't going to use drugs or be back in the criminal justice system."</p>
            <p>During his student internship at the philanthropy-supported Tribal Court Public Defense Clinic in 2010, Kilgore witnessed firsthand how crucial a tribal drug court was to the health and well-being of the Tulalip community. The clinic — a partnership between the UW and the Tulalip Tribes — offers students the chance to get hands-on experience in public defense, and Tulalip Tribes members receive legal representation.</p>

            <div class="callout right">
                <button id="mute-btn-callout" class="mute-btn">
                    <span class="icon"></span>
                    <span class="text">Turn Audio On / Off</span>
                </button>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/law/callout-briankilgore.jpg" alt="">
                <p class="caption">Brian Kilgore</p>

                <audio id="audio-callout" preload="auto">
                  <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/audio/law/sample_audio.mp3' ?>" type="audio/mpeg">
                </audio>

            </div>

            <p>According to the latest information available from the Washington Department of Health, drug- and alcohol-related deaths in Washington state amount to 32.4 per 100,000 people annually. In Tulalip, that number skyrockets to 278.7 per 100,000 people — and as the Tulalip Tribes and Kilgore recognized, years of traditional punishment haven't proved effective at breaking the cycle.</p>
            <p>In search of a more supportive and productive path for nonviolent offenders imprisoned on drug charges, Kilgore worked with Tulalip community members and a team of professionals to kick-start a tribal drug court. In January 2017, the Healing to Wellness Court welcomed its first participants.</p>

            <div class="banner">
              <p>Helping people achieve emotional, psychological and social well-being through motivation and behavior change is a core goal of the UW’s <a href="http://www.washington.edu/populationhealth">Population Health Initiative</a>, which aims to advance the health of communities worldwide.</p>
              <a href="#giving-widget-promoted"><span>Give Now</span></a>
            </div>

            <h2 class="headline">A holistic path to "wellbriety"</h2>
            <p>Each week, stories of addiction come across Kilgore's desk, slipped inside a packet with a cover sheet from the police department outlining each offender's history.</p>
            <p>If an offender meets the high-risk, high-need requirements of participating in the Wellness Court, they go up for review by the team: judge, prosecutor, defense attorney, coordinator, case manager, chemical dependency counselor, law enforcement officer and tribal community member, who helps with cultural reintegration. Everyone works together to support the participants during their journey.</p>
            <p>Candidates accepted to the five-phase diversion program start with two full weeks of sobriety and 30 days of intensive treatment, then move on to community service, education and job training, and sober housing.</p>
          </div>
        </div>
      </div>

    </section><!-- #section-body -->

      <section id="section-profiles">

        <div class="item-1 item">
          <div class="img"></div>
          <div class="caption">
            <div class="group">
              <div class="nav">
                <h4 class="headline">Header</h4>
                <a href="javascript:void(0)" class="read-more">
                  <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.98 4.46">
                    <defs><style>.icon-line{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.5px;}</style></defs>
                    <title>Vector Smart Object1</title>
                    <path class="icon-line" d="M.86,2.75c.43.55,1.68,2,3.17,2s2.77-1.44,3.18-2A4.44,4.44,0,0,0,4,.77C2.5.77,1.28,2.2.86,2.75Z" transform="translate(-0.55 -0.52)"/>
                    <path class="icon-line" d="M4,3.94A1.19,1.19,0,1,1,5.23,2.75,1.19,1.19,0,0,1,4,3.94Z" transform="translate(-0.55 -0.52)"/>
                  </svg>
                  <span class="text">Read More</span>
                </a>
              </div>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et nunc sit amet quam tristique luctus. Nunc et felis erat. Cras luctus sem in enim varius tempus. Aliquam erat volutpat. Nullam in magna a mauris cursus sodales et faucibus odio. Maecenas non velit vitae neque luctus convallis. Suspendisse vel enim ut nisi egestas consequat. Phasellus a augue at turpis lacinia semper sed non quam.</p>
            </div>
          </div>
        </div>

        <div class="item-2 item">
          <div class="img"></div>
          <div class="caption">
            <div class="group">
              <div class="nav">
                <h4 class="headline">Header</h4>
                <a href="javascript:void(0)" class="read-more">
                  <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.98 4.46">
                    <defs><style>.icon-line{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.5px;}</style></defs>
                    <title>Vector Smart Object1</title>
                    <path class="icon-line" d="M.86,2.75c.43.55,1.68,2,3.17,2s2.77-1.44,3.18-2A4.44,4.44,0,0,0,4,.77C2.5.77,1.28,2.2.86,2.75Z" transform="translate(-0.55 -0.52)"/>
                    <path class="icon-line" d="M4,3.94A1.19,1.19,0,1,1,5.23,2.75,1.19,1.19,0,0,1,4,3.94Z" transform="translate(-0.55 -0.52)"/>
                  </svg>
                  <span class="text">Read More</span>
                </a>
              </div>
              <p class="description">Sed vel arcu aliquam, dictum arcu efficitur, dignissim urna. Pellentesque at metus tortor. Nulla aliquam nisl in velit efficitur ornare. In congue quis nisl et porta. Duis tincidunt fermentum enim eget aliquam. Praesent ullamcorper velit ut mi mattis vulputate. Nam imperdiet sit amet nunc eu congue. Donec commodo aliquam convallis</p>
            </div>
          </div>
        </div>

        <div class="profiles-fade-out-trigger" style="height: 0; opacity: 0;"></div>

    </section><!-- #section-profiles -->

      <div class="text-content text-content--full container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <p>Participants must also appear in Wellness Court every week to check in with their team and speak face-to-face with Judge Whitener. They share how many days they've been sober — often to cheers of encouragement — and talk through their successes and struggles. If it was a good week, Judge Whitener may reward them with incentives such as fewer court appearances and later curfews. After a hard week, there will likely be sanctions. Either way, the team is there to help the participant succeed.</p>
            <p>"The whole goal of the program is to not have people come back through the criminal justice system," says Kilgore. If done right, the diversion program takes 18 months to two years to complete and ends with a case dismissal and a clean record. If the participant doesn't complete the program, they're found guilty and wind up right back where they started. So there's nothing to lose — and everything to gain.</p>
          </div>
        </div>
      </div>

      <section id="section-photos">

        <div class="item-1 item">
          <div class="img"></div>
          <div class="caption">
            <div class="group">
              <div class="nav">
                <h4 class="headline">Header 1</h4>
                <a href="javascript:void(0)" class="read-more">
                  <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.98 4.46">
                    <defs><style>.icon-line{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.5px;}</style></defs>
                    <title>Vector Smart Object1</title>
                    <path class="icon-line" d="M.86,2.75c.43.55,1.68,2,3.17,2s2.77-1.44,3.18-2A4.44,4.44,0,0,0,4,.77C2.5.77,1.28,2.2.86,2.75Z" transform="translate(-0.55 -0.52)"/>
                    <path class="icon-line" d="M4,3.94A1.19,1.19,0,1,1,5.23,2.75,1.19,1.19,0,0,1,4,3.94Z" transform="translate(-0.55 -0.52)"/>
                  </svg>
                  <span class="text">Read More</span>
                </a>
              </div>
              <p class="description">Item 1 Etiam scelerisque laoreet urna, ut ullamcorper enim ultricies non. Ut tempus rhoncus orci, hendrerit rhoncus sapien auctor ut. Duis lobortis augue eros. Nunc bibendum mi ut dolor pulvinar, id mattis mauris efficitur.</p>
            </div>
          </div>
        </div>

        <div class="item-2 item">
          <div class="img"></div>
          <div class="caption">
            <div class="group">
              <div class="nav">
                <h4 class="headline">Header 2</h4>
                <a href="javascript:void(0)" class="read-more">
                  <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.98 4.46">
                    <defs><style>.icon-line{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.5px;}</style></defs>
                    <title>Vector Smart Object1</title>
                    <path class="icon-line" d="M.86,2.75c.43.55,1.68,2,3.17,2s2.77-1.44,3.18-2A4.44,4.44,0,0,0,4,.77C2.5.77,1.28,2.2.86,2.75Z" transform="translate(-0.55 -0.52)"/>
                    <path class="icon-line" d="M4,3.94A1.19,1.19,0,1,1,5.23,2.75,1.19,1.19,0,0,1,4,3.94Z" transform="translate(-0.55 -0.52)"/>
                  </svg>
                  <span class="text">Read More</span>
                </a>
              </div>
              <p class="description">Item 2 Mauris malesuada leo non tincidunt consequat. Phasellus sem ante, malesuada non elit consectetur, ullamcorper facilisis ex. Quisque quis accumsan magna, in mattis lorem. Donec sodales elit at orci elementum dapibus. Vivamus volutpat sit amet lectus eu tempor.</p>
            </div>
          </div>
        </div>

        <div class="item-3 item">
          <div class="img"></div>
          <div class="caption">
            <div class="group">
              <div class="nav">
                <h4 class="headline">Header 3</h4>
                <a href="javascript:void(0)" class="read-more">
                  <svg id="icon-eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.98 4.46">
                    <defs><style>.icon-line{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.5px;}</style></defs>
                    <title>Vector Smart Object1</title>
                    <path class="icon-line" d="M.86,2.75c.43.55,1.68,2,3.17,2s2.77-1.44,3.18-2A4.44,4.44,0,0,0,4,.77C2.5.77,1.28,2.2.86,2.75Z" transform="translate(-0.55 -0.52)"/>
                    <path class="icon-line" d="M4,3.94A1.19,1.19,0,1,1,5.23,2.75,1.19,1.19,0,0,1,4,3.94Z" transform="translate(-0.55 -0.52)"/>
                  </svg>
                  <span class="text">Read More</span>
                </a>
              </div>
              <p class="description">Item 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et nunc sit amet quam tristique luctus. Nunc et felis erat. Cras luctus sem in enim varius tempus. Aliquam erat volutpat. Nullam in magna a mauris cursus sodales et faucibus odio. Maecenas non velit vitae neque luctus convallis. Suspendisse vel enim ut nisi egestas consequat. Phasellus a augue at turpis lacinia semper sed non quam.</p>
            </div>
          </div>
        </div>

        <div class="photos-fade-out-trigger" style="height: 0; opacity: 0;"></div>

    </section><!-- #section-photos -->

      <div class="text-content container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="headline">Connecting with tribal culture</h2>
            <p>But the process is far from easy. Many participants don't have a support system to help them through — in fact, their social network may be part of the reason they struggle with addiction.</p>
            <p>To that end, participants have the option of living at the Tulalip Healing Lodge, a transitional home with a cultural and spiritual slant for people who are pursuing a sober lifestyle. Under the guidance of community member Robert "Whaakadup" Monger, participants reconnect with their native roots by singing and praying in sweat lodge ceremonies, making traditional drums or weaving baskets. "Some of them have never had somebody like me in their life; somebody who walks and talks and lives and breathes the spiritual way of life," says Monger, who's nearly 20 years sober himself. "Some of them are hungry for it."</p>
            <p>With Monger's help, participants work through "The Red Road to Wellbriety," a book about healing written specifically for tribal culture by tribal members. "I'm very fortunate and blessed to be able to do this kind of work," says Monger.</p>
          </div>
        </div>
      </div>

      <section id="section-video-intro">
        <div class="inner">
          <div class="container">
            <div class=" row">
              <div class="group col-sm-8 col-sm-offset-2">
                <div class="quote-mark quote-top">"</div>
                <h1 class="headline">When they busted in my door in 1993 I decided it was time for Robert monger to get to know who he was. So that's when I picked up my native name.</h1>
                <div class="quote-mark quote-bottom">"</div>

                <!-- <p class="play-container">
                    <a data-lity class="play" href="https://www.youtube.com/embed/3DvGGqEh0ug?autoplay=1&rel=0&showinfo=0">
                        See his story
                        <svg aria-hidden="true" x="0px" y="0px" width="14px" height="3px" viewBox="0 0 14 3" enable-background="new 0 0 14 3" xml:space="preserve"><rect fill="#4b2e83" width="14" height="3"/></svg>
                    </a>
                </p> -->

                <a data-lity class="play-video" href="https://www.youtube.com/embed/3DvGGqEh0ug?autoplay=1&rel=0&showinfo=0">
                  <svg id="icon-play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 155.48 155.48" focusable="false">
                    <defs>
                      <style>
                        .cls-1{fill:#fff;stroke-width:0.5px;}
                        .cls-1,.cls-2{stroke:#fff;stroke-miterlimit:10;}
                        .cls-2{fill:none;stroke-width:6px;}
                      </style>
                    </defs>
                    <polygon class="cls-1" points="50.49 77.74 50.49 34.44 87.99 56.09 125.49 77.74 87.99 99.39 50.49 121.04 50.49 77.74"/>
                    <circle class="cls-2" cx="77.74" cy="77.74" r="74.74"/>
                  </svg>
                  <div>Play Full Video</div>
                </a>

              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="text-content container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="headline">The future of the Wellness Court</h2>
            <p>The first group of participants will graduate in 2018, and Kilgore, Monger and the rest of the Healing to Wellness Court community have great expectations for them. "Numbers around the country show that this model is far more effective than traditional prosecution," says Kilgore. "People who graduate commit new crimes at much lower rates. It's better for them, it's better for their families and it's better for the court system."</p>
            <p>As the program expands, he hopes to serve people whose cases aren't qualified as high-risk or high-needs, but whose challenges are just as important.</p>
            <p>"Almost every case we file is a result of addiction," says Kilgore, "and my hope and dream is that the Healing to Wellness Court will expand to cover every one of them."</p>
            <p>Monger agrees, and he also wants to widen the program even further — to reach young adults before they start using. "It's better for us to reach these youngsters before they get into the system," he says. "These are human beings. We need to continue doing things differently to try to help them overcome these addictions."</p>
          </div>
        </div>
      </div>
    </div><!-- section-body -->

		<section id="section-end">
			<div class="inner">
				<div class="col-xs-8 col-xs-offset-2">
					<h1><img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/law/lushootseed.svg" alt=""></h1>
          <h2>What you care about can change the world</h2>
          <p>The University of Washington is undertaking the most ambitious campaign in our history: Be Boundless — For Washington, For the World. By contributing to the Native American Law Center Fund, Excellence in Law Fund and Law Student Scholarship Fund, you can help students like Brian Kilgore gain hands-on legal experience as part of their studies at the School of Law.</p>
					<div class="boundless-button sm dark give"><span><a id="immersive-give-promoted" data-fund="ESIEND" href="#giving-widget-promoted">Give now</a></span></div>
				</div>
			</div>
		</section>

	</main><!-- #main_content -->
	<div id="popup"></div>
</div><!-- #immersive-body -->

<?php
    get_template_part('footer', 'campaign-v2');
?>

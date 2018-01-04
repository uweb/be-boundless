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
  					<h1><img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/law/logo-weteb-altx.svg" alt=""></h1>
  					<p>To help reduce the number of nonviolent offenders imprisoned on drug charges, UW Law grad Brian Kilgore partnered with the Tulalip Tribes to support second chances through treatment.</p>
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

    <section id="section-map">
      <div class="item-1 item">
	         <h2 class="headline">The number of incarcerated drug offenders has increased twelvefold since 1980.</h2>
      </div>
      <div class="item-2 item">
	         <h2 class="headline">*FPO Stat that relates to Washington State for these types of offenses*</h2>
      </div>
      <div class="item-3 item">
	         <h2 class="headline">The wellness court is changing the paradigm.</h2>
      </div>
      <div class="background-1 background"></div>
      <div class="background-2 background"></div>
      <div class="background-3 background"></div>
      <div class="background-graph background">
          <div class="graph-line">
              <svg id="map-graph-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 734.5 418">
                  <defs>
                      <style>
                          .graph-circ {
                              fill: #fff;
                              stroke: #939393;
                              stroke-width: 2px;
                          }
                          .graph-circ,
                          .graph-path {
                              stroke-miterlimit: 10;
                          }
                          .graph-path {
                              fill: none;
                              stroke: #fff;
                          }
                      </style>
                  </defs>
                    <g id="graph-line-group">
                      <circle id="point1" class="graph-circ" cx="6" cy="412" r="5"/>
                      <circle id="point2" class="graph-circ" cx="192.5" cy="347.5" r="5"/>
                      <circle id="point3" class="graph-circ" cx="361" cy="202" r="5"/>
                      <circle id="point4" class="graph-circ" cx="495.5" cy="114.5" r="5"/>
                      <circle id="point5" class="graph-circ" cx="728.5" cy="6" r="5"/>
                      <path id="path1" class="graph-path" d="M6,412l186.5-64.5"/>
                      <path id="path2" class="graph-path" d="M192.5,347.5,361,202"/>
                      <path id="path3" class="graph-path" d="M361,202l134.5-87.5"/>
                      <path id="path4" class="graph-path" d="M495.5,114.5,728.5,6"/>
                    </g>
              </svg>
          </div>
      </div>

      <div class="scroll-indicator">
          <div class="mouse">
              <div class="scroll"></div>
          </div>
      </div>

		</section><!-- #section-map -->

    <section id="section-body">
      <div class="text-content container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <p>In Washington state, drug- and alcohol-related deaths amount to 30 per 100,000 people annually. In Tulalip, that number skyrockets to 300 per 100,000 people &mdash; and TK showed that punishment wasn't effective in breaking the cycle.</p>
            <p>After graduating from the UW and joining the Tribal Court's legal team, Kilgore worked with community members and a team of professionals to kick-start a tribal drug court. In January 2017, the Healing to Wellness Court welcomed its first participants.</p>
            <p>[Callout:] Helping people achieve emotional, psychological and social well-being through motivation and behavior change is a core goal of the UW's Population Health Initiative, which aims to advance the health of communities worldwide.</p>

            <div class="callout left">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/law/callout-ronwhitener.jpg" alt="">
              <p class="caption">Ron Whitener / Title</p>
            </div>

            <h2 class="headline">A holistic path to "wellbriety"</h2>
            <p>Each week, stories of addiction come across Kilgore's desk, slipped inside a packet with a cover sheet from the police department outlining each offender's history.</p>
            <p>If an offender meets the high-risk, high-need requirements of participating in the Wellness Court, they go up for review by the team: judge, prosecutor, defense attorney, coordinator, case manager, chemical dependency counselor, law enforcement officer &mdash; and a tribal community member who helps with cultural reintegration. Everyone works together to support the participants during their journey.</p>
            <p>Tulalip Tribal Court prosecutor and University of Washington School of Law graduate Brian Kilgore, '11, believes that jail time and a criminal record are not the way these stories should end &mdash; and neither does the community he serves.</p>
            <p>"The traditional criminal justice system says, 'We're going to punish you, and you're going to behave differently,'" says Kilgore. But reality proves otherwise &mdash; studies show that up to 80 percent of drug abusers commit a new crime once they're released from prison, and 95 percent start using again.</p>

            <div class="callout right">
                <button id="mute-btn-callout" class="mute-btn">
                    <span class="icon"></span>
                    <span class="text">Turn Audio On / Off</span>
                </button>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/law/callout-briankilgore.jpg" alt="">
                <p class="caption">Brian Kilgore / Title</p>

                <audio id="audio-callout" preload="auto">
                  <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/audio/law/sample_audio.mp3' ?>" type="audio/mpeg">
                </audio>

            </div>

            <p>"The tribal drug court says the reason some people commit crimes isn't because they're bad people, but because they're addicts," Kilgore continues. "Punishment won't change their behavior, but resources and options and tools will help them develop into people who aren't going to use drugs or be back in the criminal justice system."</p>
            <p>During his student internship at the Tribal Court Public Defense Clinic in 2010, Kilgore witnessed firsthand how crucial a tribal drug court was to the health and well-being of the Tulalip community. Founded by Tulalip Tribal Court chief judge Ron Whitener, a 1994 graduate of the UW School of Law, the clinic is a partnership between the UW and the Tulalip Tribes. It offers students the chance to get hands-on experience in public defense, and Tulalip Tribes members receive legal representation.</p>
            <p>Candidates accepted to the five-phase diversion program start with two full weeks of sobriety and 30 days of intensive treatment, then move on to community service, education and job training, and sober housing.</p>
            <p>Participants must also appear in Wellness Court every week to check in with their team and speak face-to-face with Judge Whitener. They share how many days they've been sober &mdash; often to cheers of encouragement &mdash; and talk through their successes and struggles. If it was a good week, Judge Whitener may reward them with incentives such as fewer court appearances and later curfews. After a hard week, there will likely be sanctions. Either way, the team is there to help the participant succeed.</p>
            <p>"The whole goal of the program is to not have people come back through the criminal justice system," says Kilgore. If done right, the diversion program takes 18 months to two years to complete and ends with a case dismissal and a clean record. If the participant doesn't complete the program, they're found guilty and wind up right back where they started. So there's nothing to lose &mdash; and everything to gain.</p>

            <h2 class="headline">CONNECTING WITH TRIBAL CULTURE</h2>
            <p>But the process is far from easy. Many participants don't have a support system to help them through &mdash; in fact, their social network may be part of the reason they struggle with addiction.</p>
            <p>To that end, participants have the option of living at the Tulalip Healing Lodge, a transitional home with a cultural and spiritual slant for people who are pursuing a sober lifestyle. Under the guidance of community member Robert "Whaakadup" Monger, participants reconnect with their native roots by singing and praying in sweat lodge ceremonies, making traditional drums or weaving baskets. "Some of them have never had somebody like me in their life; somebody who walks and talks and lives and breathes the spiritual way of life," says Monger, who's nearly 20 years sober himself. "Some of them are hungry for it."</p>
            <p>With Monger's help, participants work through "The Red Road to Wellbriety," a book about healing written specifically for tribal culture by tribal members. "I'm very fortunate and blessed to be able to do this kind of work," says Monger.</p>
          </div>
        </div>
      </div>

      <section id="section-profiles">
        <div class="item-1 item">
          <div class="inner">
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
          <div class="inner">
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
      </section>

      <div class="text-content container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <p>Nam sed mi enim. Cras rutrum libero ut ipsum egestas lacinia. Curabitur pellentesque congue nisi ut posuere. Donec nec venenatis quam. Duis eu ex dui. Praesent efficitur fermentum imperdiet. Suspendisse potenti. Duis purus magna, aliquet eget purus tempus, convallis porta sem. Morbi consectetur nibh ornare sollicitudin bibendum. Vivamus eu erat eu sem tristique dignissim vitae eu lorem. Maecenas ullamcorper a urna at egestas. Aenean egestas odio at purus aliquet, ut volutpat lorem rhoncus. Etiam sed porttitor felis. Mauris bibendum feugiat quam, id euismod purus.</p>
            <p>Phasellus in justo posuere, ultricies purus in, tempus libero. Morbi elit turpis, sodales at ante nec, fermentum finibus sapien. Fusce eu cursus leo, rhoncus volutpat nisi. Donec fringilla pellentesque erat eget pretium. Maecenas ut massa ac lacus imperdiet euismod. Sed malesuada tincidunt hendrerit. Quisque cursus sit amet lacus sit amet consectetur. Phasellus gravida dui vitae urna bibendum, mattis mollis ipsum sagittis. Praesent volutpat felis in ligula euismod, sed ullamcorper dui maximus. Duis suscipit placerat eros et facilisis. Nunc aliquet eros at tempor euismod.</p>

            <h2 class="headline">Header / Title</h2>
            <p>Pellentesque eu dui elementum, vehicula nisi et, interdum nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla scelerisque diam in condimentum suscipit. In non egestas urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse nec lectus nunc. Phasellus suscipit erat eu hendrerit pellentesque. Sed venenatis lectus ipsum, a dignissim sapien mollis in. Aenean quis turpis at odio eleifend consectetur a a tortor. Mauris lorem enim, egestas sed orci non, dictum sollicitudin magna. Sed luctus sapien id diam pharetra, eu dignissim tellus pellentesque. Nunc commodo felis ut enim dignissim, mollis hendrerit nisi luctus. Integer ac tortor diam. Aenean tincidunt, sem nec pulvinar consequat, nisi sem dapibus magna, sollicitudin pulvinar ligula libero in sem.</p>
            <p>Nulla ut vehicula purus, vitae interdum ex. Sed a sodales ex, id fermentum mauris. In hac habitasse platea dictumst. Donec mi ante, porta consectetur nibh ac, condimentum scelerisque quam. Phasellus ipsum quam, volutpat eget eros nec, sodales fringilla magna. Donec egestas suscipit nibh nec porttitor. Quisque dapibus vel nisi ac maximus. Aliquam at mi ultrices velit condimentum convallis non eget purus. Vestibulum dictum eros at leo dignissim venenatis. Ut cursus rhoncus dolor quis dignissim. Nunc dignissim arcu ac euismod dictum.</p>
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
            <h2 class="headline">Header / Title</h2>
            <p>Sed vel arcu aliquam, dictum arcu efficitur, dignissim urna. Pellentesque at metus tortor. Nulla aliquam nisl in velit efficitur ornare. In congue quis nisl et porta. Duis tincidunt fermentum enim eget aliquam. Praesent ullamcorper velit ut mi mattis vulputate. Nam imperdiet sit amet nunc eu congue. Donec commodo aliquam convallis. Suspendisse dictum urna et purus malesuada, vel ultrices ipsum rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam iaculis diam id consequat facilisis. Cras nec suscipit leo, molestie suscipit tellus. Suspendisse ut consectetur ex. Proin eget ipsum at leo imperdiet lobortis ac sed lacus. Sed sed quam quis quam ultricies suscipit.</p>
            <p>Etiam scelerisque laoreet urna, ut ullamcorper enim ultricies non. Ut tempus rhoncus orci, hendrerit rhoncus sapien auctor ut. Duis lobortis augue eros. Nunc bibendum mi ut dolor pulvinar, id mattis mauris efficitur. Aliquam malesuada rhoncus molestie. Ut varius nisl sollicitudin metus suscipit, ac dapibus velit cursus. Phasellus pulvinar sem ut elit ultricies dictum. Maecenas nec consectetur nunc, nec pretium lectus. Cras tincidunt pulvinar orci, nec molestie augue posuere nec. Mauris malesuada leo non tincidunt consequat. Phasellus sem ante, malesuada non elit consectetur, ullamcorper facilisis ex. Quisque quis accumsan magna, in mattis lorem. Donec sodales elit at orci elementum dapibus. Vivamus volutpat sit amet lectus eu tempor.</p>
          </div>
        </div>
      </div>

      <section id="section-photos">
        <div class="item-1 item">
          <div class="inner">
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
          <div class="inner">
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
          <div class="inner">
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
      </section>

      <div class="text-content container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <p>Cras aliquet lorem non purus consectetur ultrices. Donec in imperdiet enim. Donec eleifend viverra nisi, at ullamcorper velit sollicitudin in. Nulla faucibus nunc maximus augue interdum accumsan. Duis scelerisque faucibus ligula, sit amet rutrum lectus mollis sed. Fusce fringilla sollicitudin metus, vel condimentum nisl varius eu. Vivamus nec purus ut odio varius auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ligula dui, iaculis sit amet massa sodales, molestie consectetur dui.</p>
            <p>Sed et nibh lacinia sapien lobortis porttitor. Nam quis massa magna. Nunc ut risus dictum, molestie justo ut, imperdiet mi. Quisque venenatis libero in ligula scelerisque, at facilisis neque viverra. Ut hendrerit purus ac tortor ultricies accumsan. Etiam quis felis enim. Vivamus sollicitudin metus neque. Aenean elementum ac eros non semper. Praesent et accumsan orci. Maecenas dapibus ullamcorper dictum. Donec nec maximus ipsum, a venenatis nulla. Sed ut fermentum tellus. Proin vel libero metus. Sed sit amet mauris mollis, vehicula leo non, ultrices nibh. Suspendisse pretium gravida euismod.</p>
          </div>
        </div>
      </div>
    </div><!-- section-body -->

		<section id="section-end">
			<div class="inner">
				<div class="col-xs-8 col-xs-offset-2">
					<h1><img src="<?php echo get_stylesheet_directory_uri() ?>/immersive-stories/img/law/logo-weteb-altx.svg" alt=""></h1>
					<p>The University of Washington is undertaking its most ambitious campaign ever: Be Boundless &mdash; For Washington, For the World. Support groundbreaking research and the future of health care by contributing to the School of Law.</p>
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

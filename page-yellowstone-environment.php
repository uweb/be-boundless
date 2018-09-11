<?php

  global $meta;
  global $styles;
  global $scripts;

  $twitter_photo = 'http://www.washington.edu/wp-content/themes/be-boundless/immersive-stories/img/environment/twitter-card.jpg';
  $twitter_title = 'A week in the wild';
  $twitter_description = 'Students and professors from the UW College of the Environment made a classroom out of one of the world’s most closely monitored ecosystems: Yellowstone National Park. Experience the sights and sounds of the park through their eyes.';
  $meta = twitter_card($twitter_photo, $twitter_title, $twitter_description);
  $styles =  "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' />" .
            "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' />" .
            "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/libraries/jquery.fullpage.min.css' type='text/css' media='all' />" .
            "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/environment.css' type='text/css' media='all' />";
  // $scripts =  "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/header.js' type='text/javascript'></script>" .
              // "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script>" .
              // "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/libraries/fullpage.fadingEffect.min.js' type='text/javascript'></script>" .
    $scripts = "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/environmentLibraries.min.js' type='text/javascript'></script>" .
              "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/environment.min.js' type='text/javascript'></script>" .
              "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/libraries/fullPageFunctions.js' type='text/javascript'></script>" .
              "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/environment.js' type='text/javascript'></script>";

  get_header( "campaign-v2" );
?>

<div id="immersive-body" role="main" aria-label="main content carousel">
   <!--1. A WEEK IN THE WILD-->
  <section class="section fp-noscroll slide1" id="intro-vid">
    <div class="background">
      <!-- <button id="howto">Instructions</button> -->
      <button id="pause">Pause</button>
      <button id="question"><span>Help</span>?</button>
      <video  autoplay data-autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/header-poster.png' ?>" class="fullscreen-bg__video">
         <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/HEADER_LOOP.mp4' ?>" type="video/mp4">
      </video>

      <div class="intro-body">
         <div class="row">
              <div class="" id='intro-text'>
                  <h1 class="">A week in </br>the wild</h1>
                  <p class="col-md-4 col-sm-10 col-xs-12">
                      Students and professors from the College of the Environment made a classroom out of one of the world’s most closely monitored ecosystems: Yellowstone National Park. Explore their learning experience below.
                  </p>
              </div>
          </div>
          <!-- <div class="play-button mobile" >
              <a data-lity href="https://www.youtube.com/embed/bdxE1rqezB8?autoplay=1&rel=0&showinfo=0">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="137.909px" height="137.131px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131"
                 xml:space="preserve">
              <ellipse fill="none" stroke="#FFFFFF" stroke-width="7.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>
              <polygon fill="#FFFFFF" points="48.611,37.617 103.268,68.345 48.611,99.072 "/>
              </svg>
                <p>Watch video</p>
              </a>
          </div> -->
          <div class="play-button" >
            <a data-lity href="https://www.youtube.com/embed/TLyNpX2-baE&?autoplay=1&rel=0&showinfo=0&yt:crop=16:9" role="button">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="137.909px" height="137.131px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131"
               xml:space="preserve">
            <ellipse fill="none" stroke="#FFFFFF" stroke-width="7.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>
            <polygon fill="#FFFFFF" points="48.611,37.617 103.268,68.345 48.611,99.072 "/>
            </svg>
              <p>Play full video</p>
            </a>
        </div>
      </div>
      <span class="gold-tilt gold-tilt-2"></span>
      <section class="scrollit read-more click-section" aria-hidden="true">
          <p>Click on any section to jump ahead</p>
          <div class="down-arrow"></div>
      </section>
      <section class="scrollit read-more scroll-down" aria-hidden="true">
          <p>Scroll to continue</p>
          <div class="mouse">
            <div class="scroll"></div>
          </div>
      </section>
    </div>
  </section>

   <!--2. EXPERIENCE YELLOWSTONE-->
  <section class="section fp-noscroll" id="intro-yellow">
    <div class="background">
      <button id="pause-yellow">Pause</button>
      <video  autoplay data-autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/DRONE_REVEAL.jpg' ?>" class="fullscreen-bg__video">
         <source data-src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/DRONE_REVEAL_LOOP_compressed.mp4' ?>" type="video/mp4">
      </video>
      <div class="section-caption"><p>The experience begins</p></div>
      <div class="intro-body less-margins">
         <div class="row">
              <div class="text-box" id='intro-text-yellow'>
                  <h1 class=""><span>Experience</span>&nbsp;Yellowstone</h1>
                  <div class="row centered">
                    <p class="col-md-6 col-xs-12 mobile-shorten">
                        Yellowstone hosts a complex ecosystem of predators, prey, scavengers and people — those who work with animals inside the park, as well as ranchers and others operating just outside its borders.
                        </br></br>
                        <span>See what the UW students saw, hear what they heard and learn what they learned about wildlife management in Yellowstone. </span>Click on any section to start exploring.
                    </p>
                  </div>
                  <div class="col-md-7 col-xs-12">
                    <a href="#meet" class="col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1 section-links" role="button" aria-label="Shortcut to Students"><span>Students</span></a>
                    <a href="#predator" class="col-sm-2 col-xs-2 section-links" role="button" aria-label="Shortcut to Predators"><span>Predators</span></a>
                    <a href="#prey" class="col-sm-2 col-xs-2 section-links" role="button" aria-label="Shortcut to Prey"><span>Prey</span></a>
                    <a href="#scavenger" class="col-sm-2 col-xs-2 section-links" role="button" aria-label="Shortcut to Scavengers"><span>Scavengers</span></a>
                    <a href="#people" class="col-sm-2 col-xs-2 section-links" role="button" aria-label="Shortcut to Neighbors"><span>Neighbors</span></a>
                  </div>
              </div>
          </div>
      </div>
      <section class="scrollit read-more" aria-hidden="true">
          <p>Scroll to continue</p>
          <div class="mouse">
            <div class="scroll"></div>
          </div>
      </section>
    </div>
  </section>

   <!--3. STUDENTS START-->
  <section class="section fp-noscroll no-arrows"  id="students">
    <div class="background">
       <!--3.1 STUDENTS - HOME-->
      <section id="all-students" class="all-students mobile-slide">
        <div class="section-caption"><p>Meet the students</p></div>
        <div class="intro-body">
           <div class="row">
                <div class="text-box">
                    <h1 class=""><span>Meet the</span> students</h1>
                    <div class="row centered">
                      <p class="col-md-6 col-xs-10 no-top no-bottom">
                          Who went to Yellowstone — and why? See what a handful of students had to say about their experience in the park.
                          <span class="squiggle"></span>
                          <!-- &frame_buster=false -->
                           You can <a class="underline no-arrows" data-fund="CELEND" href="https://online.gifts.washington.edu/secure/makeagift/givingOpps.aspx?nobanner=true&frame_buster=flase&source_typ=3&appeal=17XIS&source=CELEND" data-lity role="button">support</a> immersive learning experiences at the College of the Environment and help propel students toward the careers of their dreams.
                      </p>
                    </div>
                </div>
            </div>
        </div>
       <!--  <div class="student-container"> -->
          <div class="student student1"><a class="student-link" href="#" data-href="#student1" role="button" aria-label="Learn more about Loma Pendergraft."><image class="student student1" alt="student one" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait1.png' ?>"></a></div>
          <div class="student student2"><a class="student-link" href="#" data-href="#student2" role="button" aria-label="Learn more about Danyan Leng."><image class="student student2" alt="student two" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait2.png' ?>"></a></div>
          <div class="student student3"><a class="student-link" href="#" data-href="#student3" role="button" aria-label="Learn more about Hannah Booth."><image class="student student3" alt="student three" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait3.png' ?>"></a></div>
          <div class="student student4"><a class="student-link" href="#" data-href="#student4" role="button" aria-label="Learn more about Gavin Forster."><image class="student student4" alt="student four" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait4.png' ?>"></a></div>
          <div class="student student5"><a class="student-link" href="#" data-href="#student5" role="button" aria-label="Learn more about Courtney Straight."><image class="student student5" alt="student five" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait5.png' ?>"></a></div>
          <div class="student student6"><a class="student-link" href="#" data-href="#student6" role="button" aria-label="Learn more about Andrew Wang."><image class="student student6" alt="student six" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait6.png' ?>"></a></div>
      </section>

        <!-- STUDENTS - PROFILES -->
        <!-- 3.2 -->
        <section id="student1" class="student student1 mobile-slide desktop-slide">
          <div class="name">
            <h2>Loma</br>Pendergraft, Graduate student</h2>
            <p class="major">Focus: Crow communication</p>
            <span class="udub-slant"><span></span></span>
            <!-- <p>lorem ipsum</p> -->
          </div>
          <div class="quote">
            <blockquote><span>&ldquo;</span>It’s important for undergraduates to get involved in field research because it’s experience they can put on their résumés. It’s also a great way to get your foot in the door and network with other scientists in the field.<span>&rdquo;</span></blockquote>
          </div>
          <image class="full-student" alt="student one" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/profile_5.png' ?>">
        </section>
         <!-- 3.3 -->
        <section id="student2" class="student student2 mobile-slide desktop-slide">
          <div class="name">
            <h2>Danyan</br>Leng, &rsquo;18</h2>
            <p class="major">Majors: Environmental science and terrestrial resource management; economics</p>
            <span class="udub-slant"><span></span></span>
            <!-- <p>lorem ipsum</p> -->
          </div>
          <div class="quote">
            <blockquote><span>&ldquo;</span>I’m originally from Beijing. It’s a really big city, and we have really fast economic development, but we also have a lot of environmental problems. I want to combine my majors and make an impact on my country.<span>&rdquo;</span></blockquote>
          </div>
          <image class="full-student" alt="student one" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/profile_2.png' ?>">
        </section>
         <!-- 3.4 -->
        <section id="student3" class="student student3 mobile-slide desktop-slide">
          <div class="name">
            <h2>Hannah</br>Booth, &rsquo;18</h2>
            <p class="major">Major: Environmental science and terrestrial resource management</p>
            <span class="udub-slant"><span></span></span>
            <!-- <p>lorem ipsum</p> -->
          </div>
          <div class="quote">
            <blockquote><span>&ldquo;</span>I didn’t have a lot of field experience before this trip. I didn’t know if I could hack it, how difficult it would be or if I would even enjoy it. But now I’m really excited about fieldwork. I’m definitely going to pursue it.<span>&rdquo;</span></blockquote>
          </div>
          <image class="full-student bigger" alt="student one" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/profile_6.png' ?>">
        </section>
         <!-- 3.5 -->
        <section id="student4" class="student student4 mobile-slide desktop-slide">
          <div class="name">
            <h2>Gavin</br>Forster, &rsquo;18</h2>
            <p class="major">Major: Environmental science and terrestrial resource management</p>
            <span class="udub-slant"><span></span></span>
            <!-- <p>lorem ipsum</p> -->
          </div>
          <div class="quote">
            <blockquote><span>&ldquo;</span>Being out here in the wilderness and seeing the animals you’ve heard about in class — it just solidifies all you learned and makes it much more memorable.<span>&rdquo;</span></blockquote>
          </div>
          <image class="full-student" alt="student one" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/profile_3.png' ?>">
        </section>
         <!-- 3.6 -->
        <section id="student5" class="student student5 mobile-slide desktop-slide">
          <div class="name">
            <h2>Courtney</br>Straight, &rsquo;18</h2>
            <p class="major">Major: Environmental science and terrestrial resource management</p>
            <span class="udub-slant"><span></span></span>
            <!-- <p>lorem ipsum</p> -->
          </div>
          <div class="quote">
            <blockquote><span>&ldquo;</span>It’s pretty cool being out here with the professors because they’re so into it. Even though they’ve seen these things a million times, they still get so excited about it. They’re having a good time and teaching us a lot.<span>&rdquo;</span></blockquote>
          </div>
          <image class="full-student" alt="student one" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/profile_4.png' ?>">
        </section>
         <!-- 3.7 -->
        <section id="student6" class="student student6 mobile-slide desktop-slide">
          <div class="name">
            <h2>Andrew</br>Wang, &rsquo;17</h2>
            <p class="major">Major: Environmental science and terrestrial resource management</p>
            <span class="udub-slant"><span></span></span>
            <!-- <p>lorem ipsum</p> -->
          </div>
          <div class="quote">
            <blockquote><span>&ldquo;</span>There’s an essence we get to experience in the field that you can’t get by reading papers and being in the classroom.<span>&rdquo;</span></blockquote>
          </div>
          <image class="full-student" alt="student one" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/profile_1.png' ?>">
        </section>

      <button id="close-modal">
        Close
        <svg aria-hidden="true" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34.147px" height="37.833px" viewBox="0 0 34.147 37.833" enable-background="new 0 0 34.147 37.833" xml:space="preserve">
          <line fill="none" stroke="#A7A9AC" stroke-width="2" stroke-miterlimit="10" x1="9.616" y1="8.449" x2="31.782" y2="30.614"></line>
          <line fill="none" stroke="#A7A9AC" stroke-width="2" stroke-miterlimit="10" x1="31.782" y1="8.449" x2="9.616" y2="30.614"></line>
        </svg>
      </button>

      <section class="scrollit read-more" aria-hidden="true">
          <p>Scroll to continue</p>
          <div class="mouse">
            <div class="scroll"></div>
          </div>
      </section>

    </div>
  </section>
   <!--STUDENTS - END-->

   <!--****************************************
    *****FIXED BACKGROUND FOR ALL SECTIONS*****
    *****************************************-->
  <!-- <section class="predator fixed-section" id="fixed-section1">
    <div class="background">
      <span class="lines right"></span>
      <span class="lines left"></span>
      <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
      <div class="foreground"></div>
      <div class="extra1"></div>
      <div class="extra2"></div>
    </div>
  </section>

  <section class="prey fixed-section" id="fixed-section2">
    <div class="background">
      <span class="lines right"></span>
      <span class="lines left"></span>
      <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
      <div class="foreground"></div>
      <div class="extra1"></div>
      <div class="extra2"></div>
    </div>
  </section>

  <section class="scavenger fixed-section" id="fixed-section3">
    <div class="background">
      <span class="lines right"></span>
      <span class="lines left"></span>
      <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
      <div class="foreground"></div>
      <div class="extra1"></div>
      <div class="extra2"></div>
    </div>
  </section>

  <section class="people fixed-section" id="fixed-section4">
    <div class="background">
      <span class="lines right"></span>
      <span class="lines left"></span>
      <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
      <div class="foreground"></div>
      <div class="extra1"></div>
      <div class="extra2"></div>
    </div>
  </section>
 -->
  <section class="blank fixed-section active" id="fixed-section5">
    <div class="background">
    </div>
  </section>
   <!--*****************
    *****END FIXED******
    *****************-->

   <!--4. PREDATOR - OPENING SLIDE-->
  <section data-anchor="predator" class="dbg-pred bg-pred section fp-noscroll icon-section">
      <div class="background">
        <span class="lines right"></span>
        <span class="lines left"></span>
        <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
        <div class="foreground"></div>
        <div class="extra1"></div>
        <div class="extra2"></div>
        <div class="section-caption"><p>Predators</p></div>
        <div class="intro-body move-higher">
         <div class="row">
              <div class="text-box">
                  <div class="icon"></div>
                  <h1 class="">Predators</h1>
                  <span class="col-md-4 col-xs-10"><span class="squiggle"></span></span>
              </div>
          </div>
      </div>
        <section class="scrollit read-more" aria-hidden="true">
            <p>Scroll to continue</p>
            <div class="mouse">
              <div class="scroll"></div>
            </div>
        </section>
      </div>
  </section>

     <!--5. PREDATOR - GALLERY-->
    <section class="section transparent-section fp-auto-height bg-pred">
        <div class="background photos">
          <div class="section-caption"><p>Predators // The student experience</p></div>
           <!-- <div class="container"> -->
               <!-- 5.1 -->
               <div class="mobile-slide predgal">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_1.jpg' ?>" alt="On a foggy day, Aaron Wirsing points out possible locations where wolves could be on a distant ridge." data-lity></span>
                <p class="">On a foggy day, professor Aaron Wirsing points out possible locations where wolves could be on a distant ridge.</p>
              </div>
              <!-- 5.2 -->
              <div class="mobile-slide predgal float-right">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_2.jpg' ?>" alt="After awaking from hibernation, a grizzly bear makes its way to an easy meal: a nearby bison carcass. While fattening up for winter, the omnivorous grizzly feasts on everything from berries to cutthroat trout to insects." data-lity></span>
                <p class="">After awaking from hibernation, a grizzly bear makes its way to an easy meal: a nearby bison carcass. While fattening up for winter, the omnivorous grizzly feasts on everything from berries to cutthroat trout to insects.</p>
              </div>
              <!-- 5.3 -->
              <div class="mobile-slide predgal">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_3.jpg' ?>" alt="Tyler, a TK title, holds a golden eagle. After drawing blood, weighing and measuring the bird, he releases it." data-lity></span>
                <p>Tyler Bain, a research assistant, holds a golden eagle. After drawing blood, weighing and measuring the bird, he releases it.</p>
              </div>
              <!-- 5.4 -->
              <div class="mobile-slide predgal float-right">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_4.jpg' ?>" alt="During the weeklong course, students found many opportunities to record data that would be used for presentations at the end of the quarter." data-lity></span>
                <p>During the weeklong course, students found many opportunities to record data that would be used for presentations at the end of the quarter.</p>
              </div>
              <!-- 5.5 -->
              <div class="mobile-slide predgal">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_5.jpg' ?>" alt="At the site of a wolf-killed elk, biologist Ky Koitzsch explains how to conduct a necropsy, studying everything from the elk’s worn molars and bone marrow health to nearby wolf pawprints and raven droppings." data-lity></span>
                <p>At the site of a wolf-killed elk, biologist Ky Koitzsch explains how to conduct a necropsy, studying everything from the elk’s worn molars and bone marrow health to nearby wolf pawprints and raven droppings.</p>
              </div>
              <!--IGNORED ON MOBILE -->
              <div class="student-quote predgal float-right">
                <!-- <div class="row centered pad-top"> -->
                  <blockquote class="col-xs-12 quote">
                      &ldquo; To actually go there and get a sense of where a cougar hunts helps you understand how they interact with their environment.&rdquo;
                  </blockquote>
                <!-- </div>
                <div class="row centered pad-bottom"> -->
                  <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/MATTHEW_QUOTE_PORTRAIT.png' ?>" alt="Matthew Malone, '18">
                  <p class="attribute no-top no-bottom">
                    Matthew Malone, &rsquo;18 </br>
                    Environmental Science and Terrestrial Resource Management
                  </p>
               <!--  </div> -->
              </div>
        <!-- </div> -->
        <section class="scrollit read-more" aria-hidden="true">
          <p>Scroll to continue</p>
          <div class="mouse">
            <div class="scroll"></div>
          </div>
      </section>
      </div>
    </section>

    <!--6. PREDATOR - LECTURE-->
    <section class="section fp-noscroll transparent-section bg-pred dbg-pred">
      <div class="background">
        <span class="lines right"></span>
        <span class="lines left"></span>
        <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
        <div class="foreground"></div>
        <div class="extra1"></div>
        <div class="extra2"></div>
        <div class="section-caption"><p>Predators // Lecture in the field</p></div>
        <div class="intro-body">
         <div class="row">
              <div class="text-box">
                  <div class="row centered">
                    <blockquote class="col-md-8 col-xs-12 quote">
                        &ldquo; The most common cause of death for adult wolves in Yellowstone is fighting to protect your family and your territory from a rival pack.&rdquo;
                    </blockquote>
                  </div>
                  <div class="row centered atts-pic">
                    <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/RICK_QUOTE_PORTRAIT.png' ?>" alt="Rick McIntyre">
                    <p class="attribute no-top no-bottom">
                      Rick McIntyre, Wolf Interpreter,</br>
                      Yellowstone National Park
                    </p>
                  </div>
                    <div class="audio desktop"><p class="length">0:29  <span>/ play lesson</span></p>
                      <audio controls class="player">
                        <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/audio/environment/Lecture_PREDATOR.mp3' ?>" type="audio/mpeg">
                        <!-- <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default /> -->
                        Your browser does not support HTML5 audio.
                      </audio>

                      <p class="audio-buttons">
                        <button class="audio-ctrl audio-play" tabindex="0">0:29 / PLAY LESSON</button>
                        <button class="audio-ctrl audio-pause" tabindex="0">pause</button>
                        <button class="audio-ctrl audio-read" tabindex="0">read transcript</button>
                      </p>
                      <div class="visually-hidden audio-transcript" tabindex="0">
                        <p class="tran-lit">There was a British anthropologist who once said that there’s no two species on earth that are so similar in social behavior as wolves and humans. For example, we found here that the most common cause of death for adult wolves in Yellowstone — since we don’t have any human hunting or trapping — the most common cause of death is to die fighting to protect your family and your territory from a rival pack.</p>
                        <span class="close-transcript" role="button" aria-label="close transcript" tabindex="0"></span>
                      </div>
                    </div>
              </div>
          </div>
        </div>
        <section class="scrollit read-more" aria-hidden="true">
            <p>Scroll to continue</p>
            <div class="mouse">
              <div class="scroll"></div>
            </div>
        </section>
      </div>
    </section>

     <!--7. PREY - OPENING SLIDE-->
  <section data-anchor="prey" class="section fp-noscroll bg-prey icon-section dbg-prey">
      <div class="background">
        <span class="lines right"></span>
        <span class="lines left"></span>
        <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
        <div class="foreground"></div>
        <div class="extra1"></div>
        <div class="extra2"></div>
        <div class="section-caption"><p>Prey</p></div>
        <div class="intro-body move-higher">
         <div class="row">
              <div class="text-box">
                  <div class="icon prey"></div>
                  <h1 class="">Prey</h1>
                  <span class="col-md-4 col-xs-10"><span class="squiggle"></span></span>
              </div>
          </div>
      </div>
        <section class="scrollit read-more" aria-hidden="true">
            <p>Scroll to continue</p>
            <div class="mouse">
              <div class="scroll"></div>
            </div>
        </section>
      </div>
  </section>

     <!--8. PREY - GALLERY-->
    <section class="section transparent-section bg-prey fp-auto-height">
        <div class="background photos">
          <div class="section-caption"><p>Prey // The student experience</p></div>
          <!-- <div class="intro-body"> -->
         <!-- <div class="row"> -->
              <!-- 8.1 -->
              <div class="mobile-slide prey">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PREY_GAL_1.jpg' ?>" alt="Rick Wallen, the lead biologist for bison in Yellowstone, talks to students about his work." data-lity></span>
                <p>Rick Wallen, the lead biologist for bison in Yellowstone, talks to students about his work.</p>
              </div>
              <!-- 8.3 -->
              <div class="prey float-right snapchat-vid">
                <div class="snapchat draw-line-link">
                  <video autoplay data-autoplay loop muted playsinline class="media" data-object-fit data-lity data-src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/PREY_SNAP_V.3.mp4' ?>">
                      <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/PREY_SNAP_V.3.mp4' ?>" type="video/mp4">
                  </video>
                </div>
                <p>Student’s-eye view: a morning drive; a talk about what animals to look for; exploring the surroundings for elk, bison, wolves and more.</p>
              </div>
              <!-- 8.2 -->
              <div class="mobile-slide prey">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PREY_GAL_2.jpg' ?>" alt="Bighorn sheep are just one of the many animals that congregate in Yellowstone" data-lity></span>
                <p class="">Bighorn sheep are just one of the many species of animals that congregate in Yellowstone.</p>
              </div>
              <!-- 8.4 -->
              <div class="mobile-slide prey float-right">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PREY_GAL_3.jpg' ?>" alt="Gavin Forster, ’18,  helps collect data for John Marzluff’s ongoing bird survey." data-lity></span>
                <p class="">Gavin Forster, &rsquo;18,  helps collect data for John Marzluff’s ongoing bird survey.</p>
              </div>
              <!-- 8.5 -->
              <!-- <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_6.jpg' ?>" alt="Students scan a far-off hillside for an elk carcass they’ve heard is in the area. Where there’s a carcass, there are often large — and hungry — animals." data-lity>
                <p>Students scan a far-off hillside for an elk carcass they’ve heard is in the area. Where there’s a carcass, there are often large — and hungry — animals.</p>
              </div>  -->
              <!--IGNORED ON MOBILE -->
              <div class="student-quote prey">
              <!-- <div class="row centered pad-top"> -->
                <blockquote class="col-xs-12 quote">
                    &ldquo; The conditions weren’t perfect for the elk survey. It wasn’t nice out and it wasn’t easy, but it was something I was really happy doing.&rdquo;
                </blockquote>
              <!-- </div> -->
              <!-- <div class="row centered pad-bottom"> -->
                <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/HANNAH_QUOTE_PORTRAIT.png' ?>" alt="Hannah Booth, '18">
                <p class="attribute no-top no-bottom">
                  Hannah Booth, &rsquo;18 </br>
                  Environmental Science and Terrestrial Resource Management
                </p>
              </div>
         <!--  </div> -->
        <!-- </div> -->
        <section class="scrollit read-more" aria-hidden="true">
          <p>Scroll to continue</p>
          <div class="mouse">
            <div class="scroll"></div>
          </div>
      </section>
      </div>
    </section>

    <!--9. PREY - LECTURE-->
    <section class="section fp-noscroll bg-prey transparent-section dbg-prey">
      <div class="background">
        <span class="lines right"></span>
        <span class="lines left"></span>
        <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
        <div class="foreground"></div>
        <div class="extra1"></div>
        <div class="extra2"></div>
        <div class="section-caption"><p>Prey // Lecture in the field</p></div>
        <div class="intro-body">
         <div class="row">
              <div class="text-box">
                  <div class="row centered">
                    <blockquote class="col-md-8 col-xs-12 quote">
                       &ldquo; Animals that are in really good condition have the luxury of not having to feed so much, so they can actually be quite vigilant.&rdquo;
                    </blockquote>
                  </div>
                  <div class="row centered atts-pic">
                    <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/AARON_PROFILE_QUOTE.png' ?>" alt="Aaron Wirsing">
                    <p class="attribute no-top no-bottom">
                      Aaron Wirsing, Associate Professor of Environmental and Forest Sciences,</br>
                      University of Washington
                    </p>
                  </div>
                    <div class="audio desktop"><p class="length">0:21  <span>/ play lesson</span></p>
                      <audio controls class="player">
                        <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/audio/environment/Lecture_PREY.mp3' ?>" type="audio/mpeg">
                        <!-- <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default /> -->
                        Your browser does not support HTML5 audio.
                      </audio>

                      <p class="audio-buttons">
                        <button class="audio-ctrl audio-play" tabindex="0">0:21 / PLAY LESSON</button>
                        <button class="audio-ctrl audio-pause" tabindex="0">pause</button>
                        <button class="audio-ctrl audio-read" tabindex="0">read transcript</button>
                      </p>
                      <div class="visually-hidden audio-transcript" tabindex="0">
                        <p class="tran-lit">Animals that are in really good condition have the luxury of not having to feed so much, so they can actually be quite vigilant — whereas animals that are emaciated and desperate tend to have to focus all their time eating and not looking for predators. So, simply put, if you can see the ribs, and you can see the parts of the backbone and the hip bone sticking out, that animal’s not doing very well.</p>
                        <span class="close-transcript" role="button" aria-label="close transcript" tabindex="0"></span>
                      </div>
                    </div>
              </div>
          </div>
        </div>
        <section class="scrollit read-more" aria-hidden="true">
            <p>Scroll to continue</p>
            <div class="mouse">
              <div class="scroll"></div>
            </div>
        </section>
      </div>
    </section>

     <!--10. SCAVENGER - OPENING SLIDE-->
  <section data-anchor="scavenger" class="section bg-scav fp-noscroll icon-section dbg-scav">
      <div class="background">
        <span class="lines right"></span>
        <span class="lines left"></span>
        <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
        <div class="foreground"></div>
        <div class="extra1"></div>
        <div class="extra2"></div>
        <div class="section-caption"><p>Scavengers</p></div>
        <div class="intro-body move-higher">
         <div class="row">
              <div class="text-box">
                  <div class="icon scav"></div>
                  <h1 class="">Scavengers</h1>
                  <span class="col-md-4 col-xs-10"><span class="squiggle"></span></span>
              </div>
          </div>
      </div>
        <section class="scrollit read-more" aria-hidden="true">
            <p>Scroll to continue</p>
            <div class="mouse">
              <div class="scroll"></div>
            </div>
        </section>
      </div>
  </section>

     <!--11. SCAVENGER - GALLERY-->
    <section class="section transparent-section bg-scav fp-auto-height">
        <div class="background photos">
          <div class="section-caption"><p>Scavengers // The student experience</p></div>
          <!-- <div class="intro-body"> -->
         <!-- <div class="row"> -->
              <!-- 11.1 -->
              <div class="mobile-slide scav">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/SCAV_GAL_1.jpg' ?>" alt="Celestina Davidson, ’17, scans, or “glasses,” the hills for wildlife." data-lity></span>
                <p>Celestina Davidson, ’17, scans, or “glasses,” the hills for wildlife.</p>
              </div>
              <!-- 11.2 -->
              <div class="scav float-right snapchat-vid">
                <div class="snapchat draw-line-link">
                  <video autoplay data-autoplay loop muted playsinline class="media" data-object-fit data-lity data-src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/SCAVENGER_SNAP.mp4' ?>">
                      <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/SCAVENGER_SNAP.mp4' ?>" type="video/mp4">
                  </video>
                </div>
                <p class="">Student’s-eye view: Slogs through mud and slush are rewarded with a picnic. A curious — and extremely intelligent — raven lingers nearby.</p>
              </div>
              <!-- 11.3 -->
              <div class="mobile-slide scav">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/SCAV_GAL_2.jpg' ?>" alt="The close-up intricacies of a feather." data-lity></span>
                <p>The close-up intricacies of a feather.</p>
              </div>
              <!-- 11.4 -->
              <div class="mobile-slide scav float-right">
               <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/SCAV_GAL_3.jpg' ?>" alt="Two ravens make their presence known in the otherwise silent expanse of the Lamar Valley." data-lity></span>
                <p class="">Two ravens make their presence known in the otherwise silent expanse of the Lamar Valley.</p>
              </div>
              <!-- 11.5 -->
              <!-- <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_6.jpg' ?>" alt="Students scan a far-off hillside for an elk carcass they’ve heard is in the area. Where there’s a carcass, there are often large — and hungry — animals." data-lity>
                <p>Students scan a far-off hillside for an elk carcass they’ve heard is in the area. Where there’s a carcass, there are often large — and hungry — animals.</p>
              </div>  -->
              <!--IGNORED ON MOBILE-->
              <div class="student-quote scav">
              <!-- <div class="row centered pad-top"> -->
                <blockquote class="col-xs-12 quote">
                    &ldquo; When we were watching the bears at the bison carcass at Blacktail Pond, there were also a lot of ravens, and John Marzluff told us all about their different social behaviors and interactions.&rdquo;
                </blockquote>
              <!-- </div>
              <div class="row centered pad-bottom"> -->
                <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/ANDREW_QUOTE_PORTRAIT.png' ?>" alt="Andrew Wang, '17">
                <p class="attribute no-top no-bottom">
                  Andrew Wang, &rsquo;17 </br>
                  Environmental Science and Terrestrial Resource Management
                </p>
              </div>
         <!--  </div> -->
        <!-- </div> -->
        <section class="scrollit read-more" aria-hidden="true">
          <p>Scroll to continue</p>
          <div class="mouse">
            <div class="scroll"></div>
          </div>
      </section>
      </div>
    </section>

    <!--12. SCAVENGER - LECTURE-->
    <section class="section fp-noscroll bg-scav transparent-section dbg-scav">
      <div class="background">
        <span class="lines right"></span>
        <span class="lines left"></span>
        <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
        <div class="foreground"></div>
        <div class="extra1"></div>
        <div class="extra2"></div>
        <div class="section-caption"><p>Scavengers // Lecture in the field</p></div>
        <div class="intro-body">
         <div class="row">
              <div class="text-box">
                  <div class="row centered">
                    <blockquote class="col-md-8 col-xs-12 quote">
                        &ldquo; Rather than risk your life killing a bison, they wait for a carcass to show up — especially this time of year.&rdquo;
                    </blockquote>
                  </div>
                  <div class="row centered atts-pic">
                    <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/DOUG_QUOTE_PORTRAIT.png' ?>" alt="Doug Smith">
                    <p class="attribute no-top no-bottom">
                      Doug Smith, Wolf Biologist,</br>
                      Yellowstone National Park
                    </p>
                  </div>
                    <div class="audio desktop"><p class="length">0:21  <span>/ play lesson</span></p>
                      <audio controls class="player">
                        <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/audio/environment/Lecture_SCAVENGER.mp3' ?>" type="audio/mpeg">
                        <!-- <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default /> -->
                        Your browser does not support HTML5 audio.
                      </audio>

                      <p class="audio-buttons">
                        <button class="audio-ctrl audio-play" tabindex="0">0:21 / PLAY LESSON</button>
                        <button class="audio-ctrl audio-pause" tabindex="0">pause</button>
                        <button class="audio-ctrl audio-read" tabindex="0">read transcript</button>
                      </p>
                      <div class="visually-hidden audio-transcript" tabindex="0">
                        <p class="tran-lit">A quarter to a third of all bison consumption by wolves is carcasses. And so rather than risk your life killing a bison, they wait for a carcass to show up — especially this time of year, especially during the rut. So this could be a huge subsidy for wolves and could be important in the impact of wolves on elk.</p>
                        <span class="close-transcript" role="button" aria-label="close transcript" tabindex="0"></span>
                      </div>
                    </div>
              </div>
          </div>
        </div>
        <section class="scrollit read-more" aria-hidden="true">
            <p>Scroll to continue</p>
            <div class="mouse">
              <div class="scroll"></div>
            </div>
        </section>
      </div>
    </section>

     <!--13. PEOPLE - OPENING SLIDE-->
  <section data-anchor="people" class="section bg-peop fp-noscroll icon-section dbg-peop">
      <div class="background">
        <span class="lines right"></span>
        <span class="lines left"></span>
        <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
        <div class="foreground"></div>
        <div class="extra1"></div>
        <div class="extra2"></div>
        <div class="section-caption"><p>Neighbors</p></div>
        <div class="intro-body move-higher">
         <div class="row">
              <div class="text-box">
                  <div class="icon people"></div>
                  <h1 class="">Neighbors</h1>
                  <span class="col-md-4 col-xs-10"><span class="squiggle"></span></span>
              </div>
          </div>
      </div>
        <section class="scrollit read-more" aria-hidden="true">
            <p>Scroll to continue</p>
            <div class="mouse">
              <div class="scroll"></div>
            </div>
        </section>
      </div>
  </section>

     <!--14. PEOPLE - GALLERY-->
    <section class="section transparent-section bg-peop fp-auto-height">
        <div class="background photos">
          <div class="section-caption"><p>Neighbors // The student experience</p></div>
          <!-- <div class="intro-body"> -->
         <!-- <div class="row"> -->
              <!-- 14.1 -->
              <div class="mobile-slide peop">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PEOPLE_GAL_1.1.jpg' ?>" alt="• Malou Anderson-Ramirez (far right) talks to students about the challenges and rewards of ranching on the Yellowstone border." data-lity></span>
                <p class="">Malou Anderson-Ramirez (far right) talks to students about the challenges and rewards of ranching on the Yellowstone border.</p>
              </div>
              <!-- 14.2 -->
              <div class="mobile-slide peop float-right">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PEOPLE_GAL_2.jpg' ?>" alt="Horses, longhorns, goats and other domesticated animals pepper the many ranches in the expansive Tom Miner Basin, just miles from the Yellowstone Park border." data-lity></span>
                <p>Horses, longhorns, goats and other domesticated animals pepper the many ranches in the expansive Tom Miner Basin, just miles from the Yellowstone Park border.</p>
              </div>
              <!-- 14.3 -->
              <div class="mobile-slide peop">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PEOP-6.jpg' ?>" alt="At the site of a wolf-killed elk, wildlife biologist Ky Koitzsch (center) explains to students how to conduct a necropsy." data-lity></span>
                <p class="">At the site of a wolf-killed elk, wildlife biologist Ky Koitzsch (center) explains to students how to conduct a necropsy.</p>
              </div>
              <!-- 14.4 -->
              <div class="mobile-slide peop float-right">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PEOP-5.jpg' ?>" alt="Zach Gregory, ’15, a wildlife technician working alongside Koitzsch, shows Jenny Brent, ’19, how to enter data on a necropsy form. Gregory took this class as an undergraduate." data-lity></span>
                <p>Zach Gregory (right), ’15, a wildlife technician working alongside Koitzsch, shows Jenny Brent, ’19, how to enter data on a necropsy form. Gregory took this class as an undergraduate.</p>
              </div>
              <!-- 14.5 -->
              <div class="mobile-slide peop">
                <span><img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PEOP-4.jpg' ?>" alt="Like Gregory, Connor Meyer (left, facing camera), ’16, took this class as an undergraduate and works in the park as a wildlife technician. He leads Wirsing (right, facing camera) and the rest of the class to the site of a cougar-killed elk." data-lity></span>
                <p>Like Gregory, Connor Meyer (left, facing camera), ’16, took this class as an undergraduate and works in the park as a wildlife technician. He leads Wirsing (right, facing camera) and the rest of the class to the site of a cougar-killed elk.</p>
              </div>
              <!--IGNORED ON MOBILE-->
              <div class="student-quote peop float-right">
              <!-- <div class="row centered pad-top"> -->
                <blockquote class="col-xs-12 quote">
                    &ldquo; Going to Yellowstone with wildlife biologists is like going behind the scenes of a play.&rdquo;
                </blockquote>
              <!-- </div>
              <div class="row centered pad-bottom"> -->
                <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/NIKKI_QUOTE_PORTRAIT.png' ?>" alt="Nikki Furner, '18">
                <p class="attribute no-top no-bottom">
                  Nikki Furner, &rsquo;18 </br>
                  Environmental Science and Terrestrial Resource Management
                </p>
              </div>
         <!--  </div> -->
        <!-- </div> -->
        <section class="scrollit read-more" aria-hidden="true">
          <p>Scroll to continue</p>
          <div class="mouse">
            <div class="scroll"></div>
          </div>
      </section>
      </div>
    </section>

    <!--15. PEOPLE - LECTURE-->
    <section class="section fp-noscroll bg-peop transparent-section dbg-peop">
      <div class="background">
        <span class="lines right"></span>
        <span class="lines left"></span>
        <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt="">
        <div class="foreground"></div>
        <div class="extra1"></div>
        <div class="extra2"></div>
        <div class="section-caption"><p>Neighbors // Lecture in the field</p></div>
        <div class="intro-body">
         <div class="row">
              <div class="text-box">
                  <div class="row centered">
                    <blockquote class="col-md-8 col-xs-12 quote">
                        &ldquo;  Here at Yellowstone, we try to do a census of the bison population every year.&rdquo;
                    </blockquote>
                  </div>
                  <div class="row centered atts-pic">
                    <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PORTRAIT_QUOTE_RICK_WALLEN.png' ?>" alt="Rick Wallen">
                    <p class="attribute no-top no-bottom">
                      Rick Wallen, Bison Biologist, Yellowstone National Park
                    </p>
                  </div>
                    <div class="audio desktop"><p class="length">0:36  <span>/ play lesson</span></p>
                      <audio controls class="player">
                        <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/audio/environment/LECTURE_RICK_WALLEN.mp3' ?>" type="audio/mpeg">
                        <!-- <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default /> -->
                        Your browser does not support HTML5 audio.
                      </audio>

                      <p class="audio-buttons">
                        <button class="audio-ctrl audio-play" tabindex="0">0:36 / PLAY LESSON</button>
                        <button class="audio-ctrl audio-pause" tabindex="0">pause</button>
                        <button class="audio-ctrl audio-read" tabindex="0">read transcript</button>
                      </p>
                      <div class="visually-hidden audio-transcript" tabindex="0">
                        <p class="tran-lit">Us humans in the United States do a census every 10 years of the population. Well here at Yellowstone we try and do a census of the bison population every year. So I will have my team for about two weeks go out in pairs, and split up, and classify every single group that we can find on the landscape. The way we do that is we put a couple people in the airplane on Sunday or Monday and we fly around, and it helps us figure out the distribution of the animals. It helps us organize our daily expeditions to get out in the field and go find all of those groups.</p>
                        <span class="close-transcript" role="button" aria-label="close transcript" tabindex="0"></span>
                      </div>
                    </div>
              </div>
          </div>
        </div>
        <section class="scrollit read-more" aria-hidden="true">
            <p>Scroll to continue</p>
            <div class="mouse">
              <div class="scroll"></div>
            </div>
        </section>
      </div>
    </section>

    <!--16. BACK TO WASHINGTON-->
    <section class="section fp-noscroll" id="backto">
    <div class="background">
      <!-- <div class="section-caption"><p>The experience begins</p></div> -->
      <div class="intro-body less-margins">
         <div class="row">
              <div class="text-box" id=''>
                  <h1 class="">Back to Washington</h1>
                  <div class="row centered">
                    <p class="col-md-8 col-xs-12">
                        Yellowstone National Park has long been a bellwether for scientists to study how ecosystems work. Learning about both wildlife and humans there has given students an experience they’ll bring back to their classrooms in Washington — and their careers in the wide landscape beyond.
                    </p>
                  </div>
                  <div class="row centered spaced">
                    <p class="col-md-7 col-xs-11 no-top no-bottom">
                        Read more about who the students met in Yellowstone, the animals they saw and studied, and what they discovered about the challenges and rewards of careers in wildlife management.
                    </p>
                  </div>
                  <a href="http://www.washington.edu/boundless/yellowstone-students/" class="explore">Read more</a>
              </div>
          </div>
      </div>
      <section class="scrollit read-more" aria-hidden="true">
          <p>Scroll to continue</p>
          <div class="mouse">
            <div class="scroll"></div>
          </div>
      </section>
    </div>
  </section>

  <!--17. WHAT YOU CARE ABOUT CAN CHANGE THE WORLD-->
  <section class="section fp-noscroll" id="giving">
    <div class="background">
      <!-- <div class="section-caption"><p>The experience begins</p></div> -->
      <div class="intro-body move-higher">
         <div class="row">
              <div class="text-box" id=''>
                  <h1 class="">What you care about </br>can change the world</h1>
                  <div class="row centered add-spacing">
                    <p class="col-md-7 col-xs-12 no-top no-bottom add-bottom">
                        The University of Washington is undertaking its most ambitious campaign ever: Be Boundless — For Washington, For the World. When you support immersive learning experiences at the College of the Environment, you can make it possible for students to get hands-on experiences that propel them toward the careers of their dreams.
                    </p>
                  </div>
              <div class="col-xs-12">
                <div id="immersive-give-iframe"></div>
                <div class="boundless-button sm dark give"><span><a id="give-now-button" data-fund="CELEND" href="#" data-lity data-lity-target="https://online.gifts.washington.edu/secure/makeagift/givingOpps.aspx?nobanner=true&frame_buster=false&source_typ=3&appeal=17XIS&source=CELEND" role="button">Give now</a></span></div>
                <!-- <div class="boundless-button sm dark give"><span><a id="immersive-give" data-fund="CELEND" href="#" data-lity data-lity-target="https://online.gifts.washington.edu/secure/makeagift/givingOpps.aspx?nobanner=true&frame_buster=false&source_typ=3&appeal=17XIS&source=CELEND">Give now</a></span></div> -->
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

 <div id="scrollbar" role="navigation" aria-label="User menu">
   <h2>Navigate</h2>
   <div class="black">
     <ol class="empty-line">
       <span id="full-line"></span>
       <li><a href="#home" class="dot dot1" role="button"><span></span><p>Intro</p></a></li>
       <li><a href="#experience" class="dot dot2" role="button"><span></span><p>Experience</p></a></li>
       <li><a href="#meet" class="dot dot3" role="button"><span></span><p>Students</p></a></li>
       <li><a href="#predator" class="dot dot4" role="button"><span></span><p>Predators</p></a></li>
       <li><a href="#prey" class="dot dot7" role="button"><span></span><p>Prey</p></a></li>
       <li><a href="#scavenger" class="dot dot10" role="button"><span></span><p>Scavengers</p></a></li>
       <li><a href="#people" class="dot dot13" role="button"><span></span><p>Neighbors</p></a></li>
       <li><a href="#explore" class="dot dot16" role="button"><span></span><p>Explore</p></a></li>
       <li><a href="#give" class="dot dot17" role="button"><span></span><p>Give</p><span class="coverup"></span></a></li>
       <span class="dash dash41"></span>
       <span class="dash dash42"></span>
       <span class="dash dash51"></span>
       <span class="dash dash52"></span>
       <span class="dash dash61"></span>
       <span class="dash dash62"></span>
       <span class="dash dash71"></span>
       <span class="dash dash72"></span>
     </div>
   </div>
 </div>


</div>

<!-- <div id="immersive-body">
  <div id="pinContainer">
    <div id="slideContainer">
      <section class="test red active"><p>test text</p></section>
      <section class="test green"><p>test text</p></section>
      <section class="test blue"><p>test text</p></section>
      <section class="test yellow"><p>test text</p></section>
    </div>
  </div>
</div> -->


<!-- <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/animationLibraries.min.js' ?>" type="text/javascript"></script> -->
<!-- <script src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/js/environment.min.js' ?>" type="text/javascript"></script> -->
<!-- <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/header.js' ?>" type="text/javascript"></script> -->



 <?php //get_template_part('footer', 'campaign-v2'); ?>

    <?php echo $scripts; ?>
    <?php if($_SERVER['HTTP_HOST'] != 'localhost'){ ?>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-15747328-1', 'auto');
        ga('send', 'pageview');
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-15747328-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-15747328-1');
      </script> -->
      <!--Start Secure ASYNC Google Analytics by PulsePoint Content -->
      <script> window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;ga('create', 'UA-112829717-26', 'auto', {'name': 'pulsePoint'});ga('pulsePoint.send', 'pageview'); </script>
      <script async src='https://www.google-analytics.com/analytics.js'></script>
      <!--End Secure ASYNC Google Analytics by PulsePoint Content -->

      <!--Start Secure Moat Analytics by PulsePoint Content -->
      <script>(function(){var a=document,b=a.createElement("script"),a=a.getElementsByTagName("script")[0];b.type="text/javascript";b.async=!0;b.src="https://z.moatads.com/pulsepoint395aRVe22/moatcontent.js#moatClientLevel1=Yellowstone&moatClientLevel2=Yellowstone";a.parentNode.insertBefore(b,a)})();</script>
      <!--End Secure Moat Analytics by PulsePoint Content -->
    <?php } ?>
  </body>
</html>
<!--
</body>
</html> -->

<?php

  global $meta;
  global $styles;
  global $scripts;


  $meta = '';
  $styles =  "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' />" . 
            "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' />" . 
            "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/libraries/jquery.fullPage.min.css' type='text/css' media='all' />" .
            "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/environment.css' type='text/css' media='all' />";
  $scripts =  "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/header.js' type='text/javascript'></script>" .
              // "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script>" .
              // "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/libraries/fullpage.fadingEffect.min.js' type='text/javascript'></script>" .
              "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/environmentLibraries.min.js' type='text/javascript'></script>" .
              "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/environment.min.js' type='text/javascript'></script>" .
              "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/environment.js' type='text/javascript'></script>";

  get_header( "campaign-v2" );
?>

<div id="immersive-body">
   <!--1. A WEEK IN THE WILD-->
  <section class="section fp-noscroll slide1" id="intro-vid">
    <div class="background">
      <button id="pause">Pause</button>
      <video  autoplay data-autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/header-poster.png' ?>" class="fullscreen-bg__video">
         <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/HEADER_30_SECOND.mp4' ?>" type="video/mp4">
      </video>

      <div class="intro-body">
         <div class="row">
              <div class="" id='intro-text'>
                  <h1 class="=">A week in </br>the wild</h1>
                  <p class="col-md-4 col-sm-10 col-xs-12">
                      In March 2017, professors and students from the College of the Environment made a classroom out of one of the most closely monitored ecosystems in the world: Yellowstone National Park. Explore their learning experience below.
                  </p>
              </div>         
          </div>
          <div class="play-button mobile" >
              <a data-lity href="https://www.youtube.com/embed/Tr6KBzdaM0o?autoplay=1&rel=0&showinfo=0">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="137.909px" height="137.131px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131"
                 xml:space="preserve">
              <ellipse fill="none" stroke="#FFFFFF" stroke-width="7.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>
              <polygon fill="#FFFFFF" points="48.611,37.617 103.268,68.345 48.611,99.072 "/>
              </svg>
                <p>Watch video</p>
              </a>
          </div> 
      </div>
      <div class="play-button" >
          <a data-lity href="https://www.youtube.com/embed/Tr6KBzdaM0o?autoplay=1&rel=0&showinfo=0">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="137.909px" height="137.131px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131"
             xml:space="preserve">
          <ellipse fill="none" stroke="#FFFFFF" stroke-width="7.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>
          <polygon fill="#FFFFFF" points="48.611,37.617 103.268,68.345 48.611,99.072 "/>
          </svg>
            <p>Play full video</p>
          </a>
      </div> 
      <span class="gold-tilt gold-tilt-2"></span>
      <section class="scrollit read-more click-section">
          <p>Click on any section to jump ahead</p>
          <div class="down-arrow"></div>
      </section>
      <section class="scrollit read-more scroll-down">
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
      <div class="intro-body">
         <div class="row">
              <div class="text-box" id='intro-text-yellow'>
                  <h1 class=""><span>Experience</span> Yellowstone</h1>
                  <div class="row centered">
                    <p class="col-md-6 col-xs-12">
                        Yellowstone is a complex ecosystem that predators, prey and scavengers call home. And it includes people: those who study, monitor and protect the animals within the park, as well as those whose livelihoods intersect with animals that know no formal boundaries.
                        </br></br>
                        See what the UW students saw, hear what they heard and learn what they learned about wildlife management in Yellowstone. Click on any section to start exploring.
                    </p>
                  </div>
                  <div class="col-md-7 col-xs-12">
                    <a href="#" class="col-sm-3 col-xs-3 section-links">Predators</a>
                    <a href="#" class="col-sm-3 col-xs-3 section-links">Prey</a>
                    <a href="#" class="col-sm-3 col-xs-3 section-links">Scavengers</a>
                    <a href="#" class="col-sm-3 col-xs-3 section-links">People</a>
                  </div>
              </div>         
          </div>
      </div>
      <section class="scrollit read-more">
          <p>Scroll to continue</p>  
          <div class="mouse">
            <div class="scroll"></div>
          </div> 
      </section>
    </div>
  </section>

   <!--3. STUDENTS START-->
  <section class="section fp-noscroll"  id="students">
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
                          Learn more about how you can support immersive learning experiences at the College of the Environment and help propel students toward the careers of their dreams.
                      </p>
                    </div>
                </div>         
            </div>
        </div>

        <div class="student student1"><a class="student-link" href="#student1"><image class="student student1" alt="student one" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait1.png' ?>"></a></div>
        <div class="student student2"><a class="student-link" href="#student2"><image class="student student2" alt="student two" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait2.png' ?>"></a></div>
        <div class="student student3"><a class="student-link" href="#student3"><image class="student student3" alt="student three" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait3.png' ?>"></a></div>
        <div class="student student4"><a class="student-link" href="#student4"><image class="student student4" alt="student four" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait4.png' ?>"></a></div>
        <div class="student student5"><a class="student-link" href="#student5"><image class="student student5" alt="student five" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait5.png' ?>"></a></div>
        <div class="student student6"><a class="student-link" href="#student6"><image class="student student6" alt="student six" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait6.png' ?>"></a></div>
      </section>

        <!-- STUDENTS - PROFILES -->
        <!-- 3.2 -->
        <section id="student1" class="student student1 mobile-slide">
          <div class="name">
            <h3>Loma</br>Pendergraft, M.S. and Ph.D. student</h3>
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
        <section id="student2" class="student student2 mobile-slide">
          <div class="name">
            <h3>Danyan</br>Leng, '18</h3>
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
        <section id="student3" class="student student3 mobile-slide">
          <div class="name">
            <h3>Hannah</br>Booth, '18</h3>
            <p class="major">Major: Environmental science and terrestrial resource management</p>
            <span class="udub-slant"><span></span></span>
            <!-- <p>lorem ipsum</p> -->
          </div>
          <div class="quote">
            <blockquote><span>&ldquo;</span>I didn’t have a lot of field experience before this trip. I didn’t know if I could hack it, how difficult it would be or if I would even enjoy it. But now I’m really excited about fieldwork. I’m definitely going to pursue it.<span>&rdquo;</span></blockquote>
          </div>
          <image class="full-student" alt="student one" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/profile_6.png' ?>">
        </section>
         <!-- 3.5 -->
        <section id="student4" class="student student4 mobile-slide">
          <div class="name">
            <h3>Gavin</br>Forster, '18</h3>
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
        <section id="student5" class="student student5 mobile-slide">
          <div class="name">
            <h3>Courtney</br>Straight, '18</h3>
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
        <section id="student6" class="student student6 mobile-slide">
          <div class="name">
            <h3>Andrew</br>Wang, '17</h3>
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

      <section class="scrollit read-more">
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
  <section class="fixed-section blank" id="fixed-section">
    <div class="background">
      <span class="lines right"></span>
      <span class="lines left"></span>
      <!-- <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt=""> -->
      <div class="foreground"></div>
    </div>
  </section>

   <!--4. PREDATOR - OPENING SLIDE-->
  <section class="section fp-noscroll icon-section predator">
      <div class="background">
        <div class="section-caption"><p>Predators // Explore</p></div>
        <div class="intro-body move-higher">
         <div class="row">
              <div class="text-box">
                  <div class="icon"></div>
                  <h1 class="">Predators</h1>
                  <span class="col-md-4 col-xs-10"><span class="squiggle"></span></span>
                  <div class="audio"><p class="length">0:29  <span>/ play lesson</span></p>
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
                    <div id="transcript1"class="visually-hidden audio-transcript" tabindex="0">
                      <p>Speaker: Rick McIntyre, wolf interpreter, Yellowstone National Park</p>
                      <p>There was a British anthropologist that once said that there is no two species on Earth that are so similar in social behavior as wolves in humans. For example we found here that the most common cause of death for adult wolves in Yellowstone since we don't have any human hunting or trapping the most common cause of death is to die fighting to protect your family and your territory from a rival pack</p>
                    </div>
                  </div>
              </div>         
          </div>
      </div>
        <section class="scrollit read-more">
            <p>Scroll to continue</p>  
            <div class="mouse">
              <div class="scroll"></div>
            </div> 
        </section>
      </div>
  </section>

     <!--5. PREDATOR - GALLERY-->
    <section class="section transparent-section fp-auto-height">
        <div class="background photos">
          <div class="section-caption"><p>Predators // The student experience</p></div>
          <!-- <div class="intro-body"> -->
         <!-- <div class="row"> -->
               <!-- 5.1 -->
               <div class="mobile-slide"> 
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_1.jpg' ?>" alt="On a foggy day, Aaron Wirsing points out possible locations where wolves could be on a distant ridge." data-lity>
                <p class="">On a foggy day, Aaron Wirsing points out possible locations where wolves could be on a distant ridge.</p>
              </div>
              <!-- 5.2 -->
              <div class="mobile-slide float-right">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_2.jpg' ?>" alt="After awaking from hibernation, a grizzly bear makes its way to an easy meal: a nearby bison carcass. While fattening up for winter, the omnivorous grizzly feasts on everything from berries to cutthroat trout to insects." data-lity>
                <p class="">After awaking from hibernation, a grizzly bear makes its way to an easy meal: a nearby bison carcass. While fattening up for winter, the omnivorous grizzly feasts on everything from berries to cutthroat trout to insects.</p>
              </div>
              <!-- 5.3 -->
              <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_3.jpg' ?>" alt="Tyler, a TK title, holds a golden eagle. After drawing blood, weighing and measuring the bird, he releases it." data-lity>
                <p>Tyler, a TK title, holds a golden eagle. After drawing blood, weighing and measuring the bird, he releases it.</p>
              </div>
              <!-- 5.4 -->
              <div class="mobile-slide float-right">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_4.jpg' ?>" alt="During the weeklong course, students found many opportunities to record data that would be used for presentations at the end of the quarter." data-lity>
                <p>During the weeklong course, students found many opportunities to record data that would be used for presentations at the end of the quarter.</p>
              </div> 
              <!-- 5.5 -->
              <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_5.jpg' ?>" alt="At the site of a wolf-killed elk, biologist Kai Koitzsch explains how to conduct a necropsy, studying everything from the elk’s worn molars and bone marrow health to nearby wolf pawprints and raven droppings." data-lity>
                <p>At the site of a wolf-killed elk, biologist Kai Koitzsch explains how to conduct a necropsy, studying everything from the elk’s worn molars and bone marrow health to nearby wolf pawprints and raven droppings.</p>
              </div> 
              <!--IGNORED ON MOBILE -->
              <div class="row centered pad-top">
                <blockquote class="col-xs-10 quote">
                    <span>&ldquo;</span>
                    To actually go there and get a sense of where a cougar hunts helps you understand how they interact with their environment.
                    <span>&rdquo;</span>
                </blockquote>
              </div>
              <div class="row centered pad-bottom">
                <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/MATT_QUOTE_PORTRAIT.png' ?>" alt="Matthew Malone, '18">
                <p class="attribute no-top no-bottom">
                  Matthew Malone, ’18
                </p>
              </div>
         <!--  </div> -->
        <!-- </div> -->
        <section class="scrollit read-more">
          <p>Scroll to continue</p>  
          <div class="mouse">
            <div class="scroll"></div>
          </div> 
      </section>
      </div>     
    </section>

    <!--6. PREDATOR - LECTURE-->
    <section class="section fp-noscroll transparent-section">
      <div class="background">
        <div class="section-caption"><p>Predators // Lecture in the field</p></div>
        <div class="intro-body">
         <div class="row">
              <div class="text-box">
                  <div class="row centered">
                    <blockquote class="col-md-8 col-xs-12 quote">
                        <span>&ldquo;</span>
                        There is no two species on Earth that are so similar in social behavior as wolves in humans.
                        <span>&rdquo;</span>
                    </blockquote>
                  </div>
                  <div class="row centered">
                    <!-- <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/DOUG_SMITH_QUOTE_PORTRAIT.png' ?>" alt="Doug Smith"> -->
                    <p class="attribute no-top no-bottom">
                      Rick McIntyre, wolf interpreter,</br>
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
                        <p>Speaker: Rick McIntyre, wolf interpreter, Yellowstone National Park</p>
                        <p>There was a British anthropologist that once said that there is no two species on Earth that are so similar in social behavior as wolves in humans. For example we found here that the most common cause of death for adult wolves in Yellowstone since we don't have any human hunting or trapping the most common cause of death is to die fighting to protect your family and your territory from a rival pack.</p>
                      </div>
                    </div>
              </div>         
          </div>
        </div>
        <section class="scrollit read-more">
            <p>Scroll to continue</p>  
            <div class="mouse">
              <div class="scroll"></div>
            </div> 
        </section>
      </div>
    </section>

     <!--7. PREY - OPENING SLIDE-->
  <section class="section fp-noscroll icon-section predator">
      <div class="background">
        <div class="section-caption"><p>Prey // Explore</p></div>
        <div class="intro-body move-higher">
         <div class="row">
              <div class="text-box">
                  <div class="icon"></div>
                  <h1 class="">Prey</h1>
                  <span class="col-md-4 col-xs-10"><span class="squiggle"></span></span>
                  <div class="audio"><p class="length">0:21  <span>/ play lesson</span></p>
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
                    <div id="transcript1"class="visually-hidden audio-transcript" tabindex="0">
                      <!-- <p>Speaker: Rick McIntyre, wolf interpreter, Yellowstone National Park</p> -->
                      <p>Animals that are in really good condition have the luxury of not having to feed so much they can actually be quite vigilant whereas animals that are emaciated desperate tend to have to focus all their time eating and not looking for predators. So simply put if you can see the ribs and you can see the parts of the backbone and the hip bones sticking out that animals not doing very well.</p>
                    </div>
                  </div>
              </div>         
          </div>
      </div>
        <section class="scrollit read-more">
            <p>Scroll to continue</p>  
            <div class="mouse">
              <div class="scroll"></div>
            </div> 
        </section>
      </div>
  </section>

     <!--8. PREY - GALLERY-->
    <section class="section transparent-section fp-auto-height">
        <div class="background photos">
          <div class="section-caption"><p>Prey // The student experience</p></div>
          <!-- <div class="intro-body"> -->
         <!-- <div class="row"> -->
              <!-- 8.1 -->
              <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PREY_GAL_1.jpg' ?>" alt="Rick Wallen, the lead biologist for bison in Yellowstone, talks to students about his work." data-lity>
                <p>Rick Wallen, the lead biologist for bison in Yellowstone, talks to students about his work.</p>
              </div>
              <!-- 8.3 -->
              <div class="mobile-slide float-right">
                <div class="snapchat draw-line-link">
                  <video autoplay data-autoplay loop muted playsinline class="media" data-object-fit data-lity>
                      <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/PREY_SNAP.mp4' ?>" type="video/mp4">
                  </video>
                </div>
                <p>Student’s-eye view: Captured on Snapchat glasses at a picnic. A curious — and extremely intelligent — raven lingers nearby.</p>
              </div> 
              <!-- 8.2 -->
              <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PREY_GAL_2.jpg' ?>" alt="Bighorn sheep are just one of the many animals that congregate in Yellowstone" data-lity>
                <p class="">Bighorn sheep are just one of the many animals that congregate in Yellowstone</p>
              </div>
              <!-- 8.4 -->
              <div class="mobile-slide centered"> 
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PREY_GAL_3.jpg' ?>" alt="Gavin Forster, ’18,  helps collect data for John Marzluff’s ongoing bird survey." data-lity>
                <p class="">Gavin Forster, ’18,  helps collect data for John Marzluff’s ongoing bird survey.</p>
              </div>
              <!-- 8.5 -->
              <!-- <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_6.jpg' ?>" alt="Students scan a far-off hillside for an elk carcass they’ve heard is in the area. Where there’s a carcass, there are often large — and hungry — animals." data-lity>
                <p>Students scan a far-off hillside for an elk carcass they’ve heard is in the area. Where there’s a carcass, there are often large — and hungry — animals.</p>
              </div>  -->
              <!--IGNORED ON MOBILE -->
              <div class="row centered pad-top">
                <blockquote class="col-xs-10 quote">
                    <span>&ldquo;</span>
                    The conditions weren’t perfect for the elk survey. It wasn’t nice out and it wasn’t easy, but it was something I was really happy doing.
                    <span>&rdquo;</span>
                </blockquote>
              </div>
              <div class="row centered pad-bottom">
                <!-- <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/DOUG_SMITH_QUOTE_PORTRAIT.png' ?>" alt="Doug Smith"> -->
                <p class="attribute no-top no-bottom">
                  Hannah Booth, '18
                </p>
              </div>
         <!--  </div> -->
        <!-- </div> -->
        <section class="scrollit read-more">
          <p>Scroll to continue</p>  
          <div class="mouse">
            <div class="scroll"></div>
          </div> 
      </section>
      </div>     
    </section>

    <!--9. PREY - LECTURE-->
    <section class="section fp-noscroll transparent-section">
      <div class="background">
        <div class="section-caption"><p>Prey // Lecture in the field</p></div>
        <div class="intro-body">
         <div class="row">
              <div class="text-box">
                  <div class="row centered">
                    <blockquote class="col-md-8 col-xs-12 quote">
                        <span>&ldquo;</span>
                        Animals that are in really good condition have the luxury of not having to feed so much can actually be quite vigilant.
                        <span>&rdquo;</span>
                    </blockquote>
                  </div>
                  <div class="row centered">
                    <!-- <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/DOUG_SMITH_QUOTE_PORTRAIT.png' ?>" alt="Doug Smith"> -->
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
                        <!-- <p>Speaker: Rick McIntyre, wolf interpreter, Yellowstone National Park</p> -->
                        <p>Animals that are in really good condition have the luxury of not having to feed so much they can actually be quite vigilant whereas animals that are emaciated desperate tend to have to focus all their time eating and not looking for predators. So simply put if you can see the ribs and you can see the parts of the backbone and the hip bones sticking out that animals not doing very well.</p>
                      </div>
                    </div>
              </div>         
          </div>
        </div>
        <section class="scrollit read-more">
            <p>Scroll to continue</p>  
            <div class="mouse">
              <div class="scroll"></div>
            </div> 
        </section>
      </div>
    </section>

     <!--10. SCAVENGER - OPENING SLIDE-->
  <section class="section fp-noscroll icon-section predator">
      <div class="background">
        <div class="section-caption"><p>Scavengers // Explore</p></div>
        <div class="intro-body move-higher">
         <div class="row">
              <div class="text-box">
                  <div class="icon"></div>
                  <h1 class="">Scavengers</h1>
                  <span class="col-md-4 col-xs-10"><span class="squiggle"></span></span>
                  <div class="audio"><p class="length">0:18  <span>/ play lesson</span></p>
                    <audio controls class="player">
                      <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/audio/environment/Lecture_SCAVENGER.mp3' ?>" type="audio/mpeg">
                      <!-- <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default /> -->
                      Your browser does not support HTML5 audio.
                    </audio>
                    
                    <p class="audio-buttons">
                      <button class="audio-ctrl audio-play" tabindex="0">0:18 / PLAY LESSON</button>  
                      <button class="audio-ctrl audio-pause" tabindex="0">pause</button>  
                      <button class="audio-ctrl audio-read" tabindex="0">read transcript</button>
                    </p>
                    <div id="transcript1"class="visually-hidden audio-transcript" tabindex="0">
                      <!-- <p>Speaker: Rick McIntyre, wolf interpreter, Yellowstone National Park</p> -->
                      <p>A quarter to a third of all bison consumption by wolves is carcasses. And so rather than risk your life killing a bison they wait for a carcass to show up especially this time of year especially during the rut. So this could be a huge subsidy for wolves and could be important in that the impact of wolves and elk.</p>
                    </div>
                  </div>
              </div>         
          </div>
      </div>
        <section class="scrollit read-more">
            <p>Scroll to continue</p>  
            <div class="mouse">
              <div class="scroll"></div>
            </div> 
        </section>
      </div>
  </section>

     <!--11. SCAVENGER - GALLERY-->
    <section class="section transparent-section fp-auto-height">
        <div class="background photos">
          <div class="section-caption"><p>Scavengers // The student experience</p></div>
          <!-- <div class="intro-body"> -->
         <!-- <div class="row"> -->
              <!-- 11.1 -->
              <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/SCAV_GAL_1.jpg' ?>" alt="Celestina Davidson, ’17, scans, or “glasses,” the hills for wildlife." data-lity>
                <p>Celestina Davidson, ’17, scans, or “glasses,” the hills for wildlife.</p>
              </div>
              <!-- 11.2 -->
              <div class="mobile-slide float-right">
                <div class="snapchat draw-line-link">
                  <video autoplay data-autoplay loop muted playsinline class="media" data-object-fit data-lity>
                      <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/SCAVENGER_SNAP.mp4' ?>" type="video/mp4">
                  </video>
                </div>
                <p class="">Student’s-eye view: Slogs through mud and slush are rewarded with a picnic.</p>
              </div>
              <!-- 11.3 -->
              <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/SCAV_GAL_2.jpg' ?>" alt="The close-up intricacies of a feather." data-lity>
                <p>The close-up intricacies of a feather.</p>
              </div> 
              <!-- 11.4 -->
              <div class="mobile-slide centered"> 
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/SCAV_GAL_3.jpg' ?>" alt="Two ravens make their presence known in the otherwise silent expanse of the Lamar Valley." data-lity>
                <p class="">Two ravens make their presence known in the otherwise silent expanse of the Lamar Valley.</p>
              </div>
              <!-- 11.5 -->
              <!-- <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_6.jpg' ?>" alt="Students scan a far-off hillside for an elk carcass they’ve heard is in the area. Where there’s a carcass, there are often large — and hungry — animals." data-lity>
                <p>Students scan a far-off hillside for an elk carcass they’ve heard is in the area. Where there’s a carcass, there are often large — and hungry — animals.</p>
              </div>  -->
              <!--IGNORED ON MOBILE-->
              <div class="row centered pad-top">
                <blockquote class="col-xs-10 quote">
                    <span>&ldquo;</span>
                    When we were watching the bears at the bison carcass at Blacktail Pond, there were also a lot of ravens, and John Marzluff told us all about their different social behaviors and interactions.
                    <span>&rdquo;</span>
                </blockquote>
              </div>
              <div class="row centered pad-bottom">
                <<!-- img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/DOUG_SMITH_QUOTE_PORTRAIT.png' ?>" alt="Doug Smith"> -->
                <p class="attribute no-top no-bottom">
                  Andrew Wang, '17'
                </p>
              </div>
         <!--  </div> -->
        <!-- </div> -->
        <section class="scrollit read-more">
          <p>Scroll to continue</p>  
          <div class="mouse">
            <div class="scroll"></div>
          </div> 
      </section>
      </div>     
    </section>

    <!--12. SCAVENGER - LECTURE-->
    <section class="section fp-noscroll transparent-section">
      <div class="background">
        <div class="section-caption"><p>Scavengers // Lecture in the field</p></div>
        <div class="intro-body">
         <div class="row">
              <div class="text-box">
                  <div class="row centered">
                    <blockquote class="col-md-8 col-xs-12 quote">
                        <span>&ldquo;</span>
                        And so rather than risk your life killing a bison they wait for a carcass to show up especially this time of year.
                        <span>&rdquo;</span>
                    </blockquote>
                  </div>
                  <div class="row centered">
                    <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/DOUG_SMITH_QUOTE_PORTRAIT.png' ?>" alt="Doug Smith">
                    <p class="attribute no-top no-bottom">
                      Doug Smith, wolf biologist,</br>
                      Yellowstone National Park
                    </p>
                  </div>
                    <div class="audio desktop"><p class="length">0:18  <span>/ play lesson</span></p>
                      <audio controls class="player">
                        <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/audio/environment/Lecture_SCAVENGER.mp3' ?>" type="audio/mpeg">
                        <!-- <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default /> -->
                        Your browser does not support HTML5 audio.
                      </audio>
                      
                      <p class="audio-buttons">
                        <button class="audio-ctrl audio-play" tabindex="0">0:18 / PLAY LESSON</button>  
                        <button class="audio-ctrl audio-pause" tabindex="0">pause</button>  
                        <button class="audio-ctrl audio-read" tabindex="0">read transcript</button>
                      </p>
                      <div class="visually-hidden audio-transcript" tabindex="0">
                        <!-- <p>Speaker: Rick McIntyre, wolf interpreter, Yellowstone National Park</p> -->
                        <p>A quarter to a third of all bison consumption by wolves is carcasses. And so rather than risk your life killing a bison they wait for a carcass to show up especially this time of year especially during the rut. So this could be a huge subsidy for wolves and could be important in that the impact of wolves and elk.</p>
                      </div>
                    </div>
              </div>         
          </div>
        </div>
        <section class="scrollit read-more">
            <p>Scroll to continue</p>  
            <div class="mouse">
              <div class="scroll"></div>
            </div> 
        </section>
      </div>
    </section>

     <!--13. PEOPLE - OPENING SLIDE-->
  <section class="section fp-noscroll icon-section predator">
      <div class="background">
        <div class="section-caption"><p>People // Explore</p></div>
        <div class="intro-body move-higher">
         <div class="row">
              <div class="text-box">
                  <div class="icon"></div>
                  <h1 class="">People</h1>
                  <span class="col-md-4 col-xs-10"><span class="squiggle"></span></span>
                  <div class="audio"><p class="length">0:37  <span>/ play lesson</span></p>
                    <audio controls class="player">
                      <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/audio/environment/Lecture_HUMAN.mp3' ?>" type="audio/mpeg">
                      <!-- <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default /> -->
                      Your browser does not support HTML5 audio.
                    </audio>
                    
                    <p class="audio-buttons">
                      <button class="audio-ctrl audio-play" tabindex="0">0:37 / PLAY LESSON</button>  
                      <button class="audio-ctrl audio-pause" tabindex="0">pause</button>  
                      <button class="audio-ctrl audio-read" tabindex="0">read transcript</button>
                    </p>
                    <div id="transcript1"class="visually-hidden audio-transcript" tabindex="0">
                      <!-- <p>Speaker: Rick McIntyre, wolf interpreter, Yellowstone National Park</p> -->
                      <p>We use a lot of electric fence to keep them bunched together so that they relearn that herd instinct to keep their young close and in the middle. The animals that get killed go off, way off on their own. Wolves do not want to get killed. Wolves are very very smart hunters. They would much rather go kill rabbit or a fawn and so when a wolf or a pack of wolves comes up on 300 head of cattle that are all staring them down their not going to get themselves killed over one meal.</p>
                    </div>
                  </div>
              </div>         
          </div>
      </div>
        <section class="scrollit read-more">
            <p>Scroll to continue</p>  
            <div class="mouse">
              <div class="scroll"></div>
            </div> 
        </section>
      </div>
  </section>

     <!--14. PEOPLE - GALLERY-->
    <section class="section transparent-section fp-auto-height">
        <div class="background photos">
          <div class="section-caption"><p>People // The student experience</p></div>
          <!-- <div class="intro-body"> -->
         <!-- <div class="row"> -->
              <!-- 14.1 -->
              <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PEOPLE_GAL_1.jpg' ?>" alt="Malou Anderson-Ramirez gives students a tour of the Anderson Ranch." data-lity>
                <p>Malou Anderson-Ramirez gives students a tour of the Anderson Ranch.</p>
              </div>
              <!-- 14.2 -->
              <div class="mobile-slide float-right">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PEOPLE_GAL_1.1.jpg' ?>" alt="Students tour the Anderson Ranch." data-lity>
                <p class="">Students tour the Anderson Ranch.</p>
              </div>
              <!-- 14.3 -->
              <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PEOPLE_GAL_2.jpg' ?>" alt="Horses, longhorns, goats and other domesticated animals pepper the many ranches in the expansive Tom Miner Basin, just miles from the Yellowstone Park border." data-lity>
                <p>Horses, longhorns, goats and other domesticated animals pepper the many ranches in the expansive Tom Miner Basin, just miles from the Yellowstone Park border.</p>
              </div> 
              <!-- 14.4 -->
              <!-- <div class="mobile-slide"> 
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_5.jpg' ?>" alt="On a foggy day, Aaron Wirsing points out possible locations where wolves could be on a distant ridge." data-lity>
                <p class="">On a foggy day, Aaron Wirsing points out possible locations where wolves could be on a distant ridge.</p>
              </div> -->
              <!-- 14.5 -->
              <!-- <div class="mobile-slide">
                <img class="draw-line-link" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/PRED_GAL_6.jpg' ?>" alt="Students scan a far-off hillside for an elk carcass they’ve heard is in the area. Where there’s a carcass, there are often large — and hungry — animals." data-lity>
                <p>Students scan a far-off hillside for an elk carcass they’ve heard is in the area. Where there’s a carcass, there are often large — and hungry — animals.</p>
              </div>  -->
              <!--IGNORED ON MOBILE-->
              <div class="row centered pad-top">
                <blockquote class="col-xs-10 quote">
                    <span>&ldquo;</span>
                    Going to Yellowstone with wildlife biologists is like going behind the scenes of a play.
                    <span>&rdquo;</span>
                </blockquote>
              </div>
              <div class="row centered pad-bottom">
                <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/NIKKI_QUOTE_PORTRAIT.png' ?>" alt="Nikki Furner, '18">
                <p class="attribute no-top no-bottom">
                  Nikki Furner, '18
                </p>
              </div>
         <!--  </div> -->
        <!-- </div> -->
        <section class="scrollit read-more">
          <p>Scroll to continue</p>  
          <div class="mouse">
            <div class="scroll"></div>
          </div> 
      </section>
      </div>     
    </section>

    <!--15. PEOPLE - LECTURE-->
    <section class="section fp-noscroll transparent-section">
      <div class="background">
        <div class="section-caption"><p>People // Lecture in the field</p></div>
        <div class="intro-body">
         <div class="row">
              <div class="text-box">
                  <div class="row centered">
                    <blockquote class="col-md-8 col-xs-12 quote">
                        <span>&ldquo;</span>
                        Wolves do not want to get killed. Wolves are very very smart hunters. They would much rather go kill rabbit or a fawn and so when a wolf or a pack of wolves comes up on 300 head of cattle that are all staring them down.
                        <span>&rdquo;</span>
                    </blockquote>
                  </div>
                  <div class="row centered">
                    <!-- <img class="circle quote" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/DOUG_SMITH_QUOTE_PORTRAIT.png' ?>" alt="Doug Smith"> -->
                    <p class="attribute no-top no-bottom">
                      Mallow Anderson-Ramirez, Rancher
                    </p>
                  </div>
                    <div class="audio desktop"><p class="length">0:37  <span>/ play lesson</span></p>
                      <audio controls class="player">
                        <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/audio/environment/Lecture_HUMAN.mp3' ?>" type="audio/mpeg">
                        <!-- <track src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15309/transcription.vtt" label="English Captions" kind="subtitles" srclang="en-us" default /> -->
                        Your browser does not support HTML5 audio.
                      </audio>
                      
                      <p class="audio-buttons">
                        <button class="audio-ctrl audio-play" tabindex="0">0:37 / PLAY LESSON</button>  
                        <button class="audio-ctrl audio-pause" tabindex="0">pause</button>  
                        <button class="audio-ctrl audio-read" tabindex="0">read transcript</button>
                      </p>
                      <div class="visually-hidden audio-transcript" tabindex="0">
                        <!-- <p>Speaker: Rick McIntyre, wolf interpreter, Yellowstone National Park</p> -->
                        <p>We use a lot of electric fence to keep them bunched together so that they relearn that herd instinct to keep their young close and in the middle. The animals that get killed go off, way off on their own. Wolves do not want to get killed. Wolves are very very smart hunters. They would much rather go kill rabbit or a fawn and so when a wolf or a pack of wolves comes up on 300 head of cattle that are all staring them down their not going to get themselves killed over one meal.</p>
                      </div>
                    </div>
              </div>         
          </div>
        </div>
        <section class="scrollit read-more">
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
      <div class="intro-body">
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
                  <a href="#" class="explore">click to explore</a>
              </div>         
          </div>
      </div>
      <section class="scrollit read-more">
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
                    <div class="boundless-button sm dark give"><span><a id="immersive-give" data-fund="ESIEND" href="#">Give now</a></span></div>
                  </div>
              </div>         
          </div>
      </div>
    </div>
  </section>


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

 

 <?php get_template_part('footer', 'campaign-v2'); ?>


</body>
</html>

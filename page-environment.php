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
  <section class="section slide1" id="intro-vid">
    <div class="background">
      <button id="pause">Pause</button>
      <video  autoplay data-autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/header-poster.png' ?>" class="fullscreen-bg__video">
         <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/HEADER_30_SECOND.mp4' ?>" type="video/mp4">
      </video>

      <div class="intro-body">
         <div class="row">
              <div class="" id='intro-text'>
                  <h1 class="=">A week in </br>the wild</h1>
                  <p class="col-md-4 col-xs-10">
                      Over spring break, three UW professors and 16 students from the College of the Environment made a classroom out of one of the most closely monitored ecosystems in the world: Yellowstone National Park. Explore their learning experience below.
                  </p>
              </div>         
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
      <!-- <section class="scrollit read-more">
          <p>Scroll to continue</p>  
          <div class="mouse">
            <div class="scroll"></div>
          </div> 
      </section> -->
    </div>
  </section>


  <section class="section" id="intro-yellow">
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
                    <p class="col-md-4 col-xs-10">
                        secibd tecerj spring break, three UW professors and 16 students from the College of the Environment made a classroom out of one of the most closely monitored ecosystems in the world: Yellowstone National Park. Explore their learning experience below.
                    </p>
                  </div>
                  <div class="col-md-7 col-xs-12">
                    <a href="#" class="col-md-3 col-sm-6 col-xs-10 section-links">Predators</a>
                    <a href="#" class="col-md-3 col-sm-6 col-xs-10 section-links">Prey</a>
                    <a href="#" class="col-md-3 col-sm-6 col-xs-10 section-links">Scavengers</a>
                    <a href="#" class="col-md-3 col-sm-6 col-xs-10 section-links">People</a>
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


  <section class="section" id="students">
    <div class="background">
      
      <section id="all-students" class="all-students">
        <div class="section-caption"><p>Meet the students</p></div>
        <div class="intro-body">
           <div class="row">
                <div class="text-box">
                    <h1 class=""><span>Meet the</span> students</h1>
                    <div class="row centered">
                      <p class="col-md-4 col-xs-10 no-top no-bottom">
                          secibd tecerj lorem ipsum squiggle squiggle test stes padafdin df naos sadfn oasfidjfnjd adjf ain   eafjaijf  asdf.
                          <span class="squiggle"></span>
                          secibd tecerj lorem ipsum squiggle squiggle test stes padafdin df naos sadfn oasfidjfnjd adjf ain   eafjaijf  asdf.
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


      <div class="student-container">

        <section id="student1" class="student student1">
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

        <section id="student2" class="student student2">
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

        <section id="student3" class="student student3">
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

        <section id="student4" class="student student4">
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

        <section id="student5" class="student student5">
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

        <section id="student6" class="student student6">
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

      </div>

      <button id="close-modal">
        Close
        <svg aria-hidden="true" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34.147px" height="37.833px" viewBox="0 0 34.147 37.833" enable-background="new 0 0 34.147 37.833" xml:space="preserve">
          <line fill="none" stroke="#A7A9AC" stroke-width="2" stroke-miterlimit="10" x1="9.616" y1="8.449" x2="31.782" y2="30.614"></line>
          <line fill="none" stroke="#A7A9AC" stroke-width="2" stroke-miterlimit="10" x1="31.782" y1="8.449" x2="9.616" y2="30.614"></line>
        </svg>
      </button>

    </div>
  </section>



  <section class="fixed-section" id="predators">
    <div class="background">
      <span class="lines right"></span>
      <span class="lines left"></span>
      <!-- <img  class="cloud-img" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/CLOUDS.png' ?>" alt=""> -->
      <div class="foreground"></div>
      <div class="intro-body">
         <div class="row">
              <div class="text-box">
                  <div class="icon"></div>
                  <h1 class="">Predators</h1>
                  <span class="col-md-4 col-xs-10"><span class="squiggle"></span></span>
                  <!-- <div class="row centered">
                    <p class="col-md-4 col-xs-10">
                        secibd tecerj spring break, three UW professors and 16 students from the College of the Environment made a classroom out of one of the most closely monitored ecosystems in the world: Yellowstone National Park. Explore their learning experience below.
                    </p>
                  </div> -->
              </div>         
          </div>
      </div>
    </div>
  </section>

  <section class="section blank-section">
      <div class="background">
        <div class="section-caption"><p>Predators // Explore</p></div>
        <section class="scrollit read-more">
            <p>Scroll to continue</p>  
            <div class="mouse">
              <div class="scroll"></div>
            </div> 
        </section>
      </div>
  </section>

  <section class="section transparent-section">
      <div class="background">
        <div class="section-caption"><p>Predators // Lecture in the field</p></div>
        <div class="intro-body">
         <div class="row">
              <div class="text-box">
                  <div class="row centered">
                    <p class="col-md-4 col-xs-10">
                        secibd tecerj spring break, three UW professors and 16 students from the College of the Environment made a classroom out of one of the most closely monitored ecosystems in the world: Yellowstone National Park. Explore their learning experience below.
                    </p>
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

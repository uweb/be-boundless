<?php

  global $meta;
  global $styles;
  global $scripts;


  $meta = '';
  $styles =  "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/campaign/css/header.css' type='text/css' media='all' />" . 
            "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/common.css' type='text/css' media='all' />" . 
            "<link rel='stylesheet' href='" . get_stylesheet_directory_uri() . "/immersive-stories/css/environment.css' type='text/css' media='all' />";
  $scripts =  "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/animationLibraries.min.js' type='text/javascript'></script>" .
              "<script src='" . get_stylesheet_directory_uri() . "/campaign/js/header.js' type='text/javascript'></script>" .
              "<script src='" . get_stylesheet_directory_uri() . "/immersive-stories/js/environment.min.js' type='text/javascript'></script>";

  get_header( "campaign-v2" );
?>


<div id="immersive-body">


<section class="intro" id="intro-vid">          

  <button id="pause">Pause</button>
  <video  autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/header.jpg' ?>" class="fullscreen-bg__video">
      <!-- <source src="img/street-bw-webm.webm" type="video/webm"> -->
     <!--  <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/built-env/header-slow.mp4' ?>" type="video/mp4"> -->
      <!-- <source src="<?php echo plugins_url('uw-template-hierarchy') . '/assets/asb/video/public-health/header-new.webm' ?>" type="video/webm"> -->
  </video>

  <div class="intro-body">
     <div class="row">
          <div class="col-md-7 col-xs-10" id='intro-text'>
              <h1 class="col-md-offset-1 col-xs-offset-1">A week in <span>the wild</span></h1>
              <img class="h1-image col-md-offset-1 col-xs-offset-1" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/h1-trans.png' ?>" alt="A week in the wild">
              <span class="udub-slant col-lg-offset-0"><span></span></span>
              <p class="col-md-6 col-md-offset-1 col-xs-offset-1">
                  Over spring break, 16 UW students and three professors from the College of the Environment made a classroom out of one of the most closely monitored ecosystems in the world: Yellowstone National Park. Explore their learning experience below.
              </p>
          </div>          
      </div>
  </div>

  <span class="gold-tilt gold-tilt-1"></span>
  <span class="gold-tilt gold-tilt-2"></span>
  <span class="slashes"></span>

  <section class="scrollit read-more">
      <!-- <p>Scroll Down</p>
      <div class="mouse">
        <div class="scroll"></div>
      </div> -->
      <a data-lity href="https://www.youtube.com/embed/Tr6KBzdaM0o?autoplay=1&rel=0&showinfo=0">
      <svg version="1.1" id="watchVideo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="137.909px" height="137.131px" viewBox="0 0 137.909 137.131" enable-background="new 0 0 137.909 137.131"
         xml:space="preserve">
      <ellipse fill="none" stroke="#FFFFFF" stroke-width="4.8281" stroke-miterlimit="10" cx="68.399" cy="68.344" rx="57.675" ry="59.214"/>
      <polygon fill="#FFFFFF" points="48.611,37.617 103.268,68.345 48.611,99.072 "/>
      </svg>
        <p>Watch video</p>
      </a>
  </section>



</section>



<main id="main_content">
  
  <!-- Sections go here -->

  <section class="text-block start white">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 copy">
                
                <h3>More than wolves</h3>

                <!-- <p class="bolder"><b></b></p> -->
                
                <p>Through the shimmering heat waves of a midafternoon sunbreak, hundreds of yards across the silent expanse of the Lamar Valley, students see three wolves through a spotting scope. Barely visible — even through the scope — the wolves are curled up in the snow, camouflaged against a backdrop of brown sage.</p>
                
                <p>All week long, during a course in Yellowstone National Park, UW students have been hoping to catch a glimpse of the iconic predator. They’ve seen scientists scanning the hills with their binoculars, some holding up receivers that pick up faint radio signals from collared wolves somewhere in the backcountry. They’ve met with wolf experts and seen wolf footprints in mud and snow. Some have heard distant, eerie howls. Now, the payoff: The students take turns sharing the scope, each of them getting a brief but precious look at the elusive animals. It’s the class’s last day in the park, and while this much-hoped-for sighting is the exclamation point on their pilgrimage, the experience has been about so much more than wolves.</p>

                <h3>Learning in the field</h3>

                <p>A week of intensive fieldwork followed by a research project and presentation, “Wildlife Conservation in Northwest Ecosystems” teaches the UW’s Environmental Science and Resource Management (ESRM) students about the intertwined ecosystem of America’s oldest national park — from bison and ravens to cougars and grizzly bears, alders and willows to biologists and ranchers. But how does Yellowstone relate to Washington state? The park has long been a bellwether for scientists to study how ecosystems work. Learning about both wildlife and humans there gives students an experience they’ll carry into their careers in Washington — and beyond. As this year’s class kicks off, some students have already done several animal surveys at the UW. Others are just dipping their toes into fieldwork and have never been to a national park. All are excited about what comes next. </p>

                <p>Leading the students in the field are environmental and forest sciences professors John Marzluff, Aaron Wirsing and Beth Gardner. Marzluff is a bird expert with a particular interest in corvids: crows, ravens, magpies and jays. Wirsing studies how land and ocean predators shape the behavior of animals in their ecosystem through their mere presence. Gardner uses mathematical models to help monitor and manage wildlife, plant and fisheries populations. Together, they teach their students about the rigors of science, about life in the field — and about what their futures might look like.</p>

            </div> 
      </div> 
    </div>   
  </section>



  <section class="text-block giving-widget branded arrow">
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1 copy ">
                <div style="text-align: center">             
                  <h2 class="headline-gold">What you care about <br>can change the world</h2>
                  <p>The University of Washington is undertaking its most ambitious campaign ever: Be Boundless — For Washington, For the World. Invest XXX </p>
                  <div id="immersive-give-iframe"></div>
                  <div class="boundless-button sm dark give"><span><a id="immersive-give" data-fund="<!-- Funds go here, comma separated; eg: AUPGEN,CBEIIN,LAPERU -->" href="#">Give now</a></span></div>
                </div>
              </div>
          </div>
    </div>
  </section>

</main>



</div>


 <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/animationLibraries.min.js' ?>" type="text/javascript"></script>

 <script src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/js/environment.min.js' ?>" type="text/javascript"></script>
 <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/header.js' ?>" type="text/javascript"></script>

 

 <?php get_template_part('footer', 'campaign-v2'); ?>


</body>
</html>

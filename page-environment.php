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

  <section class="text-block transparent no-pad first-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 copy reduced-pad">
                
                <h3>More than wolves</h3>

                <!-- <p class="bolder"><b></b></p> -->
                <p>Through the shimmering heat waves of a midafternoon sunbreak, hundreds of yards across the silent expanse of the Lamar Valley, students see three wolves through a spotting scope. Barely visible — even through the scope — the wolves are curled up in the snow, camouflaged against a backdrop of brown sage.</p>
                
                <p>All week long, during a course in Yellowstone National Park, UW students have been hoping to catch a glimpse of the iconic predator. They’ve seen scientists scanning the hills with their binoculars, some holding up receivers that pick up faint radio signals from collared wolves somewhere in the backcountry. They’ve met with wolf experts and seen wolf footprints in mud and snow. Some have heard distant, eerie howls. Now, the payoff: The students take turns sharing the scope, each of them getting a brief but precious look at the elusive animals. It’s the class’s last day in the park, and while this much-hoped-for sighting is the exclamation point on their pilgrimage, the experience has been about so much more than wolves.</p>

                <h3>Learning in the field</h3>

                <p>A week of intensive fieldwork followed by a research project and presentation, “Wildlife Conservation in Northwest Ecosystems” teaches the UW’s Environmental Science and Resource Management (ESRM) students about the intertwined ecosystem of America’s oldest national park — from bison and ravens to cougars and grizzly bears, alders and willows to biologists and ranchers. But how does Yellowstone relate to Washington state? The park has long been a bellwether for scientists to study how ecosystems work. Learning about both wildlife and humans there gives students an experience they’ll carry into their careers in Washington — and beyond. As this year’s class kicks off, some students have already done several animal surveys at the UW. Others are just dipping their toes into fieldwork and have never been to a national park. All are excited about what comes next.  </p>

                <p>Leading the students in the field are environmental and forest sciences professors John Marzluff, Aaron Wirsing and Beth Gardner. Marzluff is a bird expert with a particular interest in corvids: crows, ravens, magpies and jays. Wirsing studies how land and ocean predators shape the behavior of animals in their ecosystem through their mere presence. Gardner uses mathematical models to help monitor and manage wildlife, plant and fisheries populations. Together, they teach their students about the rigors of science, about life in the field — and about what their futures might look like.</p>

            </div> 
      </div> 
    </div>   
  </section>

  <section class="text-block transparent no-pad border-top-overlap">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 copy">
                    
                    <h2 class="box-page-break"><span>Experience Yellowstone</span></h2>
                
                    <p>Yellowstone is a complex ecosystem that a suite of predators, prey and scavengers call home. And it includes people: those who study, monitor and protect the animals within the park, as well as those whose livelihoods intersect with animals that know no formal boundaries. In the learning experience below, follow your instincts and explore. See what the UW students saw, hear what they heard and learn what they learned about wildlife management in Yellowstone — and how it applies in Washington and around the world.</p>

                    <!-- ADD IN SVG's -->
                </div>
            </div>
        </div>
  </section>

  <section id="map-animation" class="bus-map transSection">

      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2200px"
         height="1196px" viewBox="0 0 2200 1196" enable-background="new 0 0 2200 1196" xml:space="preserve">
      <g id="ends">
        <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-miterlimit="10" d="M1972.248,980.311
          c-0.55-2.578-4.976-4.535-9.931-4.638l0,0c-4.951-0.099-9.455,1.669-10.115,4.228l0,0c-0.752,2.91,3.64,5.681,9.899,5.811"/>
        
          <line fill="none" stroke="#4C2E82" stroke-width="1.9032" stroke-linecap="round" stroke-miterlimit="10" x1="1961.863" y1="931.84" x2="1961.863" y2="980.133"/>
        <polygon fill="#4C2E82" points="1849.725,962.889 1962.111,962.889 1962.111,937.648 1842.432,937.648   "/>
        <g display="none">
          <path display="inline" fill="#FFFFFF" d="M1908.193,951.817l-3.1-5.564h2.674l1.232,2.477l0.35,0.896h0.108l0.338-0.896
            l1.244-2.477h2.651l-3.044,5.488v2.586h-2.455L1908.193,951.817L1908.193,951.817z"/>
          <path display="inline" fill="#FFFFFF" d="M1912.568,954.207l2.488-7.954h3.644l2.488,7.954v0.12h-2.368l-0.491-1.647h-2.913
            l-0.479,1.647h-2.368L1912.568,954.207L1912.568,954.207z M1917.795,950.814l-0.338-1.2l-0.48-1.69h-0.195l-0.491,1.713
            l-0.327,1.178H1917.795L1917.795,950.814z"/>
          <path display="inline" fill="none" d="M1921.8,946.253h2.454v3.077h0.906l1.571-3.077h2.717l-2.02,3.514l-0.633,0.294v0.1
            l0.654,0.306l2.192,3.862h-2.717l-1.626-3.12h-1.048v3.12h-2.454v-8.075H1921.8z"/>
          <path display="inline" fill="#FFFFFF" d="M1930.179,946.253h2.454v8.074h-2.454V946.253z"/>
          <path display="inline" fill="#FFFFFF" d="M1933.975,946.253h3.351l1.2,3.284l0.414,1.626h0.064l0.426-1.626l1.2-3.284h3.339v8.074
            h-2.16v-5.423h-0.099l-0.665,2.183l-1.104,2.913H1938l-1.103-2.913l-0.666-2.183h-0.098v5.423h-2.16L1933.975,946.253
            L1933.975,946.253z"/>
          <path display="inline" fill="#FFFFFF" d="M1944.581,954.207l2.488-7.954h3.644l2.488,7.954v0.12h-2.368l-0.491-1.647h-2.912
            l-0.479,1.647h-2.368L1944.581,954.207L1944.581,954.207z M1949.809,950.814l-0.339-1.2l-0.479-1.69h-0.196l-0.491,1.713
            l-0.326,1.178H1949.809L1949.809,950.814z"/>
        </g>
        <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-miterlimit="10" d="M356.345,633.053
          c6.267,0.13,10.768-2.462,10.146-5.4l0,0c-0.55-2.579-4.976-4.536-9.931-4.638l0,0c-4.951-0.099-9.455,1.669-10.115,4.227l0,0
          C345.693,630.152,350.085,632.923,356.345,633.053"/>
        <g>
          
            <line fill="none" stroke="#4C2E82" stroke-width="1.9032" stroke-linecap="round" stroke-miterlimit="10" x1="356.043" y1="579.59" x2="356.043" y2="627.882"/>
          <polygon fill="#4C2E82" points="432.143,610.638 356.236,610.638 356.236,585.398 439.436,585.398     "/>
          <g display="none">
            <path display="inline" fill="#FFFFFF" d="M372.919,602.205c-0.232,0-0.481-0.008-0.748-0.021
              c-0.266-0.014-0.538-0.038-0.817-0.071c-0.28-0.031-0.559-0.068-0.834-0.108c-0.276-0.039-0.539-0.089-0.786-0.146v-1.965
              c0.589,0.132,1.124,0.231,1.604,0.301c0.48,0.07,0.928,0.104,1.343,0.104c0.437,0,0.743-0.04,0.922-0.12
              c0.178-0.08,0.267-0.215,0.267-0.403c0-0.211-0.1-0.366-0.3-0.464c-0.2-0.099-0.515-0.177-0.944-0.235
              c-0.458-0.064-0.864-0.16-1.217-0.288s-0.649-0.299-0.889-0.514c-0.24-0.214-0.42-0.476-0.54-0.785
              c-0.12-0.309-0.181-0.679-0.181-1.106c0-0.786,0.305-1.396,0.911-1.833c0.607-0.438,1.457-0.655,2.548-0.655
              c0.189,0,0.376,0.006,0.562,0.017c0.185,0.012,0.385,0.029,0.6,0.056c0.214,0.024,0.447,0.058,0.698,0.099
              c0.251,0.04,0.536,0.093,0.856,0.158v1.941c-0.189-0.059-0.39-0.108-0.601-0.152s-0.424-0.082-0.638-0.114
              c-0.215-0.033-0.426-0.059-0.633-0.077c-0.208-0.018-0.398-0.026-0.573-0.026c-0.778,0-1.167,0.179-1.167,0.534
              c0,0.232,0.109,0.411,0.328,0.534c0.218,0.124,0.566,0.227,1.047,0.307c0.458,0.08,0.854,0.184,1.188,0.312
              c0.335,0.127,0.612,0.285,0.835,0.476c0.222,0.188,0.387,0.415,0.496,0.682c0.109,0.266,0.164,0.576,0.164,0.933
              C376.422,601.325,375.254,602.205,372.919,602.205z"/>
            <path display="inline" fill="#FFFFFF" d="M377.327,594h6.329v1.877h-3.874v1.222h3.458v1.877h-3.458v1.211h3.982v1.888h-6.438
              L377.327,594L377.327,594z"/>
            <path display="inline" fill="#FFFFFF" d="M384.07,601.953l2.488-7.953h3.645l2.487,7.953v0.12h-2.368l-0.491-1.646h-2.914
              l-0.479,1.646h-2.368L384.07,601.953L384.07,601.953z M389.297,598.561l-0.338-1.2l-0.479-1.689h-0.196l-0.491,1.713
              l-0.327,1.178L389.297,598.561L389.297,598.561z"/>
            <path display="inline" fill="#FFFFFF" d="M394.283,595.888h-2.193V594h6.842v1.888h-2.193v6.187h-2.455V595.888L394.283,595.888z
              "/>
            <path display="inline" fill="#FFFFFF" d="M401.561,595.888h-2.193V594h6.841v1.888h-2.192v6.187h-2.455V595.888L401.561,595.888z
              "/>
            <path display="inline" fill="#FFFFFF" d="M407.092,594h2.455v6.196h3.317v1.877h-5.772V594L407.092,594z"/>
            <path display="inline" fill="#FFFFFF" d="M413.671,594H420v1.877h-3.874v1.222h3.458v1.877h-3.458v1.211h3.982v1.888h-6.438
              L413.671,594L413.671,594z"/>
          </g>
        </g>
        <text transform="matrix(1 0 0 1 1856.333 953.667)" fill="#FFFFFF" font-family="'EncodeSansNarrow-Black'" font-size="12">YELLOWSTONE</text>
        <text transform="matrix(1 0 0 1 367.6665 603)" fill="#FFFFFF" font-family="'EncodeSansNarrow-Black'" font-size="12">SEATTLE</text>
      </g>
      <g id="path">
        <path class="path" style="stroke-dashoffset: 1700px;" fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M361.333,625.333c21.245,2.593,42.625,6.309,63.963,7.904
          c8.174,0.611,15.572-0.11,21.226,6.769c6.74,8.2,12.605,11.442,23.438,12.254c9.416,0.706,16.988,2.05,24.729,7.756
          c8.155,6.011,14.729,10.86,25.292,10.912c10.357,0.052,20.714,0.04,31.072,0.124c9.527,0.077,18.756,1.356,27.334-3.479
          c7.392-4.167,13.959-10.13,22.5-11.69c9.646-1.762,19.632-0.919,29.358-0.467c21.202,0.986,42.52-0.65,63.732-0.852
          c44.605-0.424,88.16,0.364,130.962-14.144c20.005-6.78,39.28-15.349,57.924-25.225c9.156-4.85,17.526-6.812,27.883-6.585
          c11.305,0.246,22.503-0.404,33.758-1.469c10.421-0.986,21.124-3.083,31.592-3.117c10.09-0.033,20.183,5.332,29.921,7.604
          c21.109,4.923,42.739,7.107,64.318,8.717c21.522,1.605,43.31,2.154,64.69,5.233c20.519,2.954,39.564,10.979,59.643,15.642
          c7.896,1.834,16.791,2.051,23.493,7.155c6.358,4.842,7.293,9.725,16.079,9.564c9.125-0.167,17.541,3.967,26.586,3.384
          c10.104-0.651,18.969-2.355,29.165-0.572c9.779,1.71,19.228,4.843,28.463,8.427c4.003,1.554,8.291,4.121,12.593,4.617
          c4.005,0.462,7.84-1.278,11.906-0.68c8.585,1.262,15.681,7.315,23.547,10.532c10.062,4.114,22.035,4.461,32.744,5.288
          c9.15,0.706,18.196,0.862,27.352,1.227c9.701,0.386,16.284,4.625,25.103,7.809c8.768,3.167,17.857,2.955,26.756,5.277
          c4.286,1.119,7.975,3.578,12.301,4.561c4.341,0.986,9.192,1.373,12.726,4.387c12.98,11.067-0.772,32.239,12.405,42.69
          c6.383,5.062,14.613,5.636,22.415,6.215c10.031,0.744,16.837,2.443,24.644,8.851c6.95,5.705,15.697,4.112,24.005,4.602
          c10.989,0.647,21.816,5.077,32.836,4.688c9.118-0.32,16.479-1.944,24.626,3.268c3.303,2.113,6.308,4.648,9.589,6.793
          c4.184,2.734,8.659,3.571,13.169,5.472c9.627,4.057,18.442,13.068,25.853,20.282c4.689,4.566,4.827,8.336,4.365,14.514
          c-0.412,5.527,4.067,9.65,7.591,13.301c8.535,8.841,13.146,20.36,21.688,29.244c3.713,3.86,6.823,7.774,8.237,13.025
          c1.267,4.703,2.145,9.05,6.183,12.188c4.236,3.292,9.459,5.116,14.357,7.158c4.985,2.078,9.39,5.028,14.173,7.486
          c5.021,2.58,10.094,3.607,15.502,1.61c4.75-1.754,9.469-4.783,14.743-3.45c5.478,1.385,9.608,5.723,14.582,8.161
          c5.549,2.72,11.806,2.924,17.79,3.936c9.87,1.67,22.734,3.703,23.102,15.104"/>
      </g>
      </svg>
        <!-- <div class="miles">
          <p id="counter"></p><p> Miles</p>
        </div> -->

  </section>   

  <section id="drone-vid" class="text-block bus arrow">


    <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 copy">
      <p>“Going to Yellowstone with wildlife biologists is like going behind the scenes of a play.”
      <span>— Nicki Furner, ’18</span>
      </p>
    </div> 

    <video  autoplay loop muted playsinline class="media" data-object-fit poster="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/DRONE_REVEAL.jpg' ?>" class=" fullscreen-bg__video">
        <source src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/video/environment/DRONE_REVEAL_LOOP_compressed.mp4' ?>" type="video/mp4">
    </video>
  </section>
  

  <section id="students" class="full-image-section">
    <section class="all-students">
      <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 copy">
        <p>Cras sagittis id tellus id tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus lacinia, tortor sed placerat fringilla, Cras sagittis id tellus id tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
        <p class="pull-text">Nature is not fair and meals are just as oftern stolen as they are earned</p>
      </div>

      <div class="student student1"><a href="#student1"><image class="student student1" alt="student one" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait1.png' ?>"></a></div>
      <div class="student student2"><a href="#student2"><image class="student student2" alt="student two" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait2.png' ?>"></a></div>
      <div class="student student3"><a href="#student3"><image class="student student3" alt="student three" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait3.png' ?>"></a></div>
      <div class="student student4"><a href="#student4"><image class="student student4" alt="student four" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait4.png' ?>"></a></div>
      <div class="student student5"><a href="#student5"><image class="student student5" alt="student five" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait5.png' ?>"></a></div>
      <!-- <div class="student student6"><a href="#student6"><image class="student student6" alt="student six" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait6.png' ?>"></a></div> -->
    </section>
    <section id="student1" class="student student1">
      <div class="name">
        <h3>First</br>Last</h3>
        <p class="major">Major</p>
        <span class="udub-slant"><span></span></span>
        <!-- <p>lorem ipsum</p> -->
      </div>
      <div class="quote">
        <blockquote><span>&ldquo;</span>There’s an essence we get to experience in the field that you can’t get by reading papers and being in the classroom<span>&rdquo;</span></blockquote>
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
  </section>

  <section id="predators" class="enviro-section">
    <!-- <span class="lines right"></span>
    <span class="lines left"></span> -->
    <!-- <img class="foreground" alt="bear" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/pred-fore.png' ?>"> -->
    <section class="section-home">
      <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 copy">
        <h2 class="pull-text">Predators</h2>
        <p>Cras sagittis id tellus id tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus lacinia, tortor sed placerat fringilla, Cras sagittis id tellus id tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
      </div>
      <!-- <div class="student student6"><a href="#student6"><image class="student student6" alt="student six" src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/img/environment/portrait6.png' ?>"></a></div> -->
    </section>
    <section id="pred-content" class="section-content">
      <div class="col-md-6 col-md-offset-2 col-xs-10 col-xs-offset-1">
        <h2 id="in-the-field" class="pull-text">Behind the scenes</br>with biologists</h2>
        <p>Cras sagittis id tellus id tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus lacinia, tortor sed placerat fringilla, Cras sagittis id tellus id tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
        <p>Cras sagittis id tellus id tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
        <div class="outset">
          <img src="" alt="photo of bear">
          <blockquote><span>&ldquo;</span>There’s an essence we get to experience in the field that you can’t get by reading papers and being in the classroom<span>&rdquo;</span></blockquote>
        </div>
        <img class="snapchat" src="" alt="snapchat video of ...">
      </div>
    </section>
    
  </section>





<!--        GIVING SECTION        -->
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

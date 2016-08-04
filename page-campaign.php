<?php get_template_part('header', 'campaign'); ?>


  <div id="content-wrapper" class="scroll-pane horizontal-only">
    <div id="example-wrapper" class="horizontal">
      <div class="scrollContent" id="slides">

        <section class="section" id="slide1">
          <div id="slide1text">
            <span>
              <h2>HOW WILL YOU <br>CHANGE THE WORLD?</h2>
              <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum. <br>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </span>
          </div>
        </section
        ><section class="section" id="slide2">
          <div id="slide2text">
            <h2>YOU CAN TRANSFORM THE STUDENT EXPERIENCE</h2>
            <p>Ensuring access to excellence for all students is at the core of our public mission. You can support the Husky Experience by championing opportunities that enrich future thought leaders.</p>
            <a href="#" class="uw-btn btn-sm">Learn more</a>
          </div>
          <span class="slide2-content"></span>
        </section
        ><section class="section" id="slide3">
          <div id="slide3text">
            <h2>FACULTY AND STAFF WHO UNITE PROMISE WITH POSSIBILITY EVERY DAY </h2>
            <p>To react to horizontal scrolls the simply needs to be initialized using the option.</p>
            <a href="#" class="uw-btn btn-sm">Learn more</a>
          </div>
          <span class="slide2-content"></span>
        </section
        ><section class="section" id="slide4">
          <div id="slide4text">
            <h2>YOU CAN DRIVE THE PUBLIC GOOD </h2>
            <p>Serve communities near and far. You can unleash human potential by committing to initiatives that promote health, equity and diversity for our friends and neighbors in Washington and beyond.</p>
            <a href="#" class="uw-btn btn-sm">Learn more</a>
          </div>
          <span class="slide2-content"></span>
        </section>
      </div>
    </div>
  </div>

  <div id="arrows">  
    <a href="#" class="prevSlide"></a>
    <a href="#" class="nextSlide"></a>
  </div>

<div id="scrubCont"><div id="padder"><div id="scrub"></div></div></div>

  <div id="progress">

    <!-- <ul>
      <li><a href="#"><span class="popup"><p>Be boundless</p></span></a>       </li>
      <li><a href="#"><span class="popup"><p>Together undaunted</p> </span></a></li>
      <li><a href="#"><span class="popup"><p>For a world of good</p></span></a></li>
      <li><a href="#"><span class="popup"><p>We > me</p></span></a>            </li>
    </ul> -->
    <a href="" id="bar"></a>

    <!-- <img src="<?php echo get_stylesheet_directory_uri() . '/campaign/img/ice.jpg'?>"> -->
  </div>




  <!-- Button to close dynamic area -->
  <button id="empty">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       width="70px" height="70.284px" viewBox="0 0 70 70.284" enable-background="new 0 0 70 70.284" xml:space="preserve">
    <g>
      <line fill="none" stroke-width="2" stroke="#717375" stroke-miterlimit="10" x1="21.516" y1="48.627" x2="48.484" y2="21.658"/>
      <line fill="none" stroke-width="2" stroke="#717375" stroke-miterlimit="10" x1="48.484" y1="48.627" x2="21.516" y2="21.658"/>
    </g>
    </svg>
  </button>

  <!-- Place to add dynamic content -->
  <div id="dyno">  </div>

  <!-- Loading box -->
  <div id="loadingEl"></div>

  <!-- Rotate indicator -->
  <div id="rotate">
    <div> 
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          width="87.5px" height="83px" viewBox="0 90.5 87.5 83" enable-background="new 0 90.5 87.5 83" xml:space="preserve">
        <path fill="#FFFFFF" d="M80.591,163.385v-28.996c0-2.592-2.187-4.859-4.86-4.859H20.619c-2.673,0-4.86,2.187-4.86,4.859v29.077
         c0,2.592,2.187,4.86,4.86,4.86h55.112C78.485,168.245,80.591,166.058,80.591,163.385z M20.619,165.814
         c-1.296,0-2.43-1.134-2.43-2.43v-28.996c0-1.296,1.053-2.43,2.43-2.43h55.112c1.296,0,2.43,1.134,2.43,2.43v29.077
         c0,1.296-1.053,2.43-2.43,2.43H20.619V165.814z"/>
        <path fill="#FFFFFF" d="M25.479,134.389v29.077h45.475v-29.077H25.479z M68.523,136.819v24.217H27.908v-24.217H68.523z"/>
        <path fill="#FFFFFF" d="M12.8,158.606h-2.43c-1.296,0-2.43-1.053-2.43-2.43v-55.643c0-1.296,1.134-2.43,2.43-2.43h29.077
         c1.296,0,2.43,1.053,2.43,2.43V127.1h2.43v-26.566c0-2.672-2.187-4.859-4.859-4.859H10.451c-2.592,0-4.859,2.187-4.859,4.859v55.643
         c0,2.673,2.187,4.86,4.859,4.86h2.43v-2.43H12.8z"/>
        <polygon fill="#FFFFFF" points="12.8,148.887 12.8,129.53 12.8,107.742 37.017,107.742 37.017,127.1 39.447,127.1 39.447,105.312 
         10.451,105.312 10.451,151.317 12.8,151.317 "/>
        <path fill="#FFFFFF" d="M74.067,117.056l-2.462,3.282c-1.578-8.332-8.079-14.896-16.411-16.474l3.219-2.399l-1.136-1.515
         l-6.123,4.418l4.418,6.123l1.515-1.136l-2.714-3.787c7.764,1.325,13.949,7.511,15.338,15.274l-3.661-2.777l-1.136,1.515l5.996,4.544
         l4.544-5.996L74.067,117.056z"/>
        </svg>
         <p>Rotate your phone for the best experience</p>
    </div>
  </div>

<!--   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/css/normalize.css' ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/css/style.css' ?>" type="text/css"> -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/campaign/css/campaign-style.css' ?>" type="text/css">

  
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/js/lib/highlight.pack.js' ?>" type="text/javascript"></script>

  <!-- Convert to horizontal scroll -->
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/scroll-converter/scroll-converter.min.js' ?>" type="text/javascript"></script>

  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/js/lib/greensock/TweenMax.min.js' ?>" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/scrollmagic/uncompressed/ScrollMagic.js' ?>" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/scrollmagic/uncompressed/plugins/animation.gsap.js' ?>" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/scrollmagic/uncompressed/plugins/debug.addIndicators.js' ?>" type="text/javascript"></script>


  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/main.min.js' ?>" type="text/javascript"></script>









</body>
</html>

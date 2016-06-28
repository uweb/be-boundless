<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="keywords" content="ScrollMagic, example, scrolling, attaching, scrollbar, horizontal, landscape" />
  <title>Campaign Site</title>

  <link href='https://fonts.googleapis.com/css?family=Work+Sans:900' rel='stylesheet' type='text/css'>  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/css/normalize.css' ?>" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/css/style.css' ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/campaign/style.css' ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/css/examples.css' ?>" type="text/css">

  

  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/js/lib/jquery.min.js' ?>" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/js/lib/highlight.pack.js' ?>" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/js/lib/modernizr.custom.min.js' ?>" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/js/examples.js' ?>" type="text/javascript"></script>


  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/js/lib/greensock/TweenMax.min.js' ?>" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/scrollmagic/uncompressed/ScrollMagic.js' ?>" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/scrollmagic/uncompressed/plugins/animation.gsap.js' ?>" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/ScrollMagic-master/scrollmagic/uncompressed/plugins/debug.addIndicators.js' ?>" type="text/javascript"></script>

  <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/main.js' ?>" type="text/javascript"></script>


</head>
<body>
  <div id="content-wrapper">
    <div id="example-wrapper" class="horizontal">
      <div class="scrollContent">
        <section>
          <div>
            <h1>Going Horizontal</h1>
            <p>To react to horizontal scrolls the simply needs to be initialized using the option.</p>
          </div>
        </section
        ><section class="section" id="slide2">
          <div>
            <h1>Going Horizontal</h1>
            <p>To react to horizontal scrolls the simply needs to be initialized using the option.</p>
            <a href="#" class="btn">Load content</a>
          </div>
          <span class="slide2-content"></span>
        </section
        ><section class="section" id="slide3">
          <div>
            <h1>Going Horizontal</h1>
            <p>To react to horizontal scrolls the simply needs to be initialized using the option.</p>
            <a href="#" class="btn">Load content</a>
          </div>
          <span class="slide2-content"></span>
        </section>
      </div>
    </div>
  </div>

  <div id="dyno">

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Convert to horizontal scroll -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
  <script type="text/javascript">
      
      $(function() {

         $("body").mousewheel(function(event, delta) {
            this.scrollLeft -= (delta);                
            event.preventDefault();
         });

      });
  </script>

</body>
</html>

<?php get_header( "campaign-open" ); ?>

 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/campaign/css/header.css' ?>' type='text/css' media='all' />
 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/common.css' ?>' type='text/css' media='all' />
 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/<-- CSS FILE HERE --> .css' ?>' type='text/css' media='all' />

<?php get_header( "campaign-close" ); ?>


<div id="immersive-body">


<section class="intro" id="intro-vid">          


  <div class="intro-body"></div>


  <section class="scrollit read-more">
      <p>Scroll Down</p>
      <div class="mouse">
        <div class="scroll"></div>
      </div>
  </section>



</section>



<main id="main_content">
  
  <!-- Sections go here -->


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

 <script src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/js/<-- JS FILE HERE -->.min.js' ?>" type="text/javascript"></script>
 <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/header.js' ?>" type="text/javascript"></script>

 

 <?php get_template_part('footer', 'campaign'); ?>


</body>
</html>

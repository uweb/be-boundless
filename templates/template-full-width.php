<?php
/**
 * Template Name: Full Width
 */
?>

<?php get_header( "campaign-open" ); ?>

 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/campaign/css/header.css' ?>' type='text/css' media='all' />
 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/common.css' ?>' type='text/css' media='all' />
 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/campaign/css/campaignv2-style.css' ?>' type='text/css' media='all' />

<?php get_header( "campaign-close" ); ?>


<div id="full-width-body">


<!-- <section class="intro" id="intro-vid">          


  <div class="intro-body"></div>


  <section class="scrollit read-more">
      <p>Scroll Down</p>
      <div class="mouse">
        <div class="scroll"></div>
      </div>
  </section>



</section> -->



<!-- <main id="main_content"> -->
  <!-- Sections go here -->
  <?php the_content(); ?>



<!-- </main> -->



</div>


 <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/animationLibraries.min.js' ?>" type="text/javascript"></script>

 <!-- <script src="<?php //echo get_stylesheet_directory_uri() . '/immersive-stories/js/<-- JS FILE HERE -->.min.js' ?>" type="text/javascript"></script> -->
 <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/header.js' ?>" type="text/javascript"></script>

 

 <?php get_template_part('footer', 'campaign'); ?>


</body>
</html>

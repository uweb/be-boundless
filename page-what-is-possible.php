<?php get_header( "campaign-open" ); ?>

 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/campaign/css/header.css' ?>' type='text/css' media='all' />
 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/common.css' ?>' type='text/css' media='all' />
 <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/arts.css' ?>' type='text/css' media='all' />

<?php get_header( "campaign-close" ); ?>

<div id="immersive-body">

<div class="intro" id="intro-slide">
  <div class="intro-body">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 col-xs-12 col-lg-offset-1" id='intro-text'>
            <h1>What is possible</h1>
        </div>
    </div>
  </div>  
</div>


 <!-- **** The main area, separated by sections **** -->     

<main id="main_content">
  <section></section>
  <section></section>
  <section></section>
  <section></section>
</main>


</div>


 <!-- **** JS **** -->      

 <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/animationLibraries.min.js' ?>" type="text/javascript"></script>

 <script src="<?php echo get_stylesheet_directory_uri() . '/immersive-stories/js/arts.min.js' ?>" type="text/javascript"></script>
 <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/header.js' ?>" type="text/javascript"></script>

 

<?php get_template_part('footer', 'campaign'); ?>

</body>
</html>

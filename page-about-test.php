<?php get_header( "campaign-open" ); ?>

<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/campaign/css/header.css' ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/common.css' ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/leadership.css' ?>' type='text/css' media='all' />

<?php get_header( "campaign-close" ); ?>


<main>
  <?php
    // Start the Loop.
    while ( have_posts() ) : the_post();

      /*
       * Include the post format-specific template for the content. If you want to
       * use this in a child theme, then include a file called called content-___.php
       * (where ___ is the post format) and that will be used instead.
       */
      the_content();

    endwhile;
  ?>
</main>

<?php get_template_part('footer', 'campaign'); ?>


  
<script type="text/javascript">
  
  $(function(){


    var current = document.getElementById('camp-current').innerHTML,
        goal    = document.getElementById('camp-goal').innerHTML,
        height  = window.innerHeight * 0.9,
        thermo  = document.getElementById('thermo'),
        thermoWidth = thermo.getBoundingClientRect().width * ( current / goal),
        isMobile = window.matchMedia("only screen and (max-width: 768px)");  

        thermo.style.backgroundPosition =  (Math.ceil(thermoWidth + 60) - (isMobile.matches ? 0 : 190)) + "px top"

    document.addEventListener('scroll',function(){
      var el = thermo.getBoundingClientRect().top;
      if ( height >  el ) {
          thermo.classList.remove('inactive');
      } else {
          thermo.classList.add('inactive');
      }
    })

    if (!isMobile.matches) {
      $('#people li').bind('touchstart touchend', function(e) {
          e.preventDefault();
          $(this).toggleClass('hover');
      });
    }


  })

</script>



 <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/header.js' ?>" type="text/javascript"></script>

 



</body>
</html>
<main>
  <?php
    // Start the Loop.
    while ( have_posts() ) : the_post();

      /*
       * Include the post format-specific template for the content. If you want to
       * use this in a child theme, then include a file called called content-___.php
       * (where ___ is the post format) and that will be used instead.
       */
      the_content();

    endwhile;
  ?>
</main>https://artsci.washington.edu/campaign
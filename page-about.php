<?php get_header( "campaign-open" ); ?>

<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/campaign/css/header.css' ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/common.css' ?>' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() . '/immersive-stories/css/leadership.css' ?>' type='text/css' media='all' />

<?php get_header( "campaign-close" ); ?>


  <main>

    <div class="container" id="leaders">
                <h2 class="purpleHeadline"><span>Campaign Volunteers Across the UW</span></h2>
                <div class="row">
                  <div class="col-md-3">
                  </div>
                  
                  
                  <div class="col-md-3">   
                    <ul>
                      <li><a href="https://sop.washington.edu/alumni-donors/campaign-volunteers/ ">School of Pharmacy</a> </li>
                      <li><a href="http://sph.washington.edu/about/deanscouncil.asp">School of Public Health</a> </li>
                      <li><a href="http://socialwork.uw.edu/alumni/giving-opportunities">School of Social Work</a></li>
                      <li><a href="http://www.lib.washington.edu/support/friends ">University Libraries</a> </li>
                      <li><a href="http://www.uwb.edu/leadership/advisoryboard">UW Bothell</a> </li>
                      <li><a href="http://www.acceleratemed.org/leadership">UW Medicine</a> </li>
                      <li><a href="http://www.tacoma.uw.edu/boundless/volunteers">UW Tacoma</a></li>
                    </ul>    
                  </div>
              </div>

          </div> 

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

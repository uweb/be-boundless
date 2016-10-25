<?php get_header( "part-head" ); ?>

<body id="passion" <?php body_class(); ?>>

<?php get_header( "part-body" ); ?>
 
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/passion/css/tiles.css' ?>" type="text/css">

	<div class="module-hero-image" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')">
      <div class="container">    
        <div class="row">
          <h1><?php the_title(); ?></h1>
          <div class="explore-content">
          <?php 
              while ( have_posts() ) : the_post(); 
                the_content();
              endwhile;
           ?>
           </div>
           <div class="circle-button-container">
             <div class="fyp-filter-triggers-container">
               <div class="fyp-filter-triggers" data-name="fyp-causes-filters"><a href="#"><div class="flip-container active">
                <div class="flipper" role="button" aria-expanded="false">
                 <div class="circle-icon front"><p class="fyp-filter-icon fyp-heart"></p><div class="circle-icon plus"><p class="ic-custom"></p></div></div>
                 <div class="circle-icon back"><p class="fyp-filter-icon fyp-heart"></p><div class="circle-icon plus"><p class="ic-custom"></p></div></div>
                </div>
               </div><p class="circle-text">Causes</p></a></div>
               <div class="fyp-filter-triggers" data-name="fyp-units-filters"><a href="#"><div class="flip-container">
                <div class="flipper" role="button" aria-expanded="false">
                 <div class="circle-icon front"><p class="fyp-filter-icon fyp-school"></p><div class="circle-icon plus"><p class="ic-custom"></p></div></div>
                 <div class="circle-icon back"><p class="fyp-filter-icon fyp-school"></p><div class="circle-icon plus"><p class="ic-custom"></p></div></div>
                </div>
               </div><p class="circle-text">Schools, colleges, campuses, other key areas</p></a></div>
             </div>
             <hr align="left" class="reduce">
             <div id="fyp-filters-box" class="fyp-filters-box">
               <ul id="fyp-causes-filters" class="fyp-filters show">
                 <?php
                  $causes_parent_terms = get_terms('causes', array(
                      'hide_empty' => false,
                      'parent' => 0
                  ));
                  foreach ($causes_parent_terms as $cause) {
                       echo '<li><p><a href="#" class="fyp-filter-click" data-category="Causes Links" data-label="' . $cause->name . '" data-filter="' . $cause->slug . '">' . $cause->name . '</a></p></li>';
                  }
                 ?>
               </ul>
               <ul id="fyp-units-filters" class="fyp-filters">
                 <?php
                  $args = array('post_type' => 'units', 'fields' => 'ids', 'orderby' => 'title', 'order' => 'asc', 'numberposts' => '-1');
                  $units = get_posts($args);
                  foreach ($units as $unit => $ID) {
                      if($ID != '2760' && $ID != '3969' ){
                        $title = get_the_title($ID);
                        $search = array(" ","&amp;","&");
                        $slug = ( str_replace($search,"-",strtolower($title)) );
                        echo '<li><p><a href="#" class="fyp-filter-click" data-category="Areas Links" data-label="' . $title . '" data-filter="' . $slug . '">' . $title . '</a></p></li>';
                      }
                  }
                 ?>
                 <li><p><a href="#" class="fyp-filter-click" data-filter="president-s-fund-for-excellence">President’s Fund for Excellence</a></p></li>
               </ul>
             </div>
           </div>
           <div class="fyp-search-wrapper">
              <form class="fyp-search">
                <!-- <label class="fyp-search-label" for="fyp-search-bar"><p>Search for specific fund:</p></label> -->
                <div>
                  <input id="searcher" class="fyp-search-bar quicksearch" type="search" name="fyp-search-name" placeholder="Search for a specific fund" value="">
                  <input type="submit" value="search" id="fyp-search-button" class="fyp-search-button" tabindex="0">
                </div>
              </form>
            </div>
        </div>
      </div>
      <div class="boundless-logo"><img id="boundless-logo" src="/wp-content/themes/be-boundless/campaign/img/be-boundless.png" alt="Be boundless"></div>
      <div class="explore-footer"><?php get_footer('campaign') ?></div>
    </div>

    <!-- <button id="empty">
    Return to story list
    <svg aria-hidden="true" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34.147px" height="37.833px" viewBox="0 0 34.147 37.833" enable-background="new 0 0 34.147 37.833" xml:space="preserve">
      <line fill="none" stroke="#A7A9AC" stroke-width="2" stroke-miterlimit="10" x1="9.616" y1="8.449" x2="31.782" y2="30.614"></line>
      <line fill="none" stroke="#A7A9AC" stroke-width="2" stroke-miterlimit="10" x1="31.782" y1="8.449" x2="9.616" y2="30.614"></line>
    </svg>
  </button> -->



    <!-- Add this to  ontouchstart="this.classList.toggle('hover');" -->
    <?php
    //sort of students will all occur here
        
    $args = array('post_type' => 'funds', 'posts_per_page' => -1);
    $query = new WP_Query($args);
    $funds = $query->get_posts(); 
    shuffle($funds);

    $unitsargs = array('post_type' => 'units', 'posts_per_page' => -1);
    $unitsquery = new WP_Query($unitsargs);
    $units = $unitsquery->get_posts();

    ?>

    <div id="main-content" role="main">
         
         <!-- This hides the stuttering of tiles during load -->

         <ul class="grid hide">

         <li class="grid-sizer"></li>

         <!-- FILTERS -->
         <?php 
          $causes_parent_terms = get_terms('causes', array(
                'hide_empty' => false,
                'parent' => 0
            ));
            foreach ($causes_parent_terms as $cause) {
                  $t_id = $cause->term_id;  
                  $term_meta = get_option( "taxonomy_term_$t_id" ); 
                  $imageurl = $term_meta['cause_image'];
                   $causeargs = array(
                       'post_type' => 'funds',
                       'posts_per_page' => -1,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'causes',
                            'field' => 'slug',
                            'terms' => $cause->slug 
                          )
                        )
                    );
                    $causequery = new WP_Query($causeargs);
                    $causecodes = "";
                    foreach ($causequery->posts as $cq) {
                      $causecodes .= get_post_meta($cq->ID, 'code', true) . ",";
                    }
                ?> 
                  <li tabindex="0" data-name="<?php echo $cause->slug; ?>" id="#<?php echo $cause->slug; ?>" data-img="<?php echo $imageurl; ?>" data-sort="1" class="grid-item fyp-units unit-item open <?php echo $cause->slug; ?>">
                    <div class="flipper" role="button">
                      <div tabindex="0" class="full-bio">
                        <h2><?php echo $cause->name; ?></h2>
                            <!-- INSERT LINK TO PAGE HERE??? -->
                        <div class="bio-text">
                          <p><?php echo $cause->description; ?></p>
                        </div>
                          <div class="give-button">
                            <a href="#" class="give-link" data-code="<?php echo $causecodes; ?>">Give Now</a> 
                          </div>
                      </div>
                      <div class="front"><div style="<?php echo 'background-image:url(' . $imageurl . ');'; ?> "></div></div>
                      <?php if( count($causequery->posts) > 0 ) { ?>
                        <div class="explore-banner">
                          <p>Explore these opportunities</p>
                        </div>
                      <?php } ?>
                    </div>
                  </li>
          <?php
            }
           $purposes_parent_terms = get_terms('purposes', array(
                'hide_empty' => false,
                'parent' => 0
            ));
            foreach ($purposes_parent_terms as $purpose) {
                  $t_id = $purpose->term_id;  
                  $term_meta = get_option( "taxonomy_term_$t_id" ); 
                  $imageurl = $term_meta['purpose_image'];
                 ?>  
                  <li tabindex="0" data-name="<?php echo $purpose->slug; ?>" id="#<?php echo $purpose->slug; ?>" data-img="<?php echo $imageurl; ?>" data-sort="1" class="grid-item fyp-units unit-item open <?php echo $purpose->slug; ?>">
                    <div class="flipper" role="button">
                      <div tabindex="0" class="full-bio">
                        <h2><?php echo $purpose->name; ?></h2>
                            <!-- INSERT LINK TO PAGE HERE??? -->
                        <div class="bio-text">
                          <p><?php echo $purpose->description; ?></p>
                        </div>
                      </div>
                      <div class="front"><div style="<?php echo 'background-image:url(' . $imageurl . ');'; ?> "></div></div>
                      <?php //if( count($unitquery->posts) > 0 ) { ?>
                        <div class="explore-banner">
                          <p>Explore these opportunities</p>
                        </div>
                      <?php //} ?>
                    </div>
                  </li>
                  <?php
            }
            $priorities_parent_terms = get_terms('priorities', array(
                'hide_empty' => false,
                'parent' => 0
            ));
            foreach ($priorities_parent_terms as $priority) {
                  $t_id = $priority->term_id;  
                  $term_meta = get_option( "taxonomy_term_$t_id" ); 
                  $imageurl = $term_meta['priority_image'];
                ?> 
                  <li tabindex="0" data-name="<?php echo $priority->slug; ?>" id="#<?php echo $priority->slug; ?>" data-img="<?php echo $imageurl; ?>" data-sort="1" class="grid-item fyp-units unit-item open <?php echo $priority->slug; ?>">
                    <div class="flipper" role="button">
                      <div tabindex="0" class="full-bio">
                        <h2><?php echo $priority->name; ?></h2>
                            <!-- INSERT LINK TO PAGE HERE??? -->
                        <div class="bio-text">
                          <p><?php echo $priority->description; ?></p>
                        </div>
                      </div>
                      <div class="front"><div style="<?php echo 'background-image:url(' . $imageurl . ');'; ?> "></div></div>
                      <?php //if( count($unitquery->posts) > 0 ) { ?>
                        <div class="explore-banner">
                          <p>Explore these opportunities</p>
                        </div>
                      <?php //} ?>
                    </div>
                  </li>
          <?php
            }
          ?>


        <!-- THE FUN PHP STUFF -->
        <?php

        $unitcount = 1;
        foreach ( $units as $unit ) {
           //gather assets
           $unitimageurl = wp_get_attachment_image_src( get_post_thumbnail_id($unit->ID) , $size = 'medium' );
           $unitimageurl = $unitimageurl[0];
           $unitimageurlhigh = wp_get_attachment_image_src( get_post_thumbnail_id($unit->ID) , $size = 'large' );
           $unitimageurlhigh = $unitimageurlhigh[0];
           if ( !$unitimageurl ) {
            //set to default image here
            $unitimageurl = get_stylesheet_directory_uri() . '/passion/assets/building.jpg';
            $unitimageurlhigh = get_stylesheet_directory_uri() . '/passion/assets/building.jpg';
           }
           $campyurl = get_post_meta($unit->ID, 'url', true);
           $secondary = get_post_meta($unit->ID, 'secondary', true);
           //FEATURE: do tags also need to be classes? 
           $unitclasses = "";
           // foreach ($units as $unit ) {
           //     $unitclasses .= $unit->slug . " "; //IS SLUG A CLASS TO USE ON THIS???
           // }
          //
           //get the slug
            $search = array(" ","&amp;","&","'","#8217;");
            $slug = ( str_replace($search,"-",strtolower($unit->post_title)) );

            //get all funds alloc codes
            $fundargs = array(
               'post_type' => 'funds',
               'meta_query' => array(
                   array(
                       'key' => 'unit',
                       'value' => $slug,
                       'compare' => '=',
                   )
               )
            );
            $unitquery = new WP_Query($fundargs);
            $unitcodes = "";
            $customGive = get_post_meta($unit->ID, 'customGive', true);
            if($customGive != ""){
              $unitcodes = $customGive;
            } else {
              foreach ($unitquery->posts as $uq) {
                $unitcodes .= get_post_meta($uq->ID, 'code', true) != "" ? get_post_meta($uq->ID, 'code', true) . "," : "";
              }
            }
            $campaign = ($unit->url ? "<a href='" . $unit->url . "'>Campaign website</a>" : "");

           //spit out html 
           
           
           ?>
           
            <li tabindex="0" data-name="<?php echo $slug; ?>" id="#<?php echo $slug; ?>" data-img="<?php echo $unitimageurlhigh; ?>" data-sort="1" class="grid-item fyp-units unit-item open <?php echo $slug; ?>">
            <div class="flipper" role="button">
              <div tabindex="0" class="full-bio">
                <h2><?php echo $unit->post_title; ?></h2>
                    <!-- INSERT LINK TO PAGE HERE??? -->
                <div class="bio-info">
                  <p>
                    <?php echo $campaign; ?>
                  </p>              
                  <p></p>                
                </div>
                <div class="bio-text">
                  <p><?php echo apply_filters('the_content', $unit->post_content); ?></p>
                </div>

                <?php if(empty($unit->giveButton)){ ?>
                <div class="give-button">
                  <a href="#" class="give-link" data-code="<?php echo $unitcodes; ?>">Give Now</a> 
                </div>
                <?php } ?>
              </div>
              <div class="front"><div style="<?php echo 'background-image:url(' . $unitimageurlhigh . ');'; ?> "></div></div>
              <?php if( count($unitquery->posts) > 0 ) { ?>
                <div class="explore-banner">
                  <p>Explore these opportunities</p>
                </div>
              <?php } ?>
            </div>
          </li>

          
          <li tabindex="0" data-name="<?php echo $slug; ?>" data-img="<?php echo $unitimageurlhigh; ?>" data-sort="3" class="flip-container grid-item fyp-funds unit-small <?php echo $slug; ?>">
            <div class="flipper" role="button">
              <div class="front" style="<?php echo 'background-image:url(' . $unitimageurl . ');'; ?> ">
                <div class="banner">
                  <?php echo $unit->post_title; ?>
                </div> 
              </div>
              <div class="back">
                <h3><?php echo $unit->post_title; ?></h3>
                <p class="short-desc"><?php //echo $fund->desc; ?></p>
              </div>
            </div>
          </li>



        <?php
            $unitcount++;
        }


        $fundcount = 1;
        foreach ( $funds as $fund ) {
           //gather assets
           $fundimageurl = wp_get_attachment_image_src( get_post_thumbnail_id($fund->ID) , $size = 'medium' );
           $fundimageurl = $fundimageurl[0];
           $fundimageurlhigh = wp_get_attachment_image_src( get_post_thumbnail_id($fund->ID) , $size = 'large' );
           $fundimageurlhigh = $fundimageurlhigh[0];
           if ( !$fundimageurl ) {
            //set to default image here
            $fundimageurl = get_stylesheet_directory_uri() . '/passion/assets/building.jpg';
            $fundimageurlhigh = get_stylesheet_directory_uri() . '/passion/assets/building.jpg';
           }
           //$short = get_post_meta($fund->ID, 'short', true);
           //$code = get_post_meta($fund->ID, 'code', true);
           //$desc = get_post_meta($fund->ID, 'desc', true);
           $fundcauses = wp_get_post_terms( $fund->ID, 'causes' );
           $fundpurposes = wp_get_post_terms( $fund->ID, 'purposes' );
           $fundpriorities = wp_get_post_terms( $fund->ID, 'priorities' );
           //$fundunit = get_post_meta($fund->ID, 'unit', true);
           
           //FEATURE: do tags also need to be classes? 
           $fundclasses = "";
           foreach ($fundcauses as $fundcause ) {
               $fundclasses .= $fundcause->slug . " ";
           }
           foreach ($fundpriorities as $fundpriority ) {
               $fundclasses .= $fundpriority->slug . " ";
           }
           foreach ($fundpurposes as $fundpurpose ) {
               $fundclasses .= $fundpurpose->slug . " ";
           }
           $fundclasses .= $fund->unit . " ";

            $unslugUnit = str_replace("---"," &amp; ",$fund->unit);
            $unslugUnit = str_replace("-"," ",$unslugUnit);

            $shortDesc = (strlen($fund->desc) > 150 ) ? (substr($fund->desc , 0 , 150) . "...") : $fund->desc;

           //spit out html 
           ?>
            <li tabindex="0" data-name="<?php echo $fund->post_name; ?>" data-img="<?php echo $fundimageurlhigh; ?>" data-sort="3" class="flip-container grid-item fyp-funds <?php echo $fundclasses; ?>">
            <div class="flipper" role="button">
              <div class="front" style="<?php echo 'background-image:url(' . $fundimageurl . ');'; ?> ">
              	<div class="banner">
              		<?php echo (($fund->short != "") ? $fund->short : $fund->post_title); ?>
              	</div> 
              </div>
              <div class="back">
                <h3><?php echo $fund->post_title; ?></h3>
                <p class="back-unit-name"><?php echo $unslugUnit; ?></p>
                <p class="short-desc"><?php echo $shortDesc; ?></p>
              </div>
              <div tabindex="0" class="full-bio">
                <h2><?php echo $fund->post_title; ?></h2>
                 <div class="bio-info"> 
                  <p><?php 
                      echo '<a href="#" class="fyp-filter-click" data-filter="' . $fund->unit . '">' . $unslugUnit . '</a>';
                  ?></p>               
                </div>
                <div class="bio-text">
                  <p><?php echo apply_filters('the_content', $fund->post_content); ?></p>
                </div>
                <div class="tags">
                <?php //foreach ($tags as $tag ) {
                    //echo '<a href="#">' . $tag->name . '</a>';
                //} ?>
                </div>
                <?php if(!empty($fund->code)){ ?>
                <div class="give-button">
                	<a href="#" class="give-link" data-code="<?php echo $fund->code; ?>">Give Now</a>
                </div>
                <?php } ?>
                <button class="empty-fund">
                  Close current fund
                  <svg aria-hidden="true" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34.147px" height="37.833px" viewBox="0 0 34.147 37.833" enable-background="new 0 0 34.147 37.833" xml:space="preserve">
                    <line fill="none" stroke="#A7A9AC" stroke-width="2" stroke-miterlimit="10" x1="9.616" y1="8.449" x2="31.782" y2="30.614"></line>
                    <line fill="none" stroke="#A7A9AC" stroke-width="2" stroke-miterlimit="10" x1="31.782" y1="8.449" x2="9.616" y2="30.614"></line>
                  </svg>
                </button>
              </div>
            </div>
          </li>




        <?php
            $fundcount++;
        }


        ?>

        <li tabindex="0"  data-sort="5" class="flip-container grid-item search-more">
            <div class="flipper" role="button">
              <div>
                <p class="fyp-search-more-label">Show more funds</p>
                <p class="fyp-no-results-label hide">No results. Please try a new search</p>
                <!-- <p class="short-desc">no desc</p> -->
              </div>
            </div>
          </li>


         </ul>
         <ul class="search-grid">
         </ul>   

    </div>
</div>

<!-- ////////////////// -->


</body>
<footer>
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
  <script type='text/javascript' src='https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script> 
  <script src="<?php echo get_stylesheet_directory_uri() . '/passion/js/tiles.js' ?>" type="text/javascript"></script>
</footer>
</html>

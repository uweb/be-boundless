<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="keywords" content="ScrollMagic, example, scrolling, attaching, scrollbar, horizontal, landscape" />
  <!-- <meta name="viewport" content="width=device-width"> -->
  <meta name="viewport" content="initial-scale=.98 user-scalable=no width=device-width">
  <!-- <meta name="viewport" content="width=device-width maximum-scale=1.0, user-scalable=no" /> -->
  <title> <?php wp_title(' | ',TRUE,'right'); bloginfo('name'); ?> </title>

   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/passion/css/tiles.css' ?>" type="text/css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/campaign/css/campaign-style.css' ?>" type="text/css">
   
      
  <link rel='stylesheet' id='uw-master-css'  href='<?php echo bloginfo("template_directory") . '/style.css' ?>' type='text/css' media='all' />
  <link rel='stylesheet' id='google-font-open-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C700italic%2C400%2C700&#038;' type='text/css' media='all' />
  <link rel='stylesheet' id='uw-style-css'  href='<?php echo get_stylesheet_directory_uri() . '/style.css' ?>' type='text/css' media='all' />
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
  <script type='text/javascript' src='https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js'></script>

   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script> 

  
  

<?php ; ?>

</head>
<body id="passion" <?php body_class(); ?>>

<div id="campaign-header" class="active">
    
    <a class="home" href="#">Home</a>

    <div class="thin">
        <a href="#">Support the campaign</a>
        
    </div>
    <div class="thick">
        <ul>
            <li><a href="#">Experience</a></li>
            <li><a href="#">Campaign Leadership</a></li>
            <li><a href="#">Find Your Passion</a></li>
            <li><a href="#">Give now</a></li>
        </ul>        
    </div>
    <button id="campaign-expand">View menu
      <div aria-hidden="true" id="ham">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
</div>

	<div class="module-hero-image" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')">
      <div class="container">    
        <div class="row">
          <h1><?php the_title(); ?></h1>
          <?php 
              while ( have_posts() ) : the_post(); 
                the_content();
              endwhile;
           ?>
           <div class="circle-button-container">
             <div class="fyp-filter-triggers" data-name="fyp-causes-filters"><a href="#"><div class="flip-container">
               <div class="circle-icon front"><p class="fyp-filter-icon fyp-heart"></p></div>
               <div class="circle-icon back"><p class="fyp-filter-icon fyp-heart"></p></div>
             </div><p class="circle-text">Causes</p></a></div>
             <div class="fyp-filter-triggers" data-name="fyp-units-filters"><a href="#"><div class="flip-container">
               <div class="circle-icon front"><p class="fyp-filter-icon fyp-school"></p></div>
               <div class="circle-icon back"><p class="fyp-filter-icon fyp-school"></p></div>
             </div><p class="circle-text">Schools, colleges, campuses, other key areas</p></a></div>
             <div class="fyp-filter-triggers" data-name="fyp-purposes-filters"><a href="#"><div class="flip-container">
               <div class="circle-icon front"><p class="fyp-filter-icon fyp-cert"></p></div>
               <div class="circle-icon back"><p class="fyp-filter-icon fyp-cert"></p></div>
             </div><p class="circle-text">UW Priorities</p></a></div>
             <hr align="left">
             <div id="fyp-filters-box" class="fyp-filters-box">
               <ul id="fyp-causes-filters" class="fyp-filters">
                 <?php
                  $causes_parent_terms = get_terms('causes', array(
                      'hide_empty' => false,
                      'parent' => 0
                  ));
                  foreach ($causes_parent_terms as $cause) {
                       echo '<li><p><a href="#" class="fyp-filter-click" data-filter="' . $cause->slug . '">' . $cause->name . '</a></p></li>';
                  }
                 ?>
               </ul>
               <ul id="fyp-units-filters" class="fyp-filters">
                 <?php
                  $args = array('post_type' => 'units', 'fields' => 'ids', 'orderby' => 'title', 'order' => 'asc', 'numberposts' => '-1');
                  $units = get_posts($args);
                  foreach ($units as $unit => $ID) {
                      $title = get_the_title($ID);
                      $search = array(" ","&amp;","&");
                      $slug = ( str_replace($search,"-",strtolower($title)) );
                      echo '<li><p><a href="#" class="fyp-filter-click" data-filter="' . $slug . '">' . $title . '</a></p></li>';
                  }
                 ?>
               </ul>
               <ul id="fyp-purposes-filters" class="fyp-filters">
                 <?php
                  $purposes_parent_terms = get_terms('purposes', array(
                      'hide_empty' => false,
                      'parent' => 0
                  ));
                  foreach ($purposes_parent_terms as $purpose) {
                       echo '<li><p><a href="#" class="fyp-filter-click" data-filter="' . $purpose->slug . '">' . $purpose->name . '</a></p></li>';
                  }
                 ?>
               </ul>
             </div>
           </div>
           <div class="fyp-search-wrapper">
              <form class="fyp-search">
                <label class="fyp-search-label" for="fyp-search-bar"><p>Or search for specific fund:</p></label>
                <input id="searcher" class="fyp-search-bar quicksearch" type="search" name="fyp-search-name" value="">
                <input type="submit" value="search" class="fyp-search-button" tabindex="0">
              </form>
            </div>
        </div>
      </div>
    </div>

    <div class="fyp-close-button-gradient"></div>
    <a class="FYP-home-button">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="46.75px" height="46.812px" viewBox="0 0 46.75 46.812" enable-background="new 0 0 46.75 46.812" xml:space="preserve">
      <g>
        <line fill="none" stroke="#FFF" stroke-miterlimit="10" x1="1.011" y1="1.001" x2="46.011" y2="46.001"/>
        <line fill="none" stroke="#FFF" stroke-miterlimit="10" x1="46.011" y1="1.001" x2="1.011" y2="46.001"/>
      </g>
      </svg>
    </a> 



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
        <div id="overlay"></div>

         <ul class="grid">

         <li class="grid-sizer"></li>

         <!-- FILTER BOX -->
         <?php 
         // $filter_terms = get_terms('filters', array(
         //     'hide_empty' => false,
         // ));
         // // foreach ($filter_terms as $term) {
         // //     echo    '<div class="grid-item special title-card stamp ' . $term->slug . '">
         // //                <h2>' . $term->name . '</h2>
         // //                <div class="udub-slant"><span></span></div>
         // //                <p>' . $term->description . '</p>
         // //              </div>';
         // // }
         // $tag_terms = get_terms('tags');
         // foreach ($tag_terms as $tag_term) {
         //     echo    '<div class="grid-item special title-card ' . $tag_term->slug . '">
         //                <h2 class="tags">' . $tag_term->name . '</h2>
         //                <div class="udub-slant"><span></span></div>
         //                <p>' . $tag_term->description . '</p>
         //              </div>';
         // }
          ?>


        <!-- THE FUN PHP STUFF -->
        <?php

        $unitcount = 1;
        foreach ( $units as $unit ) {
           //gather assets
           $unitimageurl = wp_get_attachment_image_src( get_post_thumbnail_id($unit->ID) , array(200,150) );
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
            $search = array(" ","&amp;","&");
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
            foreach ($unitquery->posts as $uq) {
              $unitcodes .= get_post_meta($uq->ID, 'code', true) . ",";
            }
            

           //spit out html 
           
           
           ?>
           
            <li tabindex="0" data-name="<?php echo $slug; ?>" id="#<?php echo $slug; ?>" data-img="<?php echo $unitimageurlhigh; ?>" class="grid-item fyp-units unit-item open <?php echo $slug; ?>">
            <div class="flipper" role="button">
              <div tabindex="0" class="full-bio">
                <h2><?php echo $unit->post_title; ?></h2>
                    <!-- INSERT LINK TO PAGE HERE??? -->
                <div class="bio-text">
                  <p><?php echo apply_filters('the_content', $unit->post_content); ?></p>
                </div>
                <div class="give-button">
                  <a href="#" class="give-link" data-code="<?php echo $unitcodes; ?>">Give Now</a> 
                </div>
              </div>
              <div class="front" style="<?php echo 'background-image:url(' . $unitimageurlhigh . ');'; ?> "></div>
            </div>
          </li>

          
          <li tabindex="0" data-name="<?php echo $slug; ?>" data-img="<?php echo $unitimageurlhigh; ?>" class="flip-container grid-item fyp-funds unit-small <?php echo $slug; ?>">
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
           $fundimageurl = wp_get_attachment_image_src( get_post_thumbnail_id($fund->ID) , array(200,150) );
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
           $fundpriorities = wp_get_post_terms( $fund->ID, 'purposes' );
           //$fundunit = get_post_meta($fund->ID, 'unit', true);
           
           //FEATURE: do tags also need to be classes? 
           $fundclasses = "";
           foreach ($fundcauses as $fundcause ) {
               $fundclasses .= $fundcause->slug . " ";
           }
           foreach ($fundpriorities as $fundpriority ) {
               $fundclasses .= $fundpriority->slug . " ";
           }
           $fundclasses .= $fund->unit . " ";

           //spit out html 
           ?>
            <li tabindex="0" data-name="<?php echo $fund->post_name; ?>" data-img="<?php echo $fundimageurlhigh; ?>" class="flip-container grid-item fyp-funds <?php echo $fundclasses; ?>">
            <div class="flipper" role="button">
              <div class="front" style="<?php echo 'background-image:url(' . $fundimageurl . ');'; ?> ">
              	<div class="banner">
              		<?php echo $fund->short; ?>
              	</div> 
              </div>
              <div class="back">
                <h3><?php echo $fund->post_title; ?></h3>
                <p class="short-desc"><?php echo $fund->desc; ?></p>
              </div>
              <div tabindex="0" class="full-bio">
                <h2><?php echo $fund->post_title; ?></h2>
                 <div class="bio-info"> 
                  <p><?php 
                      $search = array(" ","&amp;","&");
                      $unslug = str_replace("---"," &amp; ",$fund->unit);
                      $unslug = str_replace("-"," ",$unslug);
                      echo '<a href="#" class="fyp-filter-click" data-filter="' . $fund->unit . '">' . $unslug . '</a>';
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
                <div class="give-button">
                	<a href="#" class="give-link" data-code="<?php echo $fund->code; ?>">Give Now</a>
                </div>
              </div>
            </div>
          </li>




        <?php
            $fundcount++;
        }





        ?>


         </ul>   

    </div>
</div>





<!-- ////////////////// -->


<?php  get_template_part('footer'); ?>

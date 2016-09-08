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

   <script src="<?php echo get_stylesheet_directory_uri() . '/campaign/js/main.js' ?>" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri() . '/passion/js/tiles.dev.js' ?>" type="text/javascript"></script>
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
          <div class="udub-slant"><span></span></div>
          <?php 
              while ( have_posts() ) : the_post(); 
                the_content();
              endwhile;
           ?>
        </div>
      </div>
    </div>
    <!-- FEATURE: dynamically load the filters - Now a dropdown structure --> 

    <div role="form" aria-label="Filter Results">
    
        <ul id="filter">
        <li class="sort_by">
          Filter by:
        </li>
        <li>
          <a id="clear" href="#" title="Show all">
          <svg xmlns="http://www.w3.org/2000/svg" width="35.848" height="35.794" viewBox="0 0 35.848 35.794"><circle fill="#c2c2c2" cx="17.999" cy="17.999" r="16.998"/><g fill="none"    stroke="#FFF" stroke-width="3" stroke-miterlimit="10"><path d="M11.485 24.513l13.027-13.028M24.512 24.513L11.485 11.485"/></g></svg>Show all      
          </a>
        </li>
        <?php
        	//
            $category_parent_terms = get_terms('causes', array(
                'hide_empty' => false,
                'parent' => 0
            ));
            $priority_parent_terms = get_terms('purposes', array(
                'hide_empty' => false,
                'parent' => 0
            ));
            echo '<li class="select">' .
                        '<label>Causes</label>' .
                         '<select>';
            foreach ($category_parent_terms as $parent) {
                 echo '<option>' . $parent->name . '</option>';
            }
            echo '</select>        
                       </li>
                       <li class="select">' .
                        '<label>Purposes</label>' .
                         '<select>';
            foreach ($priority_parent_terms as $parent1) {
                 echo '<option>' . $parent1->name . '</option>';
            }
            echo '</select>        
                       </li>';
    
            //print_r($filterneum_terms);
            // foreach ($terms as $term) {
            //     echo '<li>
            //             <button data-filter=".' . $term->slug . '">' . $term->name . ' <div class="udub-slant"><span></span></div></button>        
            //           </li>';
            //     print_r($term);
            // }
        ?>
          <li class="search_slash">
            <a title="Search button" id="searcher" href="#">
            <svg version="1.1" aria-hidden="true" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="22.889px" height="59.075px" viewBox="0 0 22.889 59.075" enable-background="new 0 0 22.889 59.075" xml:space="preserve">
            <path fill="#4C2E84" d="M13.676,0.294c-4.998,0-9.063,4.067-9.063,9.065c0,1.897,0.587,3.658,1.587,5.116l-5.751,5.744l2.225,2.229
              l5.734-5.726c1.486,1.067,3.302,1.703,5.267,1.703h0.002c4.998,0,9.064-4.067,9.064-9.066C22.741,4.361,18.674,0.294,13.676,0.294z
               M19.824,9.359c0,3.385-2.754,6.14-6.139,6.14c-3.389,0-6.147-2.754-6.149-6.14c0-3.384,2.759-6.137,6.149-6.137
              C17.07,3.223,19.824,5.976,19.824,9.359z"/>
            <line fill="none" stroke="#B8A678" stroke-width="3.5" stroke-miterlimit="10" x1="1.396" y1="52.409" x2="19.614" y2="34.191"/>
            <line fill="none" stroke="#B8A678" stroke-width="3.5" stroke-miterlimit="10" x1="19.614" y1="52.409" x2="1.396" y2="34.191"/>
            </svg>
            </a>        
          </li>
        </ul>
    
    
    
        <div role="search" id="searcher_wrap">
          <input type="text" class="quicksearch" placeholder="Start typing" />
        </div>
      
    </div>


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

           //spit out html 
           //
           //forTESTING
           if($unit->post_title == 'UW Tacoma'){

          
           ?>
           
            <li tabindex="0" data-name="<?php echo $unit->post_name; ?>" data-img="<?php echo $unitimageurlhigh; ?>" class="flip-container grid-item unit-item open <?php echo $unitclasses; ?>">
            <div class="flipper" role="button">
              <div tabindex="0" class="full-bio">
                <h2><?php echo $unit->post_title; ?></h2>
                    <!-- INSERT LINK TO PAGE HERE??? -->
                <div class="bio-text">
                  <p><?php echo $unit->post_content; ?></p>
                </div>
                <div class="give-button">
                  <a href="#" class="give-link">Give Now</a>
                </div>
              </div>
              <div class="front" style="<?php echo 'background-image:url(' . $unitimageurlhigh . ');'; ?> "></div>
            </div>
          </li>

          




        <?php
            }
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
           $short = get_post_meta($fund->ID, 'short', true);
           $code = get_post_meta($fund->ID, 'code', true);
           $desc = get_post_meta($fund->ID, 'desc', true);
           $categories = wp_get_post_terms( $fund->ID, 'categories' );
           $priorities = wp_get_post_terms( $fund->ID, 'priorities' );
           //FEATURE: do tags also need to be classes? 
           $fundclasses = "";
           foreach ($funds as $fund ) {
               $fundclasses .= $fund->slug . " "; //IS SLUG A CLASS TO USE ON THIS???
           }

           //spit out html 
           ?>
            <li tabindex="0" data-name="<?php echo $fund->post_name; ?>" data-img="<?php echo $fundimageurlhigh; ?>" class="flip-container grid-item <?php echo $fundclasses; ?>">
            <div class="flipper" role="button">
              <div class="front" style="<?php echo 'background-image:url(' . $fundimageurl . ');'; ?> ">
              	<div class="banner">
              		<?php echo $fund->short; ?>
              		<p class="short-desc"><?php echo $fund->desc; ?></p>
              	</div> 
              </div>
              <div class="back">
                <h3><?php echo $fund->post_title; ?></h3>
                <!-- <p><?php echo $hometown; ?></p> -->
                <!-- <p class="major"><?php echo $major; ?></p>  -->
              </div>
              <div tabindex="0" class="full-bio">
                <h2><?php echo $fund->post_title; ?>
    <!-- INSERT LINK TO PAGE HERE??? -->
                <?php //echo !empty($linkedin) ? '<a target="_blank" class="linkedin" href="' . $linkedin . '">LinkedIn</a>' : '' ?></h2> 
                <!-- <div class="bio-info">
                  <p><?php echo $hometown; ?></p>
                  <p><?php echo $major; ?></p>                
                  <p><?php echo $minor; ?></p>                
                </div> -->
                <div class="bio-text">
                  <p><?php echo $fund->post_content; ?></p>
                </div>
                <!-- <div class="tags">
                <?php foreach ($tags as $tag ) {
                    echo '<a href="#">' . $tag->name . '</a>';
                } ?>
                </div> -->
                <div class="give-button">
                	<a href="#" class="give-link">Give Now</a>
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

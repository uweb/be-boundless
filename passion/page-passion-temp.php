<!-- this gets changed to a page-PAGENAME.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> <?php wp_title(' | ',TRUE,'right'); bloginfo('name'); ?> </title>
        <meta charset="utf-8">
        <meta name="description" content="<?php bloginfo('description', 'display'); ?>">
        <meta name="viewport" content="width=device-width">
        <meta property="og:image" content="http://www.washington.edu/husky100/files/2016/05/husky100-badge-lg.png">


        <?php wp_head(); ?>

        <!--[if lt IE 9]>
            <script src="<?php bloginfo("template_directory"); ?>/assets/ie/js/html5shiv.js" type="text/javascript"></script>
            <script src="<?php bloginfo("template_directory"); ?>/assets/ie/js/respond.js" type="text/javascript"></script>
            <link rel='stylesheet' href='<?php bloginfo("template_directory"); ?>/assets/ie/css/ie.css' type='text/css' media='all' />
        <![endif]--> 
        
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
      <link rel='stylesheet' href='<?php echo plugin_dir_url( __FILE__ ) . '../uw-template-hierarchy/thinstrip.css' ?>' type='text/css' media='all' />
      <link rel='stylesheet' href='<?php echo plugin_dir_url( __FILE__ ) . '../uw-template-hierarchy/module-hero-image.css' ?>' type='text/css' media='all' />

      <!--[if IE 9]>
          <style>
           html #husky100 ul#filter li.select label {
            position: static;
          }
          </style>
      <![endif]-->

    </head>
    <body <?php body_class(); ?> id="husky100">
    <a href="#main_content" class="screen-reader-shortcut">Skip to main content</a>

    <div role="banner">
      <div id="thin-strip">
          <a class="wordmark" href="http://uw.edu" tabindex="-1" title="University of Washington Home">Home</a>
          <ul>
              <li class="facebook"><a href="https://www.facebook.com/UofWA" title="Facebook">Facebook</a></li>
              <li class="twitter"><a href="https://twitter.com/uw" title="Twitter">Twitter</a></li>
              <li class="instagram"><a href="http://instagram.com/uofwa" title="Instagram">Instagram</a></li>
              <li class="youtube"><a href="http://www.youtube.com/uwhuskies" title="YouTube">YouTube</a></li>
              <li><a href="http://uw.edu/students" class="slash" title="Students">Students</a></li>
              <li><a href="http://uw.edu/parents" class="slash" title="Parents">Parents</a></li>
              <li><a href="http://uw.edu/facultystaff" class="slash" title="Faculty &amp; Staff">Faculty &amp; Staff</a></li>
              <li><a href="http://uw.edu/alumni" class="slash" title="Alumi">Alumni</a></li>
          </ul>
      </div>
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
            //get filters
            //foreach filter print button
            //set current filter
            //reflect that in filter box
            //
            $filter_parent_terms = get_terms('filters', array(
                'hide_empty' => false,
                'parent' => 0
            ));
            foreach ($filter_parent_terms as $parent) {
                 echo '<li class="select">' .
                        '<label>' . $parent->name . '</label>' .
                         '<select><option>' . 'Select a ' . $parent->name . '</option>';
    
                 foreach ( get_terms( 'filters', array( 'hide_empty' => false, 'parent' => $parent->term_id ) ) as $child ) {
                    if ($child->slug == 'arts-sci-all-divisions') {
                        echo '<option value=".arts-sci-arts, .arts-sci-humanities, .arts-sci-natural-sci, .arts-sci-social-sci, .arts-sci-all-divisions">' . $child->name . '</option>';
                        $childrens = get_terms( 'filters', array( 'hide_empty' => false, 'parent' => $child->term_id ) );
                        foreach ( $childrens as $children ) {
                            echo ( ($children->count > 0) ? '<option value=".' . $children->slug . '">&emsp;' . $children->name . '</option>' : '');
                        }
                    } else {
                        echo ( ($child->count > 0) ? '<option value=".' . $child->slug . '">' . $child->name . '</option>' : '');
                    }
                 }
    
                 echo '</select>        
                       </li>';
            }
    
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
        
    $args = array('post_type' => 'husky100', 'posts_per_page' => -1);
    $query = new WP_Query($args);
    $people = $query->get_posts(); 
    shuffle($people);

    $fastfactsargs = array('post_type' => 'fastfacts', 'posts_per_page' => -1);
    $fastfactsquery = new WP_Query($fastfactsargs);
    $fastfacts = $fastfactsquery->get_posts();

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
        $peoplecount = 1;
        $factcount = 0;
        $featureOffset = 12;
        foreach ( $people as $person ) {
           //gather assets
           $personimageurl = wp_get_attachment_image_src( get_post_thumbnail_id($person->ID) , array(200,300) );
           $personimageurl = $personimageurl[0];
           $personimageurlhigh = wp_get_attachment_image_src( get_post_thumbnail_id($person->ID) , $size = 'large' );
           $personimageurlhigh = $personimageurlhigh[0];
           if ( !$personimageurl ) {
            //set to default image here
            $personimageurl = plugin_dir_url( __FILE__ ) . 'assets/default.jpg';
            $personimageurlhigh = plugin_dir_url( __FILE__ ) . 'assets/default.jpg';
           }
           $hometown = get_post_meta($person->ID, 'hometown', true);
           $major = get_post_meta($person->ID, 'major', true);
           $minor = get_post_meta($person->ID, 'minor', true);
           $linkedin = get_post_meta($person->ID, 'linkedin', true);
           if ( strpos($linkedin, 'http') === false && strlen($linkedin) > 1) {
             $linkedin = "https://" . $linkedin;
           }
           $filters = wp_get_post_terms( $person->ID, 'filters' );
           $tags = wp_get_post_terms( $person->ID, 'tags' );
           //FEATURE: do tags also need to be classes? 
           $personclasses = "";
           foreach ($filters as $filter ) {
               $personclasses .= $filter->slug . " ";
           }
           if ( $peoplecount % $featureOffset == 3 ) {
                $personclasses .= "featured ";
           }

           if( $peoplecount % $featureOffset == 9 ) { //determines where fast facts are
            $fact = $fastfacts[$peoplecount / $featureOffset];
            $factimageurl = wp_get_attachment_image_src( get_post_thumbnail_id($fact->ID) , array(200,300) );
            $factimageurl = $factimageurl[0];
            $factimageurlhigh = wp_get_attachment_image_src( get_post_thumbnail_id($fact->ID) , $size = 'large' );
            $factimageurlhigh = $factimageurlhigh[0];
            ?>
                <li tabindex="0" data-name="<?php echo $fact->post_name; ?>" class="flip-container grid-item special infographic">
                      <h3><?php echo $fact->post_title; ?></h3>
                </li>
            <?php
           }

           //spit out html 
           ?>
            <li tabindex="0" data-name="<?php echo $person->post_name; ?>" data-img="<?php echo $personimageurlhigh; ?>" class="flip-container grid-item <?php echo $personclasses; ?>">
            <div class="flipper" role="button">
              <div class="front" style="<?php echo 'background-image:url(' . $personimageurl . ');'; ?> ">
              </div>
              <div class="back">
                <h3><?php echo $person->post_title; ?></h3>
                <!-- <p><?php echo $hometown; ?></p> -->
                <p class="major"><?php echo $major; ?></p> 
              </div>
              <div tabindex="0" class="full-bio">
                <h2><?php echo $person->post_title; ?>
                <?php echo !empty($linkedin) ? '<a target="_blank" class="linkedin" href="' . $linkedin . '">LinkedIn</a>' : '' ?></h2>
                <div class="bio-info">
                  <p><?php echo $hometown; ?></p>
                  <p><?php echo $major; ?></p>                
                  <p><?php echo $minor; ?></p>                
                </div>
                <div class="bio-text">
                  <p><?php echo $person->post_content; ?></p>
                </div>
                <div class="tags">
                <?php foreach ($tags as $tag ) {
                    echo '<a href="#">' . $tag->name . '</a>';
                } ?>
                </div>
              </div>
            </div>
          </li>




        <?php
            $peoplecount++;
        }

        ?>


         </ul>   

    </div>
    









</body>
</html>
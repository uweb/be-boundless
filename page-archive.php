<?php get_header(); ?>

<?php get_template_part( 'header', 'image' ); ?>

<div class="container uw-body boundless-archive">

  <div class="row">

    <div class='uw-content col-md-12' role='main'>

      <div class="text-overlay">

            <h1 class="uw-site-title">Boundless Archive</h1>

            <div class="udub-slant"><span></span></div>

            <div class="spotlight-blurb"><p><?php the_post(); echo get_the_content(); ?></p></div>

      </div>


      <?php uw_site_title(); ?>

      <div id='main_content' class="uw-body-copy">
        
        <div id='archive_section'>
          <?php
          $args = array(
            'posts_per_page'  => -1,
            'orderby'         => 'post_date',
            'post_type'       => 'post',
            'post_status'     => 'publish'
          );
          $posts = get_posts($args);
          foreach ($posts as $post){
            $image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'half');
            ?>
            <a href='<?php echo get_post_permalink($post->ID) ?>'>
            <div class='boundless-tile' style='background-image:url("<?php echo $image_src[0] ?>")'>
              <h3><?php echo $post->post_title ?></h3>
            </div>
            </a>
            <?php
          }
          ?>
        </div>

      </div>

    </div>

  </div>

</div>

<?php get_footer(); ?>

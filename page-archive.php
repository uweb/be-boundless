<?php get_header(); ?>

<?php get_template_part( 'header', 'image' ); ?>

<div class="tan-bg">

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
            $image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'full');
            ?>
            <div class='boundless-tile'>
              <div class="boundless-image" style='background-image:url("<?php echo $image_src[0] ?>")'></div>
              <div class="boundless-text">
                <?php
                $link = get_post_meta($post->ID, 'source_url', true);
                if (empty($link)){
                  $link = get_post_permalink($post->ID);
                }
                ?>
                <h3><a href='<?php echo $link ?>'><?php echo $post->post_title ?></a></h3>
                <p><?php echo $post->post_excerpt ?></p>
                <a class="more" href='<?php echo $link ?>'>More</a>
              </div>
            </div>
            <?php
          }
          ?>
        </div>

      </div>

    </div>

  </div>

</div>

</div>

<?php get_footer(); ?>

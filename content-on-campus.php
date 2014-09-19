
<?php if ( get_option( 'sticky_posts') ) :  ?>

<div class="on-campus">

  <div class="container">

    <div class="row">

      <div class="uw-on-campus">
        <span>On Campus</span>
      </div>

        <div class="box-outer">

          <div class="box three">

            <?php foreach ( uw_get_sticky_posts('numberposts=3') as $post )  : setup_postdata( $post ); $category = get_the_category(); ?>

              <div class="tile">

                <div>
                  <?php the_post_thumbnail() ?>
                </div>

                <?php if ( $category[0] ) : ?>

                  <span class="category">
                    <?php echo $category[0]->cat_name; ?>
                  </span>

                  <?php endif; ?>

                <h2> <?php the_title() ?> </h2>

                 <?php the_content() ?>

              </div>

            <?php endforeach; ?>

        </div>

      </div>

    </div>

  </div>

</div>

<?php endif; ?>
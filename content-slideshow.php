<div role='region' aria-labelledby='slideshow-header' class="uw-homepage-slider-container">
  <h2 id='slideshow-header' class='offscreen'>Featured Story Slideshow</h2>
  <?php if ( class_exists('UW_Slideshow') ) : foreach ( UW_Slideshow::get_latest_slideshow() as $slide ) : ?>

  <div class="uw-hero-image uw-homepage-slider slide-<?php echo $slide->id ?>" data-id="<?php echo $slide->id; ?>" style="background:url(<?php echo $slide->image; ?>) no-repeat center; background-size:cover;">

  <?php if ( isset( $slide->mobileimage ) ) : ?>
    <div style="background-image:url('<?php echo $slide->mobileimage; ?>')" class="mobile-image"></div>
  <?php endif; ?>

    <div class="container hero-container vertical-center">

      <div class="row">
        <div class="col-md-8">

          <h3 id='<?= $slide->id ?>-title' class='slide-title'><?php echo $slide->title; ?></h3>

          <span class="udub-slant"><span></span></span>

          <?php echo apply_filters( 'the_content', $slide->text ); ?> <?php echo $slide->link; ?>

        </div>

      </div>

    </div>

  </div>

  <?php endforeach; endif;?>

      <div class="slideshow-controls">
          <span class="uw-boundless">Be Boundless</span>

          <button class="next-headline"></button>
      </div>

</div>

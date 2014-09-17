<div class="uw-homepage-slider-container">

  <?php foreach ( UW_Slideshow::get_latest_slideshow() as $slide ) : $slide = (object) $slide; ?>

  <div class="uw-hero-image uw-homepage-slider"  style="background:url(<?php echo $slide->image; ?>) no-repeat center; background-size:cover;">
    <div class="container hero-container vertical-center">

      <div class="row">
        <div class="col-md-8">

          <h1><?php echo $slide->title; ?></h1>

          <span class="udub-slant"><span></span></span>

          <p> <?php echo $slide->text; ?> <?php echo $slide->link; ?> </p>

        </div>

      </div>


    </div>

  </div>

  <?php endforeach; ?>

      <div class="slideshow-controls">
          <span class="uw-boundless">Be Boundless</span>

          <span class="next-headline"></span>
      </div>

</div>
<?php get_header(); ?>

<div id="message">
  <h1>THE UW EXPERIENCE</h1>
</div>

<div class="navigation">

<ul>
  <?php print_r( Navigation::get_navigation() ) ?>
</ul>

</div>

<?php get_footer(); ?>
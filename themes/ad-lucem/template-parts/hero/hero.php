<?php

/**
 * Template part for displaying hero - top.
 *
 * @package White_Canvas_Design_Theme
 */

?>


<?php
$title = get_field('hero_headline');
$image = get_field('hero_image');
$subheadline = get_field('hero_subheadline');

if ($image) {
  $image_url = $image['url'];
  $image_alt = $image['alt'];
}
?>

<div class="fixed-header"></div>
<section class="hero bg-image" style="background-image: url('<?php echo $image_url; ?>');" role="img"
  aria-label="<?php echo $image_alt; ?>">
  <div class="hero-body py-6 is-fullheight-with-navbar">
    <div class="columns is-gapless is-vcentered py-6">
      <div class="column is-5-desktop is-6-widescreen">
        <div class="text-container content-wrapper">
          <h3 class="is-capitalized"><?php echo $subheadline; ?> </h3>
          <h1 class="my-3"><?php echo $title; ?></h1>
        </div>
      </div>
      <div class="column is-7-desktop is-6-widescreen">
      </div>
    </div>
  </div>
</section><!-- .hero -->
<?php

/**
 * Template part for displaying cards.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
// TODO: add variables
$card_graphic = get_field('card_graphic');
$card_title = get_field('card_title');
$card_image = get_field('card_image');

if ($card_graphic) {
  $graphic_url = $card_graphic['url'];
  $graphic_alt = $card_graphic['alt'];
}

if ($card_image) {
  $card_url = $card_image['url'];
  $card_alt = $card_image['alt'];
}

?>
<section id="services" class="cards has-background-primary bg-image"
  style="background-image: url('<?php echo $card_url; ?>');">
  <div class="container content-wrapper has-text-centered">
    <div class="card-title">
      <img src="<?php echo $graphic_url; ?>" alt="<?php echo $graphic_alt; ?>">
      <h2 class="color-odd"><?php echo $card_title;  ?></h2>
    </div>
    <div class="columns is-justify-content-center">
      <?php
      // Check rows exists.
      if (have_rows('card_content')) :
        // Loop through rows.
        while (have_rows('card_content')) : the_row();
          // Load sub field value.
          $content_title = get_sub_field('content_title');
          $content_paragraph = get_sub_field('content_paragraph');
          $content_button = get_sub_field('content_button');
          $content_link = get_sub_field('content_btn_link');
          // Do something...
      ?>
      <div class="column is-3 has-background-secondary">
        <h3 class="is-capitalized"><?php echo $content_title; ?></h3>
        <p class="min-height-260"><?php echo $content_paragraph; ?></p>
        <a class="is-uppercase" href="<?php echo $content_link; ?>"><?php echo $content_button; ?></a>
      </div>
      <?php
        // End loop.
        endwhile;
      // No value.
      else :
      // Do something...
      endif; ?>
    </div>
  </div>
</section><!-- .cards -->
<?php

/**
 * Template part for displaying social icons.
 *
 * @package White_Canvas_Design_Theme
 */

?>
<?php
$facebook_url = get_field('facebook_url');
$instagram_url = get_field('instagram_url');
?>
<?php if ($facebook_url || $instagram_url) : ?>
<div class="social-icons-wrapper">
  <?php if ($facebook_url) : ?>
  <a href="<?php echo $facebook_url; ?>" target="_blank"
    rel="noopener noreferrer"><?php get_template_part('template-parts/icon/icon-facebook'); ?><span
      class="visually-hidden">Facebook</span></a>
  <?php endif; ?>
  <?php if ($instagram_url) : ?>
  <a href="<?php echo $instagram_url; ?>" target="_blank"
    rel="noopener noreferrer"><?php get_template_part('template-parts/icon/icon-instagram'); ?><span
      class="visually-hidden">Instagram</span></a>
  <?php endif; ?>
</div>
<?php endif; ?>
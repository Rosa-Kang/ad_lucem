<?php

/**
 * The main template file.
 *
 * @package White_Canvas_Design_Theme
 */
get_header(); ?>

<?php get_template_part('template-parts/hero/hero'); ?>
<?php get_template_part('template-parts/section-dark/section-dark'); ?>
<?php get_template_part('template-parts/card/cards'); ?>
<?php get_template_part('template-parts/section-light/section-light'); ?>
<?php get_template_part('template-parts/contact/contact-form'); ?>

<?php get_footer(); ?>
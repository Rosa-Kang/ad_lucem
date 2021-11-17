<?php

/**
 * The template for displaying the footer.
 *
 * @package White_Canvas_Design_Theme
 */
?>

<?php
$logo = get_field('footer_logo');

if ($logo) {
  $logo_url = $logo['url'];
  $logo_alt = $logo['alt'];
}
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="footer-wrapper container content-wrapper">
    <div class="columns is-vcentered is-justify-content-space-between">

      <div class="column is-2">
        <div class="footer-logo-wrapper">
          <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt; ?>">
        </div>
      </div>
      <div class="column is-7">
        <div class="footer-contact-wrapper is-align-items-center is-flex is-flex-direction-column">
          <?php
          $email  = get_field('email');
          $tell  = get_field('tell');
          ?>
          <a href="mailto:<?php echo $email; ?>" class="footer-text"><?php echo $email; ?></a>
          <a href="tel:<?php echo $tell; ?>"><?php echo $tell; ?></a>
          <?php get_template_part('template-parts/icon/icons-social'); ?>
        </div>
        <div class="copyright-wrapper has-text-center mt-4">
          <p>Privacy Policy</p>
          <p class="footer-text">Copyright BLANK <?php echo date('Y'); ?>.&nbsp;</span>Website design by <a
              href="https://whitecanvasdesign.ca" target="_blank" rel="noopener noreferrer">White Canvas Design.</a></p>
        </div>
      </div>
      <div class="column is-2"></div>
    </div>

  </div><!-- .footer-wrapper -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part('template-parts/footer/footer-scripts'); ?>

</body>

</html>
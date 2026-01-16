<footer class="site-footer" role="contentinfo">
  <div class="footer-inner">

    <!-- Brand -->
    <div class="footer-brand">
      <strong><?php bloginfo('name'); ?></strong>
      <p>Designing clean, scalable digital experiences.</p>
    </div>

    <!-- Footer navigation -->
    <nav class="footer-nav" aria-label="Footer navigation">
      <?php
        wp_nav_menu([
          'theme_location' => 'footer',
          'container' => false,
          'menu_class' => 'footer-menu',
        ]);
      ?>
    </nav>

  </div>

  <div class="footer-bottom">
    <small>
      © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
    </small>
  </div>

  <?php wp_footer(); ?>
</footer>
</body>
</html>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header">
  <div class="header-inner">

    <!-- Logo -->
    <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">
      <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <strong><?php bloginfo('name'); ?></strong>
      <?php endif; ?>
    </a>

    <!-- Mobile toggle -->
    <button class="menu-toggle" aria-label="Toggle menu" aria-expanded="false">
      ☰
    </button>

    <!-- Navigation -->
    <nav class="main-nav">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'primary-menu',
        ]);
      ?>
    </nav>

    <!-- CTA -->
    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header-cta">
      Contact
    </a>

  </div>
</header>



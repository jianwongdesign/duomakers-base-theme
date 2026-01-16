<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header style="padding:20px;border-bottom:1px solid #eee;">
  <a href="<?php echo esc_url(home_url('/')); ?>">
    <strong><?php bloginfo('name'); ?></strong>
  </a>
</header>
<header style="padding:20px;border-bottom:1px solid #eee;">
  <div style="display:flex;justify-content:space-between;align-items:center;">
    
    <!-- Logo / Site Name -->
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <strong><?php bloginfo('name'); ?></strong>
    </a>

    <!-- Navigation -->
    <nav>
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'primary-menu',
        ]);
      ?>
    </nav>

  </div>
</header>

<?php
function duomakers_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'duomakers_setup');

function duomakers_assets() {
  // Theme main stylesheet (required by WP)
  wp_enqueue_style(
    'duomakers-style',
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );

  // Main CSS
  wp_enqueue_style(
    'duomakers-main',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    wp_get_theme()->get('Version')
  );

  // Header CSS
  wp_enqueue_style(
    'duomakers-header',
    get_template_directory_uri() . '/assets/css/header.css',
    [],
    wp_get_theme()->get('Version')
  );

  // Footer CSS
  wp_enqueue_style(
    'duomakers-footer',
    get_template_directory_uri() . '/assets/css/footer.css',
    [],
    wp_get_theme()->get('Version')
  );

    // Main JS
  wp_enqueue_script(
    'duomakers-main',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    wp_get_theme()->get('Version'),
    true
  );

  // Header JS
  wp_enqueue_script(
    'duomakers-header',
    get_template_directory_uri() . '/assets/js/header.js',
    ['duomakers-main'],
    wp_get_theme()->get('Version'),
    true
  );

  // Logo support
  add_theme_support('custom-logo', [
    'height'      => 60,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
  ]);
}

add_action('wp_enqueue_scripts', 'duomakers_assets');

add_action('wp_enqueue_scripts', 'duomakers_assets');
// Disable Gutenberg editor
add_filter('use_block_editor_for_post', '__return_false');
// Register navigation menu
function duomakers_register_menus() {
  register_nav_menus([
    'primary' => __('Primary Menu', 'duomakers'),
  ]);
}
add_action('after_setup_theme', 'duomakers_register_menus');

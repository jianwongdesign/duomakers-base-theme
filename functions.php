<?php
function duomakers_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'duomakers_setup');

function duomakers_assets() {
  wp_enqueue_style(
    'duomakers-style',
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );
}
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

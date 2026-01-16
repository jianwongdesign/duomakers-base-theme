<?php
/**
 * Template Name: Elementor Page
 */

get_header();
?>

<main id="main-content" role="main">
  <?php
    while (have_posts()) :
      the_post();
      the_content();
    endwhile;
  ?>
</main>

<?php get_footer(); ?>

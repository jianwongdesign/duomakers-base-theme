<?php get_header(); ?>

<main style="padding:40px;">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article style="margin-bottom:40px;">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No content found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>

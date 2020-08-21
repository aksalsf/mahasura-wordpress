<?php
/**
* The template for displaying Comments.
 *
 * @package Mahasura Muda
 * @since 2020
 *
 * The area of the page that contains comments and the comment form.
 */
 ?>
<?php get_header(); ?>
  <?php if (have_posts()): ?>
    <?php while(have_posts()) : the_post(); ?>
      <?php get_template_part( 'content' ); ?>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>

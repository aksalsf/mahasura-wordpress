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
<?php get_header( ); ?>
  <!-- Header -->
  <header class="header__container" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/img/postpage.jpg);">
    <div class="header__overlay"></div>
    <div class="position-absolute header__image color-red text-center">
      <h1 class="font-weight-bold">
        <?php
            if (is_category()) {
              single_cat_title();
            } elseif (is_tag()) {
              single_tag_title();
            } elseif (is_search()) {
              echo "Hasil Pencarian";
            } else {
              wp_title( $sep = '', $display = true, $seplocation = '' );
            }
        ?>
      </h1>
      <p>
        <?php if (is_search()): ?>
          Berikut yang bisa kami temukan untukmu dari kata <q><em><?php echo get_search_query(); ?></em></q>
        <?php endif; ?>
        <?php if (have_posts()): ?>
            <?php the_archive_description(); ?>
          <?php else: ?>
            Tidak ada artikel di sini~
        <?php endif; ?>
      </p>
    </div>
  </header>
  <!-- Header End -->
  <?php if (have_posts()): ?>
  <!-- Main -->
  <main class="postpage__container bg-white">
    <!-- Warta Section -->
    <article class="mt-5 mb-5 container">
      <div class="row">
        <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part( 'content' ); ?>
        <?php endwhile; ?>
      </div>
    </article>
    <!-- Warta Section End -->
  </main>
  <!-- Main End -->
  <?php endif; ?>
<?php get_footer(); ?>
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
  <header class="header__container" style="background-image: url(<?php echo get_theme_mod('header__image', get_bloginfo( 'template_url' ).'/img/header.jpg'); ?>);">
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
			  single_post_title();
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
            <p>Tidak ada artikel di sini~</p>
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
      <aside class="pb-md-0 pb-5">
        <div class="nav-next alignright">
          <?php next_posts_link( 'Berikutnya' ); ?>
        </div>
        <div class="nav-previous alignleft">
          <?php previous_posts_link( 'Kembali' ); ?>
        </div>
      </aside>
    </article>
    <!-- Warta Section End -->
  </main>
  <!-- Main End -->
  <?php endif; ?>
<?php get_footer(); ?>

<?php if (is_single() || is_page()): ?>
  <!-- Main -->
    <main class="article__container">
      <figure class="figure article__thumbnail">
        <?php if (has_post_thumbnail()): ?>
          <img src="<?php the_post_thumbnail_url(); ?>" class="figure-img img-fluid" alt="<?php the_post_thumbnail_caption(); ?>">
          <?php else: ?>
          <img src="<?php bloginfo( 'template_url' ); ?>/img/thumbnail.png" class="figure-img img-fluid" alt="Logo resmi PKKMB UNS 2020">
        <?php endif; ?>
        <figcaption class="ml-md-3 figure-caption text-center text-md-left rounded-top">
          <?php if (has_post_thumbnail()): ?>
            <?php echo get_the_post_thumbnail_caption(); ?>
            <?php else: ?>
              Logo Resmi PKKMB UNS 2020
          <?php endif; ?>
        </figcaption>
      </figure>
      <article class="mt-3 mb-3 container article__body col-lg-7 col-md-10 mx-auto">
        <header class="article__meta text-center mb-5">
          <!-- Kategori -->
          <?php
            // Menangkap array yang menyimpan kategori
            $categories = get_the_category();
            // Get the ID of a given category
            $category_id = get_cat_ID( $categories[0]->name );
            // Get the URL of this category
            $category_link = get_category_link( $category_id );
           ?>
          <a href="<?php echo esc_url( $category_link ); ?>"  class="text-uppercase font-weight-bold color-black">
            <?php
              if ( ! empty( $categories ) ) {
                  echo esc_html( $categories[0]->name );
              }
            ?>
          </a>
          <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
            <?php echo get_the_date( 'l, j F Y' ); ?>
          </time>
          <h1 class="font-weight-bold col-md-9 mx-auto">
            <?php the_title(); ?>
          </h1>
        </header>
        <!-- Content Here -->
        <article class="article__body-content">
          <?php the_content(); ?>
        </article>
        <!-- Content End -->
        <?php get_template_part( 'content-footer' ); ?>
      </article>
    </main>
  <!-- Main End -->
  <?php else: ?>
    <?php get_template_part( 'content-list' ); ?>
<?php endif; ?>

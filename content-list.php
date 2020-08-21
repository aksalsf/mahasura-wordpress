<div class="col-lg-4">
  <div class="card border-0">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if (has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top rounded warta__image" alt="<?php the_post_thumbnail_caption(); ?>">
        <?php else: ?>
        <img src="<?php bloginfo( 'template_url' ); ?>/img/thumbnail.png" class="card-img-top rounded warta__image" alt="<?php the_title(); ?>">
      <?php endif; ?>
    </a>
    <section class="card-body pl-lg-0 pr-lg-0 mb-lg-0 mb-3">
      <h3 class="card-title font-weight-bold h4">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="warta__link color-black">
          <?php the_title(); ?>
        </a>
      </h3>
      <p class="card-text">
        <?php the_excerpt(); ?>
      </p>
      <hr>
    </section>
  </div>
</div>

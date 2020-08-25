<footer class="mb-5">
  <!-- Content Tag -->
  <?php if (is_single()): ?>
    <aside>
      <?php
        $post_tags = get_the_tags();
        if ( $post_tags ) :
          foreach( $post_tags as $tag ):
      ?>
      <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge bg-black text-white p-md-3 p-2 ml-1 mt-2" title="Lihat lebih banyak tentang <?php echo $tag->name; ?>">
        <i class="fa fa-hashtag mr-1"></i>
        <?php echo $tag->name; ?>
      </a>
      <?php endforeach; ?>
      <?php endif; ?>
    </aside>
  <?php endif; ?>
  <!-- Content Tag End -->
  <aside class="d-flex justify-content-between mt-5 flex-row flex-wrap text-capitalize">
    <div class="post__nav text-left">
      <?php if (strlen(get_previous_post()->post_title) > 0): ?>
        <div class="font-weight-bold">
          Sebelumnya
        </div>
        <?php previous_post_link( '%link', '%title'); ?>
      <?php endif; ?>
    </div>
    <div class="post__nav text-right">
      <?php if (strlen(get_next_post()->post_title) > 0): ?>
        <div class="font-weight-bold">
          Berikutnya
        </div>
        <?php next_post_link( '%link', '%title' ); ?>
      <?php endif; ?>
    </div>
  </aside>
  <hr class="mb-5">
  <!-- Share Button -->
  <aside class="text-center">
    <h6 class="mb-3">Bagikan ke teman-temanmu!</h6>
    <div class="col-md-6 col-10 mx-auto my-auto d-flex flex-row justify-content-around">
      <?php
        $linksf = rawurlencode(get_permalink());
       ?>
      <a href="https://wa.me/?text=<?php echo $linksf; ?>" target="_blank" rel="noopener noreferrer" title="Bagikan ke WhatsApp">
        <i class="fab fa-whatsapp fa-2x color-whatsapp"></i>
      </a>
      <a href="line://msg/text/<?php echo $linksf . rawurlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" title="Bagikan ke Line">
        <i class="fab fa-line fa-2x color-line"></i>
      </a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $linksf; ?>" target="_blank" rel="noopener noreferrer" title="Bagikan ke Facebook">
        <i class="fab fa-facebook fa-2x color-facebook"></i>
      </a>
      <a href="https://twitter.com/share?url=<?php echo $linksf; ?>&related=<?php bloginfo('name'); ?>&text=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer" title="Bagikan ke Twitter">
        <i class="fab fa-twitter fa-2x color-twitter"></i>
      </a>
      <a href="https://t.me/share/url?url=<?php echo $linksf; ?>&text=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer"
        title="Bagikan ke Telegram">
        <i class="fab fa-telegram fa-2x color-telegram"></i>
      </a>
    </div>
  </aside>
  <!-- Share Button -->
  <hr class="mt-5">
  <?php comments_template('/comments.php'); ?>
</footer>

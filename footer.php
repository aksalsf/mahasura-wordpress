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
<!-- Mobile Nav -->
<nav class="mobile-nav-container">
  <a href="<?php echo get_theme_mod('mobile__nav-url1', 'https://pkkmb.uns.ac.id/');?>" class="mobile-nav-item"><i class="<?php echo get_theme_mod('mobile__nav-icon1', 'fa fa-home');?>"></i></a>
  <?php get_template_part( 'search-button' ); ?>
  <a href="<?php echo get_theme_mod('mobile__nav-url2', 'https://pkkmb.uns.ac.id/');?>" class="mobile-nav-item"><i class="<?php echo get_theme_mod('mobile__nav-icon2', 'fa fa-newspaper');?>"></i></a>
  <a href="<?php echo get_theme_mod('mobile__nav-url3', 'https://pkkmb.uns.ac.id/');?>" class="mobile-nav-item"><i class="<?php echo get_theme_mod('mobile__nav-icon3', 'fa fa-tasks');?>"></i></a>
  <a href="<?php echo get_theme_mod('mobile__nav-url4', 'https://pkkmb.uns.ac.id/');?>" class="mobile-nav-item"><i class="<?php echo get_theme_mod('mobile__nav-icon4', 'fa fa-shopping-cart');?>"></i></a>
</nav>
<!-- Modal -->
<div class="modal fade" id="mahasuraModal" tabindex="-1" aria-labelledby="mahasuraModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form role="search" method="get" class="search-form form-inline justify-content-center" action="<?php echo home_url( '/' ); ?>">
          <input type="search" class="search-field form-control mb-2 mr-sm-2" placeholder="<?php echo esc_attr_x( 'Cari …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
          <input type="submit" class="search-submit btn bg-mahasura-red text-white mb-2" value="<?php echo esc_attr_x( 'Cari', 'submit button' ) ?>" />
        </form>
      </div>
    </div>
  </div>
</div>
<footer class="bg-mahasura-red pt-5 pb-5 text-white d-md-block d-none">
  <div class="container">
    <div class="row">
      <?php if(is_active_sidebar( 'left-footer' )): ?>
        <?php dynamic_sidebar( 'left-footer' ); ?>
      <?php endif; ?>
      <div class="ml-auto col-lg-7 row">
        <?php if(is_active_sidebar( 'right-footer' )): ?>
          <?php dynamic_sidebar( 'right-footer' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- Own JS -->
<script>$(window).scroll(function(){var scrollDistance=$(window).scrollTop();if(scrollDistance>=80){$("#mahasuraNavbar").addClass("bg-white nav-shadow")}else{$("#mahasuraNavbar").removeClass("bg-white nav-shadow")}});</script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
<script>
var video_wrapper = $('.youtube-video-place');
//  Check to see if youtube wrapper exists
if(video_wrapper.length){
// If user clicks on the video wrapper load the video.
$('.play-youtube-video').on('click', function(){
/* Dynamically inject the iframe on demand of the user.
Pull the youtube url from the data attribute on the wrapper element. */
video_wrapper.html('<iframe allowfullscreen frameborder="0" class="embed-responsive-item" src="' + video_wrapper.data('yt-url') + '"></iframe>');
});
}
</script>
</body>
</html>

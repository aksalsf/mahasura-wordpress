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

<?php

// Menambahkan fitur pada website
function mahasura_theme_setup()
{
  // Mengaktifkan fitur featured image
  add_theme_support( 'post-thumbnails' );
  // HTML 5
  add_theme_support( 'html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption') );
}

add_action( 'after_setup_theme', 'mahasura_theme_setup' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'mahasura__muda' ),
) );

// Mengubah panjang kutipan
function set_excerpt_length()
{
	return 15;
}

add_filter( 'excerpt_length', 'set_excerpt_length' );

// Change Date Comment Format
function mahasura_comment_time_output($date, $d, $comment){
	return sprintf( _x( '%s yang lalu', '%s = human-readable time difference', 'mahasura__muda' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) );
}
add_filter('get_comment_date', 'mahasura_comment_time_output', 10, 3);

// Widget
function mahasura_sidebar($id) {
  // Left Footer
  register_sidebar(array(
    'name'          => 'Left Footer',
    'id'            => 'left-footer',
    'before_widget' => '<section class="col-4 d-lg-block d-none footer__container">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="font-weight-bold mb-4 h5">',
    'after_title'   => '</h4>'
  ));

  // Right Footer
  register_sidebar(array(
    'name'          => 'Right Footer',
    'id'            => 'right-footer',
    'before_widget' => '<section class="col-4 footer__container">',
    'after_widget'  => '</section>',
    'before_title'  => '<h5 class="font-weight-bold mb-4">',
    'after_title'   => '</h4>'
  ));
}

add_action( 'widgets_init', 'mahasura_sidebar');


require get_template_directory() . '/inc/customizer.php';
?>

<?php
/**
* The template for displaying Comments.
 *
 * @package Mahasura Muda
 * @since 2020
 *
 * The area of the page that contains comments and the comment form.
 */
 global $wp;
 function mahasura_page_description() {
   if (is_archive()) {
     if (is_category()) {
       category_description();
     } elseif (is_tag()) {
       tag_description();
     } else {
       the_archive_description();
     }
   } elseif (is_single()) {
     if (has_excerpt()) {
       the_excerpt_rss();
     } else {
       global $post;
       setup_postdata($post);
       $excerpt = the_excerpt_rss($post);
     }
   } else {
     bloginfo( 'description' );
   }
 }
 function mahasura_page_title() {
   return wp_title( $sep = '—', $display = true, $seplocation = 'right' ) . bloginfo( 'name' );
 }
 function mahasura_page_image() {
   if (has_post_thumbnail()) {
     the_post_thumbnail_url();
   } else {
     echo get_site_icon_url();
   }
 }
 ?>
<!DOCTYPE html>
<html lang="id-ID">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Primary Meta Tags -->
  <title><?php mahasura_page_title(); ?></title>
  <meta name="title" content="<?php mahasura_page_title(); ?>">
  <meta name="description" content="<?php mahasura_page_description(); ?>">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo home_url($wp->request); ?>">
  <meta property="og:title" content="<?php mahasura_page_title(); ?>">
  <meta property="og:description" content="<?php mahasura_page_description(); ?>">
  <meta property="og:image" content="<?php mahasura_page_image(); ?>">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo home_url($wp->request); ?>">
  <meta property="twitter:title" content="<?php mahasura_page_title(); ?>">
  <meta property="twitter:description" content="<?php mahasura_page_description(); ?>">
  <meta property="twitter:image" content="<?php mahasura_page_image(); ?>">
  <meta name="google-site-verification" content="QcWRctUhWjOYm6G61gc_1CVBzSj32yJFcksi2L6HV5c" />
  <!-- CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <!-- Navbar Menu -->
  <nav id="mahasuraNavbar" class="navbar navbar-expand-md navbar-light fixed-top d-md-block d-none">
    <div class="container">
      <!-- Navbar Brand -->
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_theme_mod( 'nav__brand', get_bloginfo( 'template_url' ).'/img/nav-brand.png' ) ?>" class="nav-brand__image" alt="Logo PKKMB UNS 2020">
      </a>
      <!-- Navbar Menu -->
      <?php
      wp_nav_menu( array(
          'theme_location'  => 'primary',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'nav',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'mahasuraNavbar-nav',
          'menu_class'      => 'navbar-nav ml-auto text-center',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
      <?php get_template_part( 'search-button' ); ?>
    </div>
  </nav>
  <!-- Navbar End -->

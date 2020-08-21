<?php get_header(); ?>
<!-- Header -->
<header class="header__container" style="background-image: url(<?php echo get_theme_mod('header__image', get_bloginfo( 'template_url' ).'/img/header.jpg') ?>);">
  <div class="header__overlay"></div>
  <figure class="position-absolute header__image">
    <img src="<?php echo get_theme_mod('header__logo', get_bloginfo( 'template_url' ).'/img/colored-logo.png'); ?>" class="img-fluid" alt="Logo Resmi PKKMB UNS <?php echo date('Y'); ?>">
  </figure>
</header>
<!-- Header End -->
<!-- About PKKMB UNS 2020 -->
<div class="bg-mahasura-red pt-5 pb-5">
  <div class="container">
    <section class="text-white mt-5 col-md-8 mx-auto my-auto text-left text-md-center">
      <h1 class="section__heading font-weight-bold mb-md-3">
        <?php echo get_theme_mod('highlight__title', get_bloginfo( 'name' ));?>
      </h1>
      <p>
        <?php echo get_theme_mod('highlight__description', 'PKKMB UNS merupakan wadah akselerasi adaptasi kampus untuk mahasiswa baru. Mengusung tema Mahasura Muda sebagai manifestasi harapan agar mahasiswa baru UNS tumbuh menjadi insan pembelajar, pencipta, dan penggerak!');?>
      </p>
      <a href="<?php echo get_theme_mod('highlight__link-url', get_bloginfo( 'url' ));?>" class="btn text-white border-white" title="Kenali selengkapnya tentang PKKMB UNS <?php echo date('Y'); ?>">
        <?php echo get_theme_mod('highlight__link-text', 'Kenali selengkapnya ⟶');?>
      </a>
    </section>
  </div>
</div>
<!-- Featured Content Section -->
<div class="bg-white pt-5 pb-5">
  <div class="container">
    <section class="col-md-8 mx-auto my-auto text-left text-md-center">
      <h2 class="section__heading font-weight-bold mb-md-3">
        <?php echo get_theme_mod('featured__title', 'Kita hadir sebagai jembatan yang saling menghubungkan');?>
      </h2>
      <p>
        <?php echo get_theme_mod('featured__description', 'Mahasiswa merupakan manifestasi harapan atas keresahan masyarakat akan hadirnya sosok yang mampu belajar, menciptakan, dan menggerakkan perubahan');?>
      </p>
    </section>
    <div class="row mt-5">
      <!-- Semar -->
      <div class="col-lg-4 mb-3 mb-lg-0">
        <div class="card border-0 featured-content">
          <a href="<?php echo get_theme_mod('featured__box-url1', 'https://pkkmb.uns.ac.id/');?>" class="featured-content__image-link" title="<?php echo get_theme_mod('featured__box-title1', 'Semar');?>">
            <img src="<?php echo get_theme_mod('featured__box-image1', get_bloginfo( 'template_url' ).'/img/thumbnail.png');?>" class="card-img-top featured-content__image" alt="<?php echo get_theme_mod('featured__box-description1', 'Kenalan yuk sama kampus Sebelas Maret ini!');?>">
          </a>
          <article class="card-body">
            <h3 class="card-title font-weight-bold h4">
              <a href="<?php echo get_theme_mod('featured__box-url1', 'https://pkkmb.uns.ac.id/');?>" class="featured-content__link color-black" title="<?php echo get_theme_mod('featured__box-description1', 'Kenalan yuk sama kampus Sebelas Maret ini!');?>">
                <?php echo get_theme_mod('featured__box-title1', 'Semar');?>
              </a>
            </h3>
            <p class="card-text">
              <?php echo get_theme_mod('featured__box-description1', 'Kenalan yuk sama kampus Sebelas Maret ini!');?>
            </p>
            <a href="<?php echo get_theme_mod('featured__box-url1', 'https://pkkmb.uns.ac.id/');?>" class="color-black font-weight-bold featured-content__link" title="<?php echo get_theme_mod('featured__box-description1', 'Kenalan yuk sama kampus Sebelas Maret ini!');?>"><?php echo get_theme_mod('featured__box-url-text', 'Kenali selengkapnya ⟶');?></a>
          </article>
        </div>
      </div>
      <!-- Rubrik -->
      <div class="col-lg-4 mb-3 mb-lg-0">
        <div class="card border-0 featured-content">
          <a href="<?php echo get_theme_mod('featured__box-url2', 'https://pkkmb.uns.ac.id/');?>" class="featured-content__image-link" title="<?php echo get_theme_mod('featured__box-title2', 'Rubrik');?>">
            <img src="<?php echo get_theme_mod('featured__box-image2', get_bloginfo( 'template_url' ).'/img/thumbnail.png');?>" class="card-img-top featured-content__image" alt="<?php echo get_theme_mod('featured__box-description2', 'Temukan tips yang bisa bikin kamu nyaman hidup di Solo!');?>">
          </a>
          <article class="card-body">
            <h3 class="card-title font-weight-bold h4">
              <a href="<?php echo get_theme_mod('featured__box-url2', 'https://pkkmb.uns.ac.id/');?>" class="featured-content__link color-black" title="<?php echo get_theme_mod('featured__box-description2', 'Temukan tips yang bisa bikin kamu nyaman hidup di Solo!');?>">
                <?php echo get_theme_mod('featured__box-title2', 'Rubrik');?>
              </a>
            </h3>
            <p class="card-text">
              <?php echo get_theme_mod('featured__box-description2', 'Temukan tips yang bisa bikin kamu nyaman hidup di Solo!');?>
            </p>
            <a href="<?php echo get_theme_mod('featured__box-url2', 'https://pkkmb.uns.ac.id/');?>" class="color-black font-weight-bold featured-content__link" title="<?php echo get_theme_mod('featured__box-description2', 'Temukan tips yang bisa bikin kamu nyaman hidup di Solo!');?>"><?php echo get_theme_mod('featured__box-url-text', 'Kenali selengkapnya ⟶');?></a>
          </article>
        </div>
      </div>
      <!-- Darma -->
      <div class="col-lg-4 mb-3 mb-lg-0">
        <div class="card border-0 featured-content">
          <a href="<?php echo get_theme_mod('featured__box-url3', 'https://pkkmb.uns.ac.id/');?>" class="featured-content__image-link" title="<?php echo get_theme_mod('featured__box-title3', 'Darma');?>">
            <img src="<?php echo get_theme_mod('featured__box-image3', get_bloginfo( 'template_url' ).'/img/thumbnail.png');?>" class="card-img-top featured-content__image" alt="<?php echo get_theme_mod('featured__box-description3', 'Nikmati langsung gimana hectic-nya jadi mahasiswa!');?>">
          </a>
          <article class="card-body">
            <h3 class="card-title font-weight-bold h4">
              <a href="<?php echo get_theme_mod('featured__box-url3', 'https://pkkmb.uns.ac.id/');?>" class="featured-content__link color-black" title="<?php echo get_theme_mod('featured__box-description3', 'Nikmati langsung gimana hectic-nya jadi mahasiswa!');?>">
                <?php echo get_theme_mod('featured__box-title3', 'Darma');?>
              </a>
            </h3>
            <p class="card-text">
              <?php echo get_theme_mod('featured__box-description3', 'Nikmati langsung gimana hectic-nya jadi mahasiswa!');?>
            </p>
            <a href="<?php echo get_theme_mod('featured__box-url3', 'https://pkkmb.uns.ac.id/');?>" class="color-black font-weight-bold featured-content__link" title="<?php echo get_theme_mod('featured__box-description3', 'Nikmati langsung gimana hectic-nya jadi mahasiswa!');?>"><?php echo get_theme_mod('featured__box-url-text', 'Kenali selengkapnya ⟶');?></a>
          </article>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Featured Content Section End-->
<!-- Video Section -->
<div class="container mt-lg-5 mb-lg-5">
  <section class="row">
    <header class="col-lg-6 mx-auto my-lg-auto mb-3">
      <h2 class="font-weight-bold"><?php echo get_theme_mod('video__title', 'Dari kami, untuk kamu');?></h2>
      <p class="pr-lg-5"><?php echo get_theme_mod('video__description', 'Jarak bukanlah penghalang bagi kita untuk tetap saling mengenal, terhubung, dan bertukar cerita');?></p>
      <a href="<?php echo get_theme_mod('video__channel-url', 'https://www.youtube.com/channel/UC2FcV_gDOWJjhQCd17mLKww');?>" class="color-black font-weight-bold featured-content__link" title="<?php echo get_theme_mod('video__channel-text', 'Kunjungi kanal YouTube kami ⟶');?>"><?php echo get_theme_mod('video__channel-text', 'Kunjungi kanal YouTube kami ⟶');?></a>
    </header>
    <div class="col-lg-6 mx-auto">
      <div class="embed-responsive embed-responsive-4by3 shadow-lg">
        <iframe class="embed-responsive-item rounded" src="<?php echo get_theme_mod('video__link-url', 'https://www.youtube.com/embed/OuEndh4T8Bk');?>" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </section>
</div>
<!-- Video Section End-->
<!-- Warta Section -->
<div class="bg-white pt-5 pb-5">
  <div class="container">
    <article class="mt-lg-5 mb-5">
      <header class="warta__heading">
        <h2 class="font-weight-bold"><?php echo get_theme_mod('warta__title', 'Warta');?></h2>
        <a href="<?php echo get_theme_mod('warta__link-url', get_bloginfo( 'url' ));?>" class="color-black" title="<?php echo get_theme_mod('warta__link-text', 'Baca lebih banyak ⟶');?>"><?php echo get_theme_mod('warta__link-text', 'Baca lebih banyak ⟶');?></a>
      </header>
      <hr>
      <div class="row">
        <?php $latest_blog_posts = new WP_Query(array(
          'posts_per_page' => get_theme_mod('warta__postcount', '3')
          ));?>
        <?php if($latest_blog_posts->have_posts()) : ?>
          <?php while($latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
            <?php get_template_part( 'content-list' ); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </article>
  </div>
</div>
<!-- Warta Section End -->
<?php get_footer(); ?>

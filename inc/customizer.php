<?php

function mahasura_customizer_register($wp_customize) {
  // Header Section
  $wp_customize -> add_section('header', array(
    'title' => __('Homepage Header', 'mahasura__muda'),
    'description' => sprintf(__('Kustomisasi header halaman utama website PKKMB UNS 2020', 'mahasura__muda')),
    'priority' => 130
  ));

  // Nav Brand Logo
  $wp_customize -> add_setting('nav__brand', array(
    'default' => get_bloginfo( 'template_directory' ) . '/img/nav-brand.png',
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control(
    new WP_Customize_Image_Control($wp_customize, 'nav__brand', array(
      'label' => __('Nav Brand Logo', 'mahasura__muda'),
      'section' => 'header',
      'setting' => 'nav__brand',
      'priority' => 1
    ))
  );

  // Header Image
  $wp_customize -> add_setting('header__image', array(
    'default' => get_bloginfo( 'template_directory' ) . '/img/header.jpg',
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control(
    new WP_Customize_Image_Control($wp_customize, 'header__image', array(
      'label' => __('Background Header', 'mahasura__muda'),
      'section' => 'header',
      'setting' => 'header__image',
      'priority' => 1
    ))
  );

  // Header Logo
  $wp_customize -> add_setting('header__logo', array(
    'default' => get_bloginfo( 'template_directory' ) . '/img/colored-logo.png',
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control(
    new WP_Customize_Image_Control($wp_customize, 'header__logo', array(
      'label' => __('Header Logo', 'mahasura__muda'),
      'section' => 'header',
      'setting' => 'header__logo',
      'priority' => 2
    ))
  );

  // Highlight Section
  $wp_customize -> add_section('highlight', array(
    'title' => __('Highlight', 'mahasura__muda'),
    'description' => sprintf(__('Kustomisasi bagian highlight halaman utama website PKKMB UNS 2020', 'mahasura__muda')),
    'priority' => 140
  ));

  // Highlight Title
  $wp_customize -> add_setting('highlight__title', array(
    'default' => _x( 'Apa itu PKKMB UNS?', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('highlight__title', array(
    'label' => __('Judul', 'mahasura__muda'),
    'section' => 'highlight',
    'priority' => 1
  ));

  // Highlight Description
  $wp_customize -> add_setting('highlight__description', array(
    'default' => _x( get_bloginfo( 'description' ), 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('highlight__description', array(
    'label' => __('Deskripsi', 'mahasura__muda'),
    'type' => 'textarea',
    'section' => 'highlight',
    'priority' => 2
  ));

  // Highlight Link Text
  $wp_customize -> add_setting('highlight__link-text', array(
    'default' => _x( 'Kenali selengkapnya ⟶', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('highlight__link-text', array(
    'label' => __('Teks Tautan', 'mahasura__muda'),
    'section' => 'highlight',
    'priority' => 3
  ));

  // Highlight Link
  $wp_customize -> add_setting('highlight__link-url', array(
    'default' => _x( 'https://pkkmb.uns.ac.id/', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('highlight__link-url', array(
    'label' => __('Tautan', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'highlight',
    'input_attrs' => array(
      'placeholder' => __( 'https://pkkmb.uns.ac.id/' ),
    ),
    'priority' => 4
  ));

  // Featured Section
  $wp_customize -> add_section('featured', array(
    'title' => __('Featured Content', 'mahasura__muda'),
    'description' => sprintf(__('Kustomisasi bagian featured content halaman utama website PKKMB UNS 2020', 'mahasura__muda')),
    'priority' => 150
  ));

  // Featured Title
  $wp_customize -> add_setting('featured__title', array(
    'default' => _x( 'Kita hadir sebagai jembatan yang saling menghubungkan', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__title', array(
    'label' => __('Featured Title', 'mahasura__muda'),
    'section' => 'featured',
    'priority' => 1
  ));

  // Featured Description
  $wp_customize -> add_setting('featured__description', array(
    'default' => _x( 'Mahasiswa merupakan manifestasi harapan atas keresahan masyarakat akan hadirnya sosok yang mampu belajar, menciptakan, dan menggerakkan perubahan', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__description', array(
    'label' => __('Deskripsi Judul', 'mahasura__muda'),
    'type' => 'textarea',
    'section' => 'featured',
    'priority' => 2
  ));

  // Featured URL Text
  $wp_customize -> add_setting('featured__box-url-text', array(
    'default' => _x( 'Kenali selengkapnya ⟶', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__box-url-text', array(
    'label' => __('Teks URL', 'mahasura__muda'),
    'section' => 'featured',
    'priority' => 3
  ));

  // First Box

  // Image Box
  $wp_customize -> add_setting('featured__box-image1', array(
    'default' => get_bloginfo( 'template_directory' ) . '/img/thumbnail.png',
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control(
    new WP_Customize_Image_Control($wp_customize, 'featured__box-image1', array(
      'label' => __('Gambar Bagian 1', 'mahasura__muda'),
      'section' => 'featured',
      'setting' => 'featured__box-image1',
      'priority' => 3
    ))
  );

  // Title Box
  $wp_customize -> add_setting('featured__box-title1', array(
    'default' => _x( 'Semar', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__box-title1', array(
    'label' => __('Judul Bagian 1', 'mahasura__muda'),
    'section' => 'featured',
    'priority' => 4
  ));

  // Title Description Box
  $wp_customize -> add_setting('featured__box-description1', array(
    'default' => _x( 'Kenalan yuk sama kampus Sebelas Maret ini!', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__box-description1', array(
    'label' => __('Deskripsi Bagian 1', 'mahasura__muda'),
    'type' => 'textarea',
    'section' => 'featured',
    'priority' => 5
  ));

  // Box Link
  $wp_customize -> add_setting('featured__box-url1', array(
    'default' => _x( 'https://pkkmb.uns.ac.id/', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__box-url1', array(
    'label' => __('Tautan Bagian 1', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'featured',
    'input_attrs' => array(
      'placeholder' => __( 'https://pkkmb.uns.ac.id/' ),
    ),
    'priority' => 6
  ));

  // Second Box

  // Image Box
  $wp_customize -> add_setting('featured__box-image2', array(
    'default' => get_bloginfo( 'template_directory' ) . '/img/thumbnail.png',
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control(
    new WP_Customize_Image_Control($wp_customize, 'featured__box-image2', array(
      'label' => __('Gambar Bagian 2', 'mahasura__muda'),
      'section' => 'featured',
      'setting' => 'featured__box-image2',
      'priority' => 7
    ))
  );

  // Title Box
  $wp_customize -> add_setting('featured__box-title2', array(
    'default' => _x( 'Rubrik', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__box-title2', array(
    'label' => __('Judul Bagian 2', 'mahasura__muda'),
    'section' => 'featured',
    'priority' => 8
  ));

  // Title Description Box
  $wp_customize -> add_setting('featured__box-description2', array(
    'default' => _x( 'Temukan tips yang bisa bikin kamu hidup nyaman di Solo!', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__box-description2', array(
    'label' => __('Deskripsi Bagian 2', 'mahasura__muda'),
    'type' => 'textarea',
    'section' => 'featured',
    'priority' => 9
  ));

  // Box Link
  $wp_customize -> add_setting('featured__box-url2', array(
    'default' => _x( 'https://pkkmb.uns.ac.id/', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__box-url2', array(
    'label' => __('Tautan Bagian 2', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'featured',
    'input_attrs' => array(
      'placeholder' => __( 'https://pkkmb.uns.ac.id/' ),
    ),
    'priority' => 10
  ));

  // Third Box

  // Image Box
  $wp_customize -> add_setting('featured__box-image3', array(
    'default' => get_bloginfo( 'template_directory' ) . '/img/thumbnail.png',
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control(
    new WP_Customize_Image_Control($wp_customize, 'featured__box-image3', array(
      'label' => __('Gambar Bagian 3', 'mahasura__muda'),
      'section' => 'featured',
      'setting' => 'featured__box-image3',
      'priority' => 11
    ))
  );

  // Title Box
  $wp_customize -> add_setting('featured__box-title3', array(
    'default' => _x( 'Penugasan', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__box-title3', array(
    'label' => __('Judul Bagian 3', 'mahasura__muda'),
    'section' => 'featured',
    'priority' => 12
  ));

  // Title Description Box
  $wp_customize -> add_setting('featured__box-description3', array(
    'default' => _x( 'Nikmati langsung gimana hectic-nya jadi mahasiswa!', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__box-description3', array(
    'label' => __('Deskripsi Bagian 3', 'mahasura__muda'),
    'type' => 'textarea',
    'section' => 'featured',
    'priority' => 13
  ));

  // Box Link
  $wp_customize -> add_setting('featured__box-url3', array(
    'default' => _x( 'https://pkkmb.uns.ac.id/', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('featured__box-url3', array(
    'label' => __('Tautan Bagian 3', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'featured',
    'input_attrs' => array(
      'placeholder' => __( 'https://pkkmb.uns.ac.id/' ),
    ),
    'priority' => 14
  ));

  // Video Section
  $wp_customize -> add_section('video', array(
    'title' => __('Video', 'mahasura__muda'),
    'description' => sprintf(__('Kustomisasi bagian video halaman utama website PKKMB UNS 2020', 'mahasura__muda')),
    'priority' => 160
  ));

  // Video Title
  $wp_customize -> add_setting('video__title', array(
    'default' => _x( 'Dari kami, untuk kamu', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('video__title', array(
    'label' => __('Judul', 'mahasura__muda'),
    'section' => 'video',
    'priority' => 1
  ));

  // Video Description
  $wp_customize -> add_setting('video__description', array(
    'default' => _x( 'Jarak bukanlah penghalang bagi kita untuk tetap saling mengenal, terhubung, dan bertukar cerita', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('video__description', array(
    'label' => __('Deskripsi', 'mahasura__muda'),
    'type' => 'textarea',
    'section' => 'video',
    'priority' => 2
  ));

  // Video Link Text
  $wp_customize -> add_setting('video__channel-text', array(
    'default' => _x( 'Kunjungi kanal YouTube kami ⟶', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('video__channel-text', array(
    'label' => __('Teks Tautan', 'mahasura__muda'),
    'section' => 'video',
    'priority' => 3
  ));

  // Video Channel Link
  $wp_customize -> add_setting('video__channel-url', array(
    'default' => _x( 'https://www.youtube.com/channel/UC2FcV_gDOWJjhQCd17mLKww', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('video__channel-url', array(
    'label' => __('Tautan Kanal', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'video',
    'input_attrs' => array(
      'placeholder' => __( 'https://pkkmb.uns.ac.id/' ),
    ),
    'priority' => 4
  ));

  // Video Link
  $wp_customize -> add_setting('video__link-url', array(
    'default' => _x( 'https://www.youtube.com/embed/OuEndh4T8Bk', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('video__link-url', array(
    'label' => __('Tautan Embed Video', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'video',
    'input_attrs' => array(
      'placeholder' => __( 'https://www.youtube.com/embed/OuEndh4T8Bk' ),
    ),
    'priority' => 5
  ));

  // Video Thumbnail
  $wp_customize -> add_setting('video__link-thumb', array(
    'default' => 'https://i.ytimg.com/vi_webp/OuEndh4T8Bk/sddefault.webp',
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control(
    new WP_Customize_Image_Control($wp_customize, 'video__link-thumb', array(
      'label' => __('Video Thumbnail', 'mahasura__muda'),
      'section' => 'video',
      'setting' => 'video__link-thumb',
      'priority' => 6
    ))
  );

  // Warta Section
  $wp_customize -> add_section('warta', array(
    'title' => __('Warta', 'mahasura__muda'),
    'description' => sprintf(__('Kustomisasi bagian warta halaman utama website PKKMB UNS 2020', 'mahasura__muda')),
    'priority' => 170
  ));

  // Warta Title
  $wp_customize -> add_setting('warta__title', array(
    'default' => _x( 'Warta', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('warta__title', array(
    'label' => __('Judul', 'mahasura__muda'),
    'section' => 'warta',
    'priority' => 1
  ));

  // Warta Link Text
  $wp_customize -> add_setting('warta__link-text', array(
    'default' => _x( 'Baca lebih banyak ⟶', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('warta__link-text', array(
    'label' => __('Teks Tautan', 'mahasura__muda'),
    'section' => 'warta',
    'priority' => 2
  ));

  // Warta Link
  $wp_customize -> add_setting('warta__link-url', array(
    'default' => _x( 'https://pkkmb.uns.ac.id/', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('warta__link-url', array(
    'label' => __('Tautan Kanal', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'warta',
    'input_attrs' => array(
      'placeholder' => __( 'https://pkkmb.uns.ac.id/' ),
    ),
    'priority' => 3
  ));

  // Jumlah Artikel Halaman Utama
  $wp_customize -> add_setting('warta__postcount', array(
    'default' => _x( '3', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('warta__postcount', array(
    'label' => __('Jumlah Pos Halaman Utama', 'mahasura__muda'),
    'section' => 'warta',
    'priority' => 4
  ));

  // Mobile Nav Section
  $wp_customize -> add_section('mobile__nav', array(
    'title' => __('Mobile Nav Cutomization', 'mahasura__muda'),
    'description' => sprintf(__('Kustomisasi mobile nav website PKKMB UNS 2020', 'mahasura__muda')),
    'priority' => 190
  ));

  // First Mobile Nav Icon
  $wp_customize -> add_setting('mobile__nav-icon1', array(
    'default' => _x( 'fa fa-home', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('mobile__nav-icon1', array(
    'label' => __('First Icon', 'mahasura__muda'),
    'section' => 'mobile__nav',
    'priority' => 1
  ));

  // First Mobile Nav Link
  $wp_customize -> add_setting('mobile__nav-url1', array(
    'default' => _x( 'https://pkkmb.uns.ac.id/', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('mobile__nav-url1', array(
    'label' => __('First Nav URL', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'mobile__nav',
    'input_attrs' => array(
      'placeholder' => __( 'https://pkkmb.uns.ac.id/' ),
    ),
    'priority' => 2
  ));

  // Second Mobile Nav Icon
  $wp_customize -> add_setting('mobile__nav-icon2', array(
    'default' => _x( 'fa fa-newspaper', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('mobile__nav-icon2', array(
    'label' => __('Second Icon', 'mahasura__muda'),
    'section' => 'mobile__nav',
    'priority' => 3
  ));

  // Second Mobile Nav Link
  $wp_customize -> add_setting('mobile__nav-url2', array(
    'default' => _x( 'https://pkkmb.uns.ac.id/', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('mobile__nav-url2', array(
    'label' => __('Second Nav URL', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'mobile__nav',
    'input_attrs' => array(
      'placeholder' => __( 'https://pkkmb.uns.ac.id/' ),
    ),
    'priority' => 4
  ));

  // Third Mobile Nav Icon
  $wp_customize -> add_setting('mobile__nav-icon3', array(
    'default' => _x( 'fa fa-check-square', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('mobile__nav-icon3', array(
    'label' => __('Third Icon', 'mahasura__muda'),
    'section' => 'mobile__nav',
    'priority' => 5
  ));

  // Third Mobile Nav Link
  $wp_customize -> add_setting('mobile__nav-url3', array(
    'default' => _x( 'https://pkkmb.uns.ac.id/', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('mobile__nav-url3', array(
    'label' => __('Third Nav URL', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'mobile__nav',
    'input_attrs' => array(
      'placeholder' => __( 'https://pkkmb.uns.ac.id/' ),
    ),
    'priority' => 6
  ));

  // Fourth Mobile Nav Icon
  $wp_customize -> add_setting('mobile__nav-icon4', array(
    'default' => _x( 'fa fa-heart', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('mobile__nav-icon4', array(
    'label' => __('Fourth Icon', 'mahasura__muda'),
    'section' => 'mobile__nav',
    'priority' => 7
  ));

  // Fourth Mobile Nav Link
  $wp_customize -> add_setting('mobile__nav-url4', array(
    'default' => _x( 'https://pkkmb.uns.ac.id/', 'mahasura__muda' ),
    'type' => 'theme_mod'
  ));

  $wp_customize -> add_control('mobile__nav-url4', array(
    'label' => __('Fourth Nav URL', 'mahasura__muda'),
    'type' => 'url',
    'section' => 'mobile__nav',
    'input_attrs' => array(
      'placeholder' => __( 'https://pkkmb.uns.ac.id/' ),
    ),
    'priority' => 8
  ));

}
add_action( 'customize_register', 'mahasura_customizer_register' );

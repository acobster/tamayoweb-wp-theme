<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css" />

    <link rel="icon" href="<?= image_uri('favicon.ico') ?>" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php do_action('foundationPress_after_body'); ?>

  <div class="off-canvas-wrap">
  <div class="inner-wrap">

  <?php do_action('foundationPress_layout_start'); ?>

        <div class="top-bar-container contain-to-grid">
            <nav class="top-bar" data-topbar="">
                <ul class="title-area">
                    <li class="name">
                        <h1>
                          <a href="<?= home_url() ?>">
                              <img src="<?= image_uri('logo-small.png') ?>"
                                alt="Small Logo" />
                          </a>
                        </h1>
                    </li>
                    <li class="toggle-topbar menu-icon">
                      <a href="#">
                        <span>Menu</span>
                      </a>
                    </li>
                </ul>
                <section class="top-bar-section">
                    <?php foundationPress_top_bar_l(); ?>
                    <?php foundationPress_top_bar_r(); ?>
                </section>
            </nav>
        </div>



<section class="container" role="document">

  <header>
    <h1 class="text-center">
      <a href="<?= home_url() ?>">
        <img src="<?= image_uri('tamayo-web-solutions.png') ?>"
          alt="Tamayo Web Solutions" />
      </a>
    </h1>
  </header>

  <?php do_action('foundationPress_after_header'); ?>

  <section class="main-wrap">
    <div class="main" role="main">

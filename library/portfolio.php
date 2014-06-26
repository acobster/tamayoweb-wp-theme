<?php

/**
 * Website/design portfolio for Tomato
 */

require 'Website.php';

// Declare custom post type Website
Website::init();

add_shortcode( 'websites', 'display_websites');
add_shortcode( 'designs', 'display_designs');
add_shortcode( 'fangchia', 'display_fangchia' );

add_action( 'attachments_register', 'register_website_attachments' );

add_action( 'admin_bar_menu', 'add_menu_portfolio_link' );
add_action( 'add_meta_boxes', 'add_portfolio_link' );



function add_menu_portfolio_link( $content ) {
  global $wp_admin_bar;
  $wp_admin_bar->add_menu( array(
    'parent' => 'site-name',
    'href' => home_url('/portfolio'),
    'title' => 'View Portfolio',
  ) );
}

function add_portfolio_link( $attachment ) {
  add_meta_box( 'to_portfolio', 'Portfolio', 'display_portfolio_link',
    'attachment', 'side', 'high' );
}

function display_portfolio_link( $attachment ) {
  load_snippet( 'portfolio_link' );
}

/**
 * Note: expects the website loop template to be in loop-websites.php
 * @return string the contents of the [websites] shortcode
 */
function display_websites() {
  ob_start();
  get_template_part( 'loop', 'websites' );
  $contents = ob_get_contents();
  ob_end_clean();

  return $contents;
}

/**
 * Execute the "designs" shortcode
 */
function display_designs() {
  ob_start();
  get_template_part( 'loop', 'designs' );
  $contents = ob_get_contents();
  ob_end_clean();

  return $contents;
}

/**
 * Register Websites with the Attachments plugin
 */
function register_website_attachments( $attachments ) {
  $args = array(
    'label' => 'Images',
    'post_type' => 'website',
  );

  $attachments->register( 'website_attachments', $args );
}

/**
 * Display
 */
function display_fangchia( $atts, $content='' ) {
  return '<span class="fangchia">'.$content.'</span>';
}

?>
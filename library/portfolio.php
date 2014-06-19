<?php

/**
 * Website/design portfolio for Tomato
 */

require 'Website.php';

// Declare custom post type Website
Website::init();

add_shortcode( 'websites', 'display_websites');
add_shortcode( 'designs', 'display_designs');

add_action( 'attachments_register', 'register_website_attachments' );



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

?>
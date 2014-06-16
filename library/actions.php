<?php

add_image_size( 'side', 600, 400 );

add_action( 'admin_head', 'admin_favicon' );

add_action('before_setup_theme', 'tomato_theme_support');

add_action('wp_enqueue_scripts', 'tomato_enqueue_scripts');

function admin_favicon() {
  $favicon = image_uri('/favicon.ico');
  echo "<link rel=\"shortcut icon\" href=\"$favicon\" />";
}

/**
 * Hook into theme FoundationPress theme support
 */
function tomato_theme_support() {
  add_theme_support( 'post-formats', array('page') );
}

/**
 * Enqueue Foundation features, etc.
 */
function tomato_enqueue_scripts() {
  wp_register_script( 'foundation-clearing',
    get_template_directory_uri() . '/js/foundation/js/foundation/foundation.clearing.js',
    array('jquery'), '1.0.0' );

  wp_enqueue_script( 'foundation-clearing' );
}

?>
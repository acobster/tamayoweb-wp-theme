<?php

add_action( 'admin_head', 'admin_favicon' );

add_action('before_setup_theme', 'tomato_theme_support');

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

?>
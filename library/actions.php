<?php

add_image_size( 'side', 600, 400 );

add_action( 'admin_head', 'admin_favicon' );

add_action('before_setup_theme', 'tomato_theme_support');

add_action('wp_enqueue_scripts', 'tomato_enqueue_scripts');

// Configure page columns
add_filter('manage_pages_columns', 'filter_page_columns');
add_action('manage_pages_custom_column', 'configure_page_columns', 10, 2);


function filter_page_columns($columns) {
    $columns['slug'] = 'Slug';

    foreach( array('author', 'comments', 'date') as $name ) {
      unset( $columns[$name] );
    }

    return $columns;
}

function configure_page_columns($column_name, $id) {
    if ($column_name == 'slug') {
        $page_slug = get_page($id)->post_name;
        echo $page_slug;
    }
}

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
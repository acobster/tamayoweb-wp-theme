<?php

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Custom actions
require_once('library/actions.php');

// Portfolio
require_once('library/portfolio.php');



/**
 * Get a URI for a given image file (assumes the file is in the standard theme
 * image directory)
 * @param  string the file name
 * @return string the URI
 */
function image_uri( $file )
{
  return get_stylesheet_directory_uri() . "/images/$file";
}

/**
 * Load a snippet file called $name (assumes file is in the standard theme
 * snippets directory)
 * @param  string $name the file name (less ".php")
 */
function load_snippet( $name )
{
  $file = get_stylesheet_directory() . "/snippets/$name.php";

  if( file_exists($file) )
  {
    include $file;
  }
  else
  {
    echo "($file is missing)";
  }
}

?>
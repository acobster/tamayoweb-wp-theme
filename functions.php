<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Custom actions
require_once('library/actions.php');



function image_uri( $file )
{
  return get_stylesheet_directory_uri() . "/images/$file";
}

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
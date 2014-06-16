<?php

/* Template Name: Single */

get_header();

do_action('foundationPress_before_content');

// Do the Loop for this specific post type
$name = "single-{$post->post_type}";
get_template_part( 'loop', $name );

do_action('foundationPress_after_content');

get_footer();

?>
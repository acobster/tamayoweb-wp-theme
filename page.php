<?php

/* Template Name: Page */

get_header();

do_action('foundationPress_before_content');

get_template_part( 'loop', 'index' );

do_action('foundationPress_after_content');

get_footer();

?>
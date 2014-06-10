<?php

/*
  Template Name: Websites
 */

get_header();

$query = Website::all();

?>

<div class="row">
  <div class="small-12 large-8 columns" role="main">

  <?php do_action('foundationPress_before_content'); ?>

  <?php
    while( $query->have_posts() ) :
      $query->the_post();
      $website = Website::fetch( $post );
  ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <header>
        <h1><?php the_title() ?></h1>
      </header>
      <?php do_action('foundationPress_page_before_entry_content'); ?>
      <div class="entry-content">
        <?php if( has_post_thumbnail() ) : ?>
          <a href="<?= get_permalink() ?>">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
          </a>
        <?php endif; ?>
        <?php the_excerpt(); ?>
      </div>
    </article>
  <?php endwhile;?>

  <?php do_action('foundationPress_after_content'); ?>

  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
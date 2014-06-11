<?php

$query = Website::all();

while( $query->have_posts() ) :

  $query->the_post();
  $website = Website::fetch( $post ); ?>


  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
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
  </div>


<?php endwhile; ?>
<?php $query = Website::all(); ?>

<ul class="large-block-grid-3 portfolio">

  <?php while( $query->have_posts() ) :

    $query->the_post();
    $website = Website::fetch( $post ); ?>


    <li <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <header>
        <h2><?php the_title() ?></h2>
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
    </li>


  <?php endwhile; ?>

</ul>
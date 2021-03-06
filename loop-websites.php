<?php $query = Website::all(); ?>

<ul class="portfolio">

  <?php while( $query->have_posts() ) :

    $query->the_post();
    $website = Website::fetch( $post ); ?>


    <li <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <header>
        <h3><?php the_title() ?></h3>
      </header>

      <div class="website-thumb">
        <?php if( has_post_thumbnail() ) : ?>
          <a href="<?= get_permalink() ?>">
            <?php the_post_thumbnail( 'medium' ); ?>
          </a>
        <?php endif; ?>
      </div>

      <div>
        <a href="<?= get_permalink() ?>" class="button"
          title="Explore <?php the_title(); ?>">Explore <?php the_title(); ?>
        </a>
      </div>
    </li>


  <?php endwhile; ?>

</ul>
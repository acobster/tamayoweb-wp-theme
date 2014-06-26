<?php while( have_posts() ) :

  the_post();
  $website = Website::fetch( $post ); ?>


  <h1>Website: <?php the_title() ?></h2>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <?php do_action('foundationPress_page_before_entry_content'); ?>

    <div class="entry-content">
      <?php the_content(); ?>

      <div class="website-info">
        <?php if( $website->roles !== '' ) : ?>
          <div class="roles">
            <h3>Roles:</h3>
            <p><?= $website->roles ?></p>
          </div>
        <?php endif; ?>

        <?php if( $website->url !== '' ) : ?>

          <div class="url">
            <a href="<?= $website->url ?>" target="_blank" class="button success">
              Visit <?php the_title(); ?>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>

  </article>

  <aside>

    <?php
      $attachments = new Attachments( 'website_attachments' );
      if( $attachments->exist() ) : ?>

      <ul class="clearing-thumbs small-block-grid-3" data-clearing>

        <?php while( $attachments->get() ) : ?>

          <li>
            <a href="<?= $attachments->url() ?>">
              <img src="<?= $attachments->src('medium') ?>"
                data-caption="<?= $attachments->field( 'caption' ) ?>" />
            </a>
          </li>

        <?php endwhile; ?>

      </ul>

    <?php endif; ?>

  </aside>

  <hr/>
  <a href="/portfolio">
    <h3 class="fancy">&#8604; Back to portfolio</h3>
  </a>


<?php endwhile; ?>

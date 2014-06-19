<?php

$designs = get_attachments_by_media_tags( array('media_tags' => 'design') ); ?>

<ul class="portfolio design clearing-thumbs" data-clearing>

  <?php if( ! empty($designs) ) :
    foreach( $designs as $design ) : ?>

      <li>
        <a href="<?= $design->guid ?>" title="<?= $design->post_title ?>">
          <?= wp_get_attachment_image( $design->ID, 'medium' ) ?>
        </a>
      </li>

    <?php endforeach;
  endif; ?>

</ul>

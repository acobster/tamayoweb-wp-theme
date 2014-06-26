<?php

$designs = get_attachments_by_media_tags( array('media_tags' => 'design') );

if( current_user_can('upload_files') ) : ?>
  <a class="button tiny" href="/wp/wp-admin/upload.php?media-tags=design">EDIT DESIGN PORTFOLIO</a>
<?php endif; ?>

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

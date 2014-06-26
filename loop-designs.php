<?php

$designs = get_attachments_by_media_tags( array('media_tags' => 'design') );

if( current_user_can('upload_files') ) : ?>
  <a class="button tiny" href="/wp/wp-admin/upload.php?media-tags=design">EDIT DESIGN PORTFOLIO</a>
<?php endif; ?>

<ul class="portfolio design clearing-thumbs" data-clearing>

  <?php if( ! empty($designs) ) :
    foreach( $designs as $design ) :
      $caption = $design->post_excerpt;

      // Add edit link to caption
      if( current_user_can('upload_files') ) {
        $caption .= ' <a href="'.get_edit_post_link($design).'">[EDIT]</a>';
      } ?>

      <li>
        <a href="<?= $design->guid ?>" title="<?= $design->post_title ?>">
          <?= wp_get_attachment_image( $design->ID, 'medium', false,
            array('data-caption' => $caption) ) ?>
        </a>
      </li>

    <?php endforeach;
  endif; ?>

</ul>

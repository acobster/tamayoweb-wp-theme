<?php

$designs = get_attachments_by_media_tags( array('media_tags' => 'featured') );

if( current_user_can('upload_files') ) : ?>
  <a class="button tiny" href="/wp/wp-admin/upload.php?media-tags=featured">EDIT DESIGN PORTFOLIO</a>
<?php endif; ?>

<ul class="slideshow" data-orbit>

  <?php if( ! empty($designs) ) :
    foreach( $designs as $design ) :
      $caption = $design->post_excerpt;

      // Add edit link to caption
      if( current_user_can('upload_files') ) {
        $caption .= ' <a href="'.get_edit_post_link($design).'">[EDIT]</a>';
      } ?>

      <li>
        <?= wp_get_attachment_image( $design->ID, 'medium' ) ?>
        <div class="orbit-caption">
          <?= $caption ?>
        </div>
      </li>

    <?php endforeach;
  endif; ?>

</ul>

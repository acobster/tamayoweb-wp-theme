<?php /* Template Name: Page */ ?>

<?php get_header(); ?>

<section class="main-wrap">
	<div class="main" role="main">

		<?php do_action('foundationPress_before_content'); ?>

		<?php while (have_posts()) : the_post(); ?>

		<h1 class="entry-title"><?php the_title(); ?></h1>

			<?php
				$sidebar = get_post_meta( $post->ID, 'sidebar', true );
				$classes = empty($sidebar) ? array() : array('with-sidebar');
			?>

			<article <?php post_class($classes) ?> id="post-<?php the_ID(); ?>">
				<?php do_action('foundationPress_page_before_entry_content'); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>

			<?php if( ! empty($sidebar) ) : ?>
				<aside class="sidebar"><?= $sidebar ?></aside>
			<?php endif; ?>

		<?php endwhile;?>

		<?php do_action('foundationPress_after_content'); ?>

	</div>
</section>

<?php get_footer(); ?>
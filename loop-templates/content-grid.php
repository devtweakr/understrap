<?php

/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article class="col-xl-3 col-lg-4 col-sm-6 px-2 masonry mb-3" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="grid-card-content bg-white h-100">
		<div class="grid-card-image">
			<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
		</div>
		<div class="grid-card-body pt-1 px-3">
			<header class="entry-header">
				<div class="cat-meta font-italic my-1">
					<?php understrap_entry_footer_home(); ?>
				</div>

				<?php
				the_title(
					sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
					'</a></h2>'
				);
				?>

				<?php if ('post' == get_post_type()) : ?>


				<?php endif; ?>

			</header><!-- .entry-header -->



			<div class="entry-content">

				<?php the_excerpt(); ?>

				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
						'after'  => '</div>',
					)
				);
				?>

			</div><!-- .entry-content -->

			<footer class="entry-footer">



			</footer><!-- .entry-footer -->

		</div>
	</div>
</article><!-- #post-## -->
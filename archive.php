<?php

/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">




		<main class="site-main" id="main">

			<?php if (have_posts()) : ?>
				<div class="row">
					<header class="page-header mx-2 mb-3 px-3 pt-3 bg-white">
						<?php
						the_archive_description('<div class="taxonomy-description">', '</div>');
						?>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while (have_posts()) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part('loop-templates/content-grid', get_post_format());
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part('loop-templates/content-grid', 'none'); ?>

				<?php endif; ?>
				</div> <!-- .row -->
		</main><!-- #main -->

		<!-- The pagination component -->
		<?php understrap_pagination(); ?>




	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php get_footer();

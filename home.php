<?php

/**
 * Template Name: Home
 *
 * Template for displaying a Home - Masonry layout without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page()) : ?>
	<?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content">



		<div class="content-area py-0" id="primary">

			<main class="site-main" id="main" role="main">
				<div class="row">

					<?php while (have_posts()) : the_post(); ?>

						<?php get_template_part('loop-templates/content-grid', 'page'); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. 
					?>
				</div><!-- .row end -->

			</main><!-- #main -->

		</div><!-- #primary -->


	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer();

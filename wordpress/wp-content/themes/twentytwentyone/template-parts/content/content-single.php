<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

<<<<<<< HEAD
	<div class="entry-content row">
		<div class="col-md-3">

		</div>
		<div class="col-md-6">
			<?php
			the_content();
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
					'after'    => '</nav>',
					/* translators: %: Page number. */
					'pagelink' => esc_html__('Page %', 'twentytwentyone'),
=======
	<style>
		@media (min-width: 992px) {
			.row {
				margin-left: 110px !important;
				margin-right: 110px !important;
			}
		}

		@media (min-width: 480px) {
			.row {
				margin: 0
			}
		}

		.crossedbg {
			background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_cr_grey.png);
			height: 15px;
		}

		.panel-body > .widget a {
			text-decoration: none;
		}
	</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<div class="entry-content row">
		<div class="col-md-3">
            <div class="widget topworks_itdc">
                <div class="panel panel-default">
					<div class="panel-body">
						<h2 class="wp-block-heading">Category</h2>
						<div class="crossedbg"></div>
						<?php dynamic_sidebar( 'category' ); ?>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-md-6">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
					'after'    => '</nav>',
					/* translators: %: Page number. */
					'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
>>>>>>> huy-9
				)
			);
			?>
		</div>
<<<<<<< HEAD
		<div class="col-md-3">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>
	</div>
=======
		<div class="col-md-3"></div>
>>>>>>> huy-9
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if (!is_singular('attachment')) : ?>
		<?php get_template_part('template-parts/post/author-bio'); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
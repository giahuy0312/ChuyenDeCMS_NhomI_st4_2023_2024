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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header alignwide">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->

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
				)
			);
			?>
        </div>
        <div class="col-md-3">
            <?php dynamic_sidebar('recent-post');?>
        </div>
    </div>
    </div><!-- .entry-content -->

    <footer class="entry-footer default-max-width">
        <?php twenty_twenty_one_entry_meta_footer(); ?>
    </footer><!-- .entry-footer -->

    <?php if (!is_singular('attachment')) : ?>
    <?php get_template_part('template-parts/post/author-bio'); ?>
    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
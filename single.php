<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package explorer
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="content__image_text">' . esc_html__( 'Previous:', 'explorer' ) . '</span> <span class="content__image_text">%title</span>',
					'next_text' => '<span class="content__image_text">' . esc_html__( 'Next:', 'explorer' ) . '</span> <span class="content__image_text">%title</span>',
				)
			);			

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();

<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package explorer
 */

get_header();
?>

<?php if (is_post_type_archive('stories')) :
	$args = array(
		'post_type'      => 'stories',
		'posts_per_page' => 3,
		'tax_query'      => array(
			array(
				'taxonomy' => 'adventure',
				'field'    => 'slug',
				'terms'    => 'first',
			),
		),
	);
	$query = new WP_Query($args);
?>
	<section>
		<div class="container">
			<?php
			if ($query->have_posts()) :
				while ($query->have_posts()) :
					$query->the_post();
			?>
					<div class="content">
						<div class="content__image">
							<div>
								<?php the_post_thumbnail(); ?>
								<div class="content__head"><?php the_title(); ?></div>
								<div class="content-autor">
									<?php
									$author_id = get_the_author_meta('ID');
									echo get_avatar($author_id, 30);
									?>
									<div>
										<div class="content-autor__name"><?php the_author(); ?></div>
										<div class="content-autor__date"><?php the_date(); ?></div>
									</div>

								</div>
							</div>
							<div class="content__image_text">
								<p><?php the_content(); ?></p>
							</div>
						</div>
					</div>
			<?php endwhile;
			endif; ?>
		</div>
	</section>

<?php else :
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'tag' => 'travel'
	);
	$query = new WP_Query($args);
?>

	<section>
		<div class="container">
			<?php
			if ($query->have_posts()) :
				while ($query->have_posts()) :
					$query->the_post();
			?>
					<div class="content">
						<div class="content__image">
							<div>
								<?php the_post_thumbnail(); ?>
								<div class="content__head"><?php the_title(); ?></div>
								<div class="content-autor">
									<?php
									$author_id = get_the_author_meta('ID');
									echo get_avatar($author_id, 30);
									?>
									<div>
										<div class="content-autor__name"><?php the_author(); ?></div>
										<div class="content-autor__date"><?php the_date(); ?></div>
									</div>

								</div>
							</div>
							<div class="content__image_text">
								<p><?php the_content(); ?></p>
							</div>
						</div>
					</div>
			<?php endwhile;
			endif; ?>
		</div>
	</section>
<?php endif; ?>


<?php

get_footer();

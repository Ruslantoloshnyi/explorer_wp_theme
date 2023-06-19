<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package explorer
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section>
		<div class="container">

			<div class="content">
				<div class="content__image">
					<div>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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

		</div>
	</section>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
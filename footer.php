<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package explorer
 */

?>

<?php
$image_1 = get_field('footer_social_img_1', 'option');
$img_1 = wp_get_attachment_image( $image_1, 'full');
$image_2 = get_field('footer_social_img_2', 'option');
$img_2 = wp_get_attachment_image( $image_2, 'full');
$image_3 = get_field('footer_social_img_3', 'option');
$img_3 = wp_get_attachment_image( $image_3, 'full');
?>

<footer>
	<div class="footer-container">
		<div class="footer-content">
			<div class="footer-content__menu">
				<?php
				wp_nav_menu([
					'theme_location'  => 'menu-2',
					'menu'            => '',
					'container'       => 'ul',
				]);
				?>

			</div>
			<div class="footer-content-block">
				<div class="footer-content__text"><?php echo get_field('footer_copyright', 'option'); ?></div>
				<div class="footer-content__label">
					<p><?php echo get_field('footer_label', 'option'); ?></p>
				</div>
				<div class="footer-content__social">
					<a href="<?php echo get_field('footer_social_url_1', 'option'); ?>"><?php echo $img_1; ?></a>
					<a href="<?php echo get_field('footer_social_url_2', 'option'); ?>"><?php echo $img_2; ?></a>
					<a href="<?php echo get_field('footer_social_url_3', 'option'); ?>"><?php echo $img_3; ?></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="js/vendor.min.js"></script>
<script src="js/main.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>
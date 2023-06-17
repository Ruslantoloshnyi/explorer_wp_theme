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
				<div class="footer-content__text">Copyright © Explorer - Images used for demonstration purpose only
				</div>
				<div class="footer-content__label">
					<p>Explorer</p>
				</div>
				<div class="footer-content__social">
					<a href=""><img src="./img/instagram.png" alt=""></a>
					<a href=""><img src="./img/facebook.png" alt=""></a>
					<a href=""><img src="./img/telegram.png" alt=""></a>
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
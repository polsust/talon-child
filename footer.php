<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Talon
 */

?>

</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<?php
			wp_nav_menu(array(
				"sort_column" => "menu-order",
				"theme_location" => "footer",
			));
			?>
		</div>
		<div class="footerSidebar"><?php dynamic_sidebar("footer-talon-child") ?></div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package doolittle_vendors
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<a href="//ventamarketing.com">Venta Marketing</a>
			<span class="sep"> | </span>  <div class="test-footer"><?php echo customText('copyright'); ?></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script  type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
</body>
</html>

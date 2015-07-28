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

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info container">

			<a href="//ventamarketing.com">Venta Marketing</a>
			<span class="sep"> | </span>  <div class="test-footer"><?php echo customText('copyright'); ?></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script  type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
</body>
</html>

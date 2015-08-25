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
		<div class="footer-contact">
			<div class="container">
			<div class="col-md-6">
				<?php if(get_field('address', 12)) { ?>
					<?php the_field('address', 12); ?><br>
				<?php } ?>
				<?php if(get_field('primary_email_address', 12)) { ?>
					<a href="mailto:<?php the_field('primary_email_address', 12); ?>"><?php the_field('primary_email_address', 12); ?></a><br>
				<?php } ?>
				<?php if(get_field('phone_number', 12)) { ?>
					<a href="tel:<?php the_field('phone_number', 12); ?>"><?php the_field('phone_number', 12); ?></a><br>
				<?php } ?>
				
				</div>
				<div class="col-md-6">
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
				</div>
			</div>
		</div>
		<div class="site-info container text-center">
			<?php wp_nav_menu( array('menu' => 'footer menu', 'menu_class' => 'list-unstyled') ); ?> 
			<p class="site-description">
				<a href="<?php echo customText('facebook'); ?>" class="social-link"><img src="http://maxtestdomain.com/doolittle-vendors/wp-content/uploads/2015/08/facebook.png" /></a>
				<a href="<?php echo customText('twitter'); ?>" class="social-link"><img src="http://maxtestdomain.com/doolittle-vendors/wp-content/uploads/2015/08/twitter.png" /></a>
				<a href="<?php echo customText('googleplus'); ?>" class="social-link"><img src="http://maxtestdomain.com/doolittle-vendors/wp-content/uploads/2015/08/googleplus.png" /></a>
			</p>
			<div class="test-footer"><?php echo customText('copyright'); ?> <a href="//ventamarketing.com">Venta Marketing</a></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div>
</div><!-- #page -->
<!-- Site Overlay -->
<div class="site-overlay--right"></div>
<?php wp_footer(); ?>
<nav class="visible-xs">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class'      => 'pushy pushy-right ' ) ); ?>
</nav>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script  type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/pushy.min.js"></script>
<script  type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
</body>
</html>

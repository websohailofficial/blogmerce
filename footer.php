<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BlogMerce
 */

?>

<footer class="footer">
        <!-- Start Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer f-link">
						<?php dynamic_sidebar( 'footer-widget-1' ); ?>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer f-link">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer f-link">
					<?php dynamic_sidebar( 'footer-widget-3' ); ?>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer f-link">
					<?php dynamic_sidebar( 'footer-widget-4' ); ?>
					</div>
					<!-- End Single Widget -->
				</div>
			</div>
		</div>
	</div>
        <!--/ End Footer Top -->
	<!-- Start Footer Bottom -->
	<div class="footer-bottom">
		
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

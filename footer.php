<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package KC Realty
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-wrap">

			<div class="footer-left"><?php

				get_template_part( 'menus/menu', 'footer' );

				printf( __( '<div class="copyright">Designed and developed by <a href="%1$s">DCC Marketing</a> &copy %2$s <a href="%3$s" title="Login">%4$s</a></a></div>', 'kcrealty' ), 'http://dccmarketing.com', date( 'Y' ), get_admin_url(), get_bloginfo( 'name' ) );

			?></div><!-- .footer_left -->
			<div class="footer-right">
				<a href="mailto:virginia@kccommercialrealty.com?subject=Email Alert Request&body=Please sign me up for your email alerts!" class="mailing-list-link"><?php echo kcrealty_get_svg( 'envelope' ); ?> Sign up for email alerts.</a>
			</div><!-- .site-info -->

		</div><!-- .footer-wrap -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
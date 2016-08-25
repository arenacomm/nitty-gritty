<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AO_Base
 */

?>
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer padder_sm" role="contentinfo">
		<div class="container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'aobase' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'aobase' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'aobase' ), 'aobase', '<a href="http://chasecee.com" rel="designer">Cee</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Material Design
 */

?>

		</main><!-- #content -->

		<footer id="colophon" class="site-footer mdl-mega-footer" role="contentinfo">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'material-design' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'material-design' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'material-design' ), 'material-design', '<a href="http://www.worcesterwebgroup.com" rel="designer">Mike Murray</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- materialLayout -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

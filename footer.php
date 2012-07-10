<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package MetroUI
 * @since MetroUI v0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'metroui_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'metroui' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'metroui' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'metroui' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'metroui' ), 'MetroUITheme', '<a href="http://sajithdilshan.github.com/" rel="designer">Sajith Dilshan</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
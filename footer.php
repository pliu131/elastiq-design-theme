<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elastiqdesign
 */

?>
  </div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo" style="display: none">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'elastiqdesign' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'elastiqdesign' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'elastiqdesign' ), 'elastiqdesign', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

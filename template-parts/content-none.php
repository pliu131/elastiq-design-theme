<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elastiqdesign
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'elastiqdesign' ); ?></h1>
	</header><!-- .page-header -->

	<section class="page-section">
		<div class="container">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'elastiqdesign' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'elastiqdesign' ); ?></p>
			<?php
			get_search_form();

			else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'elastiqdesign' ); ?></p>
			<?php
			get_search_form();

			endif; ?>
		</div>
	</section><!-- .page-content -->
</section><!-- .no-results -->

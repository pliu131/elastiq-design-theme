<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elastiqdesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<div class="container">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="page-section">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<div class="container">
				<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'elastiqdesign' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
					'<span class="edit-link">',
					'</span>'
					);
					?>
				</div>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</article><!-- #post-## -->

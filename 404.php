<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package elastiqdesign
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found">
			<header class="page-header">
				<div class="container">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'elastiqdesign' ); ?></h1>
				</div>
			</header><!-- .page-header -->

			<section class="page-section">
				<div class="container">
					<h2><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links above?', 'elastiqdesign' ); ?></h2>
					<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Or return to homepage</a></h2>
				</div>

				<?php
				// get_search_form();

				// the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
				// if ( elastiqdesign_categorized_blog() ) :
					?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	get_footer();

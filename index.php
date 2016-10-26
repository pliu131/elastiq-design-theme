<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elastiqdesign
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<header class="page-header page-header--white">
			<div class="container">
				<h1 class="page-header__title">Elastiq Design Blog</h1>
				<p class="page-header__description">Insights for business, design, and technology</p>

				<hr>
		
				<?php get_template_part( 'template-parts/mailchimp-form' ) ?>
			</div>
		</header>
		
		<div class="container blog-previews">
			<?php while ( have_posts() ) : the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-preview', get_post_format() );
				endwhile; ?>
			</div>
		</main>
	</div>

	<?php
	get_footer();

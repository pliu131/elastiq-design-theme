<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elastiqdesign
 */

?>


<header class="page-header page-header--white page-header--blog">
	<div class="container">
		<h1 class="page-section__title">Blog</h1>
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php elastiqdesign_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .container --> 
</header>

<section class="page-section">
	<article id="blog-post post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">
			<div class="blog-post__content">
				<?php 
				if ( has_post_thumbnail() ) : 
					the_post_thumbnail();
				endif;
				?>
				
				<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'elastiqdesign' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elastiqdesign' ),
					'after'  => '</div>',
					) );
					?>
				</div>
			</div>
		</article><!-- #post-## -->
	</section><!-- .entry-content -->

<div class="page-section page-section--light">
	<div class="container">
		<?php get_template_part( 'template-parts/mailchimp-form' ) ?>
	</div>
</div>
	

<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elastiqdesign
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <header class="page-header">
        <div class="container">
          <h1 class="page-header__title"><?php the_title() ?></h1>
        </div>
      </header>

      <section class="page-section about">
        <div class="container">
          <div class="about__info">
            <img class="about__image" src="<?php bloginfo('stylesheet_directory'); ?>/img/headshot.jpg" />  
          </div>

          <div class="about__content">
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
        </section>
      <?php endwhile; ?>
    </main><!-- #main -->
  </div><!-- #primary -->

  <?php get_footer();

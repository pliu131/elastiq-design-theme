<?php
/**
 * Template part for displaying client posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elastiqdesign
 */

?>

<header class="page-header">
  <div class="container">
    <h1 class="page-header__title">
      Work / <br><?php the_title(); ?>
    </h1>
    <!-- <a class="button" href="<?php the_field('project_link'); ?>">View Live Project →</a> -->
  </div>
</header>

<section class="page-section">
  <article class="case-study" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
      <h2 class="case-study__objective"><?php the_field('case_study_objective'); ?></h2>

      <div class="case-study__content">
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

          <a href="<?php the_field('project_link'); ?>">Check out the Project Here →</a>
        </div><!-- .entry-content -->

        <footer class="entry-footer" style="display: none;">
          <?php elastiqdesign_entry_footer(); ?>
        </footer><!-- .entry-footer -->
      </div>
    </article><!-- #post-## -->
  </section>

  <section class="page-section page-section--light">
    <div class="container">
      <header class="page-section__header">
        <h1 class="page-section__title">More Featured Work</h1>
      </header>

      <?php get_template_part('template-parts/content-featured-work') ?>
  </div>
</section>

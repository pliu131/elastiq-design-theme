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

get_header(); 
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <!-- section 1: main header with text -->
    <header class="page-header page-header--home">
      <div class="container">
        <h1 class="page-header__title">A <strong>web development</strong> and <strong>user experience design studio</strong>, focused on creating  efficient and elegant solutions that <strong>solve real problems</strong> for your organization.</h1>
        <a class="button button--large" href="#">START A PROJECT →</a>
      </div>
    </header>

    <section class="page-section">
      <div class="container">
        <header class="page-section__header">
          <h1 class="page-section__title">Featured Work</h1>
        </header>
        <?php get_template_part( 'template-parts/content-featured-work' ); ?>
      </div>
    </section>

    <?php get_template_part( 'template-parts/content-process' ); ?>
    <?php get_template_part( 'template-parts/content-capabilities' ); ?>
    <?php get_template_part( 'template-parts/content-contact' ); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

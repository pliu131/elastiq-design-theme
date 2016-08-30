<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elastiqdesign
 */

get_header(); ?>

<header class="page-header">
  <div class="container">
    <h1 class="page-header__title">Work</h1>
    <p class="page-header__description">
      From my time as the lead designer and front-end developer at Hipsters and Hamptonites, a boutique web design and development agency.
    </p>
  </div>
</header>

<section class="page-section">
  <div class="container">
    <header class="page-section__header">
      <h1 class="page-section__title">Featured Work</h1>
    </header>

    <?php get_template_part('template-parts/content-featured-work') ?>
  </ul>
</div>
</section>



<div class="page-section page-section--light">
  <div class="container">
    <section class="clients-section--showcase">
      <header class="page-section__header">
        <h1 class="page-section__title">More Work</h1>
      </header>

      <ul class="clients">
        <?php 
        $showcase_work = new WP_Query(array(
          'post_type' => 'client',
          'posts_per_page' => '100',
          'category_name' => 'showcase-work'
          )); 

        if ($showcase_work -> have_posts()) : while ($showcase_work -> have_posts()) : $showcase_work -> the_post(); 
        ?>
        <li class="client">
          <article class="client__article">
            <h2 class="client__name">
              <a class="client__project-link" href="<?php the_field('project_link') ?>" target="_blank"><?php the_title() ?> / ⧉</a>  
            </h2>

            <h3 class="client__tagline"><?php the_field('description') ?></h3>
            <p class="client__description">
              <?php 
              $services = wp_get_post_terms($post -> ID, 'service', array('fields' => 'names')); 
              $services_string = implode(', ', $services);
              echo $services_string;
              ?>
            </p>
          </article>
        </li>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
  </section>

  <section class="clients-section--private">
    <header class="page-section__header">
      <h1 class="page-section__title">Notable Clients</h1>
    </header>

    <ul class="clients">
      <?php 
        $private_work = new WP_Query(array(
          'post_type' => 'client',
          'posts_per_page' => '100',
          'category_name' => 'private-work'
          )); 

        if ($private_work -> have_posts()) : while ($private_work -> have_posts()) : $private_work -> the_post(); 
        ?>
        <li class="client client--private">
          <h2 class="client__name"><?php the_title() ?></h2>
        </li>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
  </section>
</div>
</div>

<?php get_footer();

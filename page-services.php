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

      <section class="page-section">
        <div class="container">
          <table class="packages-table" style="table-layout: fixed; font-weight: 400;">
          
            <thead class="packages-titles">
              <tr>
                <th scope="col">
                  <span class="screen-reader-text">Package Services</span>
                </th>
                <th scope="col" id="p-0">
                  <h4>Insight</h4>
                  <p class="package__description">Understand how you can best serve your customers.</p>
                  <p class="h1">$599</p>
                </th>
                <th scope="col" id="p-1">
                  <h4>Insight Plus</h4>
                  <p class="package__description">Discover new opportunities to grow your business.</p>
                  <p class="h1">$999</p>
                </th>
                <th scope="col" id="p-2">
                  <h4>Insight Pro</h4>
                  <p class="package__description">Understand how to make your business go from good to great.</p>
                  <p class="h1">$1499</p>
                </th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="col" colspan="4">Strategy</th>
              </tr>
              <tr class="package__service">
                <th scope="row" id="s--strategy">Strategy</th>
                <td headers="p-0 s--strategy" class="">✓</td>
                <td headers="p-1 s--strategy" class="">✓</td>
                <td headers="p-2 s--strategy" class="">✓</td>
              </tr>
            </tbody>
            <tfoot></tfoot>
          </table>
        </div>
      </section>
      <?php endwhile ?>
    </main>
  </div>

  <?php get_footer();
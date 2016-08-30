<ul class="clients">
  <?php
  if (is_singular('client')) :
    $this_post = $post->ID;
    $featured_work = new WP_Query(array(
      'post_type' => 'client',
      'posts_per_page' => '100',
      'category_name' => 'featured-work',
      'post__not_in' => array($this_post)
    ));
  else : 
    $featured_work = new WP_Query(array(
      'post_type' => 'client',
      'posts_per_page' => '100',
      'category_name' => 'featured-work'
    ));
  endif;

  if ($featured_work -> have_posts()) : while ($featured_work -> have_posts()) : $featured_work -> the_post(); 
  ?>
  <li class="client client--featured">
    <article class="client__article">
      <h2 class="client__name">
        <a class="client__project-link" href="<?php the_field('project_link') ?>" target="_blank"><?php the_title() ?> / ⧉</a>  
      </h2>

      <h3 class="client__tagline"><?php the_field('tagline') ?></h3>
      <p class="client__description">
        <?php the_field('description') ?>
        <br><br>
        <?php the_shortlink('View Case Study →') ?>
      </p>
    </article>
  </li><!-- .client -->
<?php endwhile; endif; wp_reset_postdata(); wp_reset_query(); ?>
</ul><!-- .clients --> 
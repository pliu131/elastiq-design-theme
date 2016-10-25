<article class="blog-preview post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blog-preview__image">
    <?php 
      if ( has_post_thumbnail() ) : 
        the_post_thumbnail();
      endif;
    ?>
  </div>

  <div class="blog-preview__content">
    <?php
    the_title( '<h2 class="client__name"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    ?>

    <p class="client__tagline">
      <?php if ( 'post' === get_post_type() ) :
      elastiqdesign_posted_on(); 
      endif; ?>
    </p>
  </div>
</article>
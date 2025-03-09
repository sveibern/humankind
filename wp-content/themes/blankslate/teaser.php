<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="wp-block-latest-posts__featured-image">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>
  </div>
  <h2 class="wp-block-latest-posts__post-title">
    <a class="wp-block-latest-posts__post-title" href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>  
  </h2>
  <div class="wp-block-latest-posts__post-excerpt">
    <?php if ( has_excerpt() ) { the_excerpt(); } ?>
  </div>
</article>
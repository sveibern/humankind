<?php get_header(); ?>
<main id="content">
  <div class="entry-content">
    <div class="page-title">
      <h1 class="entry-title"><?php wp_title(''); ?></h1>
    </div>
    <div>
      <ul class="wp-block-latest-posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'teaser' ); ?>
        <?php endwhile; endif; ?>
      </ul>
    </div>
    <?php get_template_part( 'nav', 'below' ); ?>
  </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>
<main id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php get_template_part('inc/hero-manual'); ?>
    
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </div>
  <?php endwhile; endif; ?>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
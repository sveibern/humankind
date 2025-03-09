<?php get_header(); ?>
<main id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php get_template_part('inc/hero'); ?>
    
    <div class="entry-content">
      <?php the_content(); ?>
      <div class="entry-links"><?php wp_link_pages(); ?></div>
    </div>
  </div>
  <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
  <?php endwhile; endif; ?>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
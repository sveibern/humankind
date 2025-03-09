
<?php get_header(); ?>
<main id="content">
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) {     
        echo "<div class='post__image'>" . get_the_post_thumbnail() . "</div>";
      }
    ?>
    
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="post-header">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <?php if ( has_excerpt() ) { the_excerpt(); } ?>
          <div class="post-date"><?php the_date(); ?></div>
        </div>
        <div class="post-content">
          <div class="post__editor">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

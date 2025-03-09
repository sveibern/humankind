<?php get_header(); ?>
<main id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) {     
        echo "<div class='post__image'>" . get_the_post_thumbnail() . "</div>";
      }
    ?>

    <div class="post-header">
      <h1 class="post-title"><?php the_title(); ?></h1>
      <?php if ( has_excerpt() ) { the_excerpt(); } ?>
    </div>
  
    <div class="post-content">
      <div class="post__editor">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

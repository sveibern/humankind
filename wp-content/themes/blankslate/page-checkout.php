<?php get_header(); ?>
<main id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) {     
        echo "<div class='post__image'>" . get_the_post_thumbnail() . "</div>";
      }
    ?>

    <div class="product-header">
      <h1 class="product-title"><?php the_title(); ?></h1>
      <?php if ( has_excerpt() ) { the_excerpt(); } ?>
    </div>
  
    <div class="product-content">
        <?php the_content(); ?>
    </div>
  </div>
  <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
  <?php endwhile; endif; ?>

</main>
<?php get_footer(); ?>

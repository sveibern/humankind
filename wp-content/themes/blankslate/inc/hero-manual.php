<div class="hero">
    <div class="hero__content">
        <h1 class="hero__heading"><?php the_title(); ?></h1>
        <?php if ( has_excerpt() ) {     
            echo "<div class='hero__ingress'>" . get_the_excerpt() . "</div>";
            }
        ?>

        <div>
            Send ditt bidrag til
            <div>65 66 80</div>
        </div>
    </div>

    <div class="hero__image">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    </div>
</div>
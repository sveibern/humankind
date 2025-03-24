<div class="hero">
    <div class="hero__content">
        <h1 class="hero__heading">
            <span class="hero__heading-prefix">Prosjekt Shelter</span>
            <?php the_title(); ?>
        </h1>
        <?php if ( has_excerpt() ) {     
            echo "<div class='hero__ingress'>" . get_the_excerpt() . " <a href='https://humankind.no/prosjekt-shelter/'>Les mer om prosjektet</a>.</div>";
            }
        ?>

        <div class="qr-code">
            <img src="https://humankind.no/wp-content/uploads/2025/03/qr-vipps-engang.png" alt="QR code for Vipps" class="qr-code__image">
            <div class="qr-code__text">Skann QR-koden eller vipps til 65 66 80 for å gi. <a href="https://humankind.no/vaer-med-a-hjelpe/">Andre alternativer</a>.</div>
        </div>
    </div>

    <div class="hero__image">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    </div>
</div>
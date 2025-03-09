<div class="hero">
    <div class="hero__content">
        <h1 class="hero__heading">
            <span class="hero__heading-prefix">Prosjekt Shelter</span>
            <?php the_title(); ?>
        </h1>
        <?php if ( has_excerpt() ) {     
            echo "<div class='hero__ingress'>" . get_the_excerpt() . " <a href='#'>Les mer om prosjektet</a>.</div>";
            }
        ?>

        <div class="donation">
            <form>
                <fieldset class="donation__amount">
                    <legend>Velg beløp</legend>
                    <div class="donation__amount-options">
                    <label>
                        <input type="radio" name="amount" value="100">
                        <span>300 kr</span>
                    </label>
                    <label>
                        <input type="radio" name="amount" value="300" checked>
                        <span>500 kr</span>
                    </label>
                    <label>
                        <input type="radio" name="amount" value="500">
                        <span>1000 kr</span>
                    </label>
                    </div>
                </fieldset>
                <div class="donation__custom">
                    <label class="sr-only" for="">Valgfritt beløp</label>
                    <input type="text" id="customAmount" placeholder="...eller skriv inn valgfritt beløp">
                </div>
                <div class="donation__submit">
                    <button type="submit">Gi med Vipps</button>
                </div>
            </form>
        </div>
    </div>

    <div class="hero__image">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    </div>
</div>
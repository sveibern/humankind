<div class="hero">
    <div class="hero__content">
        <h1 class="hero__heading"><?php the_title(); ?></h1>
        <?php if ( has_excerpt() ) {     
            echo "<div class='hero__ingress'>" . get_the_excerpt() . "</div>";
            }
        ?>

        <div class="donation">
            <form>
                <fieldset class="donation__type">
                    <label>
                    <input type="radio" name="radio" value="singleGift">
                    <span>Gi enkeltgave</span>
                    </label>
                    <label>
                    <input type="radio" name="radio" value="recurringGift" checked>
                    <span>Gi månedlig</span>
                    </label>
                </fieldset>
                <fieldset class="donation__amount">
                    <legend>Velg beløp</legend>
                    <div class="donation__amount-options">
                    <label>
                        <input type="radio" name="amount" value="100">
                        <span>100 kr</span>
                    </label>
                    <label>
                        <input type="radio" name="amount" value="300" checked>
                        <span>300 kr</span>
                    </label>
                    <label>
                        <input type="radio" name="amount" value="500">
                        <span>500 kr</span>
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
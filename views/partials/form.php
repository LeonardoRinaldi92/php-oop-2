
<form action="index.php" method="POST">
    <div class="container py-5">
        <div class="row">
            <div class="col-2">
                <select class="form-select" aria-label="animale" name="animale">
                    <option selected>Che animale cerchi?</option>
                    <option value="1">cane</option>
                    <option value="2">gatto</option>
                </select>
            </div>
            <div class="col-3">
                <select class="form-select" aria-label="genere" name="genere">
                    <option selected value="">Che genere cerchi?</option>
                    <option value="cibo">Cibo</option>
                    <option value="cura">articoli per la cura del tuo animale</option>
                    <option value="accessori">accessori per il tuo animale</option>
                </select>
            </div> 
            <div class="col-1">
                <button type="submit">
                    CERCA
                </button>
            </div>
            <?php if ($animale !== 0  or $genere !== '') : ?>
                <div class="col-1">
                    <button type="submit">
                            RESET
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</form>
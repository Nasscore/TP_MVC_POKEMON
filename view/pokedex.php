<?php

include_once '../controller/displayPokemonController.php';

include 'header.php';
?>

<div class="pokemons">

    <?php

    foreach ($pokemons as $pokemon) {

        include 'pokemon_display.php';

    ?>


</div>
        </a>
<?php
}
?>

</div>

<?php

include 'footer.php';

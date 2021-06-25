<?php

include_once '../controller/displayPokemonController.php';

include 'header.php';

$pokemon = $pokemons[$_GET['indice']];

?>

<div class="pokemonDetail row">
    <div class="col-12">
    <?php

        include 'pokemonDetailDisplay.php';

    ?>


    </div>
</div>


<?php

include 'footer.php';

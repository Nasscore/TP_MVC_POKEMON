<?php

/** @var Pokemon $pokemon */
?>

<div class="pokemon">
    <a href="pokemonDetail.php?indice=<?php echo $pokemon->getId() ?>">

    <img class="miniature" src="<?php echo $pokemon->getLogoSprites()?>">
    <h4><?php echo $pokemon->getName() ?></h4>
    <h4><?php echo 'Order #'.$pokemon->getOrder()?></h4>
    <div class="types">
        <img class="type"  height="auto" width="92px" src="<?php echo $pokemon->getType()[0]->getUrl() ?>" alt="<?php echo $pokemon->getType()[0]->getName() ?>.png">
        <?php
        if(count($pokemon->getType())==2){
        ?>
        <img class="type" height="auto" width="92px" src="<?php echo $pokemon->getType()[1]->getUrl() ?>" alt="<?php echo $pokemon->getType()[1]->getName() ?>.png">
        <?php
        }
        ?>
    </div>




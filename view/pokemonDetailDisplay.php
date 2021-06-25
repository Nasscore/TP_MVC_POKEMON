<?php

/** @var Pokemon $pokemon */
?>
    <h1 class="name"><?php echo $pokemon->getName() ?></h1>
<div class="row">
    <div class="col-6 leftDisplay">
    <img width="300px" height="auto" class="logoArtwork" src="<?php echo $pokemon->getLogoArtwork()?>">

    <h4 class="order"><?php echo 'Order #'.$pokemon->getOrder()?></h4>

    <div class="typesDetail">
        <img class="type"  height="auto" width="150px" src="<?php echo $pokemon->getType()[0]->getUrl() ?>" alt="<?php echo $pokemon->getType()[0]->getName() ?>.png">
        <?php
        if(count($pokemon->getType())==2){



        ?>
            <img class="type" height="auto" width="150px" src="<?php echo $pokemon->getType()[1]->getUrl() ?>" alt="<?php echo $pokemon->getType()[1]->getName() ?>.png">
        <?php
        }
        ?>
    </div>
    </div>
    <div class="col-6 rightDisplay">
        <h3>Statistiques</h3>
    </div>

</div>
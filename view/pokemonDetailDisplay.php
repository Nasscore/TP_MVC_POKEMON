<?php

/** @var Pokemon $pokemon */
?>
    <h1 class="nomPokemon"><?php echo $pokemon->getName() ?></h1>
<div class="row cadre">
    <div class="col-6 leftDisplay">
        <div class="animation">
            <img width="300px" height="auto" class="logoArtwork" src="<?php echo $pokemon->getLogoArtwork()?>">
        </div>


        <?php
            if($pokemon->getOrder()<10){
                echo '<h4 class="order">'. '#00'.$pokemon->getOrder().'</h4>' ;
            }
            elseif ($pokemon->getOrder()>=10 && $pokemon->getOrder()<100){
                echo '<h4 class="order">'. '#0'.$pokemon->getOrder().'</h4>' ;
            }
            elseif($pokemon->getOrder()>=100){
                echo '<h4 class="order">'. '#'.$pokemon->getOrder().'</h4>' ;
            }
        ?>

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
        <h3 class="name">Statistiques</h3>
<?php
    foreach($pokemon->getStats()as $stat){
        /** @var Stats $stat */
        echo $stat->getName().' : '.$stat->getValue();;
        echo '<div class="barreProgressive">';
        echo '<div class="'.$stat->getCssClass().'" style="width:'.$stat->getPercent().'%"></div>';
        echo'</div>';

    }
?>

            <h3 class="name">Abilities</h3>
            <?php
            foreach ($pokemon->getAbilities() as $ability){
                    echo '<div class="abilities">';
                    echo '<h4 class="ability">'.$ability->getName().'</h4>';
                    echo '<p class="description">'.$ability->getDescription().'</p>';
                    echo '</div>';

            }
            ?>
    </div>

</div>
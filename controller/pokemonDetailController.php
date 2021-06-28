<?php
include_once '../model/Pokemon.php';
include_once '../model/Types.php';
include_once '../model/Stats.php';
include_once '../model/Abilities.php';
include_once '../model/PokemonRepository.php';

$pokemon = PokemonRepository::getInstance()->getPokemonById($_GET['indice']);
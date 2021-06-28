<?php

include_once '../model/PokemonRepository.php';
//
//$_SESSION['pokemon_repository'] = [];
//session_destroy();

$pokemons = PokemonRepository::getInstance()->findAllPokemon();


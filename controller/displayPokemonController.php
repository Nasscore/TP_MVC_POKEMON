<?php
include_once '../model/PokemonRepository.php';

$pokemons = (new PokemonRepository())->findAllPokemon();


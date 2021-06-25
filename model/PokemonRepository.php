<?php
include_once '../model/Pokemon.php';
include_once '../model/Types.php';


class PokemonRepository
{

    private array $pokemons;

/**
* PokemonRepository constructor.
* @param array $pokemons
*/

    public function __construct()
    {
        $this->pokemons = [];
    }

/**
* SELECT * FROM pokemon;
* @return Pokemon[]
*/
    public function findAllPokemon(): array {
        $file = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=100';
        $data = file_get_contents($file);
        $arrayJson = json_decode($data);

        foreach ($arrayJson->results as $value) {
            $data = file_get_contents($value->url);
            $jsonPokemon = json_decode($data);
            $artwork = 'official-artwork';
            $types = [];
            foreach($jsonPokemon->types as $type) {
                $types[] = new Types($type->type->name,'../asset/type-'.$type->type->name.'.png') ;
            }
            $this->pokemons[] = new Pokemon(
                $jsonPokemon->name,
                $jsonPokemon->sprites->front_default,
                $jsonPokemon->sprites->other->$artwork->front_default,
                $jsonPokemon->order,
                $types
            );
        }
        return $this->pokemons;
    }

}
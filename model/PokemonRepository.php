<?php
include_once '../model/Pokemon.php';
include_once '../model/Types.php';
include_once '../model/Stats.php';
include_once '../model/Abilities.php';


class PokemonRepository
{

    private array $pokemons;

    private static ?PokemonRepository $instance = null;

    public static function getInstance(): PokemonRepository {
        if (!isset(PokemonRepository::$instance) && !isset($_SESSION['pokemon_repository'])) {
            PokemonRepository::$instance = new PokemonRepository();
            $_SESSION['pokemon_repository'] = self::getInstance();
        } else if (isset($_SESSION['pokemon_repository'])) {
            PokemonRepository::$instance = $_SESSION['pokemon_repository'];
        }
        return PokemonRepository::$instance;
    }

    /**
    * PokemonRepository constructor.
    */
    public function __construct()
    {
        $this->initPokemons();
    }

    private function initPokemons(): void {

        $file = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=20';
        $data = file_get_contents($file);
        $arrayJson = json_decode($data);
        $id = 0;

        foreach ($arrayJson->results as $value) {
            $data = file_get_contents($value->url);
            $jsonPokemon = json_decode($data);
            $artwork = 'official-artwork';
            $types = [];
            $stats = [];
            $abilities = [];
            foreach($jsonPokemon->types as $type) {
                $types[] = new Types($type->type->name,'../asset/type-'.$type->type->name.'.png') ;
            }
            foreach($jsonPokemon->stats as $stat){
                $stats[]= new Stats($stat->stat->name,$stat->base_stat);
            }
            foreach ($jsonPokemon->abilities as $ability){
                $data2 = file_get_contents($ability->ability->url);
                $jsonEffect = json_decode($data2);
                foreach ($jsonEffect->effect_entries as $descriptionAbility){
                    if($descriptionAbility->language->name == 'en'){
                        $description = $descriptionAbility->effect;
                    }
                }
                $abilities[]= new Abilities($ability->ability->name,
                                            $ability->is_hidden,
                                            $description
                                            );
            }
            $this->pokemons[$id] = new Pokemon(
                $jsonPokemon->name,
                $jsonPokemon->sprites->front_default,
                $jsonPokemon->sprites->other->$artwork->front_default,
                $jsonPokemon->order,
                $types,
                $id,
                $stats,
                $abilities
            );
            $id++;
        }
    }

    /**
    * SELECT * FROM pokemon;
    * @return Pokemon[]
    */
    public function findAllPokemon(): array {
        return $this->pokemons;
    }

    /**
     * @param int $id
     * @return Pokemon|null
     */
    public function getPokemonById(int $id): ?Pokemon {
        if (isset($this->pokemons[$id])) {
            return $this->pokemons[$id];
        }
        return null;
    }

}
<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pokemonsList = [
            [
                'name' => 'Pikachu',
                'type' => 'Elettrico',
                'ps' => 35,
                'attack' => 55,
                'defense' => 40,
                'strongest_move' => 'Fulmine',
                'species' => 'Topino'
            ],
            [
                'name' => 'Charmander',
                'type' => 'Fuoco',
                'ps' => 39,
                'attack' => 52,
                'defense' => 43,
                'strongest_move' => 'Lanciafiamme',
                'species' => 'Lucertola'
            ],
            [
                'name' => 'Squirtle',
                'type' => 'Acqua',
                'ps' => 44,
                'attack' => 48,
                'defense' => 65,
                'strongest_move' => 'Idropompa',
                'species' => 'Tartaruga'
            ],
            [
                'name' => 'Bulbasaur',
                'type' => 'Erba/Veleno',
                'ps' => 45,
                'attack' => 49,
                'defense' => 49,
                'strongest_move' => 'Fior di Fiori',
                'species' => 'Semenzale'
            ],
            [
                'name' => 'Jigglypuff',
                'type' => 'Normale/Fata',
                'ps' => 115,
                'attack' => 45,
                'defense' => 20,
                'strongest_move' => 'Canto',
                'species' => 'Puffo'
            ],
            [
                'name' => 'Meowth',
                'type' => 'Normale',
                'ps' => 40,
                'attack' => 45,
                'defense' => 35,
                'strongest_move' => 'Furtiva',
                'species' => 'Felino'
            ],
            [
                'name' => 'Psyduck',
                'type' => 'Acqua',
                'ps' => 50,
                'attack' => 52,
                'defense' => 48,
                'strongest_move' => 'Idropompa',
                'species' => 'Anatra'
            ],
            [
                'name' => 'Sandshrew',
                'type' => 'Terra',
                'ps' => 50,
                'attack' => 75,
                'defense' => 85,
                'strongest_move' => 'Terremoto',
                'species' => 'Sandshrew'
            ],
            [
                'name' => 'Poliwag',
                'type' => 'Acqua',
                'ps' => 40,
                'attack' => 50,
                'defense' => 40,
                'strongest_move' => 'Idropompa',
                'species' => 'Pollo'
            ],
            [
                'name' => 'Machop',
                'type' => 'Lotta',
                'ps' => 70,
                'attack' => 80,
                'defense' => 50,
                'strongest_move' => 'Pugnalata',
                'species' => 'Machop'
            ],
            [
                'name' => 'Magnemite',
                'type' => 'Elettrico/Acciaio',
                'ps' => 25,
                'attack' => 35,
                'defense' => 70,
                'strongest_move' => 'Fulmine',
                'species' => 'Magnetico'
            ],
            [
                'name' => 'Geodude',
                'type' => 'Terra/Roccia',
                'ps' => 40,
                'attack' => 80,
                'defense' => 100,
                'strongest_move' => 'Terremoto',
                'species' => 'Geodude'
            ],
            [
                'name' => 'Drowzee',
                'type' => 'Psico',
                'ps' => 60,
                'attack' => 48,
                'defense' => 45,
                'strongest_move' => 'Ipnosi',
                'species' => 'Drowzee'
            ],
            [
                'name' => 'Abra',
                'type' => 'Psico',
                'ps' => 25,
                'attack' => 20,
                'defense' => 15,
                'strongest_move' => 'Psichico',
                'species' => 'Abra'
            ],
            [
                'name' => 'Pidgey',
                'type' => 'Normale/Volante',
                'ps' => 40,
                'attack' => 45,
                'defense' => 40,
                'strongest_move' => 'Volo',
                'species' => 'Pidgey'
            ],
            [
                'name' => 'Rattata',
                'type' => 'Normale',
                'ps' => 30,
                'attack' => 56,
                'defense' => 35,
                'strongest_move' => 'Morso',
                'species' => 'Rattata'
            ],
            [
                'name' => 'Zubat',
                'type' => 'Veleno/Volante',
                'ps' => 40,
                'attack' => 45,
                'defense' => 40,
                'strongest_move' => 'Volo',
                'species' => 'Zubat'
            ],
            [
                'name' => 'Onix',
                'type' => 'Roccia/Terra',
                'ps' => 35,
                'attack' => 45,
                'defense' => 160,
                'strongest_move' => 'Rocciotomba',
                'species' => 'Serpente'
            ],
            [
                'name' => 'Snorlax',
                'type' => 'Normale',
                'ps' => 160,
                'attack' => 110,
                'defense' => 65,
                'strongest_move' => 'Corpo Pieno',
                'species' => 'Snorlax'
            ],
            [
                'name' => 'Gengar',
                'type' => 'Spettro/Veleno',
                'ps' => 60,
                'attack' => 65,
                'defense' => 60,
                'strongest_move' => 'Palla Ombra',
                'species' => 'Gengar'
            ],
        ];

        foreach ($pokemonsList as $pokemon) {
            Pokemon::create($pokemon);
        }
    }
}

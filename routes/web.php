<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/pokemons', [PokemonController::class, 'index'])->name('pokemon.index');
Route::post('/pokemons', [PokemonController::class, 'store'])->name('pokemon.store');
Route::get('/pokemons/create', [PokemonController::class, 'create'])->name('pokemon.create');
Route::get('/pokemons/{id}', [PokemonController::class, 'show'])->name('pokemon.show');
Route::get('/pokemons/{id}/edit', [PokemonController::class, 'edit'])->name('pokemon.edit');
Route::put('/pokemons/{id}', [PokemonController::class, 'update'])->name('pokemon.update');


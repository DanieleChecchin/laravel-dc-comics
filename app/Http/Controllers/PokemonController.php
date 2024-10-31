<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePokemonRequest;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pokemons.create'); // pagina view con il form vuoto da compilare
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePokemonRequest $request)
    {
        $request->validate();
        $formData = $request->all();
        $pokemon = Pokemon::create($formData);  //Fillable
        return redirect()->route('pokemon.show', ['id'=> $pokemon->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pokemon = Pokemon::findOrFail($id); //Se ce l'id restituisco il pokemon altrimenti 404 not found
        return view('pokemons.show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemons.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|string|min:3|max:50',
            'type'=>'required|string|min:5|max:70',
            'ps'=>'required|numeric|min:10|max:255',
            'attack'=>'required|numeric|min:10|max:255',
            'defense'=>'required|numeric|min:10|max:255',
            'strongest_move'=>'required|string|min:3|max:20',
            'species'=>'required|string|min:5|max:50'
        ]);

        $formData = $request->all();
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($formData);
        return redirect()->route('pokemon.show', ['id' => $pokemon -> id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete(); //Cancella il pokemon dal db
        return redirect()->route('pokemon.index');
    }
}

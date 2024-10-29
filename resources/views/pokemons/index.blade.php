@extends('layouts.app')

@section('page-title', 'Pokemons Index')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic">
                    Pokemons Index
                </h1>
            </div>
            <div class="col-12">
                <div class="my-3">
                    <a href="{{ route('pokemon.create') }}" class="btn btn-primary">Create a new Pokemon</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NAME</th>
                            <th>TYPE</th>
                            <th>PS</th>
                            <th>ATTACK</th>
                            <th>DEFENSE</th>
                            <th>STRONGEST MOVE</th>
                            <th>SPECIES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pokemons as $index => $pokemon)
                            <tr>
                                <td>
                                    {{ $pokemon->id }}
                                </td>
                                <td>
                                    {{ $pokemon->name }}
                                </td>
                                <td>
                                    {{ $pokemon->type }}
                                </td>
                                <td>
                                    {{ $pokemon->ps }}
                                </td>
                                <td>
                                    {{ $pokemon->attack }}
                                </td>
                                <td>
                                    {{ $pokemon->defense }}
                                </td>
                                <td>
                                    {{ $pokemon->strongest_move }}
                                </td>
                                <td>
                                    {{ $pokemon->species }}
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('pokemon.show', $pokemon->id) }}">Show</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No pokemons available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

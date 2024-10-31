@extends('layouts.app')

@section('page-title', 'Edit')

@section('main-content')

    <div class="container">
        <div class="row">
            <form action="{{ route('pokemon.update', $pokemon->id) }}" method="POST">
                @method('PUT')
                @csrf

                <h1 class="fw-bold my-5 fst-italic text-decoration-underline">{{ $pokemon->name }}</h1>

                <div class="mb-3">
                    <label for="pokemon-name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="pokemon-name" name="name"
                        value="{{ old('name', $pokemon->name) }}">
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pokemon-type" class="form-label">Type:</label>
                    <input type="text" class="form-control" id="pokemon-type" name="type"
                        value="{{ old('type', $pokemon->type) }}">
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pokemon-ps" class="form-label">PS:</label>
                    <input type="number" class="form-control" id="pokemon-ps" name="ps"
                        value="{{ old('ps', $pokemon->ps) }}">
                    @error('ps')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pokemon-attack" class="form-label">Attack:</label>
                    <input type="number" class="form-control" id="pokemon-attack" name="attack"
                        value="{{ old('attack', $pokemon->attack) }}">
                    @error('attack')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pokemon-defense" class="form-label">Defense:</label>
                    <input type="number" class="form-control" id="pokemon-defense" name="defense"
                        value="{{ old('defense', $pokemon->defense) }}">
                    @error('defense')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pokemon-strongest-move" class="form-label">Strongest-move:</label>
                    <input type="text" class="form-control" id="pokemon-strongest-move" name="strongest_move"
                        value="{{ old('strongest_move', $pokemon->strongest_move) }}">
                    @error('strongest_move')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pokemon-species" class="form-label">Species:</label>
                    <input type="text" class="form-control" id="pokemon-species" name="species"
                        value="{{ old('species', $pokemon->species) }}">
                    @error('species')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Edit {{ $pokemon->name }} !</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>

@endsection

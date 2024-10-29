@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')

    <div class="container">
        <div class="row">
            <form action="">
                @csrf

                <h1 class="fw-bold my-5 fst-italic text-decoration-underline">Create a new Pokemon!</h1>

                <div class="mb-3">
                    <label for="pokemon-name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="pokemon-name" name="name">
                </div>
                <div class="mb-3">
                    <label for="pokemon-type" class="form-label">Type:</label>
                    <input type="text" class="form-control" id="pokemon-type" name="type">
                </div>
                <div class="mb-3">
                    <label for="pokemon-ps" class="form-label">PS:</label>
                    <input type="text" class="form-control" id="pokemon-ps" name="ps">
                </div>
                <div class="mb-3">
                    <label for="pokemon-attack" class="form-label">Attack:</label>
                    <input type="text" class="form-control" id="pokemon-attack" name="attack">
                </div>
                <div class="mb-3">
                    <label for="pokemon-defense" class="form-label">Defense:</label>
                    <input type="text" class="form-control" id="pokemon-defense" name="defense">
                </div>
                <div class="mb-3">
                    <label for="pokemon-strongest-move" class="form-label">Strongest-move:</label>
                    <input type="text" class="form-control" id="pokemon-strongest-move" name="strongest-move">
                </div>
                <div class="mb-3">
                    <label for="pokemon-species" class="form-label">Species:</label>
                    <input type="text" class="form-control" id="pokemon-species" name="species">
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Create!</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>

@endsection
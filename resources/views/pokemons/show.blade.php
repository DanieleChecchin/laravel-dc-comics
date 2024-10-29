@extends('layouts.app')

@section('page-title', 'Pokemons Show')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic">
                    Pokemons Show - {{ $pokemon['name'] }}
                </h1>
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
                        <tr>
                            <td>
                                {{ $pokemon['id'] }}
                            </td>
                            <td>
                                {{ $pokemon['name'] }}
                            </td>
                            <td>
                                {{ $pokemon['type'] }}
                            </td>
                            <td>
                                {{ $pokemon['ps'] }}
                            </td>
                            <td>
                                {{ $pokemon['attack'] }}
                            </td>
                            <td>
                                {{ $pokemon['defense'] }}
                            </td>
                            <td>
                                {{ $pokemon['strongest_move'] }}
                            </td>
                            <td>
                                {{ $pokemon['species'] }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

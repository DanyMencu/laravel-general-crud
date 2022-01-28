@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Game info</h1>

        <h3 class="col-red">{{ $game->title }}</h3>
        <div class="row mb-3">
            <img class="col-6 img-fluid" src="{{ $game->image }}" alt="{{ $game->title }}">
            <div class="col-4 offset-2">
                <p>{{ $game->description }}</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>Price: </strong> {{ $game->price }} €
                    </li>
                    <li class="list-group-item">
                        <strong>Status: </strong> {{ $game->status }}
                    </li>
                    <li class="list-group-item">
                        <strong>Console: </strong> {{ $game->console }}
                    </li>
                </ul>
                <a href="{{ route('games.index') }}" class="btn btn-primary">Return to list</a>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.main')

@section('header-title', 'Game Info | GS |')

@section('content')
    <div class="container py-5">
        <h1 class="text-center py-2">Game info</h1>

        <h3 class="col-red">{{ $game->title }}</h3>
        <div class="row pb-3">
            <img class="col-6 img-fluid" src="{{ $game->image }}" alt="{{ $game->title }}">
            <div class="col-4 offset-2">
                <p>{{ $game->description }}</p>
                <ul class="list-group list-group-flush my-3">
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
                <a href="{{ route('games.index') }}" class="btn btn-primary mx-3">
                    Return to list
                </a>
                <a class="btn btn-success" href="{{ route('games.edit', $game->id) }}">
                    Edit
                </a>
            </div>
        </div>
    </div>
@endsection
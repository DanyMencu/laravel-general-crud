@extends('layouts.main')

@section('header-title', 'Change Game Details | GS |')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Edit game: {{ $game->title }}</h1>

        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('games.update', $game->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    {{-- Title --}}
                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $game->title }}">
                    </div>

                    {{-- Author --}}
                    <div class="mb-4">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" id="author" value="{{ $game->author }}">
                    </div>

                    {{-- Status --}}
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control mb-4">
                        <option value="nuovo"
                            @if ($game->status == 'nuovo')selected @endif >
                            Nuovo
                        </option>
                        <option value="usato"
                            @if ($game->status == 'usato')selected @endif >
                            Usato
                        </option>
                    </select>

                    {{-- Console --}}
                    <label for="console" class="form-label">Console</label>
                    <select name="console" id="console" class="form-control mb-4">
                        <option value="pc"
                            @if ($game->console == 'pc')selected @endif >
                            Pc
                        </option>
                        <option value="play_station_5"
                            @if ($game->console == 'play_station_5')selected @endif >
                            PlayStation 5
                        </option>
                        <option value="xbox_x"
                            @if ($game->console == 'xbox_x')selected @endif >
                            Xbox series X
                        </option>
                    </select>

                    {{-- Price --}}
                    <div class="mb-4">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price"
                        value="{{ $game->price }}">
                    </div>

                    {{-- Image --}}
                    <div class="mb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" name="image" id="image" value="{{ $game->image }}">
                    </div>

                    <button type="submit" class="btn btn-success">Edit details</button>

                </form>
            </div>
        </div>
    </div>
@endsection
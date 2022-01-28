@extends('layouts.main')

@section('header-title', 'Create New Game | GS |')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">New game:</h1>

        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('games.store') }}" method="POST">
                    @csrf

                    {{-- Title --}}
                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>

                    {{-- Author --}}
                    <div class="mb-4">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" id="author">
                    </div>

                    {{-- Status --}}
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control mb-4">
                        <option value="nuovo">
                            Nuovo
                        </option>
                        <option value="usato">
                            Usato
                        </option>
                    </select>

                    {{-- Console --}}
                    <label for="console" class="form-label">Console</label>
                    <select name="console" id="console" class="form-control mb-4">
                        <option value="pc">
                            Pc
                        </option>
                        <option value="play_station_5">
                            PlayStation 5
                        </option>
                        <option value="xbox_x">
                            Xbox series X
                        </option>
                    </select>

                    {{-- Price --}}
                    <div class="mb-4">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="€">
                    </div>

                    {{-- Image --}}
                    <div class="mb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" name="image" id="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Add new game</button>

                </form>
            </div>
        </div>
    </div>
@endsection
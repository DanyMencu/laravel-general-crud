@extends('layouts.main')

@section('header-title', 'All Games DB List | GS |')

@section('content')
    <section class="py-3">
    <div class="container">
        <h1>Games List</h1>
        
        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted') }}</strong>
                : it was correctly edeleted
            </div>
        @endif

        <table class="table table-dark table-hover my-4">
            <thead class="table-dark">
                <tr>
                    <td>Id</td>
                    <td>Title</td>
                    <td>Author</td>
                    <td>Console</td>
                    <td>Price</td>
                    <td colspan="3" class="text-center">Action</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td>{{ $game->id }}</td>
                        <td>{{ $game->title }}</td>
                        <td>{{ $game->author }}</td>
                        <td>{{ $game->console }}</td>
                        <td>{{ $game->price }}</td>
                        <td>
                            <a class="btn btn-primary"
                            href="{{ route('games.show', $game->id) }}">
                                Details
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-success"
                            href="{{ route('games.edit', $game->id) }}">
                                Edit
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $games->links() }}
    </div>
</section>
@endsection
@extends('layouts.main')

@section('content')
    <section class="py-3">
    <div class="container">
        <h1>Games List</h1>

        <table class="table table-striped my-4">
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
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $games->links() }}
    </div>
</section>
@endsection
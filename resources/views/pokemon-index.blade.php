@extends('layouts.pokeapp')

@section('title', 'Home')

@section('content')
    <h2>Pokemon List</h2>
    <ul id="pokemon-list">
        @foreach ($data->results as $pokemon)
            <li>
                <a href="/pokemon/{{ $pokemon->name }}">{{ strtoupper($pokemon->name) }}</a>
                @if ($user)
                    <form action="/favorites" method="post">
                        @csrf
                        <input type="hidden" name="slug" value="{{ $pokemon->name }}">
                        <p><button type="submit" class="btn btn-success">Add as Favorite</button></p>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>

    @if ($pagination['previous'])

        <a href="/?offset={{ $pagination['offset'] - $pagination['limit'] }}&limit={{ $pagination['limit'] }}"
            class="btn btn-primary">Previous</a>

    @endif
    @if ($pagination['next'])

        <a href="/?offset={{ $pagination['offset'] + $pagination['limit'] }}&limit={{ $pagination['limit'] }}"
            class="btn btn-primary">Next</a>

    @endif

    @if ($user->favorites->count() > 0)
        <h2>Favorites List</h2>
        <ul id="favorites-list">
            @foreach ($user->favorites as $favorite)
                <li>
                    <a href="/pokemon/{{ $favorite->slug }}">{{ strtoupper($favorite->slug) }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection

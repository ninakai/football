@extends('layout')
@section('content')

    <body>
<h2>{{ $games ? "Games:" : 'No data'}}</h2>
<a href="/game/create">Add Game</a>
<table border="1">
    <tr>
        <td>id</td>
        <td>Home</td>
        <td>Score</td>
        <td>Away</td>
        <td>Actions</td>
    </tr>
    @foreach ($games as $game)
        <tr>
            <td><a href="/game/{{ $game->id }}">{{$game->id}}</a></td>
            <td><a href="/team/{{ $game->team1->id }}">{{$game->team1->name}}</a></td>
            <td>{{$game->score}}</td>
            <td><a href="/team/{{ $game->team2->id }}">{{$game->team2->name}}</a></td>
            <td>
                <a href="/game/edit/{{ $game->id }}">✍edit</a>
                <a href="/game/destroy/{{ $game->id }}">🗑delete</a>
            </td>
        </tr>
    @endforeach
</table>
<div class="justify-content-center">
    <div class="d-flex flex-column">
        {{ $games->links() }}
    </div>
</div>
</body>
</html>
@endsection


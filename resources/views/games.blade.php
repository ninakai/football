<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
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
</body>
</html>


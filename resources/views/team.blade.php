<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
    <h2>{{$team ? $team->name." members" : 'Wrong team id' }}</h2>
    @if($team)
    <table border="1">
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Position</td>
        </tr>
        @foreach ($team->players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->full_name }}</td>
                <td>{{ $player->position }}</td>
            </tr>
        @endforeach
    </table>
    @endif
<h2>{{$team ? $team->name." games" : 'Wrong team id' }}</h2>
    @if($team)
    <table border="1">
        <tr>
            <td>id</td>
            <td>Played with</td>
            <td>Score</td>
        </tr>
        @foreach ($team->games as $game)
            <tr>
                <td>{{ $game->id }}</td>
                <td><a
                    @if($game->team1_id == $team->id)
                        href="/game/{{ $game->id }}">{{ $game->team2->name }} (Away)
                    @else
                        href="/game/{{ $game->id }}">{{ $game->team1->name }} (Home)
                    @endif
                    <a/>
                </td>
                <td>{{ $game->score }}</td>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>


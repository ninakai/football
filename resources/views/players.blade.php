<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
<h2>Players</h2>
    <table border="1">
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Position</td>
            <td>Team</td>
        </tr>
        @foreach ($players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->full_name }}</td>
                <td>{{ $player->position }}</td>
                <td>{{ $player->team->name }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>


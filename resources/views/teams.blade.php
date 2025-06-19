<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
    <h2>Team list:</h2>
    <table border="1">
        <tr>
            <td>id</td>
            <td>Team</td>
        </tr>
        @foreach ($teams as $team)
        <tr>
            <td>{{ $team->id }}</td>
            <td><a href="/team/{{ $team->id }}">{{ $team->name }}</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>


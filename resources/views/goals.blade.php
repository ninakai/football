@extends('layout')
@section('content')

    <h2>{{ $goals ? "Goals:" : 'No goals'}}</h2>
<table border="1">
    <tr>
        <td>id</td>
        <td>Game</td>
        <td>Scored by</td>
        <td>Scored at</td>
    </tr>
    @foreach ($goals as $goal)
        <tr>
            <td>{{ $goal->id }}</td>
            <td>{{ $goal->game_id }}</td>
            <td>{{ $goal->player_id }}</td>
            <td>{{ $goal->goal_minute }}</td>
        </tr>
    @endforeach
</table>
@endsection


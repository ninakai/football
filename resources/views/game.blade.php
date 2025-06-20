@extends('layout')
@section('content')

    <h2>{{$game ? $game->team1->name." - ".$game->team2->name." overview" : 'Wrong team id' }}</h2>
@if($game)
    <table border="1">
        <tr>
            <td>id</td>
            <td>Goal at</td>
            <td>Scored by</td>
        </tr>
        @foreach ($game->goals as $goal)
            <tr>
                <td>{{ $goal->id }}</td>
                <td>{{ $goal->goal_minute."'" }}</td>
                <td>{{ $goal->player->full_name  }}</td>
            </tr>
        @endforeach
    </table>
@endif
@endsection


@extends('layout')
@section('content')

<h1>Create New Game</h1>

<form action="/games" method="POST">
    @csrf

    <div>
        <label for="team1_id">Home Team:</label>
        <select name="team1_id" id="team1_id">
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>
        @error('team1_id')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="team2_id">Away Team:</label>
        <select name="team2_id" id="team2_id">
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>
        @error('team2_id')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="score">Score:</label>
        <input type="text" name="score" id="score" value="{{ old('score') }}">
    </div>

    <button type="submit">Create Game</button>
</form>
@endsection


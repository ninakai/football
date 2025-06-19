<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Game</title>
</head>
<body>
    <div class="container">
        <h1>Edit Game</h1>

        <form method="POST" action="{{url('/game/update', $game->id)}}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="team1_id">Home Team:</label>
                <select name="team1_id" id="team1_id" class="form-control">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ $game->team1_id == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
                @error('team1_id')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="team2_id">Away Team:</label>
                <select name="team2_id" id="team2_id" class="form-control">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ $game->team2_id == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
                @error('team2_id')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="score">Score:</label>
                <input type="text" name="score" id="score" class="form-control" value="{{ old('score', $game->score) }}">
                @error('score')
                    <div class="is-invalid">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Game</button>
            <a href="/games" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</html>

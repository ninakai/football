<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('games', [
            'games' => Game::paginate($perpage)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('game_create', [
            'games' => Game::all()->all(),
            'teams' => Team::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id|different:team1_id',
            'score' => 'nullable|string|max:255',
        ]);

        $game = new Game();
        $game->team1_id = $validatedData['team1_id'];
        $game->team2_id = $validatedData['team2_id'];
        $game->score = $validatedData['score'] ?? null;
        $game->save();

        return redirect('/games')->with('success', 'Game created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('game', [
            'game' => Game::all()->where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::findOrFail($id);

        if (! Gate::allows('edit-game', $game)) {
            return redirect('/games')->withErrors(['error' =>
                'У вас нет разрешения на редактирование игры ']);
        }

        return view('game_edit', [
            'game' => Game::all()->where('id', $id)->first(),
            'teams' => Team::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id|different:team1_id',
            'score' => 'nullable|string|max:255',
        ]);

        $game = Game::all()->where('id', $id)->first();

        $game->team1_id = $validatedData['team1_id'];
        $game->team2_id = $validatedData['team2_id'];
        $game->score = $validatedData['score'] ?? null;

        $game->save();

        return redirect('/games')->with('success', 'Game updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);

        if (! Gate::allows('destroy-game', $game)) {
            return redirect('/games')->withErrors(['error' =>
                'У вас нет разрешения на удаление игры ']);
        }

        Game::destroy($id);
        return redirect('/games')->withErrors(['success' => 'Game deleted successfully!']);
    }

}

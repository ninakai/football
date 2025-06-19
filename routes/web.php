<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GoalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello world!']);
});

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/team/{id}', [TeamController::class, 'show']);

Route::get('/players', [PlayerController::class, 'index']);

Route::get('/games', [GameController::class, 'index']);
Route::get('/game/{id}', [GameController::class, 'show']);

Route::get('/goals', [GoalController::class, 'index']);

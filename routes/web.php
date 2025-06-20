<?php

use App\Http\Controllers\LoginController;
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
Route::post('/games', [GameController::class, 'store']);
Route::get('/game/create', [GameController::class, 'create'])->middleware('auth');
Route::get('/game/edit/{id}', [GameController::class, 'edit'])->middleware('auth');
Route::get('/game/{id}', [GameController::class, 'show']);
Route::put('/game/update/{id}', [GameController::class, 'update'])->middleware('auth');
Route::get('/game/destroy/{id}', [GameController::class, 'destroy'])->middleware('auth');

Route::get('/goals', [GoalController::class, 'index']);


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/auth', [LoginController::class, 'authenticate']);
Route::post('/register', [LoginController::class, 'register']);


Route::get('/', function () {
    return view('games');
})->name('games');


Route::get('/error', function () {
    return view('error', ['message' => session('message')]);
});

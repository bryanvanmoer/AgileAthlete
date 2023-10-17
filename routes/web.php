<?php

use App\Models\UserPlayer;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('players', [
        'players' => UserPlayer::all()
    ]);
});

Route::get('players/{player}', function (UserPlayer $player) {
    return view('player', [
        'player' => $player
    ]);
});


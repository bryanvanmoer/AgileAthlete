<?php

use App\Http\Controllers\RegisterController;
use App\Models\User;
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
    return view('users', [
        'users' => User::all()
    ]);
});

Route::get('users/{user}', function (User $user) {
    return view('user', [
        'user' => $user
    ]);
});

Route::get('register', [RegisterController::class, 'create']);


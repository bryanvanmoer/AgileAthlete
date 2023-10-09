<?php

use App\Models\Address;
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
    return view('addresses', [
        'addresses' => Address::all()
    ]);
});

Route::get('addresses/{address}', function (Address $address) {
    return view('address', [
        'address' => $address
    ]);
});


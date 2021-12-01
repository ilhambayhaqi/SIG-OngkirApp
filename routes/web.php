<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/estimate', function () {
    return view('estimate');
});

Route::get('/city/{id}', function ($id) {
    return view('city', [
        'prov_id' => $id
    ]);
});

Route::get('/cost/{origin}/{destination}/{weight}/{courier}', function ($origin, $destination, $weight, $courier) {
    return view('cost', [
        'origin' => $origin,
        'destination' => $destination,
        'weight' => $weight,
        'courier' => $courier,
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

<?php

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

// Route::get('/', function () {
//     return view('test');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/noble1', function () {
    return view('noble1');
});

Route::get('/noble2', function () {
    return view('noble2');
});

Route::get('/noble3', function () {
    return view('noble3');
});

Route::get('/noble4', function () {
    return view('noble4');
});

Route::get('/noble5', function () {
    return view('noble5');
});

Route::get('/noble6', function () {
    return view('noble6');
});

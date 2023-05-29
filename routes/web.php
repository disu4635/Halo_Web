<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnscController;
use App\Http\Controllers\CovenantController;
use App\Http\Controllers\PrometeosController;

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

Route::get('jefe_maestro', [UnscController::class, 'mostrarJefeMaestro']);

Route::get('noble6', [UnscController::class, 'mostrarNoble6']);

Route::get('inquisidor', [CovenantController::class, 'mostrarInquisidor']);

Route::get('verdad', [CovenantController::class, 'mostrarVerdad']);

Route::get('didacta', [PrometeosController::class, 'mostrarDidacta']);

Route::get('bibliotecaria', [PrometeosController::class, 'mostrarBibliotecaria']);


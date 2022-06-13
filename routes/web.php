<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\PersonasDBController;


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
    return view('welcome');
});

Route::get('persona', [PersonaController::class, 'index']);

Route::get('equipos', [EquiposController::class, 'mostrar']);

Route::post('guardar', [PersonasDBController::class, 'guardarPersona']);
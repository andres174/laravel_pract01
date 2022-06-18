<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\EquipoImagenController;

use App\Http\Controllers\PersonasDBController;
use App\Http\Controllers\EquipoDBController;


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

Route::get('persona', [PersonaController::class, 'index']); // muestra persona

Route::get('equipos', [EquiposController::class, 'mostrar']);   //muestra equipo

Route::get('equiposImagen', [EquipoImagenController::class, 'mostrarEquipoImagen']); //muestra equipo imagen

Route::post('guardar', [PersonasDBController::class, 'guardarPersona']); //guarda persona

Route::post('guardarEquipo', [EquipoDBController::class, 'guardarEquipo']); //guardar equipo

Route::get('editEquipo{id}', [EquipoDBController::class, 'editEquipo']);

Route::post('updateEquipo{id}', [EquipoDBController::class, 'updateEquipo']);
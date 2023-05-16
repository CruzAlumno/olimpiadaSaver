<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\ParticipantesEquiposController;

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

Route::get('/', [EquiposController::class, 'getEquipos']);
Route::get('/equipos/{grado?}', [EquiposController::class, 'getEquipos']);
Route::get('/equipo/{id}', [ParticipantesEquiposController::class, 'getParticipantesEquipo']);
Route::get('/resultados/{grado}', [EquiposController::class, 'getResultados']);

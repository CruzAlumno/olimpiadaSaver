<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\OlimpiadasController;
use App\Http\Controllers\PruebasController;

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

Route::get('/', [OlimpiadasController::class, 'getOlimpiadas']);
Route::get('/admin/newOlimpiada', function () {
    return view('olimpiadaFormulario');
});
Route::post('/admin/newOlimpiada', [OlimpiadasController::class, 'createOlimpiada']);

Route::get('/admin/pruebas', [PruebasController::class, 'getPruebas']);
Route::get('/admin/newPrueba', [PruebasController::class, 'getPruebaForm']);
Route::post('/admin/newPrueba', [PruebasController::class, 'createPrueba']);

Route::get('/admin/newTeam', [EquiposController::class, 'getEquipoForm']);
Route::post('/admin/newTeam', [EquiposController::class, 'createEquipo']);
Route::get('/equipos/{olimpiada?}', [EquiposController::class, 'getEquipos']);
Route::get('/{olimpiada}/{grado}/resultados', [EquiposController::class, 'getResultados']);

// Route::get('/equipo/{id}', [ParticipantesEquiposController::class, 'getParticipantesEquipo']);
// Route::get('/resultados/{grado}', [EquiposController::class, 'getResultados']);

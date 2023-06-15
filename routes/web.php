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

Route::get('/{olimpiada}/{grado}/pruebas', [PruebasController::class, 'getPruebas']);
Route::get('/admin/{olimpiada}/{grado}/pruebas', [PruebasController::class, 'getPruebasAdmin']);
Route::get('/admin/{olimpiada}/newPrueba', [PruebasController::class, 'getPruebaForm']);
Route::post('/admin/{olimpiada}/newPrueba', [PruebasController::class, 'createPrueba']);
Route::get('/admin/delete/prueba/{prueba}', [PruebasController::class, 'deletePrueba']);

Route::get('/{olimpiada}/subscripcion', [EquiposController::class, 'getEquipoForm']);
Route::get('/admin/confirm/{equipo}', [EquiposController::class, 'confirmEquipo']);
Route::get('/admin/delete/equipo/{equipo}', [EquiposController::class, 'deleteEquipo']);
Route::post('/admin/{olimpiada}/{grado}/equipos', [EquiposController::class, 'changeEquipoScore']);
Route::post('/{olimpiada}/subscripcion', [EquiposController::class, 'createEquipo']);
Route::get('/{olimpiada}/{grado}/equipos', [EquiposController::class, 'getEquipos']);
Route::get('/admin/{olimpiada}/{grado}/equipos', [EquiposController::class, 'getEquiposAdmin']);
Route::get('/{olimpiada}/{grado}/resultados', [EquiposController::class, 'getResultados']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

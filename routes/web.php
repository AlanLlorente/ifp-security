<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MiCicloController;

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

Route::get("/", [MainController::class, 'index']);
Route::get('/calendario', [MainController::class, 'calendario']);
Route::get("/equipo-academico", [MainController::class, 'equipoAcademico']);
Route::get("/informacion-fct", [MainController::class, 'informacionFct']);
Route::get("/centros-ifp", [MainController::class, 'centrosIfp']);
Route::get("/agenda-actividades", [MainController::class, 'agendaActividades']);


Route::get("/mi-ciclo", [MiCicloController::class, 'index']);
Route::get('/mi-ciclo/secretaria', [MiCicloController::class, 'secretaria']);
Route::get('/mi-ciclo/coordinacion', [MiCicloController::class, 'coordinacion']);
Route::get('/mi-ciclo/lenguaje-marcas', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/ciberseguridad', [MiCicloController::class, 'ciberseguridad']);
Route::get('mi-ciclo/mos', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/master-class', [MiCicloController::class, 'masterClass']);
Route::get('/mi-ciclo/recursos', [MiCicloController::class, 'recursosAdicionales']);

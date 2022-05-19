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

//Rutas genericas
Route::get("/", [MainController::class, 'index']);
Route::get('/calendario', [MainController::class, 'calendario']);
Route::get("/equipo-academico", [MainController::class, 'equipoAcademico']);
Route::get("/informacion-fct", [MainController::class, 'informacionFct']);
Route::get("/centros-ifp", [MainController::class, 'centrosIfp']);
Route::get("/agenda-actividades", [MainController::class, 'agendaActividades']);

//Rutas mi-ciclo genericas
Route::get("/mi-ciclo", [MiCicloController::class, 'index']);
Route::get('/mi-ciclo/secretaria', [MiCicloController::class, 'secretaria']);
Route::get('/mi-ciclo/coordinacion', [MiCicloController::class, 'coordinacion']);
Route::get('/mi-ciclo/lenguaje-marcas', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/ciberseguridad', [MiCicloController::class, 'ciberseguridad']);
Route::get('/mi-ciclo/mos', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/master-class', [MiCicloController::class, 'masterClass']);
Route::get('/mi-ciclo/recursos', [MiCicloController::class, 'recursosAdicionales']);

//Rutas Secretaria
Route::get("/mi-ciclo/secretaria/anuncios", [MiCicloController::class, 'secretaria']);
Route::get("/mi-ciclo/secretaria/normativa", [MiCicloController::class, 'secretaria']);
Route::get("/mi-ciclo/secretaria/solicitud-convalidaciones", [MiCicloController::class, 'secretaria']);
Route::get("/mi-ciclo/secretaria/estado-convalidaciones", [MiCicloController::class, 'secretaria']);
Route::get("/mi-ciclo/secretaria/certificados", [MiCicloController::class, 'secretaria']);
Route::get("/mi-ciclo/secretaria/documentacion", [MiCicloController::class, 'secretaria']);



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

//rutas Coordinacion y tutoria
Route::get("/mi-ciclo/coordinacion/planificacion", [MiCicloController::class, 'coordinacion']);
Route::get("/mi-ciclo/coordinacion/fechas-clave", [MiCicloController::class, 'coordinacion']);
Route::get("/mi-ciclo/coordinacion/tramites", [MiCicloController::class, 'coordinacion']);
Route::get("/mi-ciclo/coordinacion/instrucciones", [MiCicloController::class, 'coordinacion']);
Route::get("/mi-ciclo/coordinacion/normativa", [MiCicloController::class, 'coordinacion']);
Route::get("/mi-ciclo/coordinacion/calendario", [MiCicloController::class, 'coordinacion']);
Route::get("/mi-ciclo/coordinacion/inscripcion", [MiCicloController::class, 'coordinacion']);
Route::get("/mi-ciclo/coordinacion/sedes", [MiCicloController::class, 'coordinacion']);
Route::get("/mi-ciclo/coordinacion/mensaje-tutor", [MiCicloController::class, 'coordinacion']);
Route::get("/mi-ciclo/coordinacion/videoconferencias", [MiCicloController::class, 'coordinacion']);
Route::get("/mi-ciclo/coordinacion/anuncios", [MiCicloController::class, 'coordinacion']);

//rutas lenguaje de marcas
Route::get('/mi-ciclo/lenguaje-marcas/planificacion', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/calendario', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/libro', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/uf1', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/uf2', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/uf3', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/material', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/pruebas', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/tablon', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/correo-profesor', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/videoconferencias', [MiCicloController::class, 'lenguajeMarcas']);
Route::get('/mi-ciclo/lenguaje-marcas/notas', [MiCicloController::class, 'lenguajeMarcas']);

//rutas Ciberseguridad
Route::get('/mi-ciclo/ciberseguridad/planificacion', [MiCicloController::class, 'ciberseguridad']);
Route::get('/mi-ciclo/ciberseguridad/calendario', [MiCicloController::class, 'ciberseguridad']);
Route::get('/mi-ciclo/ciberseguridad/libro', [MiCicloController::class, 'ciberseguridad']);
Route::get('/mi-ciclo/ciberseguridad/uf1', [MiCicloController::class, 'ciberseguridad']);
Route::get('/mi-ciclo/ciberseguridad/uf2', [MiCicloController::class, 'ciberseguridad']);
Route::get('/mi-ciclo/ciberseguridad/tablon', [MiCicloController::class, 'ciberseguridad']);
Route::get('/mi-ciclo/ciberseguridad/correo-profesor', [MiCicloController::class, 'ciberseguridad']);
Route::get('/mi-ciclo/ciberseguridad/videoconferencias', [MiCicloController::class, 'ciberseguridad']);
Route::get('/mi-ciclo/ciberseguridad/notas', [MiCicloController::class, 'ciberseguridad']);

//rutas MOS
Route::get('/mi-ciclo/mos/calendario', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/mos/manual', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/mos/jasperactive', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/mos/practice-gmetrix', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/mos/tablon', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/mos/foro', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/mos/correo-profesor', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/mos/videoconferencias', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/mos/contenido', [MiCicloController::class, 'mos']);
Route::get('/mi-ciclo/mos/manual-acceso', [MiCicloController::class, 'mos']);

//rutas masterclass
Route::get('/mi-ciclo/master-class/anuncios', [MiCicloController::class, 'masterClass']);
Route::get('/mi-ciclo/master-class/masterclass', [MiCicloController::class, 'masterClass']);

//rutas recursos adicionales
Route::get('/mi-ciclo/recursos/material', [MiCicloController::class, 'recursosAdicionales']);
Route::get('/mi-ciclo/recursos/tablon', [MiCicloController::class, 'recursosAdicionales']);

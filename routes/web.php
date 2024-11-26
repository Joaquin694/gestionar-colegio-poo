<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\PagoController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Rutas de recursos
Route::resource('docentes', DocenteController::class);
Route::resource('cursos', CursoController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('asistencias', controller: AsistenciaController::class);
Route::resource('matriculas', MatriculaController::class);
Route::resource('pagos', PagoController::class);
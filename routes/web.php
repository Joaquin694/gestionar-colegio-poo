<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\PagoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

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




Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');


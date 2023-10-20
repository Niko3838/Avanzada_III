<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\MateriasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/facultades/listado', [FacultadesController::class, 'index'])->name('listado_facultad');
Route::get('/programas/listado', [ProgramasController::class, 'index'])->name('listado_programas');
Route::get('/docentes/listado', [DocentesController::class, 'index'])->name('listado_docentes');
Route::get('/estudiantes/listado', [EstudiantesController::class, 'index'])->name('listado_estudiantes');
Route::get('/materias/listado', [MateriasController::class, 'index'])->name('listado_materias');

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use League\CommonMark\Cursor;

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

Route::get('/', HomeController::class)->name('home');

Route::get('cursos', [CursoController::class,  'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class,  'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class,  'store'])->name('cursos.store');

/* Route::get("cursos/{curso}", [CursoController::class,  'show']); */

Route::get('cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'show'])->name('cursos.show'); //espera una variable curso y una variable categoria exista o no, luego rutea al controlador curso y un metodo show. Asigna un nombre curso.show como referencia


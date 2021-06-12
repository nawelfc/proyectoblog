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
//cada ruta tiene un nombre identificativo
Route::get('/', HomeController::class)->name('home');
/* 
Route::get('cursos', [CursoController::class,  'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class,  'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class,  'store'])->name('cursos.store');  //se solicita al hacer click en "enviar" del formulario al crear un curso

Route::get("cursos/{curso}", [CursoController::class,  'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update'); //lo recomendable para laravel es usar PUT en lugar de POST

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

//Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'show'])->name('cursos.show'); //espera una variable curso y una variable categoria exista o no, luego rutea al controlador curso y un metodo show. Asigna un nombre curso.show como referencia

 */

 Route::resource('cursos', CursoController::class);  //route resource, reemplaza todas las rutas por una sola, en consola se ven las rutas mediante php artisan rLog::log("level", "message");
 /*Route::resource('otroNombreCualquiera', CursoController::class)->parameters(['otroNombreCualquiera'=>'curso'])->names('cursos'); //en el caso de que se cambiase el nombre de la URL, pero con el nombre de ruta anterior, en parameters le asigna el nombre con el que se quiere asignar a las variables*/

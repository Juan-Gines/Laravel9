<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use PhpParser\Builder\Function_;

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

Route::get('/', HomeController::class);

/* Route::get('/', function () {
    return view('welcome');
    return "Bienvenido a la página principal";
}); */

//Route::get('cursos',[CursoController::class,'index']);

//Route::get('cursos/create',[CursoController::class,'create']);

//ejemplo de ruta con párametros obligatorio

//Route::get('cursos/{curso}',[CursoController::class,'show']);

//ejemplo de ruta con párametros obligatorios y opcionales

/* Route::get('cursos/{curso}/{categoria?}',function($curso,$categoria=null){
    if($categoria){
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }
    return "Bienvenido al curso $curso";
}); */

//NOVEDAD LARAVEL 9 AGRUPAR RUTAS

/*  Todas estas rutas las podemos simplificar con un Route::resource
        Que son todas las rutas que necesita un crud completo para todas sus funcionalidades
Route::controller(CursoController::class)->group(Function(){
    
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::post('cursos','store')->name('cursos.store');
    Route::get('cursos/{curso}','show')->name('cursos.show');
    Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');
    Route::put('cursos/{curso}','update')->name('cursos.update');
    Route::delete('cursos/{curso}','destroy')->name('cursos.destroy');
    
});*/

//Cuando asignamos resource nos crea todas las rutas y el parametro en singular por defecto. Podemos modificar esto en App\Providers\AppServiceProvider.php(mirar docu laravel controllers resourceVerbs).

Route::resource('cursos',CursoController::class);

//si quisieramos modificar el nombre de nuestras rutas por otro(asignaturas)nos daría problemas los name y los parametros por defecto y lo deberiamos arreglar así

//Route::resource('asignaturas',CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');
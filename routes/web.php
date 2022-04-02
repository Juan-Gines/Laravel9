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

//NOVEDAD LARAVEL 9 AGRUPAR RUTAS

Route::controller(CursoController::class)->group(Function(){
    Route::get('cursos','index');
    Route::get('cursos/create','create');
    Route::get('cursos/{curso}','show');
});




//ejemplo de ruta con párametros obligatorios y opcionales

/* Route::get('cursos/{curso}/{categoria?}',function($curso,$categoria=null){
    if($categoria){
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }
    return "Bienvenido al curso $curso";
}); */
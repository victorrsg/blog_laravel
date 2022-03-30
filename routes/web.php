<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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


Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');

    Route::get('cursos/create', 'create');

    Route::get('cursos/{curso}', 'show');
});


// {categoria?} -- ? indicamos que categoria es opcional -- Por lo tanto debemos iniciarlizarla en la funcion como null
/*Route::get('cursos/{curso}/{categoria?}',function ($curso,$categoria = null){
    if ($categoria){
        return "Bienvenido al curso $curso, de la categoría $categoria";

    }else{
        return 'Bienvenido al curso: '.$curso;

    }
});*/

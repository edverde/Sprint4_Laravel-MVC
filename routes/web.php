<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquipsController;
use App\Http\Controllers\PartitsController;

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

// Pàgina principal

Route::get('/', HomeController::class); //no tiene array por que va con el metodo __invoke()

// Prova de cursos tutorial

Route::controller(CursoController::class)->group(function(){

    Route::get('cursos','index');
    Route::get('cursos/create','create');
    Route::get('cursos/{curso}','show');

});


    
//rutas Equips

Route::get('equips', [EquipsController::class, 'index']);

Route::get('equips/create', [EquipsController::class, 'create']);

Route::get('equips/{curso}', [EquipsController::class, 'show']);

//rutas Partits

Route::get('partits', [PartitsController::class, 'index']);

Route::get('partits/create', [PartitsController::class, 'create']);

Route::get('partits/{curso}', [PartitsController::class, 'show']);


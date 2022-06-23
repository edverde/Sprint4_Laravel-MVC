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

Route::get('equips', [EquipsController::class, 'index'])->name('equips.index');

Route::get('equips/create', [EquipsController::class, 'create'])->name('equips.create');

Route::post('equips', [EquipsController::class, 'create_equips'])->name('equips.create_equips');

Route::get('equips/{equips}', [EquipsController::class, 'show'])->name('equips.show');

Route::get('equips/{equips}/edit',[EquipsController::class, 'edit'])->name('equips.edit');

Route::put('equips/{equips}', [EquipsController::class, 'update'])->name('equips.update');

Route::get('equips/{equips}/delete' , [EquipsController::class, 'destroy'])->name('equips.destroy');

//rutas Partits

Route::get('partits', [PartitsController::class, 'index'])->name('partits.index');

Route::get('partits/create', [PartitsController::class, 'create'])->name('partits.create');

Route::get('partits/{id}', [PartitsController::class, 'show'])->name('partits.show');


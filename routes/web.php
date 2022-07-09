<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquipsController;
use App\Http\Controllers\PartitsController;
use App\Http\Controllers\EntitatsController;

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

Route::get('/', HomeController::class)->name('index'); //no tiene array por que va con el metodo __invoke()
    
//rutas Entitats

Route::get('entitats', [EntitatsController::class, 'index'])->name('entitats.index');

Route::get('entitats/create', [EntitatsController::class, 'create'])->name('entitats.create');

Route::post('entitats', [EntitatsController::class, 'create_entitats'])->name('entitats.create_entitats');

// Route::get('entitats/{entitats}', [EntitatsController::class, 'show'])->name('entitats.show');

Route::get('entitats/{entitats}/edit',[EntitatsController::class, 'edit'])->name('entitats.edit');

Route::put('entitats/{entitats}', [EntitatsController::class, 'update'])->name('entitats.update');

Route::get('entitats/{entitats}/delete' , [EntitatsController::class, 'destroy'])->name('entitats.destroy');

//rutas Equips

Route::get('equips', [EquipsController::class, 'index'])->name('equips.index');

Route::get('equips/create', [EquipsController::class, 'create'])->name('equips.create');

Route::post('equips', [EquipsController::class, 'create_equips'])->name('equips.create_equips');

// Route::get('equips/{equips}', [EquipsController::class, 'show'])->name('equips.show');

Route::get('equips/{equips}/edit',[EquipsController::class, 'edit'])->name('equips.edit');

Route::put('equips/{equips}', [EquipsController::class, 'update'])->name('equips.update');

Route::get('equips/{equips}/delete' , [EquipsController::class, 'destroy'])->name('equips.destroy');

//rutas Partits

Route::get('partits', [PartitsController::class, 'index'])->name('partits.index');

Route::get('partits/create', [PartitsController::class, 'create'])->name('partits.create');

Route::post('partits', [PartitsController::class, 'create_partits'])->name('partits.create_partits');

// Route::get('partits/{partits}', [PartitsController::class, 'show'])->name('partits.show');

Route::get('partits/{partits}/edit',[PartitsController::class, 'edit'])->name('partits.edit');

Route::put('partits/{partits}', [PartitsController::class, 'update'])->name('partits.update');

Route::get('partits/{partits}/delete' , [PartitsController::class, 'destroy'])->name('partits.destroy');

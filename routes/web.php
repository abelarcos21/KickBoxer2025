<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTAS PARA ENTRENADORES
Route::group(['prefix' => 'entrenadores'], function(){
    Route::get('', [App\Http\Controllers\EntrenadorController::class, 'index'])->name('entrenador.index');
    Route::get('create', [App\Http\Controllers\EntrenadorController::class, 'create'])->name('entrenador.create');
    Route::post('store', [App\Http\Controllers\EntrenadorController::class, 'store'])->name('entrenador.store');
    Route::get('{entrenador}/edit', [App\Http\Controllers\EntrenadorController::class, 'edit'])->name('entrenador.edit');
    Route::put('{entrenador}', [App\Http\Controllers\EntrenadorController::class, 'update'])->name('entrenador.update');
    Route::delete('{entrenador}', [App\Http\Controllers\EntrenadorController::class, 'destroy'])->name('entrenador.destroy');

});


//RUTAS PARA JUECES
Route::group(['prefix' => 'jueces'], function(){
    Route::get('', [App\Http\Controllers\JuezController::class, 'index'])->name('juez.index');
    Route::get('create', [App\Http\Controllers\JuezController::class, 'create'])->name('juez.create');
    Route::post('store', [App\Http\Controllers\JuezController::class, 'store'])->name('juez.store');
    Route::get('{juez}/edit', [App\Http\Controllers\JuezController::class, 'edit'])->name('juez.edit');
    Route::put('{juez}', [App\Http\Controllers\JuezController::class, 'update'])->name('juez.update');
    Route::delete('{juez}', [App\Http\Controllers\JuezController::class, 'destroy'])->name('juez.destroy');

});

//RUTAS PARA ACADEMIAS
Route::group(['prefix' => 'academias'], function(){
    Route::get('', [App\Http\Controllers\AcademiaController::class, 'index'])->name('academia.index');
    Route::get('create', [App\Http\Controllers\AcademiaController::class, 'create'])->name('academia.create');
    Route::post('store', [App\Http\Controllers\AcademiaController::class, 'store'])->name('academia.store');

});

//RUTA PARA SOLICITUD DE AFILIACION 2025
Route::group(['prefix' => 'afiliaciones'], function(){
    Route::get('', [App\Http\Controllers\AfiliacionController::class, 'index'])->name('afiliacion.index');
    Route::get('create', [App\Http\Controllers\AfiliacionController::class, 'create'])->name('afiliacion.create');
    Route::post('store', [App\Http\Controllers\AfiliacionController::class, 'store'])->name('afiliacion.store');

});

//RUTAS PARA LAS ASOCIACIONES
Route::group(['prefix' => 'asociaciones'], function(){
    Route::get('', [App\Http\Controllers\AsociacionController::class, 'index'])->name('asociacion.index');
    Route::get('create', [App\Http\Controllers\AsociacionController::class, 'create'])->name('asociacion.create');
    Route::post('store', [App\Http\Controllers\AsociacionController::class, 'store'])->name('asociacion.store');
    Route::get('{asociacion}/show', [App\Http\Controllers\AsociacionController::class, 'show'])->name('asociacion.show');

});

//RUTAS PARA CONFIGURACION DE CUENTA(PERFIL)
Route::group(['prefix' => 'configuracion'], function(){
    Route::get('', [App\Http\Controllers\ConfiguracionController::class, 'index'])->name('configuracion.index');

});


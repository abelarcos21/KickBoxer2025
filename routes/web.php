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

});

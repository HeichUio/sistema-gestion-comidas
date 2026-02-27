<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoComidaController;
use App\Http\Controllers\ComidaController;

Route::get('/', function () {
    return redirect()->route('tipo_comidas.index');
});

Route::resource('comidas', ComidaController::class);
Route::redirect('/', '/comidas');
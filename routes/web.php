<?php

use App\Http\Controllers\PrendaController;
use Illuminate\Support\Facades\Route;

Route::resource('prenda', PrendaController::class);
Route::get('/', [PrendaController::class, 'index']);
Route::get('prenda/confirmDelete/{prenda}', [PrendaController::class, 'confirmDelete'])->name('prenda.confirmDelete');
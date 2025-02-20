<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\ContactoController;

Route::get('/', [ViajeController::class, 'index']);
Route::get('/viajes/eurotrip', [ViajeController::class, 'eurotrip']);
Route::get('/viajes/grecia-croacia', [ViajeController::class, 'greciaCroacia']);
Route::get('/contacto', [ContactoController::class, 'index']);

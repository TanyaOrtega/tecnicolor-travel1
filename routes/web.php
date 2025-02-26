<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\ContactoController;

// 🌍 Home y viajes
Route::get('/', [ViajeController::class, 'index'])->name('home');

Route::get('/viajes/{slug}', [ViajeController::class, 'mostrar'])->name('viajes.mostrar');



// 🔍 Búsqueda y filtros
Route::get('/buscar', [ViajeController::class, 'buscar'])->name('viajes.buscar');

// ✉️ Contacto
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto/enviar', [ContactoController::class, 'enviarFormulario'])->name('contacto.enviar');



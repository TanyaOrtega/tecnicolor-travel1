<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ReservaController;

// 🌍 Home y viajes
Route::get('/', [ViajeController::class, 'index'])->name('home');
Route::get('/viajes/{slug}', [ViajeController::class, 'mostrar'])->name('viajes.mostrar');

// 🔍 Búsqueda y filtros
Route::get('/buscar', [ViajeController::class, 'buscar'])->name('viajes.buscar');

// ✉️ Contacto
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'enviarFormulario'])->name('contacto.enviar');

// 📄 Formulario de reserva
Route::get('/reservas/formulario/{viaje_id}', [ReservaController::class, 'formulario'])->name('reservas.formulario');

// 🔄 Confirmar reserva antes de pagar
Route::post('/reservas/confirmar', [ReservaController::class, 'confirmar'])->name('reservas.confirmar');


// 💳 Mostrar el formulario de Stripe
Route::get('/reservas/stripe', [ReservaController::class, 'mostrarStripe'])->name('reservas.stripe');

// 💳 Procesar el pago con Stripe
Route::post('/reservas/pagar', [ReservaController::class, 'pagar'])->name('reservas.pagar');

Route::get('/reservas/{reserva_id}/pdf', [ReservaController::class, 'descargarPDF'])->name('reservas.pdf');

Route::get('/viajes/{id}/itinerario', [ViajeController::class, 'descargarItinerario'])->name('viajes.itinerario');


@extends('layouts.app')

@section('content')
    <div class="text-center mb-5">
        <h1>🌍 Nuestros Viajes Disponibles</h1>
        <p class="lead">Explora el mundo con viajes únicos, diseñados por Tanya Ortega. ✈️</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/eurotrip.png') }}" class="card-img-top" alt="Eurotrip">
                <div class="card-body text-center">
                    <h5 class="card-title">✨ La Vuelta a Europa Primavera/Verano 2025 ✨</h5>
                    <p class="card-text">Un recorrido de 16 noches por Madrid, Roma, Bari, Budapest, Viena, Praga y París.</p>
                    <a href="{{ url('/viajes/eurotrip') }}" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/grecia-croacia.png') }}" class="card-img-top" alt="Grecia-Croacia">
                <div class="card-body text-center">
                    <h5 class="card-title">🌿 Grecia y Croacia: Belleza del Adriático 🌿</h5>
                    <p class="card-text">Descubre Atenas, Santorini y Dubrovnik, en un viaje lleno de historia y paisajes costeros.</p>
                    <a href="{{ url('/viajes/grecia-croacia') }}" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
@endsection



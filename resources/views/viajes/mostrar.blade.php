@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">{{ $viaje->nombre }}</h1>
    <img src="{{ asset($viaje->imagen) }}" class="img-fluid mb-4" alt="{{ $viaje->nombre }}">
    
    <p>{!! nl2br(e($viaje->descripcion_larga)) !!}</p> <!-- Descripción larga mejorada -->

    {{-- Botón para reservar --}}
    <a href="{{ route('reservas.formulario', ['viaje_id' => $viaje->id]) }}" class="btn btn-primary">
        🛒 Reservar este viaje
    </a>

    {{-- Botón para descargar itinerario --}}
    @if($viaje->pdf)
        <a href="{{ route('viajes.itinerario', ['id' => $viaje->id]) }}" class="btn btn-success" target="_blank">
            📄 Descargar Itinerario
        </a>
    @endif

    <a href="{{ url('/') }}" class="btn btn-secondary">⬅️ Volver al inicio</a>
</div>
@endsection

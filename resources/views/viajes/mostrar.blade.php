@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>{{ $viaje->nombre }}</h1>
    
    <img src="{{ asset($viaje->imagen) }}" class="img-fluid mb-4 d-block mx-auto" alt="{{ $viaje->nombre }}">
    
    <p class="mb-4">{!! nl2br(e($viaje->descripcion_larga)) !!}</p>

    <div class="botones-container d-flex flex-wrap justify-content-center gap-3">
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
</div>
@endsection

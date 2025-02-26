@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h2>🔍 Resultados de tu búsqueda</h2>
</div>

@if ($viajesFiltrados->isEmpty())
    <div class="alert alert-warning text-center">
        😔 No se encontraron viajes que coincidan con tu búsqueda. ¡Intenta con otros filtros!
    </div>
@else
    <div class="row g-4">
        @foreach($viajesFiltrados as $viaje)
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <img src="{{ asset($viaje->imagen) }}" class="card-img-top" alt="{{ $viaje->nombre }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $viaje->nombre }}</h5>
                    <p class="card-text">{{ $viaje->descripcion_corta }}</p>
                    <a href="{{ route('viajes.mostrar', $viaje->slug) }}" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endif
@endsection

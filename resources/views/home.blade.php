@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1>🌍 Nuestros Viajes Disponibles</h1>
    <p class="lead">Explora el mundo con viajes únicos, diseñados por Tanya Ortega. ✈️</p>
</div>

<!-- 🔍 Formulario de búsqueda -->
<div class="container mb-5">
    <h3 class="text-center mb-3">🔎 Encuentra el viaje perfecto para ti</h3>
    <form action="{{ route('viajes.buscar') }}" method="GET" class="row g-3">
        <div class="col-md-4">
            <input type="text" class="form-control" name="destino" placeholder="🌎 Destino (Ej. París, Santorini)">
        </div>
        <div class="col-md-4">
            <input type="number" class="form-control" name="presupuesto" placeholder="💸 Presupuesto (USD)">
        </div>
        <div class="col-md-4">
            <select class="form-select" name="actividad">
                <option value="">🏄‍♂️ Tipo de actividad</option>
                <option value="aventura">Aventura</option>
                <option value="relajación">Relajación</option>
                <option value="cultural">Cultural</option>
                <option value="playa">Playa</option>
            </select>
        </div>
        <div class="col-12 d-grid">
            <button type="submit" class="btn btn-success">🔍 Buscar</button>
        </div>
    </form>
</div>

<!-- 🌍 Viajes disponibles -->
<div class="row g-4">
    @foreach($viajes as $viaje)
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <img src="{{ asset($viaje->imagen) }}" class="card-img-top" alt="{{ $viaje->nombre }}">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $viaje->nombre }}</h5>
                <p class="card-text">{{ $viaje->descripcion_corta }}</p>
                <!-- ✅ Usamos el slug para construir la URL -->
                <a href="{{ route('viajes.mostrar', $viaje->slug) }}" class="btn btn-primary">Ver más</a>

                <!--<a href="{{ url('/viajes/' . $viaje->slug) }}" class="btn btn-primary">Ver más</a>-->
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

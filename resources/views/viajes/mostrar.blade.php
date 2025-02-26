@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">{{ $viaje->nombre }}</h1>
    <img src="{{ asset($viaje->imagen) }}" class="img-fluid mb-4" alt="{{ $viaje->nombre }}">
    <p>{{ $viaje->descripcion_larga }}</p>
    <a href="{{ url('/') }}" class="btn btn-secondary">⬅️ Volver al inicio</a>
</div>
@endsection

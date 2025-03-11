@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Reservar: {{ $viaje->nombre }}</h1>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('reservas.confirmar') }}" method="POST" id="confirmar-form">
    @csrf
    <input type="hidden" name="viaje_id" value="{{ $viaje->id }}">

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" name="telefono" class="form-control">
    </div>

    <div class="mb-3">
        <label for="personas" class="form-label">Número de Personas</label>
        <input type="number" name="personas" class="form-control" min="1" required>
    </div>

    <div class="mb-3">
        <label for="anticipo" class="form-label">Anticipo ($MXN)</label>
        <input type="number" name="anticipo" class="form-control" min="1" required>
    </div>

    <button type="submit" class="btn btn-primary">Confirmar y Pagar</button>
</form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center text-success">✅ Reserva Confirmada</h1>
    <p><strong>Nombre:</strong> {{ $reserva->nombre }}</p>
    <p><strong>Email:</strong> {{ $reserva->email }}</p>
    <p><strong>Personas:</strong> {{ $reserva->personas }}</p>
    <p><strong>Anticipo pagado:</strong> ${{ $reserva->anticipo }}</p>

    <a href="{{ route('reservas.pdf', ['reserva_id' => $reserva->id]) }}" class="btn btn-primary">
    📄 Descargar tu Confirmación
</a>


    <a href="{{ url('/') }}" class="btn btn-primary">🏠 Volver al inicio</a>
</div>
@endsection

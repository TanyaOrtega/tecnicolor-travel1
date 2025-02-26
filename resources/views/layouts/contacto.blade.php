@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h2>📩 Contáctanos</h2>
                    <p class="mb-0">¡Nos encantaría saber de ti! ✈️🌎</p>
                </div>
                <div class="card-body p-5">
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contacto.enviar') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nombre" class="form-label fw-bold">👤 Nombre completo</label>
                            <input type="text" class="form-control rounded-pill shadow-sm" id="nombre" name="nombre"
                                   placeholder="Tu nombre" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold">📧 Correo electrónico</label>
                            <input type="email" class="form-control rounded-pill shadow-sm" id="email" name="email"
                                   placeholder="tu@correo.com" required>
                        </div>

                        <div class="mb-4">
                            <label for="mensaje" class="form-label fw-bold">💬 Mensaje</label>
                            <textarea class="form-control rounded-4 shadow-sm" id="mensaje" name="mensaje" rows="5"
                                      placeholder="¿Cómo podemos ayudarte?" required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg rounded-pill shadow">
                                🚀 Enviar mensaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">📩 Contáctanos</h2>
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="tu@correo.com">
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" rows="5" placeholder="¿Cómo podemos ayudarte?"></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Enviar mensaje</button>
                </div>
            </form>
        </div>
    </div>
@endsection


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnicolor Travel 🌈</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f5f5f5; }
        footer { background-color: #ce79e8; color: white; text-align: center; padding: 10px 0; margin-top: 50px; }
        .navbar { background-color: #ce79e8; }
        .navbar-brand, .nav-link, footer { color: white !important; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">🌈 Tecnicolor Travel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/viajes/eurotrip') }}">Eurotrip 2025</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/viajes/grecia-croacia') }}">Verano Azul 2025</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>🌎 Tecnicolor Travel © 2025 | Diseñado por Tanya Ortega y Carlos Martinez ✈️</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


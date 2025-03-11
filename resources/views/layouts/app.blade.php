<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnicolor Travel 🌈</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F3E5F5;
            color: #212121;
        }
        .navbar {
            background-color: #7B1FA2;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .navbar-toggler {
            border-color: #ffffff;
        }
        .btn-primary {
            background-color: #E91E63;
            border: none;
            border-radius: 25px;
            padding: 10px 30px;
            transition: background 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #C2185B;
        }
        .card {
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }
        footer {
            background-color: #7B1FA2;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            margin-top: 50px;
        }
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
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container my-5">
        @yield('content')
    </div>


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


    <!-- Footer -->
    <footer>
        <p>🌎 Tecnicolor Travel © 2025 | Diseñado por Tanya Ortega y Carlos Martinez ✈️</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnicolor Travel 🌈</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;500&family=Boldonse:wght@700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Colores y estilo general */
        body {
            background-color: #F3E5F5;
            color: #212121;
            font-family: 'Poppins', sans-serif;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        p {
            font-size: 1.1rem;
        }

        /* Navbar */
        .navbar {
            background-color: #6A1B9A;
            padding: 10px 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: rgb(244, 249, 251) !important;
            font-size: 3rem;
            font-weight: 700;
            font-family: "Boldonse", system-ui;
        }

        .navbar-brand img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }

        .nav-link {
            color: #ffffff !important;
            font-size: 1rem;
            margin-left: 15px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #FF80AB !important;
        }

        .navbar-toggler {
            border-color: #ffffff;
        }

        
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.8rem;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .nav-link {
                text-align: center;
                margin: 10px 0;
            }

            .navbar-brand img {
                width: 80px; /* Reduce el tamaño del logo */
                margin-right: 0;
                margin-bottom: 5px;
            }

            .navbar-toggler {
                margin: auto; /* Centra el menú hamburguesa */
            }
        }

        /* Botón principal */
        .btn-primary {
            background-color: #E91E63;
            border: none;
            border-radius: 25px;
            padding: 10px 30px;
            transition: background 0.3s ease;
            gap: 15px;
        }

        .btn-primary:hover {
            background-color: #C2185B;
        }

        /* Ajustes responsivos de botones */
        .botones-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .botones-container .btn {
            min-width: 180px;
            padding: 12px 20px;
            margin: 5px;
            font-size: 1rem;
        }
        


        @media (max-width: 576px) {
            .botones-container {
                flex-direction: column;
                align-items: center;
            }

            .botones-container .btn {
                width: 100%;
            }
        }

        /* Estilos de tarjetas */
        .card {
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }

        /* Footer */
        footer {
            background-color: #6A1B9A;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
            width: 100%;
            position: relative;
            
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }

        .social-links img {
            width: 50px;
            height: 50px;
            transition: transform 0.3s ease;
        }

        .social-links img:hover {
            transform: scale(1.1);
        }

        /* Botón de WhatsApp */
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .whatsapp-button img {
            width: 70px;
            height: 70px;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Tecnicolor Travel">
                Tecnicolor Travel
            </a>
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

    <!-- Footer -->
    <footer>
        <p>🖼️ Síguenos en nuestras redes sociales 📸</p>
        <div class="social-links">
            <a href="https://www.instagram.com/tecnicolortravel/" target="_blank">
                <img src="{{ asset('images/instagram.png') }}" alt="Instagram">
            </a>
            <a href="https://www.tiktok.com/@tecnicolortravel" target="_blank">
                <img src="{{ asset('images/tiktok.png') }}" alt="TikTok">
            </a>
        </div>
        <p>🌎 Tecnicolor Travel © 2025 | Diseñado por Tanya Ortega y Carlos Martinez ✈️</p>
    </footer>

    <!-- Botón de WhatsApp -->
    <a href="https://wa.me/523324484234" class="whatsapp-button" target="_blank">
        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp">
    </a>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

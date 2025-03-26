<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Reserva</title>
    <style>
        @font-face {
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 400;
            src: url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap');
        }
        
        body {
            font-family: 'Playfair Display', serif;
            background-color: #fff;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            width: 600px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            border: 2px solid #6A1B9A; /* Morado corporativo */
        }

        .header img {
            width: 150px; /* Tamaño del logo */
            margin-bottom: 10px;
        }

        h1 {
            font-size: 28px;
            color: #6A1B9A;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .datos {
            text-align: left;
            margin-top: 20px;
            padding: 0 30px;
        }

        .datos p {
            font-size: 18px;
            color: #444;
            margin: 10px 0;
            line-height: 1.5;
        }

        .resaltado {
            font-weight: bold;
            color: #6A1B9A;
        }

        .footer {
            margin-top: 25px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Logo -->
        <div class="header">
            <img src="{{ public_path('images/logo.png') }}" alt="Tecnicolor Travel Logo"> 
            <h1>Confirmación de Reserva</h1>
        </div>

        <!-- Datos de la Reserva -->
        <div class="datos">
            <p><span class="resaltado">Nombre del viaje:</span> {{ $reserva->viaje->nombre }}</p>
            <p><span class="resaltado">Cliente:</span> {{ $reserva->nombre }}</p>
            <p><span class="resaltado">Correo electrónico:</span> {{ $reserva->email }}</p>
            <p><span class="resaltado">Teléfono:</span> {{ $reserva->telefono ?? 'No proporcionado' }}</p>
            <p><span class="resaltado">Número de personas:</span> {{ $reserva->personas }}</p>
            <p><span class="resaltado">Anticipo pagado:</span> ${{ number_format($reserva->anticipo, 2) }} MXN</p>
        </div>

        <!-- Mensaje Final -->
        <p class="footer">Gracias por confiar en <strong>Tecnicolor Travel</strong>. ¡Nos vemos pronto!</p>

    </div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Reserva</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #4CAF50; }
        .datos { margin-top: 20px; }
        .datos p { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Confirmación de Reserva</h1>

    <div class="datos">
        <p><strong>Nombre del viaje:</strong> {{ $reserva->viaje->nombre }}</p>
        <p><strong>Nombre del cliente:</strong> {{ $reserva->nombre }}</p>
        <p><strong>Correo electrónico:</strong> {{ $reserva->email }}</p>
        <p><strong>Teléfono:</strong> {{ $reserva->telefono ?? 'No proporcionado' }}</p>
        <p><strong>Número de personas:</strong> {{ $reserva->personas }}</p>
        <p><strong>Anticipo pagado:</strong> ${{ number_format($reserva->anticipo, 2) }} USD</p>
    </div>

    <p>Gracias por confiar en Tecnicolor Travel. ¡Nos vemos pronto!</p>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Reserva de tu próximo Viaje</title>
</head>
<body>
    <h2>¡Hola {{ $reserva->nombre }}!</h2>
    <p>Tu reserva para el viaje ha sido confirmada.</p>
    <p><strong>Destino:</strong> {{ $reserva->viaje->nombre }}</p>
    <p><strong>Número de personas:</strong> {{ $reserva->personas }}</p>
    <p><strong>Anticipo pagado:</strong> ${{ number_format($reserva->anticipo, 2) }}</p>
    <p>¡Gracias por reservar con Tecnicolor Travel! Nos pondremos en contacto contigo pronto.</p>
    <p>¡Te espera la Aventura de tu vida!</p>
</body>
</html>

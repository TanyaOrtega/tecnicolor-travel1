<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <h2>📩 Nuevo mensaje desde Tecnicolor Travel</h2>

    <p><strong>👤 Nombre:</strong> {{ $datos['nombre'] }}</p>
    <p><strong>📧 Correo:</strong> {{ $datos['email'] }}</p>
    <p><strong>💬 Mensaje:</strong></p>
    <p>{{ $datos['mensaje'] }}</p>
</body>
</html>

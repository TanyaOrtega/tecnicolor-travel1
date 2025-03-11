@component('mail::message')
# 🌍 ¡Reserva Confirmada!

Hola **{{ $reserva['nombre'] }}**,  
Tu reserva para el viaje **{{ $reserva['viaje_nombre'] }}** se ha confirmado exitosamente.

### Detalles de tu reserva:
- **Correo Electrónico:** {{ $reserva['email'] }}
- **Teléfono:** {{ $reserva['telefono'] ?? 'No proporcionado' }}
- **Número de Personas:** {{ $reserva['personas'] }}
- **Anticipo Pagado:** ${{ number_format($reserva['anticipo'], 2) }} USD

@component('mail::button', ['url' => route('viajes.mostrar', ['slug' => $reserva['viaje_slug']])])
Ver Viaje
@endcomponent

Gracias por confiar en **Tecnicolor Travel**. ¡Nos vemos pronto!

Saludos,<br>
**El equipo de Tecnicolor Travel**
@endcomponent

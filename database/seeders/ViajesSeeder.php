<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Viaje;

class ViajesSeeder extends Seeder
{
    public function run(): void
    {
        
        Viaje::updateOrInsert(
            ['slug' => 'vuelta-europa-primavera-verano-2025'], 
            [
                'nombre' => '✨ La Vuelta a Europa Primavera/Verano 2025 ✨',
                'descripcion_corta' => 'Recorre Madrid, Roma, Bari, Budapest, Viena, Praga y París.',
                'descripcion_larga' => "Imagina un viaje único que combina las ciudades más icónicas de Europa con destinos menos explorados pero igualmente fascinantes. Este verano, del 5 al 21 de junio, te invitamos a unirte a una aventura exclusiva de 16 noches y 17 días, donde recorreremos Madrid, Roma, Bari, Budapest, Viena, Praga y París. Un recorrido diseñado para aquellos que buscan algo diferente a los típicos itinerarios de Eurotrip, con un pequeño grupo y atención personalizada en cada paso del camino.

<strong>Madrid: </strong> Sumérgete en la vibrante capital de España con sus impresionantes plazas, el Museo del Prado y sus icónicos barrios llenos de vida.

<strong>Roma: </strong>Desde el majestuoso Coliseo hasta la Fontana di Trevi, Roma es una fiesta para los sentidos con su rica historia y gastronomía.

<strong>Bari: </strong>Exploraremos esta joya de la región de Puglia, con su encantador puerto y sus calles llenas de historia.

<strong>Budapest: </strong> Relájate en sus famosos baños termales y explora su vibrante vida nocturna.

<strong>Viena: </strong>Camina por la elegante capital de la música clásica, visitando la Ópera de Viena y los palacios imperiales.

<strong>Praga: </strong>Déjate envolver por la magia de esta ciudad de cuentos de hadas con su Castillo, el Puente de Carlos y la Plaza de la Ciudad Vieja.

<strong>París: </strong>Finaliza este increíble viaje en la romántica Ciudad del Amor, admirando la Torre Eiffel y el Louvre.

<strong>Costo: $58,900 MXP por persona en ocupación doble.</strong>
Reserva tu lugar con <strong>$10,000 MXP</strong> y liquida en cómodos abonos hasta un mes antes del viaje.",
                'imagen' => 'images/eurotrip.png',
                'destinos' => json_encode(['Madrid', 'Roma', 'Bari', 'Budapest', 'Viena', 'Praga', 'París']),
                'presupuesto' => 58900,
                'actividad' => 'cultural',
                'meta_title' => 'Viaje a Europa 2025: Madrid, Roma, París y más | Tecnicolor Travel',
                'meta_description' => 'Descubre Europa en primavera/verano 2025...',
                'paises' => json_encode(['España', 'Italia', 'Hungría', 'Austria', 'República Checa', 'Francia']),
                'pdf' => 'itinerarios/eurotrip_itinerario.pdf',
                'updated_at' => now(), 
            ]
        );

        
        Viaje::updateOrInsert(
            ['slug' => 'grecia-croacia-belleza-adriatico'], 
            [
                'nombre' => 'Italia, Grecia y Croacia: Belleza del Adriático',
                'descripcion_corta' => 'Roma, Nápoles, Atenas, Santorini, Naxos, Trogir y Dubrovnik.',
                'descripcion_larga' => "Imagina un verano inolvidable recorriendo algunas de las ciudades más fascinantes del Mediterráneo y Europa. Del 25 de junio al 10 de julio, te invitamos a un viaje exclusivo de 15 noches y 16 días para descubrir Roma, Nápoles, Santorini, Naxos, Atenas, Dubrovnik y Trogir.

<strong>Roma: </strong> Descubre los vestigios históricos del Coliseo, el Foro Romano y la Fontana di Trevi.

<strong>Nápoles y Costa Amalfitana: </strong> Recorre sus históricas calles y contempla las hermosas vistas del Volcán Vesubio.

<strong>Santorini y Naxos: </strong> Disfruta de impresionantes vistas en Santorini y la tranquilidad de Naxos con sus playas y templos antiguos.

<strong>Atenas:</strong> Explora la Acrópolis y el barrio de Plaka, la esencia de la Grecia clásica.

<strong>Dubrovnik y Trogir:</strong> Admira la histórica Perla del Adriático y explora la costa dálmata con sus paisajes impresionantes.

<strong>Costo: $58,900 MXP por persona en ocupación doble</strong> 
Reserva tu lugar con <strong>$10,000 MXP</strong> y liquida en cómodos abonos hasta un mes antes del viaje.",
                'imagen' => 'images/grecia-croacia.png',
                'destinos' => json_encode(['Atenas', 'Santorini', 'Dubrovnik', 'Roma', 'Napoles', 'Naxos', 'Trogir']),
                'presupuesto' => 58900,
                'actividad' => 'playa',
                'meta_title' => 'Italia, Grecia y Croacia: Atenas, Santorini y Dubrovnik | Tecnicolor Travel',
                'meta_description' => 'Viaja a Italia, Grecia y Croacia...',
                'paises' => json_encode(['Italia', 'Grecia', 'Croacia']),
                'pdf' => 'itinerarios/grecia_croacia_itinerario.pdf',
                'updated_at' => now(),
            ]
        );
    }
}

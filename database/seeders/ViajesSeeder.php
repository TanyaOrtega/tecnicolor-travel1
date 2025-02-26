<?php

namespace Database\Seeders; // ✅ Este namespace es clave

use Illuminate\Database\Seeder;
use App\Models\Viaje;

class ViajesSeeder extends Seeder
{
    public function run(): void
    {
        Viaje::create([
            'nombre' => '✨ La Vuelta a Europa Primavera/Verano 2025 ✨',
            'slug' => 'vuelta-europa-primavera-verano-2025',
            'descripcion_corta' => 'Recorre Madrid, Roma, Bari, Budapest, Viena, Praga y París.',
            'descripcion_larga' => 'Un recorrido de 16 noches y 17 días explorando las principales ciudades europeas con actividades culturales, gastronómicas y de aventura.',
            'imagen' => 'images/eurotrip.png',
            'destinos' => json_encode(['Madrid', 'Roma', 'Bari', 'Budapest', 'Viena', 'Praga', 'París']),
            'presupuesto' => 58900,
            'actividad' => 'cultural',
            'meta_title' => 'Viaje a Europa 2025: Madrid, Roma, París y más | Tecnicolor Travel',
            'meta_description' => 'Descubre Europa en primavera/verano 2025. Recorre Madrid, Roma, Budapest, Viena y París en un viaje cultural inolvidable. Reserva ahora con Tecnicolor Travel.',
        ]);

        Viaje::create([
            'nombre' => '🌿 Italia, Grecia y Croacia: Belleza del Adriático 🌿',
            'slug' => 'grecia-croacia-belleza-adriatico',
            'descripcion_corta' => 'Roma, Nápoles, Atenas, Santorini, Naxos, Trogir y Dubrovnik.',
            'descripcion_larga' => 'Sumérgete en la cultura mediterránea visitando Atenas, disfruta de los atardeceres de Santorini y explora Dubrovnik.',
            'imagen' => 'images/grecia-croacia.png',
            'destinos' => json_encode(['Atenas', 'Santorini', 'Dubrovnik', 'Roma', 'Napoles', 'Naxos', 'Trogir']),
            'presupuesto' => 58900,
            'actividad' => 'playa',
            'meta_title' => 'Italia, Grecia y Croacia: Atenas, Santorini y Dubrovnik | Tecnicolor Travel',
            'meta_description' => 'Viaja a Italia, Grecia y Croacia con Tecnicolor Travel. Descubre Atenas, relájate en Santorini y explora Dubrovnik.',
        ]);
    }
}

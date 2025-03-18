<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viaje;

class ViajeController extends Controller
{
    public function index()
    {
        $viajes = Viaje::all(); // ✅ Cargamos todos los viajes desde la DB
        return view('home', compact('viajes'));
    }

    public function eurotrip()
    {
        $viaje = Viaje::where('slug', 'eurotrip')->firstOrFail();
        return view('viajes.eurotrip', compact('viaje'));
    }

    public function greciaCroacia()
    {
        $viaje = Viaje::where('slug', 'grecia-croacia')->firstOrFail();
        return view('viajes.grecia-croacia', compact('viaje'));
    }

    // 🔍 Filtrado avanzado
    public function buscar(Request $request)
    {
        $viajes = Viaje::query();

        // 🔎 Fitro por destino (parcial y exacto)
        if ($request->filled('destino')) {
            $destino = strtolower($request->destino);
            $viajes->where(function($query) use ($destino) {
                $query->whereJsonContains('destinos', $destino)
                      ->orWhere('descripcion_corta', 'like', "%$destino%")
                      ->orWhere('descripcion_larga', 'like', "%$destino%");
            });
        }

        // 💸 Filtro por presupuesto
        if ($request->filled('presupuesto')) {
            $viajes->where('presupuesto', '<=', $request->presupuesto);
        }

        // 🏄‍♂️ Filtro por actividad
        if ($request->filled('actividad')) {
            $viajes->where('actividad', $request->actividad);
        }

        $viajesFiltrados = $viajes->get();

        return view('resultados', compact('viajesFiltrados'));
    }

    // 🌟 Nuevo método para mostrar detalles de un viaje según el slug
    public function mostrar($slug)
    {
        $viaje = Viaje::where('slug', $slug)->firstOrFail();
        return view('viajes.mostrar', compact('viaje'));
    }


    public function descargarItinerario($id)
{
    $viaje = Viaje::findOrFail($id);

    // Si la ruta guardada ya incluye "storage/", ajustamos la descarga
    $rutaArchivo = str_starts_with($viaje->pdf, 'storage/') 
        ? storage_path("app/public/" . str_replace('storage/', '', $viaje->pdf)) 
        : public_path($viaje->pdf);

    if ($viaje->pdf && file_exists($rutaArchivo)) {
        return response()->download($rutaArchivo);
    }

    return back()->with('error', 'El itinerario no está disponible.');
}


}

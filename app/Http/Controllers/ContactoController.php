<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function enviarFormulario(Request $request)
    {
        // Validación de los campos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string|max:1000',
        ]);

        // Si todo sale bien, redirigimos con un mensaje de éxito
        return redirect()->route('contacto')->with('success', '✅ ¡Tu mensaje ha sido enviado con éxito!');
    }
}

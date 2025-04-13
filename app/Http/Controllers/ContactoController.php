<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function enviarFormulario(Request $request)
    {
        // Validación de los campos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string|max:1000',
        ]);

        // Enviar correo con los datos del formulario
        Mail::to('tecnicolortravel@gmail.com')->send(new ContactoMail($request->all()));

        // Redirigir con mensaje de éxito
        return redirect()->route('contacto')->with('success', '✅ ¡Tu mensaje ha sido enviado con éxito!');
    }
}

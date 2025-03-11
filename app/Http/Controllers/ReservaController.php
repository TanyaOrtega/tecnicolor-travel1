<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Viaje;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Mail\ReservaConfirmacion;
use Illuminate\Support\Facades\Mail;
use PDF; // Importar la fachada de DomPDF

class ReservaController extends Controller
{
    // 📌 Muestra el formulario de reserva
    public function formulario($viaje_id)
    {
        $viaje = Viaje::findOrFail($viaje_id);
        return view('reservas.formulario', compact('viaje'));
    }

    // 🔄 Crear la reserva y redirigir a Stripe
    public function confirmar(Request $request)
    {
        $request->validate([
            'viaje_id' => 'required|exists:viajes,id',
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:20',
            'personas' => 'required|integer|min:1',
            'anticipo' => 'required|numeric|min:1'
        ]);

        // Guardar los datos temporalmente en sesión para recuperarlos después
        session(['datosReserva' => $request->all()]);

        return redirect()->route('reservas.stripe');
    }

    // 💳 Mostrar el formulario de Stripe
    public function mostrarStripe()
    {
        $datosReserva = session('datosReserva');

        if (!$datosReserva) {
            return back()->with('error', 'No hay datos de reserva disponibles.');
        }

        return view('reservas.stripe', compact('datosReserva'));
    }

    // 💳 Procesar el pago con Stripe y guardar la reserva

    public function pagar(Request $request)
    {
        $request->validate([
            'stripeToken' => 'required|string'
        ]);
    
        $datosReserva = session('datosReserva');
    
        if (!$datosReserva) {
            return back()->with('error', 'No hay datos de reserva disponibles.');
        }
    
        Stripe::setApiKey(config('services.stripe.secret'));
    
        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $datosReserva['anticipo'] * 100, // Stripe trabaja en centavos
                'currency' => 'mxn',
                'payment_method_data' => [
                    'type' => 'card',
                    'card' => ['token' => $request->stripeToken]
                ],
                'confirm' => true,
                'automatic_payment_methods' => [
                    'enabled' => true,
                    'allow_redirects' => 'never'  // Esto evita que Stripe intente redirigir
                ]
            ]);
    
            // Guardar la reserva en la base de datos tras el pago exitoso
            $reserva = Reserva::create($datosReserva);
    
            // Redirigir a una vista de confirmación con los datos
            return view('reservas.confirmacion', compact('reserva'));
    
        } catch (\Exception $e) {
            return back()->with('error', 'Error en el pago: ' . $e->getMessage());
        }
    }

    // 📄 Generar y descargar la confirmación en PDF
public function descargarPDF($reserva_id)
{
    $reserva = Reserva::with('viaje')->findOrFail($reserva_id);

    $pdf = PDF::loadView('reservas.pdf', compact('reserva'));

    return $pdf->download('confirmacion_reserva_' . $reserva->id . '.pdf');
}


}

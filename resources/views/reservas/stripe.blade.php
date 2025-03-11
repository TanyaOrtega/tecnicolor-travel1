@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">💳 Completar Pago</h1>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('reservas.pagar') }}" method="POST" id="payment-form">
    @csrf

    <div id="card-element" class="mb-3"></div>
    <div id="card-errors" class="text-danger mb-3"></div>

    <input type="hidden" name="stripeToken" id="stripeToken">

    <button type="submit" class="btn btn-success">Pagar Ahora</button>
</form>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe("{{ config('services.stripe.key') }}");
    var elements = stripe.elements();
    var card = elements.create('card');
    card.mount('#card-element');

    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                document.getElementById('card-errors').textContent = result.error.message;
            } else {
                document.getElementById('stripeToken').value = result.token.id;
                form.submit();
            }
        });
    });
</script>
@endsection

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | Este archivo almacena las credenciales de servicios de terceros como
    | Mailgun, Postmark, AWS, Stripe y Mailtrap. Centraliza las configuraciones
    | para que Laravel pueda usarlas fácilmente con env().
    |
    */

    // 🔹 Configuración de Mailgun (no usada actualmente)
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    // 🔹 Configuración de Postmark (no usada actualmente)
    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    // 🔹 Configuración de AWS SES (para enviar emails si se usa SES)
    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // 🔹 Configuración de Stripe para pagos
    'stripe' => [
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    

    // 🔹 Configuración de Mailtrap (usada para pruebas de emails)
    'mailtrap' => [
        'host' => env('MAIL_HOST', 'sandbox.smtp.mailtrap.io'),
        'port' => env('MAIL_PORT', 2525),
        'username' => env('MAIL_USERNAME'),
        'password' => env('MAIL_PASSWORD'),
        'encryption' => env('MAIL_ENCRYPTION', 'tls'),
        'from_address' => env('MAIL_FROM_ADDRESS', 'no-reply@tecnicolor-travel.com'),
        'from_name' => env('MAIL_FROM_NAME', 'Tecnicolor Travel'),
    ],

];


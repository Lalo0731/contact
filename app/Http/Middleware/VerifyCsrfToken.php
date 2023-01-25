<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/notifications-webhook',
        '/notifications-webhook2',
        'conekta-webhook',
        '/conekta-webhook-production',
        '/my-conecta-reference',
        '/my-conecta-card',
        '/my-conecta-oreda-payment',
        '/pagaphone-webhook',
        '/compartcarga-webhook',
        'gestopago-webhook',
        '/diatel-webhook',
        '/recargamax-webhook',
        '/axios-webhook',
        '/payment-stripe-server',
        '/recharge-webhook',
    ];
}

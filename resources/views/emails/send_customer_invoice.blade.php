@component('mail::message')

# Factura Realizada

Hola, <strong>{!! $invoice->customer->tradename !!}</strong>

Adjuntamos la factura #{!! $invoice->folio !!} con fecha {!! $invoice->date !!}.

{!! $message !!}

@component('mail::subcopy')

<p style="font-size: 10px; text-align: center; color: #aaaaaa; margin-top: 35px;">
    Este mensaje ha sido enviado desde una dirección de correo electrónico exclusivamente de notificación, que no admite mensajes. Por favor, no responda al mismo.
</p>
@endcomponent
@endcomponent

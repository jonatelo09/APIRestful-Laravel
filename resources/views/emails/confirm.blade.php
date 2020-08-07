@component('mail::message')
# Hola {{$user->name}}

Has cambiado tu correo electronico. Por favor verifica la nueva direccion usando el siguiente boton:

@component('mail::button', ['url' => route('verify', $user->verification_token)])
Cofirmar mi cuenta
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

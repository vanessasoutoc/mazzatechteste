@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Whoops!
@else
# Olá!
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
Você está recebendo este e-mail porque recebemos um pedido de redefinição de senha para sua conta.

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
Alterar Senha
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
Se você não solicitou uma reinicialização da senha, nenhuma ação adicional será necessária.

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
Obrigado,<br>
MazzaTech
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
Se você está tendo problemas ao clicar no botão, clique aqui "{{ $actionText }}" ou copie e cole o link a seguir no seu browser: {{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endisset
@endcomponent

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <title>LaProj5 | @yield('title', 'Chat')</title>
    </head>
    <body>
        <header class="header">
            <div class="header-container">
            <div class="logo"><img class="logoimmagine" src="images/products/Logo.png" alt="Logo"></div>
            <div class="name">ALLOGGISTUDENTI.com</div>
            <nav class="menu" fixed="right">
            @can('isLocatore')
                @include('layouts/_navlocatore')
            @endcan
            @can('isLocatario')
                @include('layouts/_navlocatario')
            @endcan
            </nav>
            </div>
        </header>
        <hr class="spaziatura">
        @isset($messaggi)
            @foreach($messaggi as $messaggio)
            <div>Mittente:{{$messaggio->mittente}} in data {{$messaggio->data}}
                <text>{{$messaggio->testo}}</text>
            </div>
            @endforeach
        @endisset()
        <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>
        
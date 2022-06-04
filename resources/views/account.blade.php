<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <title>LaProj5 | @yield('title', 'Account')</title>
    </head>
    <body>
        <header class="header">
            <div class="header-container">
            <div class="logo"><img class="logoimmagine" src="images/products/Logo.png" alt="Logo"></div>
            <div class="name">ALLOGGISTUDENTI.com</div>
            <nav class="menu" fixed="right">
            @can('isLocatore')
                @include('layouts/_navLocatore')
            @endcan
            @can('isLocatario')
                @include('layouts/_navLocatario')
            @endcan
            </nav>
            </div>
        </header>


        <div>
        @isset($account)
        <section class= "profilolocatario">
            <div class= "fotoprofilo">
                <p class="locatarioprofilo"> {{$account->name }} {{$account->surname}}</p>
                <img class="student" src="{{ Auth::user()->fotoprofilo }}" alt="locatore">
                <p class="locataridescrizione">  {{$account->descrizione}}</p>
                <br>
                <p><a href="{{ route('modificaAccount') }}">Modifica</a><p>
                <br>
            </div>
            <div class="datipersonali">
                <p class="locatarioprofilo"> Dati personali </p>
                <p class="locatarioprofilo1"> Utente:  {{$account->role}}</p>
                <p class="locatarioprofilo1"> Nome: {{$account->name}}</p>
                <p class="locatarioprofilo1"> Cognome: {{$account->surname}}</p>
                <p class="locatarioprofilo1"> Data di nascita: {{$account->data_nascita }}</p>
                <p class="locatarioprofilo1"> Sesso: {{$account->sesso}}</p>
            </div>
        </section>
        @endisset()
        </div>
        
        <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>
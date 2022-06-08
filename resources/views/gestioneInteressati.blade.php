<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}">
      <!--<link rel="stylesheet"  href="popup.js">-->
      <script defer src="/js/popup.js"></script>
      <title>LaProj5 | @yield('title', 'Interessati')</title>
   </head>
    <body>
        <header class="header">
            <div class="header-container">
                <div class="logo"><img class="logoimmagine" src="images/products/Logo.png" alt="Logo"></div>
                <div class="name">ALLOGGISTUDENTI.com</div>
                <nav class="menu" fixed="right">
                @include('layouts/_navlocatore')
                </nav>
            </div>
        </header>
        <hr class="spaziatura">
        <div style="align: center">
        @isset($offerta)
            @isset($utente)
            <h2>{{$utente->name}} {{$utente->surname}} ha opzionato questa offerta: "{{$offerta->titolo}}"</h2>
            <p> Qui sotto sono riportate le caratteristiche principali dell'utente: </p>
            <ul>
                <li> Nome: {{$utente->name}} </li>
                <li> Cognome: {{$utente->surname}} </li>
                <li> Genere: {{$utente->sesso}} </li>
                <li> Descrizione: {{$utente->descrizione}} </li>
            </ul>
            @endisset()  
            @endisset()       
        <footer>
        @include('layouts/-footer')
        </footer>
    </body>
</html>
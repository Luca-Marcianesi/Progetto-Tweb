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
                <div class="logo"><img class="logoimmagine" src="/images/products/Logo.png" alt="Logo"></div>
                <div class="name">ALLOGGISTUDENTI.com</div>
                <nav class="menu" fixed="right">
                @include('layouts/_navlocatore')
                </nav>
            </div>
        </header>
        <div class="titoloo">Interessati</div>
        <div class="cardlocatore" style="align: center; height: 300px">
        @isset($offerta)
            @isset($utente)
            <h2 class="locatarioprofilo1 infpers titolo"  style="margin-top: 10px; font-size: medium">{{$utente->name}} {{$utente->surname}} ha opzionato questa offerta: "{{$offerta->titolo}}"</h2>
            <p class="locatarioprofilo1 titolo" style="margin-top: 10px; font-size: medium; color:#30306C">Dati utente: </p>
            <ul>
                <li class="locatarioprofilo1"> Nome: {{$utente->name}} </li>
                <li  class="locatarioprofilo1"> Cognome: {{$utente->surname}} </li>
                <li class="locatarioprofilo1"> Genere: {{$utente->sesso}} </li>
                <li class="locatarioprofilo1"> Descrizione: {{$utente->descrizione}} </li>
            </ul>
            @endisset()  
        @endisset()
            @if($assegnata)
            <a href="{{ route('assegnaOfferta', ['id'=>$offerta->id,'locatario'=>$utente->username])}}"><button class="button">assegna</button></a>
            @else
            <p> Offerta già assegnata </p>
            @endif()      
        <footer>
        @include('layouts/-footer')
        </footer>
    </body>
</html>
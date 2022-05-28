<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <title>LaProj5 | @yield('title', 'Catalogo')</title>
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
        <section class= "profilolocatario">
    <div class= "fotoprofilo">
    <p class="locatarioprofilo"> {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
    <img class="student" src="images/products/locatrice.webp" alt="locatore">
    <p class="locataridescrizione"> I miei appartamenti nel cuore di Ancona saranno perfetti per le esigenze di tutti gli studenti.
          <br>
        <button class="modifica">modifica</button>
        <br>
    </p>
    </div>
    <div class="datipersonali">
    <p class="locatarioprofilo"> Dati personali </p>
    <p class="locatarioprofilo1"> Utente:  Locatore</p>
    <p class="locatarioprofilo1"> Nome: {{ Auth::user()->name }}</p>
    <p class="locatarioprofilo1"> Cognome: {{ Auth::user()->surname }}</p>
    <p class="locatarioprofilo1"> Data di nascita: {{ Auth::user()->data_nascita }}</p>
    <p class="locatarioprofilo1"> Sesso: {{ Auth::user()->sesso }}</p>
    <p class="locatarioprofilo1"><button class="modifica">modifica</button>   <br></p>
    </div>
    

</section>
        </div>
        
        <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>
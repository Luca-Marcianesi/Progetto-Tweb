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
                @include('layouts/_navpublic')
            </nav>
            </div>
        </header>

        <div>
        <section class="catalogo">
<div class="container">
    <p class="titolo"> Esplora in base alla tua città</p><br>
    <ul class="griglia">    
        @foreach ($topCities as $citta)
       <li> 
           <div class="foto">
           @include('helpers/cittaImg', ['imgFile' => $citta->image])
           </div>

        <p class="arancione"> {{ $citta->name }} </p>
        <p class="arancione2"> <a class="blu" href="{{ route('annunciHome', [$citta->name])}}" >Visualizza</p></a></li>
        @endforeach
    </ul>
</div>
</section>
</div>
        
        <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>
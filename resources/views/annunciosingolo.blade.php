<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <title>LaProj5 | @yield('title', 'Annunci')</title>
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

<div class="annunciosingolo">
      <div class="columnsections col1">
      <p class ="titoloannuncio">  {{$offerta->titolo}} </p> <br> <br> <br>
      <br> 
      <div class="imgaffitto">
           @include('helpers/annunciosingoloImg', ['imgFile' => $offerta->image])
           </div>
      </div>

      <div class="columnsections col2">
       <p class = "description titolo"> {{$offerta->tipo}} </p>  
       <p class = "description titolo"> Indirizzo</p> 
       <p class="description">  {{$offerta->città}}, {{$offerta->locazione}} </p>
       <p class = "description titolo"> Stato</p>  
       <p class="description">  {{$offerta->stato}}</p>
       <p class = "description titolo"> Descrizione</p>  
       <p class="description">  {{$offerta->descrizione}}</p>
       <p class = "description titolo"> canone mensile</p>  
       <p class="description"> € {{$offerta->prezzo}}</p> 
      </div>

     
      </div>
    </div>
    <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>
    

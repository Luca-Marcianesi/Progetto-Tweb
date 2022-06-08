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
                @include('layouts/_navlocatore')
            </nav>
            </div>
        </header>
        @isset($offerta)
<div class="annunciosingolo">
<div class="row">
      <div class="columnsectionslocatore">
      <p class ="titoloannunciolocatario">  {{$offerta->titolo}} </p> <br> <br> <br>
      <div class="imgaffittolocatario">
           @include('helpers/annunciosingoloImg', ['imgFile' => $offerta->image])
        </div> 
</div>    
  

      <div class="columnsectionslocatore">
       <p class = "description titolo"> {{$offerta->tipo}} </p>  
       <p class = "description titolo"> Indirizzo</p> 
       <p class="description">  {{$offerta->città}}, {{$offerta->locazione}} </p>
       <p class = "description titolo"> Stato</p>  
       <p class="description">  {{$offerta->stato}}</p>
       <p class = "description titolo"> Descrizione</p>  
       <p class="description">  {{$offerta->descrizione}}</p>
       <p class = "description titolo"> canone mensile</p>  
       <p class="description"> € {{$offerta->prezzo}}</p> 
       @endisset()
       
       @isset($postoLetto)
        <p class = "description titolo"> Posti letto camera</p>  
        <p class="description">  {{$postoLetto->posti_letto_camera}}</p>
        @endisset()

        @isset($appartamento)
        <p class = "description titolo"> dimensioni</p>  
        <p class="description">  {{$appartamento->dimensioni}}</p>
       @endisset()

       
      </div>
      </div>

      
      
      </div>
    </div>

    

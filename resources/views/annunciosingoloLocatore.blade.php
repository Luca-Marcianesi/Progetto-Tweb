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

<div class="annunciosingolo">
      <div class="columnsections col1">
      <p class ="titoloannuncio">  {{$offerta->titolo}} </p> <br> <br> <br>
      <br> <!-- <img class="imgaffitto" src="images/affitto-stanza.jpg" alt="imgaffitto"> -->
      <p class = "imgaffitto">  </p>
      </div>

      <div class="columnsections col2">
       <p class = "description titolo"> {{$offerta->tipo}} </p>  
       <ul class ="ann">
       <p class = "description titolo"> Descrizione</p>  
       <p class="description">  {{$offerta->descrizione}}</p>
       <p class = "description titolo"> Servizi inclusi</p>  
       <p class="description">  {{$offerta->descrizione}}</p> 
       <p class = "description titolo"> canone mensile</p>  
       <p class="description">  {{$offerta->prezzo}}</p> 
      </div>

     
      </div>
    </div>

    

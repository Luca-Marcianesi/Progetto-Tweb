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
                @include('layouts/_navLocatore')
           
           
        
            </nav>
            </div>
        </header>

        <div>
        <div class="annunciosingololoc">
<p class ="description titolo">  STANZA TERZO PIANO</p> <br> <br> <br>
<button class="modifica">modifica</button>
       <button class="modifica">elimina</button>

      <div >
       <p class = "description titolo"> Descrizione</p>  
       <p class="description">  Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 250 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice. Riscaldamento Autonomo.</p>
       <p class = "description titolo"> Servizi inclusi</p>  
       <p class="description">  internet, televisione, lavatrice, riscaldamento autonomo</p> 
       <p class = "description titolo"> canone mensile</p>  
       <p class="description">  250 euro</p> 
       <p class = "description titolo"> foto </p>
       <img src="images/products/affitto-stanza.jpg" alt="">
    </div>
    </div>
    </div>

    <div class="annunciosingololoc">
    <p class ="description titolo">  APPARTAMENTO IN CENTRO</p> <br> <br> <br>
    <button class="modifica">modifica</button>
       <button class="modifica">elimina</button>
       <p class = "description titolo"> Descrizione</p>  
       <p class="description">  Affittasi appartamento ad Ancona, piazza del Papa 55 per 500 Euro al mese. Sono disponibili molti servizi, la casa è stata 
           recentemente ristrutturata. Due bagni. 
       </p>
       <p class = "description titolo"> Servizi inclusi</p>  
       <p class="description">   internet, televisione, lavatrice, riscaldamento autonomo,
           balcone, zona studio, terrazzo, giardino</p> 
       <p class = "description titolo"> canone mensile</p>  
       <p class="description">  500 euro</p>  
       <p class = "description titolo"> foto </p>
       <img src="images/products/appartamento2.jpg" alt="">
    </div>
    </div>   
        </div>
        
        <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>
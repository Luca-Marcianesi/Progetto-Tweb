<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <title>LaProj5 | @yield('title', 'Messaggi Locatore')</title>
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



    <section class="messaggilocatore">
      <div class="elencomsg">
        <div class="msg">
        <img class="fototonda"src="images/products/studente.jpeg" alt="">
        <p class="nomecognome"> Nome Cognome</p>
        <p class="testo"> Opzione appartamento</p>
        </div>
        <hr>
        <div class="msg">
        <img class="fototonda"src="images/products/studentessa.jpg" alt="">
        <p class="nomecognome"> Nome Cognome</p>
        <p class="testo"> Messaggio</p>
        </div>
        <hr>
        <div class="msg">
        <img class="fototonda"src="images/products/studentessa.jpg" alt="">
        <p class="nomecognome"> Nome Cognome</p>
        <p class="testo"> Opzione appartamento</p>
        </div>
        <hr>
        </div>

      <div class="messaggioaperto">
        <p class="nomecognome2"> Nome Cognome</p>        
        <img class="fototonda2"src="images/products/studentessa.jpg" alt="">
        <div class="container">
  <img src="images/products/studentessa.jpg" alt="Avatar">
  <p>ciao,sono interessata al tuo appartamento in centro.</p>
  <span class="time-right">11:00</span>
</div>
<!--
<div class="container darker">
  <img src="images/products/studentessa.jpg" alt="Avatar" class="right">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <img src="images/products/studentessa.jpg" alt="Avatar">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>
-->        <div class="container containerbott">

        <a class="button" href="">rispondi</a>
        <a class="button" href="">genera contratto</a>
</div>
        </div>

      <div class="mittente">
   <br>
        <img class="fototonda2"src="images/products/studentessa.jpg" alt="">
        <p class="nomecognome1"> Nome Cognome</p>
        <p class="nomecognome4"> Ha opzionato il tuo appartamento : nomeappartamento opzionato </p>

    <p class="nomecognome2"> Dati personali </p>
    <p class="nomecognome4"> Utente:  Locatore</p>
    <p class="nomecognome4"> Nome: nome</p>
    <p class="nomecognome4"> Cognome: ->surname </p>
    <p class="nomecognome4"> Data di nascita: ->data_nascita </p>
    <p class="nomecognome4"> Sesso: ->sesso </p>
    </div>

</section>

        

        <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>
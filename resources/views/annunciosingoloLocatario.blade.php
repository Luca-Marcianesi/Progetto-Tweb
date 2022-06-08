<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <link rel="stylesheet"  href="popup.js" >
        <script defer src="/js/popup.js"></script>
        <title>LaProj5 | @yield('title', 'Annunci')</title>
    </head>
    <body>
        <header class="header">
            <div class="header-container">
            <div class="logo"><img class="logoimmagine" src="images/products/Logo.png" alt="Logo"></div>
            <div class="name">ALLOGGISTUDENTI.com</div>
            <nav class="menu" fixed="right">
                @include('layouts/_navlocatario')
            </nav>
            </div>
        </header>

<div class="annunciosingolo">
    <div class="row">
      <div class="columnsectionslocatario ">
      <p class ="titoloannunciolocatario">  {{$offerta->titolo}} </p> <br> <br> <br>
      <div class="imgaffittolocatario">
           @include('helpers/annunciosingololocatarioImg', ['attrs' => 'imagefrm', 'imgFile' => $offerta->image])
           </div> 
      </div>

      <div class="columnsectionslocatario ">
       <p class = "description titolo"> {{$offerta->tipo}} </p> 
       @isset($opzionata)
       <p class="description titolo">Offerta già opzionata<p>
        @else<p class="description titolo"><a class="button buttonopziona"  href="{{ route('opziona',[$offerta->id] )}}"> Opziona</a>
        <p> 
      @endisset()
       <p class="description titolo"><a class="button buttonopziona" href=""> Opziona</a><p> 
       <p class = "description titolo"> Indirizzo</p> 
       <p class="description">  {{$offerta->città}}, {{$offerta->locazione}} </p>
       <p class = "description titolo"> Stato</p>  
       <p class="description">  {{$offerta->stato}}</p>
       <p class = "description titolo"> Descrizione</p>  
       <p class="description">  {{$offerta->descrizione}}</p>
       <p class = "description titolo"> canone mensile</p>  
       <p class="description"> € {{$offerta->prezzo}}</p> 
      </div>

    @isset($proprietario)
    <div class="columnsectionslocatario">
    <div class="cardlocatore">
      <div class="containeraccount">
        <p class="locatarioprofilo1 infpers titolo">Locatore</p>
        <p class="locatarioprofilo1">Nome: {{$proprietario->name}}</p>
        <p class="locatarioprofilo1">Cognome: {{$proprietario->surname}}</p>
        <p class="locatarioprofilo1"> Mail: {{$proprietario->email}}</p>
        <p class="locatarioprofilo1"> Descrizione: {{$proprietario->descrizione}}</p>
        <p class="locatarioprofilo1 titolo ">contatta <a class="buttonrotondo" href="">+</a><p>
    @endisset()
        <div class="chatt-popupp" id="myForm">
  <form action="/action_page.php" class="formm-containerr">
    <textarea placeholder="Poni le tue domande.." name="msgg" required></textarea>

    <button type="submit" class="btnn">Invia</button>
    <button type="button" class="btnn cancell" onclick="closeForm()">Chiudi</button>
  </form>
</div> 
<script>function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
} 
  </script>
      </div>
    </div>
  </div>
  </div>
    </div>
    <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>    

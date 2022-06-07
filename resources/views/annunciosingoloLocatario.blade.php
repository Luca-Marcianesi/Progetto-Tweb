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
       <p class="description titolo"><a class="button buttonopziona" href=""> Opziona</a><p> 
       <p class = "description titolo"> Descrizione</p>  
       <p class="description">  {{$offerta->descrizione}}</p>
       <p class = "description titolo"> Servizi inclusi</p>  
       <p class="description">  {{$offerta->descrizione}}</p> 
       <p class = "description titolo"> canone mensile</p>  
       <p class="description">  {{$offerta->prezzo}}</p> 
      </div>

    @isset($proprietario)
    <div class="columnsectionslocatario">
    <div class="cardlocatore">
      <div class="containeraccount">
        <p class="locatarioprofilo1 infpers">Informazioni locatore</p>
        <p class="locatarioprofilo1">Nome:{{$proprietario->email}}</p>
        <p class="locatarioprofilo1"> Cognome{{$proprietario->name}}</p>
        <p class="locatarioprofilo1"> descrizione </p>
        <p><a class="button" href=""> Contatta</a><p>
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

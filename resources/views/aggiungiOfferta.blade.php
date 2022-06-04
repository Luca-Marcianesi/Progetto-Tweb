<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
      <title>LaProj5 | @yield('title', 'Inserisci Offerta')</title>
      <script type="text/javascript">
            function toggleMenu(currMenu,nMenu){
                var thisMenu = document.getElementById(currMenu).style
                var aMenu = document.getElementById(nMenu).style

                thisMenu.display = "block"
                aMenu.display = "none"
            }
        </script>   
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
      <div class="container-contact" >
        <div class="imgicona"><img src="images/products/iconalogin.png" alt="icona" style="width: 200px;; height:auto;" ></div>
        <h3 class ="titoloo">Inserisci offerta</h3>

        
    <div class="labelspa">
        <button class="labelpostoletto" onclick="toggleMenu('formPostoLetto','formAppartamento')" >Posto Letto</button>
        <button class="labelappartamento" onclick="toggleMenu('formAppartamento','formPostoLetto')" >Appartamento</button>

      <div class="wrap-contact2" id="formPostoLetto" style="display:none">
        @include('formAggiungiPostoLetto') 
      </div>

      <div class="wrap-contact2" id="formAppartamento" style="display:none">
        @include('formAggiungiAppartamento')  
      </div>
      </div>
    </div>
      <footer>
         @include('layouts/-footer')
      </footer>
   </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
      <title>LaProj5 | @yield('title', 'Inserisci Offerta')</title>
      <!--
      <script src="{{ asset('js/validazione.js') }}" ></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script>
         $(function () {
            var actionUrl = "{{ route('aggiungiAppartamento') }}";
            var formId = 'addAppartamento';
            $(":input").on('blur', function (event) {
               var formElementId = $(this).attr('id');
               doElemValidation(formElementId, actionUrl, formId);
               });
            $("#addAppartamento").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
            });
         });
      </script>
      
      <script>
         $(function () {
            var actionUrl = "{{ route('aggiungiPostoLetto') }}";
            var formId = 'addPostoLetto';
            $(":input").on('blur', function (event) {
               var formElementId = $(this).attr('id');
               doElemValidation(formElementId, actionUrl, formId);
               });
            $("#addPostoLetto").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
            });
         });
      </script> -->
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
    </div>
    

    <div>
        <p onclick="toggleMenu('formPostoLetto','formAppartamento')" >Posto Letto</P>
        <p onclick="toggleMenu('formAppartamento','formPostoLetto')" >Appartamento</P>
      </div>

      <div class="wrap-contact2" id="formPostoLetto" style="display:none">
        @include('formAggiungiPostoLetto') 
      </div>

      <div class="wrap-contact2" id="formAppartamento" style="display:none">
        @include('formAggiungiAppartamento')  
      </div>
      <footer>
         @include('layouts/-footer')
      </footer>
   </body>
</html>
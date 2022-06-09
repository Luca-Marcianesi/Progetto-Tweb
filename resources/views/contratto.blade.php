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
            <div class="logo"><img class="logoimmagine" src="/images/products/Logo.png" alt="Logo"></div>
            <div class="name">ALLOGGISTUDENTI.com</div>
            <nav class="menu" fixed="right">
               @include('layouts/_navlocatore')
            </nav>
         </div>
      </header>
      <hr class="spaziatura">
      @isset($offerta)
        @isset($utente)
            {{$offerta->titolo}} e {{$utente->username}}
        @endisset()
      @endisset()





      <footer>
            @include('layouts/-footer')
        </footer>
   </body>
</html>
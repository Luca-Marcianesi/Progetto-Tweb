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
        @isset($interessati)
        <div class="titoloo">Interessati</div>
        <table class="center">
            <tr>
                <th class="tabellatitolo" >Offerta</th>
                <th class="tabellatitolo" >Nome</th>
                <th class="tabellatitolo">Visualizza</th>
            </tr>
            @foreach($interessati as $interessato)
            <tr>
                <td  class="tabellaelem">{{$interessato->titolo}}</td>
                <td class="tabellaelem">{{$interessato->utente}}</td>
                <td style="text-align:center" class="tabellaelem"><a href= "{{ route('dettagliOpzionamento', ['offerta'=>$interessato->offerta,'utente'=>$interessato->utente])}}"> + </a></td>
            </tr>  
            @endforeach
        </table>
        @endisset()
        
        @isset($mieiAlloggi)
        <div>
        <div class="titoloo">I miei alloggi</div>

            @foreach ($mieiAlloggi as $alloggio)
            <div class="annunciosingololoc">
                <p class ="description titolo">{{$alloggio->titolo}}</p> <br> <br> <br>
                  <a class="modifica" href = "{{ route('dettagliAlloggioProprietario', [$alloggio->id])}}">modifica</a>
                <div>
                    <p class = "description titolo"> Tipo</p>  
                    <p class="description"> {{$alloggio->tipo}} </p>
                    <p class = "description titolo"> Indirizzo</p>  
                    <p class="description"> {{$alloggio->locazione}},{{$alloggio->città}} </p>
                    <p class = "description titolo"> Descrizione</p>  
                    <p class="description"> {{$alloggio->descrizione}} </p>
                    <p class = "description titolo"> Stato</p>  
                    <p class="description">  {{$alloggio->stato}}</p> 
                    <p class = "description titolo"> canone mensile</p>  
                    <p class="description">  {{$alloggio->prezzo}}</p> 
                    <p class = "description titolo"> dimensioni </p>
                    <p class = "description titolo"> foto </p>
                    <img src="images/products/affitto-stanza.jpg" alt="">
                </div>
            </div>
            @endforeach
            @endisset()
        </div>
     
        
        <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>
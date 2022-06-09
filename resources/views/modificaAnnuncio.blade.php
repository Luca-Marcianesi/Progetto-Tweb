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
      <h3 class ="titoloo">Modifica Annuncio</h3>
      <div class="wrap-contact2">
      @isset($offerta)
      @isset($appartamento)
         {{ Form::open(array('route' => ['modificaAppartamento', $offerta->id],'files' => true, 'class' => 'contact-form')) }}

         <div  class="wrap-input">
            {{ Form::label('titolo', 'Titolo', ['class' => 'label-input']) }}
            {{ Form::text('titolo',($offerta->descrizione_breve),  ['class' => 'input', 'id' => 'titolo']) }}
            @if ($errors->first('titolo'))
            <ul class="errors">
               @foreach ($errors->get('titolo') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('desc_b', 'Descrizione breve', ['class' => 'label-input']) }}
            {{ Form::textarea('desc_b',($offerta->descrizione_breve),  ['class' => 'input', 'id' => 'desc_b']) }}
            @if ($errors->first('desc_b'))
            <ul class="errors">
               @foreach ($errors->get('desc_b') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('desc_l', 'Descrizione lunga', ['class' => 'label-input']) }}
            {{ Form::textarea('desc_l',($offerta->descrizione_breve),  ['class' => 'input', 'id' => 'desc_l']) }}
            @if ($errors->first('desc_l'))
            <ul class="errors">
               @foreach ($errors->get('desc_l') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('stato', 'Stato', ['class' => 'label-input']) }}
            {{ Form::select('stato',['libera' => 'Libera','occupata' => 'Occupata'],$offerta->stato, ['class' => 'input','id' => 'stato']) }}
            @if ($errors->first('stato'))
            <ul class="errors">
               @foreach ($errors->get('stato') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         
         <div  class="wrap-input">
            {{ Form::label('prezzo', 'Prezzo mensile', ['class' => 'label-input']) }}
            {{ Form::text('prezzo',($offerta->prezzo), ['class' => 'input', 'id' => 'prezzo']) }}
            @if ($errors->first('prezzo'))
            <ul class="errors">
               @foreach ($errors->get('prezzo') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('genere', 'Vincolo di genere(escludi)', ['class' => 'label-input']) }}
            {{ Form::select('genere',['n' => '----','M' => 'Maschio','F' => 'Femmina'], $offerta->genere, ['class' => 'input','id' => 'genere']) }}
            @if ($errors->first('genere'))
            <ul class="errors">
               @foreach ($errors->get('genere') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('cucina', 'Cucina', ['class' => 'label-input']) }}
            {{ Form::select('cucina',['si' => 'Si','no' => 'No'],$appartamento->cucina,  ['class' => 'input', 'id' => 'cucina']) }}
            @if ($errors->first('cucina'))
            <ul class="errors">
               @foreach ($errors->get('cucina') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('locale_ricreativo', 'Locale ricrativo', ['class' => 'label-input']) }}
            {{ Form::select('locale_ricreativo',['si' => 'Si','no' => 'No'],$appartamento->locale_ricreativo,  ['class' => 'input', 'id' => 'locale_ricreativo']) }}
            @if ($errors->first('locale_ricreativo'))
            <ul class="errors">
               @foreach ($errors->get('locale_ricreativo') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         

         <div  class="wrap-input">
            {{ Form::label('posti_letto_appartamento', 'Posti letto appartamento', ['class' => 'label-input']) }}
            {{ Form::number('posti_letto_appartamento',$appartamento->posti_letto_appartamento,  ['class' => 'input', 'id' => 'posti_letto_appartamento']) }}
            @if ($errors->first('posti_letto_appartamento'))
            <ul class="errors">
               @foreach ($errors->get('posti_letto_appartamento') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('numero_di_camere', 'Numero camere', ['class' => 'label-input']) }}
            {{ Form::number('numero_di_camere',($appartamento->numero_di_camere),  ['class' => 'input', 'id' => 'numero_di_camere']) }}
            @if ($errors->first('numero_di_camere'))
            <ul class="errors">
               @foreach ($errors->get('numero_di_camere') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('dimensioni', 'Dimensioni', ['class' => 'label-input']) }}
            {{ Form::text('dimensioni',($appartamento->dimensioni),  ['class' => 'input', 'id' => 'dimensioni']) }}
            @if ($errors->first('dimensioni'))
            <ul class="errors">
               @foreach ($errors->get('dimensioni') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div class="container-form-btn">               
            {{ Form::submit('Modifica Offerta', ['class' => 'button']) }}
         </div>
         {{ Form::close() }}
         @endisset()


         @isset($postoLetto)
         {{ Form::open(array('route' => ['modificaPostoLetto', $offerta->id],'files' => true, 'class' => 'contact-form')) }}

         <div  class="wrap-input">
            {{ Form::label('titolo', 'Titolo', ['class' => 'label-input']) }}
            {{ Form::text('titolo',($offerta->descrizione_breve),  ['class' => 'input', 'id' => 'titolo']) }}
            @if ($errors->first('titolo'))
            <ul class="errors">
               @foreach ($errors->get('titolo') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('desc_b', 'Descrizione breve', ['class' => 'label-input']) }}
            {{ Form::textarea('desc_b',($offerta->descrizione_breve),  ['class' => 'input', 'id' => 'desc_b']) }}
            @if ($errors->first('desc_b'))
            <ul class="errors">
               @foreach ($errors->get('desc_b') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('desc_l', 'Descrizione lunga', ['class' => 'label-input']) }}
            {{ Form::textarea('desc_l',($offerta->descrizione_breve),  ['class' => 'input', 'id' => 'desc_l']) }}
            @if ($errors->first('desc_l'))
            <ul class="errors">
               @foreach ($errors->get('desc_l') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('stato', 'Stato', ['class' => 'label-input']) }}
            {{ Form::select('stato',['libera' => 'Libera','occupata' => 'Occupata'],$offerta->stato, ['class' => 'input','id' => 'stato']) }}
            @if ($errors->first('stato'))
            <ul class="errors">
               @foreach ($errors->get('stato') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         
         <div  class="wrap-input">
            {{ Form::label('prezzo', 'Prezzo mensile', ['class' => 'label-input']) }}
            {{ Form::text('prezzo',($offerta->prezzo), ['class' => 'input', 'id' => 'prezzo']) }}
            @if ($errors->first('prezzo'))
            <ul class="errors">
               @foreach ($errors->get('prezzo') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('genere', 'Vincolo di genere(escludi)', ['class' => 'label-input']) }}
            {{ Form::select('genere',['n' => '----','M' => 'Maschio','F' => 'Femmina'], $offerta->genere, ['class' => 'input','id' => 'genere']) }}
            @if ($errors->first('genere'))
            <ul class="errors">
               @foreach ($errors->get('genere') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('angolo_studio', 'Angolo Studio', ['class' => 'label-input']) }}
            {{ Form::select('angolo_studio',['si' => 'Si','no' => 'No'],$postoLetto->angolo_studio,  ['class' => 'input', 'id' => 'angolo_studio']) }}
            @if ($errors->first('angolo_studio'))
            <ul class="errors">
               @foreach ($errors->get('angolo_studio') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('posti_letto_appartamento', 'Posti letto appartamento', ['class' => 'label-input']) }}
            {{ Form::number('posti_letto_appartamento',$postoLetto->posti_letto_appartamento,  ['class' => 'input', 'id' => 'posti_letto_appartamento']) }}
            @if ($errors->first('posti_letto_appartamento'))
            <ul class="errors">
               @foreach ($errors->get('posti_letto_appartamento') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('posti_letto_camera', 'Posti letto camera', ['class' => 'label-input']) }}
            {{ Form::number('posti_letto_camera',$postoLetto->posti_letto_camera,  ['class' => 'input', 'id' => 'posti_letto_camera']) }}
            @if ($errors->first('posti_letto_camera'))
            <ul class="errors">
               @foreach ($errors->get('posti_letto_camera') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('dimensioni_camera', 'Dimensioni camera', ['class' => 'label-input']) }}
            {{ Form::text('dimensioni_camera',($postoLetto->dimensioni_camera),  ['class' => 'input', 'id' => 'dimensioni_camera']) }}
            @if ($errors->first('dimensioni_camera'))
            <ul class="errors">
               @foreach ($errors->get('dimensioni_camera') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div class="container-form-btn">               
            {{ Form::submit('Modifica Offerta', ['class' => 'button']) }}
         </div>
         {{ Form::close() }}
         @endisset()
         @endisset()
   
         <button style="cursor: pointer" data-modal-target="#modal" class="deletebutton">ELIMINA</button>
                  <div class="modal" id="modal">
                    <div class="modal-header">
                      <div class="title">Conferma</div>
                      <button data-close-button class="close-button">x</button>
                    </div>
                    <div class="modal-body" align="center">
                        Sei sicuro di voler proseguire con l'eliminazione?<br>
                        <a href="{{ route('elimina', [$offerta->id] )}}"><button class="buttonconferma">Si</button></a>
                        <button class="buttonconferma" data-close-button>Annulla</button>
                    </div>
                  </div>
                   <div id="overlay"></div>
      </div>

         <footer>
            @include('layouts/-footer')
        </footer>
   </body>
</html>

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
               @include('layouts/_navlocatore')
            </nav>
         </div>
      </header>
      <hr class="spaziatura">
      <div class="wrap-contact2">
         {{ Form::open(array('route' => ['modificaOffertaProp', $offerta->id],'files' => true, 'class' => 'contact-form')) }}
         @isset($offerta)

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
         @endisset()
         @isset($appartamento)

         <div  class="wrap-input">
            {{ Form::label('posti_letto_appartamento', 'Posti letto appartamento', ['class' => 'label-input']) }}
            {{ Form::text('posti_letto_appartamento',$appartamento->posti_letto_appartamento,  ['class' => 'input', 'id' => 'posti_letto_appartamento']) }}
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
            {{ Form::textarea('numero_di_camere',($appartamento->numero_di_camere),  ['class' => 'input', 'id' => 'numero_di_camere']) }}
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
            {{ Form::textarea('dimensioni',($appartamento->dimensioni),  ['class' => 'input', 'id' => 'dimensioni']) }}
            @if ($errors->first('dimensioni'))
            <ul class="errors">
               @foreach ($errors->get('dimensioni') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         @endisset()
         @isset($postoLetto)

         <div  class="wrap-input">
            {{ Form::label('posti_letto_appartamento', 'Posti letto appartamento', ['class' => 'label-input']) }}
            {{ Form::text('posti_letto_appartamento',($postoLetto->posti_letto_appartamento),  ['class' => 'input', 'id' => 'posti_letto_appartamento']) }}
            @if ($errors->first('posti_letto_appartamento'))
            <ul class="errors">
               @foreach ($errors->get('posti_letto_appartamento') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('numero_di_camere', 'Numero di camere', ['class' => 'label-input']) }}
            {{ Form::textarea('numero_di_camere',($postoLetto->descrizione_breve),  ['class' => 'input', 'id' => 'numero_di_camere']) }}
            @if ($errors->first('numero_di_camere'))
            <ul class="errors">
               @foreach ($errors->get('numero_di_camere') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('dimensioni_camera', 'Dimensioni camera', ['class' => 'label-input']) }}
            {{ Form::textarea('dimensioni_camera',($postoLetto->dimensioni_camera),  ['class' => 'input', 'id' => 'dimensioni_camera']) }}
            @if ($errors->first('dimensioni_camera'))
            <ul class="errors">
               @foreach ($errors->get('dimensioni_camera') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         @endisset()
         
         <div class="container-form-btn">               
            {{ Form::submit('Modifica Offerta', ['class' => 'button']) }}
         </div>
         {{ Form::close() }}
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
   </body>
</html>

<div class="wrap-contact2">
         {{ Form::open(array('route' => 'aggiungiOfferta', 'class' => 'contact-form')) }}
         <div  class="wrap-input">
            {{ Form::label('titolo', 'Titolo annuncio', ['class' => 'label-input']) }}
            {{ Form::text('titolo', '', ['class' => 'input', 'id' => 'titolo']) }}
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
            {{ Form::text('desc_b', '', ['class' => 'input', 'id' => 'desc_b']) }}
            @if ($errors->first('desc_b'))
            <ul class="errors">
               @foreach ($errors->get('desc_b') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('città', 'Città', ['class' => 'label-input']) }}
            {{ Form::text('città', '', ['class' => 'input', 'id' => 'città']) }}
            @if ($errors->first('città'))
            <ul class="errors">
               @foreach ($errors->get('città') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('locazione', 'Indirizzo', ['class' => 'label-input']) }}
            {{ Form::text('locazione', '', ['class' => 'input', 'id' => 'locazione']) }}
            @if ($errors->first('locazione'))
            <ul class="errors">
               @foreach ($errors->get('locazione') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('prezzo', 'Prezzo mensile', ['class' => 'label-input']) }}
            {{ Form::text('prezzo', '', ['class' => 'input','id' => 'prezzo']) }}
            @if ($errors->first('prezzo'))
            <ul class="errors">
               @foreach ($errors->get('prezzo') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('desc_l', 'Descrizione lunga', ['class' => 'label-input']) }}
            {{ Form::text('desc_l', '', ['class' => 'input', 'id' => 'desc_l']) }}
            @if ($errors->first('desc_l'))
            <ul class="errors">
               @foreach ($errors->get('desc_l') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('cucina', 'Cucina', ['class' => 'label-input']) }}
            {{ Form::select('cucina',['no' => 'no','Si' => 'Si'], 'no', ['class' => 'input', 'id' => 'cucina']) }}
            @if ($errors->first('cucina'))
            <ul class="errors">
               @foreach ($errors->get('cucina') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('l_ricreativo', 'Locale Ricreativo', ['class' => 'label-input']) }}
            {{ Form::select('l_ricreativo', ['no' => 'no','Si' => 'Si'], 'no', ['class' => 'input', 'id' => 'l_ricreativo']) }}
            @if ($errors->first('l_ricreativo'))
            <ul class="errors">
               @foreach ($errors->get('l_ricreativo') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>
         <div  class="wrap-input">
            {{ Form::label('genere', 'Vincolo di genere(escludi)', ['class' => 'label-input']) }}
            {{ Form::select('genere',['n' => '----','M' => 'Maschio','F' => 'Femmina'], '', ['class' => 'input','id' => 'genere']) }}
            @if ($errors->first('genere'))
            <ul class="errors">
               @foreach ($errors->get('genere') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         @include('formAggiuntaServizi') 
        
         <div class="container-form-btn">                
            {{ Form::submit('Aggiungi Offerta', ['class' => 'button']) }}
         </div>
         {{ Form::close() }}
      </div>
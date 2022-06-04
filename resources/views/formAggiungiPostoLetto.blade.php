<div class="wrap-contact2">
         {{ Form::open(array('route' => 'aggiungiOfferta', 'class' => 'contact-form')) }}
         <div  class="wrap-input">
            {{ Form::label('titolo', 'Titolo annuncio posto letto', ['class' => 'label-input']) }}
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

         <div  class="wrap-input">
            {{ Form::label('angolo_studio', 'Angolo Studio', ['class' => 'label-input']) }}
            {{ Form::select('angolo_studio',['no' => 'no','Si' => 'Si'], 'no', ['class' => 'input','id' => 'angolo_studio']) }}
            @if ($errors->first('angolo_studio'))
            <ul class="errors">
               @foreach ($errors->get('angolo_studio') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('posti_letto_appartamento', 'Posti letto dell appartamento', ['class' => 'label-input']) }}
            {{ Form::number('posti_letto_appartamento', '0', ['class' => 'input','id' => 'posti_letto_appartamento']) }}
            @if ($errors->first('posti_letto_appartamento'))
            <ul class="errors">
               @foreach ($errors->get('posti_letto_appartamento') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('posti_letto_camera', 'Posti letto nella camera', ['class' => 'label-input']) }}
            {{ Form::number('posti_letto_camera', '1', ['class' => 'input','id' => 'posti_letto_camera']) }}
            @if ($errors->first('posti_letto_camera'))
            <ul class="errors">
               @foreach ($errors->get('posti_letto_camera') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('dimensioni_camera', 'Dimensioni della camera', ['class' => 'label-input']) }}
            {{ Form::text('dimensioni_camera','', ['class' => 'input','id' => 'dimensioni_camera']) }}
            @if ($errors->first('dimensioni_camera'))
            <ul class="errors">
               @foreach ($errors->get('dimensioni_camera') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <!-- @include('formAggiuntaServizi') -->
         <div class="container-form-btn">                
            {{ Form::submit('Aggiungi Offerta', ['class' => 'button']) }}
         </div>


         {{ Form::close() }}
      </div>
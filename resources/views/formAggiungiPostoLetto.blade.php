<div class="wrap-contact2">
         {{ Form::open(array('route' => 'aggiungiPostoLetto', 'class' => 'contact-form')) }}
         <div  class="wrap-input">
            {{ Form::label('titolo', 'Titolo annuncio posto letto', ['class' => 'label-input']) }}
            {{ Form::text('titolo', '', ['class' => 'input', 'id' => 'titolo']) }}
         </div>

         <div  class="wrap-input">
            {{ Form::label('desc_b', 'Descrizione breve', ['class' => 'label-input']) }}
            {{ Form::text('desc_b', '', ['class' => 'input', 'id' => 'desc_b']) }}
         </div>

         <div  class="wrap-input">
            {{ Form::label('città', 'Città', ['class' => 'label-input']) }}
            {{ Form::text('città', '', ['class' => 'input', 'id' => 'città']) }}
         </div>

         <div  class="wrap-input">
            {{ Form::label('locazione', 'Indirizzo', ['class' => 'label-input']) }}
            {{ Form::text('locazione', '', ['class' => 'input', 'id' => 'locazione']) }}
         </div>

         <div  class="wrap-input">
            {{ Form::label('prezzo', 'Prezzo mensile', ['class' => 'label-input']) }}
            {{ Form::text('prezzo', '', ['class' => 'input','id' => 'prezzo']) }}
         </div>

         <div  class="wrap-input">
            {{ Form::label('desc_l', 'Descrizione lunga', ['class' => 'label-input']) }}
            {{ Form::text('desc_l', '', ['class' => 'input', 'id' => 'desc_l']) }}
         </div>
         
         <div  class="wrap-input">
            {{ Form::label('genere', 'Vincolo di genere(escludi)', ['class' => 'label-input']) }}
            {{ Form::select('genere',['n' => '----','M' => 'Maschio','F' => 'Femmina'], '', ['class' => 'input','id' => 'genere']) }}
         </div>

         <div  class="wrap-input">
            {{ Form::label('angolo_studio', 'Angolo Studio', ['class' => 'label-input']) }}
            {{ Form::select('angolo_studio',['no' => 'no','Si' => 'Si'], 'no', ['class' => 'input','id' => 'angolo_studio']) }}
         </div>

         <div  class="wrap-input">
            {{ Form::label('posti_letto_appartamento', 'Posti letto dell appartamento', ['class' => 'label-input']) }}
            {{ Form::number('posti_letto_appartamento', '0', ['class' => 'input','id' => 'posti_letto_appartamento']) }}
         </div>

         <div  class="wrap-input">
            {{ Form::label('posti_letto_camera', 'Posti letto nella camera', ['class' => 'label-input']) }}
            {{ Form::number('posti_letto_camera', '1', ['class' => 'input','id' => 'posti_letto_camera']) }}
         </div>

         <div  class="wrap-input">
            {{ Form::label('dimensioni_camera', 'Dimensioni della camera', ['class' => 'label-input']) }}
            {{ Form::text('dimensioni_camera','', ['class' => 'input','id' => 'dimensioni_camera']) }}
         </div>

         <!-- @include('formAggiuntaServizi') -->
         <div class="container-form-btn">                
            {{ Form::submit('Aggiungi Offerta', ['class' => 'button']) }}
         </div>


         {{ Form::close() }}
      </div>
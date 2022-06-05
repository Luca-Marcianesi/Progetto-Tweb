<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
      <title>LaProj5 | @yield('title', 'Inserisci Servizi')</title>
       
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
        @isset($id)
        {{ Form::open(array('route' => ['aggiungiServizi', $id] ,'class' => 'contact-form')) }}

        <div>
    <h1 class="label-input2">Servizi Interni</h1>
    <div id="interni">
        <div>
        {{ Form::label('bagni', 'Bagni', ['class' => 'label-input']) }}
        {{ Form::number('bagni','bagni' ,false, ['class' => 'input', 'id' => 'bagni']) }}
        </div>
        
    </div>
    <h1 class="label-input2">Internet</h1>
    <div id="internet">
        <div>
        {{ Form::label('fibra', 'Fibra', ['class' => 'label-input']) }}
        {{ Form::checkbox('fibra', 'fibra',false,['class' => 'input', 'id' => 'fibra']) }}
        </div>
    </div>
    <h1 class="label-input2">Posizione</h1>
    <div id="posizione">
        <div>
        {{ Form::label('uni', 'Vicino Università', ['class' => 'label-input']) }}
        {{ Form::checkbox('uni','uni', false,['class' => 'input', 'id' => 'uni']) }}
        </div>
    </div>
    <h1 class="label-input2">Altro</h1>
    <div id="altro">
    

    </div>
    <div class="container-form-btn">                
            {{ Form::submit('Aggiungi', ['class' => 'button']) }}
         </div>
    @endisset()
</div>

        
    
      <footer>
         @include('layouts/-footer')
      </footer>
   </body>
</html>
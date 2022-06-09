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
      <br><br>
      <div class="container-contact" >
      <div class="imgicona"><img src="images/products/iconalogin.png" alt="icona" style="width: 200px;; height:auto;" ></div> 
        <h3 class ="titoloo">Definisci i servizi disponibili</h3>
 @isset($id)
        <div class="wrap-contact1">

        {{ Form::open(array('route' => ['aggiungiServizi', $id] ,'class' => 'contact-form')) }}

        <div>
    <h1 class="label-input2"  style="margin-top:5px; margin-bottom:5px;">Servizi Interni</h1>
    <div id="interni">
        <div>
        {{ Form::label('bagni', 'Bagni', ['class' => 'label-input']) }}
        {{ Form::number('bagni','bagni' ,false, ['class' => 'input', 'id' => 'bagni']) }}
        </div>
        
    </div>
    <h1 class="label-input2"   style="margin-top:5px; margin-bottom:5px;">Internet</h1>
    <div id="internet">
        <div>
        {{ Form::label('fibra', 'Fibra', ['class' => 'label-input']) }}
        {{ Form::checkbox('fibra', 'fibra',false,['class' => 'inputcheck', 'id' => 'fibra']) }}
        </div>
    </div>
    <h1 class="label-input2"   style="margin-top:5px; margin-bottom:5px;">Posizione</h1>
    <div id="posizione">
        <div>
        {{ Form::label('uni', 'Vicino Università', ['class' => 'label-input']) }}
        {{ Form::checkbox('uni','uni', false,['class' => 'inputcheck', 'id' => 'uni']) }}
        </div>
    </div>

    

    </div>
    <div class="container-form-btn">                
            {{ Form::submit('Aggiungi', ['class' => 'button']) }}
         </div>
    @endisset()
</div>


</div>
    
      <footer>
         @include('layouts/-footer')
      </footer>
   </body>
</html>
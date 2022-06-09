<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <title>LaProj5 | @yield('title', 'Modifica Faq')</title>
    </head>
    <body>
        <header class="header">
            <div class="header-container">
            <div class="logo"><img class="logoimmagine" src="images/products/Logo.png" alt="Logo"></div>
            <div class="name">ALLOGGISTUDENTI.com</div>
            <nav class="menu" fixed="right">
           @can('isAdmin')
                @include('layouts/_navadmin')
            @endcan

            </nav>
            </div>
        </header>
        <section>
<div class="container-contact">
@isset($Faq)
  <p>{{$Faq}} ciao ciao</p> {{$Faq}}

        <h3 class ="titoloo">Modifica Contenuti</h3> <br>
<div class="wrap-contact-faq">
         {{ Form::open(array('route' => ['modificaFaq', $Faq->domanda],'files' => true, 'class' => 'contact-form')) }}

         <div  class="wrap-input">
            {{ Form::label('domanda', 'Domanda', ['class' => 'label-input']) }}
            {{ Form::text('domanda',($Faq->domanda),   ['class' => 'input', 'id' => 'domanda']) }}
            @if ($errors->first('domanda'))
            <ul class="errors">
               @foreach ($errors->get('domanda') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

         <div  class="wrap-input">
            {{ Form::label('risposta', 'Risposta', ['class' => 'label-input']) }}
            {{ Form::text('risposta',($Faq->risposta),   ['class' => 'input', 'id' => 'risposta']) }}
            @if ($errors->first('risposta'))
            <ul class="errors">
               @foreach ($errors->get('risposta') as $message)
               <li>{{ $message }}</li>
               @endforeach
            </ul>
            @endif
         </div>

    <div class="container-form-btn">                
        {{ Form::submit('Modifica', ['class' => 'button']) }}
    </div>
    
    {{ Form::close() }}
    </div>
    </div>

    </section>
    @endisset()
        
        <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>
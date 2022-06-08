<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <title>LaProj5 | @yield('title', 'Modifica Account')</title>
    </head>
    <body>
        <header class="header">
            <div class="header-container">
            <div class="logo"><img class="logoimmagine" src="images/products/Logo.png" alt="Logo"></div>
            <div class="name">ALLOGGISTUDENTI.com</div>
            <nav class="menu" fixed="right">
            @can('isLocatore')
                @include('layouts/_navLocatore')
            @endcan
            @can('isLocatario')
                @include('layouts/_navLocatario')
            @endcan
            </nav>
            </div>
        </header>
        <section>
<div class="container-contact">

        <h3 class ="titoloo">Modifica Account</h3> <br>

        @isset($account)

<div class="wrap-contact1">
    {{ Form::open(array('route' => 'modificaAccount', 'class' => 'contact-form')) }}
    

     <div  class="wrap-input">
        {{ Form::label('name', 'Nome ', ['class' => 'label-input']) }}
        {{ Form::text('name', $account->name, ['class' => 'input','id' => 'name']) }}
    </div>
    
     <div  class="wrap-input">
        {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
        {{ Form::text('surname',$account->surname, ['class' => 'input', 'id' => 'surname']) }}
    </div>
    
    <div  class="wrap-input">
        {{ Form::label('descrizione', 'Descrizione', ['class' => 'label-input']) }}
        {{ Form::textarea('descrizione',$account->descrizione, ['class' => 'input', 'id' => 'descrizione']) }}
    </div>

    <div  class="wrap-input">
        {{ Form::label('fotoprofilo', 'fotoprofilo', ['class' => 'label-input']) }}
        {{ Form::text('fotoprofilo',$account->fotoprofilo, ['class' => 'input', 'id' => 'fotoprofilo']) }}
    </div>

    <div  class="wrap-input">
        {{ Form::label('data_nascita', 'Data di nascita', ['class' => 'label-input']) }}
        {{ Form::date('data_nascita',$account->data_nascita, ['class' => 'input', 'id' => 'data_nascita']) }}
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
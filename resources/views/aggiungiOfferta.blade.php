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
                @include('layouts/_navlocatore')
            </nav>
            </div>
        </header>

    <div>
        <h3>Aggiungi offerta</h3>

    <div>
        <div>
            {{ Form::open(array('route' => 'aggiungiOfferta', 'class' => 'contact-form')) }}

            <div>
                {{ Form::label('titolo', 'Titolo annuncio', ['class' => 'label-input']) }}
                {{ Form::text('titolo', '', ['class' => 'input-field', 'id' => 'titolo']) }}
                @if ($errors->first('titolo'))
                <ul class="errors">
                    @foreach ($errors->get('titolo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('desc_b', 'Descrizione breve', ['class' => 'label-input']) }}
                {{ Form::text('desc_b', '', ['class' => 'input-field', 'id' => 'desc_b']) }}
                @if ($errors->first('desc_b'))
                <ul class="errors">
                    @foreach ($errors->get('desc_b') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('città', 'Città', ['class' => 'label-input']) }}
                {{ Form::text('città', '', ['class' => 'input-field', 'id' => 'città']) }}
                @if ($errors->first('città'))
                <ul class="errors">
                    @foreach ($errors->get('città') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('locazione', 'Indirizzo', ['class' => 'label-input']) }}
                {{ Form::text('locazione', '', ['class' => 'input-field', 'id' => 'locazione']) }}
                @if ($errors->first('locazione'))
                <ul class="errors">
                    @foreach ($errors->get('locazione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div>
                {{ Form::label('prezzo', 'Prezzo mensile', ['class' => 'label-input']) }}
                {{ Form::text('prezzo', '', ['class' => 'input-field','id' => 'prezzo']) }}
                @if ($errors->first('prezzo'))
                <ul class="errors">
                    @foreach ($errors->get('prezzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('tipo', 'Tipo offerta', ['class' => 'label-input']) }}
                {{ Form::select('tipo',['A' => 'Appartamento','P' => 'PostoLetto'], '', ['class' => 'input-field','id' => 'tipo']) }}
                @if ($errors->first('tipo'))
                <ul class="errors">
                    @foreach ($errors->get('tipo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('desc_l', 'Descrizione lunga', ['class' => 'label-input']) }}
                {{ Form::text('desc_l', '', ['class' => 'input-field', 'id' => 'desc_l']) }}
                @if ($errors->first('desc_l'))
                <ul class="errors">
                    @foreach ($errors->get('desc_l') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('genere', 'Vincolo di genere(escludi)', ['class' => 'label-input']) }}
                {{ Form::select('genere',['n' => '----','M' => 'Maschio','F' => 'Femmina'], '', ['class' => 'input-field','id' => 'genere']) }}
                @if ($errors->first('genere'))
                <ul class="errors">
                    @foreach ($errors->get('genere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            
            <div class="container-form-btn">                
                {{ Form::submit('Aggiungi Offerta', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}

    <div>
        
            
    </div>
    </div>
        
        <footer>
            @include('layouts/-footer')
        </footer>
    </body>
</html>


@extends('layouts.app')

@section('content')
<div>
   
<div class="container-contact">
    <div class="imgicona"><img src="images/products/iconalogin.png" alt="icona" style="width: 200px;; height:auto;" ></div> 

    <h3 class ="titoloo">Registrazione</h3> <br>

    <div class="wrap-contact1">
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}

            <div  class="wrap-input">
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('sesso', 'Sesso', ['class' => 'label-input']) }}
                {{ Form::select('sesso',['M' => 'Maschio','F' => 'Femmina'], '', ['class' => 'input','id' => 'sesso']) }}
                @if ($errors->first('sesso'))
                <ul class="errors">
                    @foreach ($errors->get('sesso') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('role', 'Tipo utente', ['class' => 'label-input']) }}
                {{ Form::select('role',['1' => 'Locatore','2' => 'Locatario'], '', ['class' => 'input','id' => 'role']) }}
                @if ($errors->first('role'))
                <ul class="errors">
                    @foreach ($errors->get('role') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('data_nascita', 'Data di nascita', ['class' => 'label-input']) }}
                {{ Form::date('data_nascita', '', ['class' => 'input','id' => 'data_nascita']) }}
                @if ($errors->first('data_nascita'))
                <ul class="errors">
                    @foreach ($errors->get('data_nascita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('descrizione', 'Descrizione', ['class' => 'label-input']) }}
                {{ Form::text('descrizione', '', ['class' => 'input','id' => 'descrizione']) }}
                @if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('fotoprofilo', 'Foto Profilo', ['class' => 'label-input']) }}
                {{ Form::text('fotoprofilo', '', ['class' => 'input','id' => 'fotoprofilo']) }}
                @if ($errors->first('fotoprofilo'))
                <ul class="errors">
                    @foreach ($errors->get('fotoprofilo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
            </div>
            
            <div class="container-form-btn">                
                {{ Form::submit('Registra', ['class' => 'button']) }}
            </div>
            
            {{ Form::close() }}
        </div>

        <nav class="label-input" > Sei già registrato?<a class="label-input1" href="{{ route('login') }}">accedi</a> </nav><br>
        <img src="images/products/Logo.png" alt="logo" style="width:30px; height:30px; " >
        <label class="bottomlogo"> ALLOGGISTUDENTI.com</p>

    </div>

    </div>

</div>
@endsection

@extends('layouts.app')

@section('content')
<div>
    <h3>Registrazione</h3>
    <p>Utilizza questa form per registrarti al sito</p>

    <div>
        <div>
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}

            <div>
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input-field', 'id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input-field', 'id' => 'surname']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div>
                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input-field','id' => 'email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                {{ Form::label('sesso', 'Sesso', ['class' => 'label-input']) }}
                {{ Form::select('sesso',['M' => 'Maschio','F' => 'Femmina'], '', ['class' => 'input-field','id' => 'sesso']) }}
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
                {{ Form::select('role',['1' => 'Locatore','2' => 'Locatario'], '', ['class' => 'input-field','id' => 'role']) }}
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
                {{ Form::date('data_nascita', '', ['class' => 'input-field','id' => 'data_nascita']) }}
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
                {{ Form::text('username', '', ['class' => 'input-field','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input-field', 'id' => 'password']) }}
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
                {{ Form::password('password_confirmation', ['class' => 'input-field', 'id' => 'password-confirm']) }}
            </div>
            
            <div class="container-form-btn">                
                {{ Form::submit('Registra', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection

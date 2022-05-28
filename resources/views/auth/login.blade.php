@extends('layouts.app')

@section('content')
<div class="static">


   
<div class="container-contact">
    <div class="imgicona"><img src="images/products/iconalogin.png" alt="icona" style="width: 200px;; height:auto;" ></div> 
    <h3 class ="titoloo">Login</h3> <br>

        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}
            
      
             <div  class="wrap-input">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
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
            
            <div class="container-form-btn">                
                {{ Form::submit('Login', ['class' => 'button']) }}
            </div>
            
            {{ Form::close() }}
        </div>

        <nav class="label-input" > Non sei ancora registrato?<a class="label-input1" href="{{ route('register') }}">registrati</a> </nav><br>
        <img src="images/products/Logo.png" alt="logo" style="width:30px; height:30px; " >
        <label class="bottomlogo"> ALLOGGISTUDENTI.com</p>

    </div>

</div>
@endsection
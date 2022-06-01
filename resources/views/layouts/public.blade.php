<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <title>LaProj5 | @yield('title', 'Catalogo')</title>
    </head>
    <body>
        <header class="header">

        <script type="text/javascript" src="{{ asset('js/backbtn.js') }}"></script>

            <div class="header-container">
            <div class="logo"><img class="logoimmagine" src="images/products/Logo.png" alt="Logo"></div>
            <div class="name">ALLOGGISTUDENTI.com</div>
            <nav class="menu" fixed="right">
                @include('layouts/_navpublic')
            </nav>
            </div>
        </header>

        <div>
            @yield('content')    
        </div>
        
        <footer>
            @include('layouts/-footer')
        </footer>
    </body>

    @section('extra-script')

{{Html::script('js/script.js')}}

@endsection
</html>
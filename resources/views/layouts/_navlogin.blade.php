<ul class="menu_ul_home">
@guest
        <li><a class="menu_ul_li_a" href="{{ url('/') }}"> home </a> </li> 
        <li><a class="blubuttons" href="{{ route('login') }}"> Accedi </a> </li> 
        <li><a class="blubuttons" href="{{ route('register') }}"> Registrati </a> </li> 
    @endguest
 
</ul>

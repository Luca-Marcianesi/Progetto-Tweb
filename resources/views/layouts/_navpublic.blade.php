<ul class="menu_ul_home">
    <li class ="menu_ul_li"><a  class = "menu_ul_li_a" href="#chisiamo">Chi siamo</a></li>
    <li class ="menu_ul_li"><a  class = "menu_ul_li_a" href="#regolamento" >Regolamento</a></li>
    <li class ="menu_ul_li"><a class = "menu_ul_li_a" href="#faq" >F.A.Q.</a></li>
    <li class ="menu_ul_li"><a  class = "menu_ul_li_a" href="#contatti" >Contatti</a></li>
    @can('isAdmin')
        <li><a href="{{ route('admin') }}" class="highlight" title="Home Admin">Home Admin</a></li>
    @endcan
    @can('isLocatore')
        <li class ="menu_ul_li" ><a href="{{ route('locatore') }}" class="highlight" title="Home User">Home Locatore</a></li>
    @endcan
    @can('isLocatario')
        <li class ="menu_ul_li" ><a href="{{ route('locatario') }}" class="highlight" title="Home User">Home Locatario</a></li>
    @endcan
    @auth
        <li class ="menu_ul_li"><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
    @guest
        <li><a class="blubuttons" href="{{ route('login') }}"> Accedi </a> </li> 
        <li><a class="blubuttons" href="{{ route('register') }}"> Registrati </a> </li> 
    @endguest
</ul>

<ul class="menu_ul_home">
    <li class ="menu_ul_li"><a  class = "menu_ul_li_a" href="{{ route('home') }}">Home</a></li>
    <li class ="menu_ul_li"><a  class = "menu_ul_li_a" href="{{ route('annunciLocatore') }}" >Annunci</a></li>
    <li class ="menu_ul_li"><a class = "menu_ul_li_a" href="{{ route('mieiAlloggi') }}" >Miei Alloggi</a></li>
    <li class="menu_ul_li"><a class = "menu_ul_li_a" href="{{ route('aggiungiOfferta') }}"> Inserisci</a>
    <li class ="menu_ul_li"><a  class = "menu_ul_li_a" href="{{ route('chatLocatore') }}">Messaggi</a></li>
    <li class ="menu_ul_li"><a  class = "menu_ul_li_a" href="{{ route('showAccount') }}" >Account</a></li>
    <li class ="menu_ul_li"><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
</ul>
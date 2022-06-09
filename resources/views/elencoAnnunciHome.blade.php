<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <script>

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

    </script>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <title>LaProj5 | @yield('title', 'Annunci')</title>
    </head>
    <body>
        <header class="header">
            <div class="header-container">
            <div class="logo"><img class="logoimmagine" src="images/products/Logo.png" alt="Logo"></div>
            <div class="name">ALLOGGISTUDENTI.com</div>
            <nav class="menu" fixed="right">
                @include('layouts/_navpublic')
            </nav>
            </div>
        </header>

        <div>
        @isset($offerte)
<section class="cittàselezionata">
    <nav class="menu" fixed="right">
        <ul>
            <li> <a href="catalogo.html"  id ="backButton" class="back-to-previous"> </a></li>
            <li class="cittàsel"><h3 class="nomecittàselezionata">citta</h3></li>
        </ul>
    </nav>
</section>

<section class="filtri">
<div class="containerchat">
    <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Città</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Città di interesse.." id="myInput" onkeyup="filterFunction()">
    <a href="#ancona">Ancona</a>
    <a href="#bologna">Bologna</a>
    <a href="#brescia">Brescia</a>
    <a href="#camerino">Camerino</a>
    <a href="#chieti">Chieti</a>
    <a href="#roma">Roma</a>
    <a href="#torino">Torino</a>
  </div>
</div>


<br><br><br>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Mostra tutti</button>
  <button class="btn" onclick="filterSelection('appartamento')"> Appartamento</button>
  <button class="btn" onclick="filterSelection('postoletto')"> Posto Letto</button>

</div>

<div id="myBtnContainer">
  <button class=" btn filterDiv  appartamento" onclick="filterSelection('prezzoapp')"> Prezzo</button>
  <button class=" btn filterDiv  appartamento" onclick="filterSelection('dimensioneapp')"> Dimensione appartamento</button>
  <button class=" btn filterDiv appartamento" onclick="filterSelection('numerocamere')"> Numero Camere Totali</button>
  <button class=" btn filterDiv appartamento" onclick="filterSelection('postilettototaliap')"> Posti Letto Totali</button>
  <button class=" btn filterDiv appartamento postoletto" onclick="filterSelection('servizi')"> Servizi</button>
  <button class=" btn filterDiv postoletto" onclick="filterSelection('prezzoletto')"> Prezzo</button>
  <button class=" btn filterDiv postoletto" onclick="filterSelection('dimensionestanza')">Dimensione Stanza</button>
  <button class=" btn filterDiv postoletto" onclick="filterSelection('postilettoinstanza')"> Posti Letto in Stanza</button>
  <button class=" btn filterDiv postoletto" onclick="filterSelection('postilettototalista')"> Posti Letto Totali</button>
</div>


<div id="myBtnContainer">
  <button class=" btn filterDiv prezzoapp" onclick="filterSelection('400')"> < 400 </button>
  <button class=" btn filterDiv prezzoapp" onclick="filterSelection('500')"> 400-600 </button>
  <button class=" btn filterDiv prezzoapp" onclick="filterSelection('600')"> > 600 </button>

  <button class=" btn filterDiv dimensioneapp" onclick="filterSelection('1')"> < 50 mq </button>
  <button class=" btn filterDiv dimensioneapp" onclick="filterSelection('2')">   50 - 150 mq </button>
  <button class=" btn filterDiv dimensioneapp" onclick="filterSelection('3')"> > 150 mq </button>

  <button class=" btn filterDiv numerocamere" onclick="filterSelection('unodue')"> 1 - 2 </button>
  <button class=" btn filterDiv numerocamere" onclick="filterSelection('trequattro')">   3 - 4 </button>
  <button class=" btn filterDiv numerocamere" onclick="filterSelection('cinque')"> > 5 </button>

  <button class=" btn filterDiv postilettototaliap" onclick="filterSelection('tre')"> < 3 </button>
  <button class=" btn filterDiv postilettototaliap" onclick="filterSelection('quattrocinque')"> 4 - 5 </button>
  <button class=" btn filterDiv postilettototaliap" onclick="filterSelection('sei')"> > 6 </button>

  <button class=" btn filterDiv prezzoletto" onclick="filterSelection('200')"> < 200 </button>
  <button class=" btn filterDiv prezzoletto" onclick="filterSelection('225')"> 200-250 </button>
  <button class=" btn filterDiv prezzoletto" onclick="filterSelection('250')"> > 250 </button>

  <button class=" btn filterDiv dimensionestanza" onclick="filterSelection('30')"> < 30 mq </button>
  <button class=" btn filterDiv dimensionestanza" onclick="filterSelection('50')"> 30 - 60 mq </button>
  <button class=" btn filterDiv dimensionestanza" onclick="filterSelection('60')"> > 60 mq </button>

  <button class=" btn filterDiv postilettoinstanza" onclick="filterSelection('uno')"> 1 </button>
  <button class=" btn filterDiv postilettoinstanza" onclick="filterSelection('due')"> 2 </button>
  <button class=" btn filterDiv postilettoinstanza" onclick="filterSelection('tre')"> > 3 </button>

  <button class=" btn filterDiv postilettototalista" onclick="filterSelection('unodue')"> 1 - 2 </button>
  <button class=" btn filterDiv postilettototalista" onclick="filterSelection('trequattro')"> 3 - 4 </button>
  <button class=" btn filterDiv postilettototalista" onclick="filterSelection('cinque')"> > 5 </button>

  <button class=" btn filterDiv servizi" onclick="filterSelection('ariacond')"> Aria Condizionata </button>
  <button class=" btn filterDiv servizi" onclick="filterSelection('riscaldamento')"> Riscaldamento autonomo</button>
  <button class=" btn filterDiv servizi" onclick="filterSelection('cucina')"> Cucina </button>
  <button class=" btn filterDiv servizi" onclick="filterSelection('bagnopriv')"> Bagno Privato </button>
  <button class=" btn filterDiv servizi" onclick="filterSelection('angolostudio')"> Angolo Studio </button>
  <button class=" btn filterDiv servizi" onclick="filterSelection('localericr')"> Locale Ricreativo </button>
  <button class=" btn filterDiv servizi" onclick="filterSelection('terrazzo')"> Terrazzo </button>
  <button class=" btn filterDiv servizi" onclick="filterSelection('postoauto')"> Posto Auto </button>
  <button class=" btn filterDiv servizi" onclick="filterSelection('lavatrice')"> Lavatrice </button>
  <button class=" btn filterDiv servizi" onclick="filterSelection('lavastoviglie')"> Lavastoviglie </button>



</div>

    </div>

</section>

@foreach ($offerte as $offerta)
<section class="annunci">
    <div class="annuncio">
          <div class="columnimg">
            <img class="imgaffitto" src="images/affitto-stanza.jpg" alt="imgaffitto">
          </div>
          <div class="columnimg columntext">

          <p class="titolocolonna"> {{$offerta->tipo}} :  {{$offerta->titolo}}   </p>
          <p class="testocolonna"> {{$offerta->descrizione_breve}} <br> {{$offerta->locazione}}</p>

          </div>
          <div class="columnimg columnprice">
            <p class="testocolonna"> CANONE MENSILE <br>{{$offerta->prezzo}} EURO  </p>
          <p> <a class="dettaglibutton" href="{{ route('dettagliAnnuncio', [$offerta->id]) }}"> dettagli </a></p>
          </div>
          <div id="content"></div>
    </div>


</section> 

  @endforeach
@endisset()
        </div>

   
        
        <footer>
            @include('layouts/-footer')
        </footer>
  </body>
</html>
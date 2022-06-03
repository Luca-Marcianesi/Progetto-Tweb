<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <script>
// function myFunction() {
  // Declare variables
 // var input, filter, ul, li, a, i, txtValue;
  //input = document.getElementById('myInput');
 // filter = input.value.toUpperCase();
 // ul = document.getElementById("myUL");
//  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
 // for (i = 0; i < li.length; i++) {
   // a = li[i].getElementsByTagName("a")[0];
   // txtValue = a.textContent || a.innerText;
  //  if (txtValue.toUpperCase().indexOf(filter) > -1) {
  //    li[i].style.display = "";
 //   } else {
 //     li[i].style.display = "none";
 //   }
 // }
//}

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
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Città d'interesse..">

<br><br><br>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Mostra tutti</button>
  <button class="btn" onclick="filterSelection('appartamento')"> Appartamento</button>
  <button class="btn" onclick="filterSelection('postoletto')"> Posto Letto</button>

</div>

<div id="myBtnContainer">
  <button class="  btn filterDiv  appartamento postoletto" onclick="filterSelection('prezzo')"> Prezzo</button>
  <button class="  btn filterDiv  appartamento" onclick="filterSelection('dimensioneapp')"> Dimensione appartamento</button>
  <button class=" btn filterDiv appartamento" onclick="filterSelection('postilettototali')"> Posti Letto Totali</button>
  <button class=" btn filterDiv postoletto" onclick="filterSelection('dimensionestanza')">Dimensione Stanza</button>
  <button class=" btn filterDiv postoletto" onclick="filterSelection('postilettoinstanza')"> Posti Letto in Stanza</button>

</div>


<div id="myBtnContainer">
  <button class=" btn filterDiv prezzo" onclick="filterSelection('400')"> < 400 </button>
  <button class=" btn filterDiv prezzo" onclick="filterSelection('500')"> 400-600 </button>
  <button class=" btn filterDiv prezzo" onclick="filterSelection('600')"> > 600 </button>

  <button class=" btn filterDiv dimensioneapp" onclick="filterSelection('1')"> < 50 mq </button>
  <button class=" btn filterDiv dimensioneapp" onclick="filterSelection('2')">   50 - 150 mq </button>
  <button class=" btn filterDiv dimensioneapp" onclick="filterSelection('3')"> > 150 mq </button>

  <button class=" btn filterDiv postilettototali" onclick="filterSelection('unodue')"> 1 - 2 </button>
  <button class=" btn filterDiv postilettototali" onclick="filterSelection('trequattro')"> 3 - 4 </button>
  <button class=" btn filterDiv postilettototali" onclick="filterSelection('cinque')"> 5 - 6 </button>

  <button class=" btn filterDiv dimensionestanza" onclick="filterSelection('400')"> < 30 mq </button>
  <button class=" btn filterDiv dimensionestanza" onclick="filterSelection('500')"> 30 - 60 mq </button>
  <button class=" btn filterDiv dimensionestanza" onclick="filterSelection('600')"> > 60 mq </button>

  <button class=" btn filterDiv postilettoinstanza" onclick="filterSelection('uno')"> 1 </button>
  <button class=" btn filterDiv postilettoinstanza" onclick="filterSelection('duetre')"> 2 - 3 </button>



</div>

    </div>

    </section>

@foreach ($offerte as $offerta)
<section class="annunci">
    <div class="annuncio">
          <div class="columnimg">
          <div class="imgaffittocol">
          @include('helpers/annunciImg', ['imgFile' => $offerta->image])
           </div>           </div>
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
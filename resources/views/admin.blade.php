@extends('layouts.admin')

@section('title', 'Area Admin')

@section('content')
<hr class="hrAdmin">
<div>
    <h3 class="AreaAdmin"><u>Area Amministratore</u></h3>
    <hr class="hrAdmin">
    <div class="welcome">
        <p class="pAdmin"> Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }}.
        Questa è la tua area riservata. Di seguito sono elencate le principali ed attuali statistiche del sito.
        Qui inoltre potrai visualizzare, modificare ed eliminare le faq dalla home del sito.
        </p>
    </div>
    <hr class="hrAdmin">
    <h3 class="AreaAdmin"><u>Statistiche</u></h3>
    <section class="treimg">
        <div class="container">
            <ul class="griglia3img">
                <li><img class ="foto" src="images/products/Casa_arancione-removebg-preview.png" >
                @isset($numero_offerte)
                <p class="blu2"> Al momento nel sito <br> sono presenti <br> {{$numero_offerte}} offerte </p></li>
                @endisset()
                <li><img class ="foto" src="images/products/Rent-removebg-preview.png">
                @isset($occupati)
                <p class="blu2"> Al momento nel sito <br> sono locati <br> {{$occupati}} alloggi </p></li>
                @endisset()
                <li><img class ="foto" src="images/products/Offerta_di_alloggio-removebg-preview.png">
                <p class="blu2"> Al momento nel sito <br> sono state fatte <br> x offerte dai locatari </p></li>
            </ul>
        </div>
    </section>
    <h3 class="AreaAdmin"><u>Faq</u></h3>
    <section id="faq" class="faq-container">

@isset($topFaqs)
@foreach ($topFaqs as $faq)

  <h1 class="faq-page">{{$faq->domanda}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- <a href=""><i class="icon-bar a fa fa-search"></i></a>-->
  <a href="{{ route('showmodificaFaq', [$faq->domanda])}}"><i class="icon-bar a fa fa-search"></i></a>

  <a href="#"><i class="icon-bar a  fa fa-trash"></i></a>
  </h1>
  <div class="faq-body">
  <h1 class="faq-answer">{{$faq->risposta}}</h1>
  </div>
  
</div>
  @endforeach
@endisset()
  </section>
</div>


  <script src="js/faq-js.js"></script>
</section>

</div>
@endsection

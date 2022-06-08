<section class="home">
<div class="firstimagehomelocatore">
  <div class="alignment2"><b>Eccoti, {{ Auth::user()->name }} {{ Auth::user()->surname }} ! <br> <br> <br>
  <a class="buttonlocatore" href="{{ route('aggiungiOfferta') }}"> Inserisci annuncio </a>
 </b>
  </div>
  </div>

</div>
</section>
<br id="cs">
  <p class="titoloo">Inserisci il tuo alloggio <img class="iconimage" src="images/products/posizione.png" alt="Logo posizione geografica"> </p>
  <div>
    <p class="whoarewetext">Aiuta centinaia di studenti a trovare l'alloggio adatto alle loro esigenze.
      <br> Utilizza la nostra piattaforma per pubblicizzare il tuo appartamento o il tuo posto letto, affidati
      a noi per avere contratti sicuri e garantiti. 
    </p>
  </div>
</section>

<section class="treimg">
  <div class="container">
    <ul class="griglia3img">
      <li><img class ="foto" src="images/products/lente.png" >
       <p class="blu">Consulta decine di annunci per <br>ogni città universitaria</p></li>
      <li><img class ="foto" src="images/products/megafono.png">
      <p class="blu">Inserisci il tuo annuncio <br> ed affitta il tuo alloggio</p></li>
      <li><img class ="foto" src="images/products/contratto.png">
      <p class="blu">Affidati a noi per contratti <br> sicuri e garantiti</p></li>
    </ul>
  </div>
</section>

<section class="recensioni">
  <style>
    * {
      box-sizing: border-box}
    .slide1, .slide2 {
      display: none}
    img {
      vertical-align: middle;
    }
    .carosello {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }
    </style>
  

<section id="regolamento">
  <div class="reg" > 
      <p class="regolamento1" > <b> Regolamento</b> <img class="photo" src="images/products/megafono.png" >   </p>
  </div>
  <div class="rectangle1"> 
      <p class="rectangle1text"> <b> Area Pubblica</b> </p>  
      <p class="areapubtext" > Questa è l'area pubblica del sito AlloggiStudenti. <br>
                  Al suo interno trovi tutte le informazioni generali di tuo interesse! <br> 
                  Da questa pagina potrai accedere alla tua area riservata oppure registrarti,se ancora non lo hai fatto. <br>
                  Di seguito puoi trovare una sezione dedicata alle FAQ e un'altra che illustra i nostri contatti</p>
      <p class="rectangle1text"> <b> Area Privata </b> </p> 
      <p class="areaprivtext"> Dopo esserti registrato, potrai accedere allarea riservata tramite <br> 
                  il login dove troverai i servizi a te dedicati </p>
  </div> 
</section>  


<section class="contacts-section" id="contatti">
  
  <div class="contactscolumn">
    <div class="imgcontactscolumn"><img class="icon-contacts" src="images/products/imgcontatti.png" alt="Icon"></div>
  </div>

  <div class="contactscolumn">
    <p class="maintext-contact"> <img class="iconimage" src="images/products/arrow.png" alt="Logo posizione geografica"> Contattaci</p>
    <p style="text-align:center"><img class="icon-contact-info" src="images/products/call.png" ></p>
    <p class="contact-info"> +39 333 7762812 </p>
    <p style="text-align:center"> <img class="icon-contact-info" src="images/products/mail.png" alt="E-mail"> </p>
    <p class="contact-info"> info@alloggistudenti.com </p>
    <p style="text-align:center"><img class="icon-contact-info" src="images/products/location.png" alt="Locazione geografica"> </p>
    <p class="contact-info"> Via Brecce Bianche 1 (AN) </p>

  </div>


</section>
<div id ="backBtn" class="back-to-top" ></div>
<script src="js/backbtn.js"></script>

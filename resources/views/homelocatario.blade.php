<div class="firstimagehomelocatario">
  <div class="alignment3"><b>Eccoti, {{ Auth::user()->name }} {{ Auth::user()->surname }}, trova l'alloggio adatto a te<br> <br> <br>
 </b>
  </div>
  </div>

</div>

<br id="cs">
  <p class="titoloo">Chi siamo <img class="iconimage" src="images/products/posizione.png" alt="Logo posizione geografica"> </p>
  <div>
    <p class="whoarewetext">Sei uno studente e cerchi un alloggio nella tua città universitaria?
      <br> Migliaia di studenti si affidano a noi ogni anno! Il nostro sito ti consentirà di trovare la casa che
      <br> fa per te. Potrai visualizzare tutti gli annunci disponibili nella tua città di interesse e valutare in 
      <br> base ai tuoi desideri.
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
  
  <div class="carosello">
    <div class="slide1">
      <div class="rectangle ">
        <p class="rectangletext"><b>Gli studenti che si sono affidati a noi</b></p><br>
        <div>
          <p class="studenttext">Sara Climini<br>
            UNIVPM
          </p>
          <img class="student" src="images/products/studentessa.jpg" alt="Studentessa">
          <p class="studentdescription">"mi sono affidata ad ALLOGGISTUDENTI.com per
            trovare l'appartamento ideale per affrontare
            la mia vita universitaria nella città di Ancona: ne sono pienamente soddisfatta"
          </p>
          <div class="dots">
            <span class="fulldot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
    </div>
  </div>
  
    <div class="slide1">
      <div class="rectangle ">
        <p class="rectangletext"><b>Gli studenti che si sono affidati a noi</b></p><br>
        <div>
          <p class="studenttext">Marco Clizi<br>
            UNIBA
          </p>
          <img class="student" src="images/products/studente.jpeg" alt="Studente">
          <p class="studentdescription"> "grazie a questo sito web sono riuscito a trovare l'alloggio fatto su misura
            per me, non mi sarei aspettato di raggiungere questo risultato con un click.Lo consiglio a tutti."
          </p>
          <div class="dots">
            <span class="dot"></span>
            <span class="fulldot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
    </div>
    </div>
    <div class="slide1">
      <div class="rectangle ">
        <p class="rectangletext"><b>Gli studenti che si sono affidati a noi</b></p><br>
        <div>
          <p class="studenttext">Alice Maggi<br>
            SAPIENZA
          </p>
          <img class="student" src="images/products/studentessa2.webp" alt="Studentessa">
          <p class="studentdescription">"ho trovato la casa perfetta per me nel centro di Roma, ho la fermata dell'
            autobus a due passi. Tutto grazie ad ALLOGGISTUDENTI.com. Studenti in cerca di 
            alloggio dovrebbero iscriversi! " "
          </p>
          <div class="dots">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="fulldot"></span>
            <span class="dot"></span>
          </div>
        </div>
    </div>
    </div>
    <div class="slide1">
      <div class="rectangle ">
        <p class="rectangletext"><b>Gli studenti che si sono affidati a noi</b></p><br>
        <div>
          <p class="studenttext">Andre Laurent<br>
            ALMA MATER <br>STUDIORUM
          </p>
          <img class="student" src="images/products/studente2.webp" alt="Studente">
          <p class="studentdescription"> "grazie ad ALLOGGISTUDENTI.com, anche per uno studente erasmus come me è stato facile trovare un posto letto
            a Bologna. Ho tre coinquilini ed ho trovato un'ottima soluzione qualità-prezzo "
          </p>
          <div class="dots">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="fulldot"></span>
          </div>
        </div>
    </div>
    </div>
    <a class="prec" onclick="cambiaSlide(-1, 0)">&#10094;
    </a>
    <a class="succ" onclick="cambiaSlide(1, 0)">&#10095;
    </a>
  </div>
  <script src="js/reviews.js"></script>
  </section>

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


<section>
<div><p class="titoloo">Inserisci la tua mail per rimanere aggiornato</p></div>
<div class ="titoloo"> 
  <input class="areaEmail" type="text" value="" name="email" id="newsletter" placeholder="Inserisci la tua Email" title="Iscriviti alla nostra newsletter" >
  <button type="submit" title="Sottoscrivi"  class="blubuttons">Invia</button>
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

  <div id ="backBtn" class="back-to-top" ></div>
<script src="js/backbtn.js"></script>
</section>

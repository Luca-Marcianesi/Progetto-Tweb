<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    const DESCPROD = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. </p><p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>';

    public function run() {
    
        DB::table('offerta')->insert([
            ['id' => 1, 'stato' => 'libera', 'città'=>'Ancona', 'locazione' => 'Via del Pignattello 55',
             'prezzo' => 450, 'genere' => 'M', 'descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese.
             Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.',
             'titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto','image'=>'affitto-stanza.jpg'],
            
        ]);

        DB::table('città')->insert([
            ['id' => 1, 'name' => 'Ancona', 'image'=>'affitto-stanza.jpg'],
            ['id' => 2, 'name' => 'Bari', 'image'=>'affitto-stanza.jpg'],
            ['id' => 3, 'name' => 'Bergamo', 'image'=>'affitto-stanza.jpg'],
            ['id' => 4, 'name' => 'Bologna', 'image'=>'affitto-stanza.jpg'],
            ['id' => 5, 'name' => 'Brescia', 'image'=>'affitto-stanza.jpg'],
            ['id' => 6, 'name' => 'Caltanissetta', 'image' => 'caltanissetta.jpg'],
            ['id' => 7, 'name' => 'Camerino', 'image' => 'camerino.jpg'],
            ['id' => 8, 'name' => 'Catanzaro', 'image' => 'catanzaro.jpg'],
            ['id' => 9, 'name' => 'Chieti', 'image' => 'chieti.jpg'],
            ['id' => 10, 'name' => 'Ferrara', 'image' => 'ferrara.JPG'],
            ['id' => 11, 'name' => 'Firenze', 'image' => 'firenze.jpg'],
            ['id' => 12, 'name' => 'Genova', 'image' => 'genova.jpg'],
            ['id' => 13, 'name' => 'LAquila', 'image' => 'laquila.jpg'],
            ['id' => 14, 'name' => 'Firenze', 'image' => 'macerata.JPG'],
            ['id' => 15, 'name' => 'Genova', 'image' => 'messina.jpg'],
            ['id' => 16, 'name' => 'Milano', 'image' => 'Milano.jpg'],
            ['id' => 17, 'name' => 'Modena', 'image' => 'modena.jpg'],
            ['id' => 18, 'name' => 'Napoli', 'image' => 'napoli.jpg'],
            ['id' => 19, 'name' => 'Padova', 'image' => 'padova.jpg'],
            ['id' => 20, 'name' => 'Palermo', 'image' => 'palermo.jpg'],
            ['id' => 21, 'name' => 'Perugia', 'image' => 'perugia.JPG'],
            ['id' => 22, 'name' => 'Pescara', 'image' => 'pescara.jpg'],
            ['id' => 23, 'name' => 'Pisa', 'image' => 'pisa.jpg'],
            ['id' => 24, 'name' => 'Roma', 'image' => 'Roma.webp'],
            ['id' => 25, 'name' => 'Torino', 'image' => 'torino.jpg'],
            ['id' => 26, 'name' => 'Trento', 'image' => 'trento.jpg'],
            ['id' => 27, 'name' => 'Trieste', 'image' => 'trieste.jpg'],
            ['id' => 28, 'name' => 'Udine', 'image' => 'udine.JPG'],
            ['id' => 29, 'name' => 'Venezia', 'image' => 'venezia.jpg'],
            ['id' => 30, 'name' => 'Verona', 'image' => 'verona.jpeg'],

           
        ]);

        DB::table('users')->insert([
            ['id' => 1, 'name' => 'lariolario', 'surname'=> 'lariolario', 'email' => 'lariolario@gmail.com', 'sesso' => 'M', 'data_nascita' => '2022-06-09', 'image' => NULL,
            'email_verified_at' => NULL, 'username'=> 'lariolario', 'password'=> Hash::make('lariolario'), 'descrizione'=> 'lariolario', 'role'=>'locatario'],
            ['id' => 2, 'name' => 'lorelore', 'surname'=> 'lorelore', 'email' => 'lorelore@gmail.com', 'sesso' => 'M', 'data_nascita' => '2022-05-09', 'image' => NULL,
            'email_verified_at' => NULL, 'username'=> 'lorelore', 'password'=>Hash::make('lorelore'), 'descrizione'=> 'lorelore', 'role' => 'locatore'],
            ['id' => 3, 'name' => 'adminadmin', 'surname' => 'adminadmin', 'email' => 'adminadmin@gmail.com', 'sesso' => 'M', 'data_nascita' => '2022-04-09', 'image' => NULL,
            'email_verified_at' => NULL, 'username' => 'adminadmin', 'password' => Hash::make('adminadmin'), 'descrizione' => 'adminadmin', 'role' => 'admin']
        ]);

        
        DB::table('faq')->insert([
            ['domanda'=>'Perchè affidarsi ad Alloggistudenti.com?', 'risposta'=>'Trovare casa in una nuova città non è mai facile. Alloggistudenti.com seleziona le migliori soluzioni, evitando il rischio di brutte esperienze e garantendo sempre un regolare contratto. ',  'stato'=>'visibile'],
            ['domanda'=>' In quali città è attivo? ', 'risposta'=>'Siamo attivi nelle principali città universitarie italiane',  'stato'=>'visibile'],
            ['domanda'=>' A chi si rivolge? ', 'risposta'=>'Se sei uno studente o hai bisogno di una sistemazione temporanea per un corso, un master o qualsiasi altra esigenza, abbiamo la soluzione adatta per te.
            Se sei un proprietario e vuoi affittare rapidamente il tuo immobile, hai trovato il servizio che stavi cercando. Un’agenzia immobiliare efficiente e molto in più.',  'stato'=>'visibile'],
            ['domanda'=>' Quanto costa? ', 'risposta'=>'Il servizio è completamente gratuito.',  'stato'=>'visibile'],
            ['domanda'=>'Come posso modificare il mio profilo? ', 'risposta'=>'Puoi modificare il tuo profilo cliccando su “Modifica dall’area "Account".',  'stato'=>'visibile'],
            ['domanda'=>'Chi vedrà i miei annunci? ', 'risposta'=>'Dopo la conferma di pubblicazione, l’annuncio sarà visibile a tutti gli utenti del sito.',  'stato'=>'visibile'],
            ['domanda'=>'Posso modificare i miei annunci? ', 'risposta'=>'Potrai modificare o rimuovere il tuo annuncio in qualsiasi momento dalla sezione “Miei Alloggi".',  'stato'=>'visibile'],
            ['domanda'=>'Come sarò contattato dai locatari? ', 'risposta'=>'Gli altri utenti potranno scriverti un messaggio attraverso il sito o potranno contattarti utilizzando i contatti diretti che hai inserito nell’annuncio. Se non desideri mostrare l’email o il telefono inseriti no-email@email.it e 00000000 come telefono.',  'stato'=>'visibile'],

        ]);

        DB::table('interagisce')->insert([
            ['offerta'=>1, 'utente'=>'lorelore',  'tipo_interazione'=>'possiede', 'data'=>'2022-04-09'],
           
        ]);

        DB::table('chat')->insert([
            ['id'=>1, 'locatore'=>'lorelore', 'locatario'=>'lariolario', 'stato'=>'nuova'],   
        ]);



}
}
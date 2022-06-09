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
            ['id' => 1, 'stato' => 'libera', 'città'=>'Ancona', 'locazione' => 'Via del Pignattello 55', 'prezzo' => 450, 'genere' => 'M', 'descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.', 'titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto'],
            ['id' => 2, 'stato' => 'libera','città'=>'Ancona', 'locazione' => 'Via Pluto 80', 'prezzo' => 250, 'genere' => '', 'descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.','titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto'],
            ['id' => 3, 'stato' => 'libera', 'città'=>'Ancona','locazione' => 'Via Colombo 100', 'prezzo' => 300, 'genere' => 'F','descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.','titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto'],
            ['id' => 4, 'stato' => 'libera', 'città'=>'Ancona','locazione' => 'Via Raffaele 15', 'prezzo' => 180, 'genere' => 'M','descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.','titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto'],
            ['id' => 5, 'stato' => 'libera', 'città'=>'Ancona','locazione' => 'Via Ciccio 25', 'prezzo' => 230, 'genere' => '','descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.','titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto'],
            ['id' => 6, 'stato' => 'libera', 'città'=>'Ancona','locazione' => 'Via Romeo 44', 'prezzo' => 300, 'genere' => 'F','descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.','titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto'],
            ['id' => 7, 'stato' => 'libera', 'città'=>'Ancona','locazione' => 'Via Solferino 74', 'prezzo' => 120, 'genere' => '','descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.','titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto'],
            ['id' => 8, 'stato' => 'libera', 'città'=>'Ancona','locazione' => 'Via Pozzetto 69', 'prezzo' => 400, 'genere' => 'F','descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.','titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto'],
            ['id' => 9, 'stato' => 'libera', 'città'=>'Ancona','locazione' => 'Via Cesare Battisti 42', 'prezzo' => 350, 'genere' => 'M','descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.','titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto'],
            ['id' => 10, 'stato' => 'libera','città'=>'Ancona', 'locazione' => 'Via Umberto I', 'prezzo' => 250, 'genere' => '','descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.','titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto'],
            ['id' => 11, 'stato' => 'libera', 'città'=>'Ancona','locazione' => 'Via Rossano 32', 'prezzo' => 200, 'genere' => '','descrizione_breve' => ' 4 camere, 2 bagni, 5 inquilini',
            'descrizione'=>'Affittasi Camera Singola ad Ancona, Via del Pignattello 55 per 450 Euro al mese. Sono disponibili i seguenti servizi: internet, televisione, lavatrice.Riscaldamento Autonomo.','titolo'=>'Stanza terzo piano', 'tipo'=>'Posto Letto']
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
            ['id' => 1, 'name' => 'lariolario', 'surname'=>'lariolario', 'email' => 'lariolario@gmail.com', 'sesso' => 'M', 'data_nascita' => '2022-06-09', 'image' => NULL,
            'email_verified_at'=>NULL, 'username'=>'lariolario', 'password'=>Hash::make('lariolario'), 'descrizione'=>'lariolario', 'role'=>'locatario'],
            ['id' => 2, 'name' => 'lorelore', 'surname'=>'lariolario', 'email' => 'lorelore@gmail.com', 'sesso' => 'M', 'data_nascita' => '2022-05-09', 'image' => NULL,
            'email_verified_at'=>NULL, 'username'=>'lorelore', 'password'=>Hash::make('lorelore'), 'descrizione'=>'lariolario', 'role'=>'locatore'],
           
        ]);

}
}
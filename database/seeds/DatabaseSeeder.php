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

        DB::table('category')->insert([
            ['catId' => 1, 'name' => 'Computer', 'parId' => 0, 'desc' => 'Desktop, Laptop, Netbook'],
            ['catId' => 2, 'name' => 'Periferiche', 'parId' => 0, 'desc' => 'Hard Disk, Tastiere, Mouse'],
            ['catId' => 3, 'name' => 'Desktop', 'parId' => 1, 'desc' => 'Descrizione dei Prodotti Desktop'],
            ['catId' => 4, 'name' => 'Laptop', 'parId' => 1, 'desc' => 'Descrizione dei Prodotti Laptop'],
            ['catId' => 5, 'name' => 'NetBook', 'parId' => 1, 'desc' => 'Descrizione dei Prodotti Netbook'],
            ['catId' => 6, 'name' => 'HardDisk', 'parId' => 2, 'desc' => 'Descrizione dei Dischi Rigidi'],
        ]);

        DB::table('product')->insert([
            ['name' => 'NetBook Modello2', 'catId' => 5,
                'descShort' => 'Caratteristiche NetBook2', 'descLong' => self::DESCPROD,
                'price' => 219.34, 'discountPerc' => 12, 'discounted' => 0, 'image' => ''],
            ['name' => 'HardDisk Modello2', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk2', 'descLong' => self::DESCPROD,
                'price' => 86.37, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'Italy.gif'],
            ['name' => 'Desktop Modello1', 'catId' => 3,
                'descShort' => 'Caratteristiche Desktop1', 'descLong' => self::DESCPROD,
                'price' => 1230.49, 'discountPerc' => 25, 'discounted' => 1, 'image' => 'Brazil.gif'],
            ['name' => 'Laptop Modello1', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
                'price' => 455.37, 'discountPerc' => 17, 'discounted' => 1, 'image' => ''],
            ['name' => 'Laptop Modello2', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
                'price' => 1889.67, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'Argentina.gif'],
            ['name' => 'Netbook Modello3', 'catId' => 5,
                'descShort' => 'Caratteristiche NetBook3', 'descLong' => self::DESCPROD,
                'price' => 259.99, 'discountPerc' => 17, 'discounted' => 0, 'image' => 'Red Apple.gif'],
            ['name' => 'Laptop Modello3', 'catId' => 4,
                'descShort' => 'Caratteristiche Laptop3', 'descLong' => self::DESCPROD,
                'price' => 998.99, 'discountPerc' => 23, 'discounted' => 1, 'image' => 'UK.gif'],
            ['name' => 'HardDisk Modello1', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk1', 'descLong' => self::DESCPROD,
                'price' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 'image' => 'USA.gif'],
            ['name' => 'HardDisk Modello4', 'catId' => 6,
                'descShort' => 'Caratteristiche HardDisk4', 'descLong' => self::DESCPROD,
                'price' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 'image' => 'Ukraine.gif']
        ]);

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
            ['id' => 1, 'name' => 'Ancona', 'image' => 'images/products/brescia.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 2, 'name' => 'Bari', 'image' => 'images/products/brescia.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 3, 'name' => 'Bergamo', 'image' => 'images/products/brescia.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 4, 'name' => 'Bologna', 'image' => 'images/products/brescia.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 5, 'name' => 'Brescia', 'image' => 'images/products/brescia.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 6, 'name' => 'Caltanissetta', 'image' => 'images/products/caltanissetta.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 7, 'name' => 'Camerino', 'image' => 'images/products/camerino.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 8, 'name' => 'Catanzaro', 'image' => 'images/products/catanzaro.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 9, 'name' => 'Chieti', 'image' => 'images/products/chieti.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 10, 'name' => 'Ferrara', 'image' => 'images/products/ferrara.JPG', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 11, 'name' => 'Firenze', 'image' => 'images/products/firenze.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 12, 'name' => 'Genova', 'image' => 'images/products/genova.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 13, 'name' => 'LAquila', 'image' => 'images/products/laquila.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 14, 'name' => 'Firenze', 'image' => 'images/products/macerata.JPG', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 15, 'name' => 'Genova', 'image' => 'images/products/messina.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 16, 'name' => 'Milano', 'image' => 'images/products/Milano.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 17, 'name' => 'Modena', 'image' => 'images/products/modena.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 18, 'name' => 'Napoli', 'image' => 'images/products/napoli.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 19, 'name' => 'Padova', 'image' => 'images/products/padova.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 20, 'name' => 'Palermo', 'image' => 'images/products/palermo.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 21, 'name' => 'Perugia', 'image' => 'images/products/perugia.JPG', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 22, 'name' => 'Pescara', 'image' => 'images/products/pescara.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 23, 'name' => 'Pisa', 'image' => 'images/products/pisa.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 24, 'name' => 'Roma', 'image' => 'images/products/Roma.webp', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 25, 'name' => 'Torino', 'image' => 'images/products/torino.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 26, 'name' => 'Trento', 'image' => 'images/products/trento.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 27, 'name' => 'Trieste', 'image' => 'images/products/trieste.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 28, 'name' => 'Udine', 'image' => 'images/products/udine.JPG', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 29, 'name' => 'Venezia', 'image' => 'images/products/venezia.jpg', 'numeroannunci' => 'sono presenti n annunci'],
            ['id' => 30, 'name' => 'Verona', 'image' => 'images/products/verona.jpeg', 'numeroannunci' => 'sono presenti n annunci'],

           
        ]);
    }

}

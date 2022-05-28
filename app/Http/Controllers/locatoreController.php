<?php

namespace App\Http\Controllers;

use App\Models\ListaCitta;
use App\Models\Resources\Offerta;
use App\Models\Resources\PostoLetto;
use App\Http\Requests\OffertaRequest;

class locatoreController extends Controller {

    public function __construct() {
        $this->middleware('can:isLocatore');
    }

    public function areaLocatore() {
        return view('areaLocatore');
    }

    public function showAnnunci(){ 
        $offerte = Offerta::where('stato', "libera")->get();
        return view('elencoAnnunciLocatore')
                ->with('offerte', $offerte);
                    
    }

    public function showaggiungiofferta(){ 
        return view('aggiungiOfferta');
                    
    }

    public function showMieiAlloggi(){ 
        return view('mieiAlloggi');
                    
    }


    public function aggiungiOfferta(OffertaRequest $request){ 
        $offerta = new Offerta;
        $offerta->stato = "libera";
        $offerta->titolo = $request->titolo;
        $offerta->descrizione_breve = $request->desc_b;
        $offerta->città = $request->città;
        $offerta->locazione = $request->locazione;
        $offerta->prezzo = $request->prezzo;
        $offerta->tipo = $request->tipo;
        $offerta->descrizione = $request->desc_l;
        $offerta->genere = $request->genere;
        $offerta->save();

        $postoletto = new PostoLetto;
        $postoletto->offerta = $offerta->id;
        $postoletto->posti_letto_appartamento = 1;
        $postoletto->posti_letto_camera = 1;
        $postoletto->dimensioni_camera = 1;
        $postoletto->save();
        return view('areaLocatore');
        

                    
    }


    

}
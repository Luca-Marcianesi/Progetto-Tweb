<?php

namespace App\Http\Controllers;

use App\Models\ListaCitta;
use App\Models\Resources\Offerta;
use App\Models\Resources\Interagisce;
use App\Models\Resources\PostoLetto;
use App\Models\Resources\Appartamento;
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
        $interazioni = Interagisce::select('offerta')->where('utente',auth()->user()->username)->get();
        $offerte = Offerta::whereIn('id',$interazioni)->get();
        return view('mieiAlloggi')
                ->with('mieiAlloggi',$offerte);
                    
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

        $interazione = new Interagisce;
        $interazione->utente = auth()->user()->username;
        $interazione->offerta = $offerta->id;
        $interazione->tipo_interazione = "c";
        $interazione->data = date("Y-m-d");
        $interazione->save();

        if($request->tipo= "P"){
            $postoletto = new PostoLetto;
            $postoletto->offerta = $offerta->id;
            $postoletto->posti_letto_appartamento = 1;
            $postoletto->posti_letto_camera = 1;
            $postoletto->dimensioni_camera = 1;
            $postoletto->save();
        }
        else{
            $appartamento = new Appartamento;
            $appartamento->offerta = $offerta->id;
            $appartamento->posti_letto_appartamento = 1;
            $appartamento->numero_di_camere = 2;
            $appartamento->dimensioni;
            $appartamento->save();
        }

    return view('areaLocatore');
        
        

                    
    }


    

}
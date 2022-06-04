<?php

namespace App\Http\Controllers;

use App\Models\ListaCitta;
use App\Models\MieiAlloggi;
use App\Models\Resources\Offerta;
use App\Models\Resources\Interagisce;
use App\Models\Resources\PostoLetto;
use App\Models\Resources\Appartamento;
use App\Http\Requests\OffertaRequest;
use App\Http\Requests\ModificaOffertaRequest;
use App\Http\Requests\NewAppartamentoRequest;
use App\Http\Requests\NewPostoLettoRequest;

class locatoreController extends Controller {

    public function __construct() {
        $this->middleware('can:isLocatore');
        $this->_alloggiModel = new MieiAlloggi;
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
            $offerte = $this->_alloggiModel->getMieiAlloggi(auth()->user()->username);
            return view('mieiAlloggi')
                    ->with('mieiAlloggi',$offerte);                        
        }

    public function getAllInfoAlloggio($id) {
            $offerta = Offerta::find($id);

            $dettagli_appartamento = Appartamento::find($id);

            $dettagli_postoLetto = PostoLetto::find($id);

            return view('annunciosingoloLocatore')
                            ->with('offerta', $offerta)
                            ->with('postoLetto', $dettagli_postoLetto)
                            ->with('appartamento',$dettagli_appartamento);
        }



        public function showModificaOfferta($id) {
            $offerta = Offerta::find($id);

            $dettagli_appartamento = Appartamento::find($id);

            $dettagli_postoLetto = PostoLetto::find($id);

            return view('modificaAnnuncio')
                            ->with('offerta', $offerta)
                            ->with('postoLetto', $dettagli_postoLetto)
                            ->with('appartamento',$dettagli_appartamento);
        }


    public function alloggiFiltrati(FiltriRequest $request){
        if($request->tipo == null){

        }else if($request->tipo == 'A'){

        }else{
            
        }

        
                    
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
        $offerta->image = $request->image;
        $offerta->genere = $request->genere;
        $offerta->save();

        $interazione = new Interagisce;
        $interazione->utente = auth()->user()->username;
        $interazione->offerta = $offerta->id;
        $interazione->tipo_interazione = "c";
        $interazione->data = date("Y-m-d");
        $interazione->save();

        if($request->tipo ==  "P"){
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
            $appartamento->dimensioni =24;
            $appartamento->save();
        }

    return view('areaLocatore');               
    }

    public function aggiungiOffertaAppartamento(NewAppartamentoRequest $request){ 

        //$request = $request->validated();
        $offerta = new Offerta;
        $offerta->stato = "libera";
        $offerta->titolo = $request->titolo;
        $offerta->descrizione_breve = $request->desc_b;
        $offerta->città = $request->città;
        $offerta->locazione = $request->locazione;
        $offerta->prezzo = $request->prezzo;
        $offerta->tipo = "A";
        $offerta->descrizione = $request->desc_l;
        $offerta->genere = $request->genere;
        $offerta->save();

        $interazione = new Interagisce;
        $interazione->utente = auth()->user()->username;
        $interazione->offerta = $offerta->id;
        $interazione->tipo_interazione = "creazione";
        $interazione->data = date("Y-m-d");
        $interazione->save();

    
        $appartamento = new Appartamento;
        $appartamento->offerta = $offerta->id;
        $appartamento->posti_letto_appartamento = $request->posti_letto_appartamento;
        $appartamento->numero_di_camere = $request->numero_camere;
        $appartamento->dimensioni =$request->dimensioni;
        $appartamento->cucina =$request->cucina;
        $appartamento->locale_ricreativo =$request->l_ricreativo;
        $appartamento->save();
        return view('mieiAlloggi');

        //return response()->json(['redirect' => route('mieiAlloggi')]);

        /*

        $possiede_bagni = new Possiede;
        $possiede_bagni->tipo = "bagni";
        $possiede_bagni->quantita = $request->bagni;
        $possiede_bagni->offerta = $offerta->id;
        $possiede_bagni->save();

        /*
        if($request->fibra){
            $possiede_fibra = new Possiede;
            $possiede_fibra->tipo = "fibra";
            $possiede_fibra->offerta = $offerta->id;
            $possiede_fibra->save();
        }
        
        
        if($request->uni){
            $possiede_uni = new Possiede;
            $possiede_uni->tipo = "vicino università";
            $possiede_uni->offerta = $offerta->id;
            $possiede_uni->save();
        }
        */
              
    }


    public function aggiungiOffertaPostoLetto(NewPostoLettoRequest $request){ 

        $offerta = new Offerta;
        $offerta->stato = "libera";
        $offerta->titolo = $request->titolo;
        $offerta->descrizione_breve = $request->desc_b;
        $offerta->città = $request->città;
        $offerta->locazione = $request->locazione;
        $offerta->prezzo = $request->prezzo;
        $offerta->tipo = "P";
        $offerta->descrizione = $request->desc_l;
        $offerta->genere = $request->genere;
        $offerta->save();

        $interazione = new Interagisce;
        $interazione->utente = auth()->user()->username;
        $interazione->offerta = $offerta->id;
        $interazione->tipo_interazione = "creazione";
        $interazione->data = date("Y-m-d");
        $interazione->save();

        $postoletto = new PostoLetto;
        $postoletto->offerta = $offerta->id;
        $postoletto->angolo_studio = $request->angolo_studio;
        $postoletto->posti_letto_appartamento = $request->posti_letto_appartamento;
        $postoletto->posti_letto_camera = $request->posti_letto_camera;
        $postoletto->dimensioni_camera = $request->dimensioni_camera;
        $postoletto->save();
        
        return view('mieiAlloggi');

        /* return response()->json(['redirect' => route('mieiAlloggi')]);    */          
    }

    public function modificaOfferta(ModificaOffertaRequest $request,$id){ 
        
        $offerta = Offerta::find($id);
        $offerta->stato = $request->stato;
        $offerta->titolo = $request->titolo;
        $offerta->descrizione_breve = $request->desc_b;
        $offerta->prezzo = $request->prezzo;
        $offerta->descrizione = $request->desc_l;
        $offerta->image = $request->image;
        $offerta->genere = $request->genere;
        $offerta->save();

        /*

        $interazione = new Interagisce;
        $interazione->utente = auth()->user()->username;
        $interazione->offerta = $offerta->id;
        $interazione->tipo_interazione = "c";
        $interazione->data = date("Y-m-d");
        $interazione->save();

        if($request->tipo ==  "P"){
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
            $appartamento->dimensioni =24;
            $appartamento->save();
        }
        */

    return view('areaLocatore');
        
        

                    
    }


    

}
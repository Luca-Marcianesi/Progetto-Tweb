<?php

namespace App\Http\Controllers;

use App\Models\ListaCitta;
use App\Models\MieiAlloggi;
use App\Models\GestioneServizi;
use App\Models\Resources\Offerta;
use App\Models\Resources\Interagisce;
use App\Models\Resources\PostoLetto;
use App\Models\Resources\Appartamento;
use App\Http\Requests\OffertaRequest;
use App\Http\Requests\ServiziRequest;
use App\Http\Requests\ModificaOffertaRequest;
use App\Http\Requests\NewAppartamentoquest;
use App\Http\Requests\NewPostoLettoquest;

class locatarioController extends Controller {

    public function __construct() {
        $this->middleware('can:isLocatario');
        $this->_alloggiModel = new MieiAlloggi;
        $this->_serviziModel = new GestioneServizi;

    }

    public function areaLocatario() {
        return view('areaLocatario');
    }

    public function showAnnunci(){ 
        $offerte = Offerta::where('stato', "libera")->get();
        return view('elencoAnnunciLocatario')
                ->with('offerte', $offerte);
                    
    }


    public function getAllInfoAlloggio($id) {
            $offerta = Offerta::find($id);

            $dettagli_appartamento = Appartamento::find($id);

            $dettagli_postoLetto = PostoLetto::find($id);

            return view('annunciosingoloLocatario')
                            ->with('offerta', $offerta)
                            ->with('postoLetto', $dettagli_postoLetto)
                            ->with('appartamento',$dettagli_appartamento);
        }


    public function opziona($id){
        $interazione = new Interagisce;
        $interazione->utente = auth()->user()->username;
        $interazione->offerta = $id;
        $interazione->tipo_interazione = 'opziona';
        $interazione->data = date("Y-m-d");
        $interazione->save();
        return $this->showAnnunci();
    }
       
    public function alloggiFiltrati(FiltriRequest $request){
        if($request->tipo == null){

        }else if($request->tipo == 'A'){

        }else{
            
        }               
                    
    }                 
    }
    

    
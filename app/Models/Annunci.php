<?php

namespace App\Models;

use App\User;
use App\Models\Resources\Offerta;
use App\Models\Resources\Interagisce;
use App\Models\Resources\Possiede;
use App\Models\Resources\Appartamento;
use App\Models\Resources\PostoLetto;

class Annunci {

    public function getInterazione($id) {
        return $interazione = Offerta::find($id)->interagisce()
                ->where('tipo_interazione', 'possiede')
                ->first();
    }

    public function getProprietario($id) {
        $interazione = $this->getInterazione($id);
        return $utente = User::where('username',$interazione->utente)->first();
    }

    public function getOpzionamento($id,$username) {
        return $interazione = Offerta::find($id)->interagisce()
                ->where('utente', $username)
                ->where('tipo_interazione','opziona')
                ->first();
    }

    public function getAssegnamento($id) {
        if( $interazione = Offerta::find($id)->interagisce()
                ->where('tipo_interazione','assegnata')
                ->exists()) {return false;}
            else return true;
    }

    public function getServizi($id) {
        return Possiede::where('offerta',$id)
        ->where('quantita',0)
        ->get();
    }

    public function getServiziConQuantita($id) {
        return Possiede::where('offerta',$id)
        ->where('quantita','>',0)
        ->get();
    }

    public function getAppartamento($id) {
        return PostoLetto::find($id);
    }

    public function getPostoLetto($id) {
        return Appartamento::find($id);

            
    }

    public function getOfferteByProp($proprietario){
        return $offerte = Interagisce::select('offerta')->where('utente',$proprietario)->get();
    }

    
    public function getInteressatiTotale($proprietario) {
        $offerte = $this->getOfferteByProp($proprietario);
        return $opzionamenti =  Interagisce::whereIn('offerta',$offerte)
                                ->where('tipo_interazione','opziona')
                                ->join('offerta','offerta.id','=','offerta')
                                ->where('stato','libera')
                                ->get();
    }


    public function assegna($id,$locatario){
        $offerta = Offerta::find($id);
        $offerta->stato = "assegnata";
        $offerta->save();

        $interazione = new Interagisce;
        $interazione->utente = $locatario;
        $interazione->offerta = $id;
        $interazione->tipo_interazione = 'assegnata';
        $interazione->data = date("Y-m-d");
        $interazione->save();

    }
}

<?php

namespace App\Models;

use App\Models\Resources\Possiede;

class GestioneServizi {

    public function addBagno($idOfferta,$numero) {
        $possiede = new Possiede;
        $possiede->quantita = $numero;
        $possiede->tipo = "bagni";
        $possiede->offerta = $idOfferta;
        $possiede->save();
        return ;
    }

    public function addFibra($idOfferta) {
        $possiede = new Possiede;
        $possiede->quantita = 0;
        $possiede->tipo = "fibra";
        $possiede->offerta = $idOfferta;
        $possiede->save();
        return ;
    }

    public function addUni($idOfferta) {
        $possiede = new Possiede;
        $possiede->quantita = 0;
        $possiede->tipo = "uni";
        $possiede->offerta = $idOfferta;
        $possiede->save();
        return ;
    }



   

}

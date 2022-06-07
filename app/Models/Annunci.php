<?php

namespace App\Models;

use App\User;
use App\Models\Resources\Offerta;

class Annunci {

    public function getInterazione($id) {
        return $interazione = Offerta::find($id)->interagisce()
                ->where('tipo_interazione', 'possiede')
                ->first();
    }

    public function getProprietario($id) {
        $interazione = $this->getInterazione($id);
        return $utente = User::where('username',$interazione->utente)->first();;
    }

}

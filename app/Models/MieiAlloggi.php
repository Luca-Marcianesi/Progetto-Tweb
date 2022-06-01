<?php

namespace App\Models;

use App\Models\Resources\Interagisce;
use App\Models\Resources\Offerta;

class MieiAlloggi {

    public function getMieiAlloggi($user){
        $interazioni = Interagisce::select('offerta')->where('utente',$user)->get();
        $offerte = Offerta::whereIn('id',$interazioni)->get();
        return $offerte;
    }

    public function getIdMieiAlloggi($user){
        $myAlloggiId = Interagisce::select('offerta')->where('utente',$user)->get();
        return $myAlloggiId;
    }

   

}

<?php

namespace App\Models;

use App\Models\Resources\Città;
use App\Models\Resources\Offerta;


class ListaCitta {

    public function getCities() {
        return Città::select('name')->get();
    }

    public function getOffertebyCitta($citta, $paged=1, $order=null){
        $offerte = Offerta::where('città', $citta)->get();
        return $offerte;
    }

    public function getOffertabyId($id) {
        return Offerta::find($id);
    }



}

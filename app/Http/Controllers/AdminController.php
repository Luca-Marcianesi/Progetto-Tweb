<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;
use App\Models\Resources\Offerta;

class AdminController extends Controller {

    public function getHome(){
        $numero_offerte = Offerta::count();
        $occupati = $this->getOccupati();
        return view('admin')
            ->with('numero_offerte', $numero_offerte)
            ->with('occupati', $occupati);
    }    

    public function getOccupati(){
        $occupati = Offerta::where('stato', 'occupato')->count();
        return $occupati;
    }

    public function getOfferteLocatari(){
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;
use App\Models\Resources\Offerta;
use App\Models\ElencoFaq;

class AdminController extends Controller {

      
    public function __construct() {
        $this->_ElencoFaqModel = new ElencoFaq;
    }
    

    public function getHome(){
        $numero_offerte = Offerta::count();
        $occupati = $this->getOccupati();
        $Faqs = $this->_ElencoFaqModel->getFaqs();

        return view('admin')
            ->with('numero_offerte', $numero_offerte)
            ->with('occupati', $occupati)
            ->with('topFaqs', $Faqs);

        
        
    }    

    public function getOccupati(){
        $occupati = Offerta::where('stato', 'occupato')->count();
        return $occupati;
    }

    public function getOfferteLocatari(){
        
    }

  /*  public function showFaq() {


        $Faqs = $this->_ElencoFaqModel->getFaqs();
            return view('admin')
            ->with('topFaqs', $Faqs);
    }
*/}

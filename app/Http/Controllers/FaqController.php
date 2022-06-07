<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElencoFaq;
use App\Models\Resources\Faq;

class FaqController extends Controller{



public function __construct()
{
    
    $this->_ElencoFaqModel = new ElencoFaq;
}


    public function  showelencofaq(){ 
        
        $Faqs = $this->_ElencoFaqModel->getFaqs();
        return view('home')
                        ->with('topFaqs', $Faqs);
    }
}

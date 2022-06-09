<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\ElencoFaq;

class PublicController extends Controller {

    protected $_catalogModel;
    
    public function __construct() {
        $this->_ElencoFaqModel = new ElencoFaq;
    }
    

    public function showHome() {

        $Faqs = $this->_ElencoFaqModel->getFaqs();
            return view('catalog')
            ->with('topFaqs', $Faqs);
    }

  

}

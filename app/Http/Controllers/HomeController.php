<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListaCitta;
use App\Models\Annunci;
use App\Models\ElencoFaq;

use App\User;
use App\Models\Resources\Offerta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->_ListaCittaModel = new ListaCitta;
        $this->_annunciModel = new Annunci;
        $this->_ElencoFaqModel = new ElencoFaq;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { $Faqs = $this->_ElencoFaqModel->getFaqs();
        return view('catalog')
                ->with('topFaqs', $Faqs);
    }

    public function showlistacitta(){ 
        $Cities = $this->_ListaCittaModel->getCities();
        return view('ListaCittaHome')
                        ->with('topCities', $Cities);
    }
                

    public function showAnnunci($citta){ 
        $offerte = Offerta::where('città', $citta)->get();
        return view('elencoAnnunciHome')
                ->with('offerte', $offerte);
    }

    public function showAnnuncioSingolo($id){
        $offerta = $this->_ListaCittaModel->getOffertabyId($id);
        return view('annunciosingolo')  
                ->with('offerta', $offerta);
}
            

    public function showAnnuncioSingoloLocatore($id){
        $offerta = $this->_ListaCittaModel->getOffertabyId($id);
        return view('annunciosingoloLocatore')  
                ->with('offerta', $offerta);}
                              

    public function showAnnuncioSingoloLocatario($id){
        $proprietario = $this->_annunciModel->getProprietario($id);
        $opzionata = $this->_annunciModel->getOpzionamento($id,auth()->user()->username);
        $assegnata = $this->_annunciModel->getAssegnamento($id);
        $appartamento = $this->_annunciModel->getAppartamento($id);
        $postoLetto = $this->_annunciModel->getPostoLetto($id);
        $servzi = $this->_annunciModel->getServizi($id);
        $servziConQuantità = $this->_annunciModel->getServiziConQuantita($id);
        $offerta = $this->_ListaCittaModel->getOffertabyId($id);
        return view('annunciosingoloLocatario')  
                ->with('offerta', $offerta)
                ->with('appartamento', $appartamento)
                ->with('postoLetto', $postoLetto)
                ->with('servizi', $servzi)
                ->with('serviziQ', $servziConQuantità)
                ->with('opzionata',$opzionata)
                ->with('assegnata',$assegnata)
                ->with('proprietario',$proprietario);
            }
        
                        
}
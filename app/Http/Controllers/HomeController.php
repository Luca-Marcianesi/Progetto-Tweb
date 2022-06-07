<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListaCitta;
use App\Models\Annunci;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('catalog');
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
        //$utente = User::find($proprietario->utente);
        $offerta = $this->_ListaCittaModel->getOffertabyId($id);
        return view('annunciosingoloLocatario')  
                ->with('offerta', $offerta)
                ->with('proprietario',$proprietario);
            }
        
                        
}
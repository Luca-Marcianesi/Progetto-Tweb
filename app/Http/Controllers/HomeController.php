<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListaCitta;
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
}

<?php

namespace App\Http\Controllers;
use App\Http\Requests\ModificaAccountRequest;
use App\User;


class userController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('user');
    }


    public function areaLocatore() {
        return view('areaLocatore');
    }

    public function areaLocatario() {
        return view('areaLocatario');
    }

    public function showAccount() {
        $account = auth()->user();
        return view('account')
            ->with('account',$account);;
    }

    public function showModificaAccount() {
        $account = auth()->user();
        return view('modificaAccount')
            ->with('account',$account);
    }

    public function modificaAccount(ModificaAccountRequest $resqust){
        $account = User::find(auth()->user()->id);
        $account->name = $resqust->name;
        $account->surname = $resqust->surname;
        $account->descrizione = $resqust->descrizione;
        $account->data_nascita = $resqust->data_nascita;
        $account->fotoprofilo = $resqust->fotoprofilo;
        $account->save();

        return view('layouts.public');
    }
}

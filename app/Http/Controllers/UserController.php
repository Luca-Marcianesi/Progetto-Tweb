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
        return view('account');
    }

    public function showModificaAccount() {
        $account = auth()->user();
        return view('modificaAccount')
            ->with('account',$account);
    }

    public function modificaAccount(ModificaAccountRequest $resqust){
        $user = User::find(auth()->user()->username);
        $user->name = $resqust->name;
        $user->surname = $resqust->surname;
        $user->descrizione = $resqust->descrizione;
        $user->data_nascita = $resqust->data_nascita;
        $user->fotoprofilo = $resqust->fotoprofilo;
        $user->save();


        return view ('account');
    }
}

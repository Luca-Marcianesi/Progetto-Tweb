<?php

namespace App\Http\Controllers;
use App\Http\Requests\ModificaAccountRequest;
use App\User;
use App\Models\Messaggistica;


class userController extends Controller {

    public function __construct() {
        $this->messaggisticaModel = new Messaggistica;
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
        return view('catalog');
    }

    public function showchat($id){
        if(auth()->user()->role = 'locatore')
        {
            $messaggi = $this->messaggisticaModel->getMessaggilocatore($id);
        }
        if(auth()->user()->role = 'locatario')
        {
            $messaggi = $this->messaggisticaModel->getMessaggilocatario($id);
        }
        return view('chat')
            ->with('messaggi' , $messaggi);
    }

    public function sendMessage($testo, $chat){
        if(auth()->user()->role = 'locatore')
        {
            $this->messaggisticaModel->sendMessaggilocatore($chat);
        }
        if(auth()->user()->role = 'locatario')
        {
            $this->messaggisticaModel->sendMessaggilocatario($chat);
        }
        $msg = new Messaggio;
        $msg->testo = $testo;
        $msg->mittente = auth()->user()->username;
        $msg->data = date('Y-M-D');
        $msg->chat = $chat;
        $msg->save();
    }
}

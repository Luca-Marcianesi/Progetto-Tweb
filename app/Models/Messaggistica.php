<?php 

namespace App\Models;

use App\Models\Resources\Chat;
use App\Models\Resources\Messaggio;

class Messaggistica {

    public function nuoveChatlocatore($locatore) {
        return Chat::where('locatore', $locatore)->where('statolocatore', 'nuovo')->get();
    }

    public function nuoveChatlocatario($locatario) {
        return Chat::where('locatario', $locatario)->where('statolocatario', 'nuovo')->get();
    }

    public function vecchieChatlocatore($locatore) {
        return Chat::where('locatore', $locatore)->where('statolocatore', 'vecchio')->get();
    }

    public function vecchieChatlocatario($locatario) {
        return Chat::where('locatario', $locatario)->where('statolocatario', 'vecchio')->get();
    }

    public function getMessaggilocatore($chat){
        $stato = Chat::find($chat);
        $stato->statolocatore = 'vecchio';
        $stato->save();
        return Messaggio::where('chat', $chat)->orderby('data', 'desc')->get();
    }

    public function getMessaggilocatario($chat){
        $stato = Chat::find($chat);
        $stato->statolocatario = 'vecchio';
        $stato->save();
        return Messaggio::where('chat', $chat)->orderby('data', 'desc')->get();
    }

    public function sendMessaggilocatore($chat){
        $stato = Chat::find($chat);
        $stato->statolocatario = 'nuovo';
        $stato->save();
    }

    public function sendMessaggilocatario($chat){
        $stato = Chat::find($chat);
        $stato->statolocatore = 'nuovo';
        $stato->save();
    }
}

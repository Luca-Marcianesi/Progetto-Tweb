<?php 

namespace App\Models;

use App\Models\Resources\Chat;
use App\Models\Resources\Messaggio;

class Messaggistica {

    public function nuoveChatlocatore($locatore) {
        return Chat::where('locatore', $locatore)->where('stato', 'nuova')->get();
    }

    public function nuoveChatlocatario($locatario) {
        return Chat::where('locatario', $locatario)->where('stato', 'nuova')->get();
    }

    public function vecchieChatlocatore($locatore) {
        return Chat::where('locatore', $locatore)->where('stato', 'vecchia')->get();
    }

    public function vecchieChatlocatario($locatario) {
        return Chat::where('locatario', $locatario)->where('stato', 'vecchia')->get();
    }

    public function getMessaggibychat($chat){
        return Messaggio::where('chat', $chat)->orderby('data', 'desc')->get();
    }
}

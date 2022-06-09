<?php 

namespace App\Models;

use App\Models\Resources\Category;
use App\Models\Resources\Product;

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

    public function vecchiaChatlocatario($locatario) {
        return Chat::where('locatario', $locatario)->where('stato', 'vecchia')->get();
    }

    public function getMessaggibychat($chat){
        return Messaggio::where('chat', $chat)->orderby('data', 'desc')->get();
    }
}
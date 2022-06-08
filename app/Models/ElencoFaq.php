<?php

namespace App\Models;

use App\Models\Resources\Faq;


class ElencoFaq {

    public function getFaqs() {
        return Faq::where('stato','visibile')->get();
    }

    public function getFaqsbyId($id) {
        return Faq::where('stato','visibile')->get($id);
    }

}
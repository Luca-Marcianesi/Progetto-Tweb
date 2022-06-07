<?php

namespace App\Models;

use App\Models\Resources\Faq;


class ElencoFaq {

    public function getFaqs() {
        return Faq::where('stato','visibile')->get();
    }}
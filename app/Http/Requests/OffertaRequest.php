<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OffertaRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'titolo' => 'required',
            'desc_b' => 'required',
            'città' => 'required',
            'locazione' => 'required',
            'prezzo' => 'required',
            'tipo' => 'required',
            'desc_l' => 'required',
            'genere' => 'required',
        ];
    }

}

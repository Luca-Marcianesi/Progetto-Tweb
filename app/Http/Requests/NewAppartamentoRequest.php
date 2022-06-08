<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewAppartamentoRequest extends FormRequest {

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
            'titolo' => 'required|max:25',
            'desc_b' => 'required',
            'desc_l' => 'required|max:1000',
            'prezzo' => 'required|integer|min:0',
            'genere' => 'required|string',
            'città' => 'required|string',
            'locazione' => 'required|string',
            'cucina' => 'required|string',
            'l_ricreativo' => 'required|string',
            'posti_letto_appartamento' => 'required|string',
            'numero_camere' => 'required|string',
            'dimensioni' => 'required|string',

            
        ];
    }


    /*
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }*/

}
